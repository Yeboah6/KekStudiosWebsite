<?php

namespace App\Http\Controllers;

use App\Models\ClientInfo;
use App\Models\ProjectInfo;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class AdminController extends Controller
{

    // Service definitions
    protected $services = [
        'brand-identity-design' => [
            'title' => 'Brand Identity Design',
            'slug' => 'brand-identity-design',
            'works' => [
                'Logos',
                'Brand guidelines',
                'Brand stationery'
            ]
        ],
        'commercial-printing' => [
            'title' => 'Commercial Printing',
            'slug' => 'commercial-printing',
            'works' => [
                'Flyers & Banners',
                'Brochures',
                'T-shirts',
                'T-Publications',
                'Packaging & Promo Materials'
            ]
        ],
        'web-mobile-applications' => [
            'title' => 'Web & Mobile Apps Development',
            'slug' => 'web-mobile-applications',
            'works' => [
                'Branded websites',
                'Mobile applications',
                'Software development'
            ]
        ],
        'ui-ux-design' => [
            'title' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
            'works' => [
                'Apps Interfaces',
                'Websites Interfaces',
                'Dashboards Interfaces'
            ]
        ],
        'event-campaign-branding' => [
            'title' => 'Event & Campaign Branding',
            'slug' => 'event-campaign-branding',
            'works' => [
                'Visual kits',
                'Stage backdrops',
                'Souvenir design'
            ]
        ],
        'creative-strategy-consulting' => [
            'title' => 'Creative Strategy & Consulting',
            'slug' => 'creative-strategy-consulting',
            'works' => [
                'Strategy',
                'Storytelling',
                'Positioning'
            ]
        ],
        'social-media-marketing' => [
            'title' => 'Social Media Marketing',
            'slug' => 'social-media-marketing',
            'works'=> [
                'Content Creation',
                'Social Media Management',
                'Digital Advertising',
                'Analytics & Reporting'
            ]
        ]
    ];

    public function login() {
        return view('auth.login');
    }

    public function welcomePage() {
        return view('Admin.pages.welcome-page');
    }

    public function ClientInfo() {
        return view('Admin.booking.client-info');
    }

    public function SaveClientInfo(Request $request) {
        $validateData = $request -> validate([
            'full_name' => 'required|string',
            'phone' => 'required|min:10|max:12',
            'email' => 'required|email',
            'address' => 'required|string',
            'company_name' => 'string|nullable',
        ]);

        $clientId = "CLI". substr(uniqid(), -4);

        $clientInfo = new ClientInfo();

        $clientInfo -> fill([
            'client_id' => $clientId,
            'full_name' => $validateData['full_name'],
            'phone' => $validateData['phone'],
            'email' => $validateData['email'],
            'address' => $validateData['address'],
            'company_name' => $validateData['company_name'],
        ]);

       $saveSession = $clientInfo -> save();
       if ($saveSession) {
         session(['client_info_id' => $clientInfo -> id]);
         return redirect('admin/booking/project-info') -> with('success', 'Client Infomation Saved Successfully');
       } else {
            // Handle save failure
            session()->flash('fail', 'Failed to save client information. Please try again.');
            return back()->withInput();
        }
    }

    public function ProjectInfo() {
         // Get client_id from session
        $clientId = session('client_info_id');
        
        if (!$clientId) {
            return redirect('admin/booking/client-info')
                ->with('error', 'Please fill client information first.');
        }
    
        // Get client information
        $client = ClientInfo::where('id', $clientId)->first();
        
        if (!$client) {
            session()->forget('client_id');
            return redirect('admin/booking/client-info')
                ->with('error', 'Client information not found. Please try again.');
        }

        return view('Admin.booking.project-info', [
            'services' => $this->services,
            'client' => $client
        ]);
    }

    public function SaveProjectInfo(Request $request) {

        // Get client_id from session
        $clientId = session('client_info_id');
        
        // Check if client_id exists in session
        if (!$clientId) {
            return redirect('admin/booking/client-info')
                ->with('error', 'Client information not found. Please fill client details first.');
        }

        $validateData = $request -> validate([
            'client_infos_id' => 'required',
            'service_type' => 'required|string',
            'category' => 'required|string',
            'order_service' => 'nullable|string',
            'project_title' => 'required|string',
            'project_description' => 'required|string',
            'attachment' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:10240',
            'budget' => 'nullable|string',
            'deadline' => 'required|date|after:today',
            'out_source_expert' => 'nullable|string',
            'add_notes' => 'nullable|string',
            'agreement' => 'nullable|in:on,1,0'
        ]);

        $projectId = "PRO". substr(uniqid(), -4);

        $projectInfo = new ProjectInfo();

        $projectInfo -> fill([
            'project_id' => $projectId,
            'client_infos_id' => $validateData['client_infos_id'],
            'service_type' => $validateData['service_type'],
            'category' => $validateData['category'],
            'order_service' => $validateData['order_service'],
            'project_title' => $validateData['project_title'],
            'project_description' => $validateData['project_description'],
            'budget' => $validateData['budget'],
            'deadline' => $validateData['deadline'],
            'out_source_expert' => $validateData['out_source_expert'],
            'add_notes' => $validateData['add_notes'],
            'agreement' => $validateData['agreement'],
        ]);

        // Handle file upload properly
        if($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $fileName = 'FILE_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/attachments';
            $file->move($destinationPath, $fileName);
            $projectInfo->attachment = $fileName;
        }

        $projectInfo -> save();
        return redirect('admin/booking/client-info') -> with('success', 'Successfully Done!!');
    }

    // Clients
    public function CustomerDashboard() {
        $clientNo = ClientInfo::all() -> count();
        return view('Admin.pages.customers.dashboard', compact('clientNo'));
    }

    public function CustomerClients() {
        $clients = ClientInfo::all();
        return view('Admin.pages.customers.clients', compact('clients'));
    }

    // Projects
    public function ProjectDashboard() {
        $projectNo = ProjectInfo::all() -> count();
        return view('Admin.pages.projects.dashboard', compact('projectNo'));
    }

    public function ProjectProjects() {
        $projects = ProjectInfo::with('client')->get();
        return view('Admin.pages.projects.projects', compact('projects'));
    }

    public function ViewProjects($id) {
        $viewProject = ProjectInfo::findOrFail($id);
        return view('Admin.pages.projects.view-project', compact('viewProject'));
    }

    // Payments
    public function PaymentDashboard() {
        return view('Admin.pages.payments.dashboard');
    }

    public function PaymentPayments() {
        return view('Admin.pages.payments.payments');
    }
}
