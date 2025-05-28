<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function welcomePage() {
        return view('Admin.pages.welcome-page');
    }

    public function Booking() {
        return view('Admin.pages.booking');
    }

    // Clients
    public function CustomerDashboard() {
        return view('Admin.pages.customers.dashboard');
    }

    public function CustomerClients() {
        return view('Admin.pages.customers.clients');
    }

    public function AddClients() {
        return view('Admin.pages.customers.add-client');
    }

    // Projects
    public function ProjectDashboard() {
        return view('Admin.pages.projects.dashboard');
    }

    public function ProjectProjects() {
        return view('Admin.pages.projects.projects');
    }

    public function AddProjects() {
        return view('Admin.pages.projects.add-projects');
    }

    // Payments
    public function PaymentDashboard() {
        return view('Admin.pages.payments.dashboard');
    }

    public function PaymentPayments() {
        return view('Admin.pages.payments.payments');
    }
}
