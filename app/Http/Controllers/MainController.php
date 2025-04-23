<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Service definitions
    protected $services = [
        'brand-identity-design' => [
            'title' => 'Brand Identity Design',
            'slug' => 'brand-identity-design'
        ],
        'commercial-printing' => [
            'title' => 'Commercial Printing',
            'slug' => 'commercial-printing'
        ],
        'web-mobile-applications' => [
            'title' => 'Web & Mobile Applications Development',
            'slug' => 'web-mobile-applications'
        ],
        'ui-ux-design' => [
            'title' => 'UI/UX Design',
            'slug' => 'ui-ux-design'
        ],
        'event-campaign-branding' => [
            'title' => 'Event & Campaign Branding',
            'slug' => 'event-campaign-branding'
        ],
        'creative-strategy-consulting' => [
            'title' => 'Creative Strategy & Consulting',
            'slug' => 'creative-strategy-consulting'
        ]
    ];

    public function home() {
        return view('pages.index');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function services() {
        return view('pages.services', [
            'services' => $this->services
        ]);
        // return view('pages.services');
    }

    public function about() {
        return view('pages.about');
    }

    public function portfolio() {
        return view('pages.portfolio');
    }
}
