<?php

namespace App\Http\Controllers;

use App\Mail\CustomerMessage;
use App\Mail\BookingMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    // Service definitions
    protected $services = [
        'brand-identity-design' => [
            'title' => 'Brand Identity Design',
            'slug' => 'brand-identity-design',
            'img' => 'assets/img/brand.jpg',
            'works' => [
                'Logos',
                'Brand guidelines',
                'Brand stationery'
            ]
        ],
        'commercial-printing' => [
            'title' => 'Commercial Printing',
            'slug' => 'commercial-printing',
            'img' => 'assets/img/commercial.jpg',
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
            'img' => 'assets/img/Mockup2.jpg',
            'works' => [
                'Branded websites',
                'Mobile applications',
                'Software development'
            ]
        ],
        'ui-ux-design' => [
            'title' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
            'img' => 'assets/img/Logistics.png',
            'works' => [
                'Apps Interfaces',
                'Websites Interfaces',
                'Dashboards Interfaces'
            ]
        ],
        'event-campaign-branding' => [
            'title' => 'Event & Campaign Branding',
            'slug' => 'event-campaign-branding',
            'img' => 'assets/img/image8.jpg',
            'works' => [
                'Visual kits',
                'Stage backdrops',
                'Souvenir design'
            ]
        ],
        'creative-strategy-consulting' => [
            'title' => 'Creative Strategy & Consulting',
            'slug' => 'creative-strategy-consulting',
            'img' => 'assets/img/Stationary.jpg',
            'works' => [
                'Strategy',
                'Storytelling',
                'Positioning'
            ]
        ],
            'social-media-marketing' => [
                'title' => 'Social Media Marketing',
                'slug' => 'social-media-marketing',
                'img' => 'assets/img/social.jpg',
                'works' => [
                    // 'Strategy',
                    // 'Storytelling',
                    // 'Positioning'
                ]
            ]
    ];

    protected $clients = [
        [
            'logo' => 'assets/img/OUR CLIENTS/20728.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/BGF.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Christell.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Elle.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/GAF logo.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/GF BUSINESS.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Glarft.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/hth.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Inovtech.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Layer 0.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Layer 1.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Layer 5.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Layer 8.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Layer 9.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Layer 10.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Layer 11.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Layer 12.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Layer 13.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Makoine.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/Priceless Packages.png'
        ],
        [
            'logo' => 'assets/img/OUR CLIENTS/sol.png'
        ]
    ];

    public function home() {
        return view('pages.index', [
            'services' => $this->services
        ]);
    }

    public function contact() {
        return view('pages.contact');
    }

    public function services() {
        return view('pages.services', [
            'services' => $this->services,
            'clients' => $this -> clients
        ]);
    }

    public function about() {
        return view('pages.about');
    }

    public function team() {
        return view('pages.our-team');
    }

    public function show($slug)
    {
        // Check if the requested service exists
        if (!array_key_exists($slug, $this->services)) {
            abort(404);
        }
        
        // Get the service data
        $service = $this->services[$slug];
        
        return view('pages.booking', [
            'service' => $service,
            'slug' => $slug
        ]);
    }

    public function store(Request $request, $service)
    {
         // Validate the service parameter
         if (!array_key_exists($service, $this->services)) {
            abort(404);
        }

        // Validate form data
        $validated = $request->validate([
            'service' => 'required|string',
            'work' => 'string',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:255',
            'project_title' => 'required|string|max:255',
            'project_description' => 'required|string',
            'budget' => 'nullable|string',
            'deadline' => 'nullable|date',
            'reference' => 'nullable|string',
            'additional_notes' => 'nullable|string',
            'terms' => 'required|accepted'
        ]);

        $bookingID = uniqid();

        $booking = new Booking();
        $booking -> fill([
            'booking_id' => $bookingID, 
            'service' => $validated['service'],
            'work' => $validated['work'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'company' => $validated['company'],
            'project_title' => $validated['project_title'],
            'project_description' => $validated['project_description'],
            'budget' => $validated['budget'],
            'deadline' => $validated['deadline'],
            'reference' => $validated['reference'],
            'additional_notes' => $validated['additional_notes'],
            'terms' => $validated['terms']
        ]);

        $saveProject = $booking -> save();
        if ($saveProject) {
            Mail::to('kekstudiosofficial@gmail.com') -> send(new BookingMail($booking));
            Mail::to($booking -> email) -> send(new BookingMail($booking));
        }
        // return redirect() -> back();
        return redirect()->route('booking.confirmation')->with([
            'success' => 'Your booking request has been submitted successfully!',
            'service' => $this->services[$service]['title'],
            'booking' => [
                'service_title' => $this->services[$service]['title'],
                'project_title' => $request->project_title,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone
            ]
        ]);
    }

    public function confirmation()
    {
        // Check if we have success message from the session
        if (!session('success')) {
            return redirect()->back();
        }
        
        return view('pages.confirmation', [
            'services' => session('services')
        ]);
    }

    public function sendMessage(Request $request) {
        $validated = $request -> validate([
            'message' => 'required|string',
            'email' => 'required|string|email',
            'name' => 'required|string',
            'subject' => 'required|string'
        ]);

        Mail::to('kekstudiosofficial@gmail.com') -> send(new CustomerMessage($validated));
        return redirect() -> back();
    }
}
