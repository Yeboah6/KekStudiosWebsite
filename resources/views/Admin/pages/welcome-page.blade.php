@extends('layouts.admin-app')
@section('content')

<!-- [ Main Content ] start -->
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title" style="text-align: center">
                            <img src="../assets/img/loader1.png" alt="KEKStudios Logo" style="width: 6%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <a class="card" href="customers/dashboard" style="background-color: #DAA33E">
                    <div class="card-body text-center">
                        <i class="feather icon-users text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20 text-c-white"><span class=""></span> Clients</h4>
                        <p class="m-b-20"></p>
                        <button class="btn"></button>  
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="card" href="projects/dashboard" style="background-color: #DAA33E">
                    <div class="card-body text-center">
                        <i class="feather icon-book text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20 text-c-white"><span class="text-c-green"></span> Projects</h4>
                        <p class="m-b-20"></p>
                        <button class="btn"></button>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="card" href="payments/dashboard" style="background-color: #DAA33E">
                    <div class="card-body text-center">
                        <i class="fab fa-amazon-pay text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20 text-c-white">Payments</h4>
                        <p class="m-b-20"></p>
                        <button class="btn"></button>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="card" href="" style="background-color: #DAA33E">
                    <div class="card-body text-center">
                        <i class="feather icon-briefcase text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20 text-c-white">Testimonials</h4>
                        <p class="m-b-20"></p>
                        <button class="btn"></button>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="card" href="" style="background-color: #DAA33E">
                    <div class="card-body text-center">
                        <i class="feather icon-briefcase text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20 text-c-white">Portfolios</h4>
                        <p class="m-b-20"></p>
                        <button class="btn"></button>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="card" href="settings/dashboard" style="background-color: #DAA33E">
                    <div class="card-body text-center">
                        <i class="feather icon-settings text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20 text-c-white">Settings</h4>
                        <p class="m-b-20"></p>
                        <button class="btn"></button>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-12">
                <a class="card" href="report/dashboard" style="background-color: #DAA33E">
                    <div class="card-body text-center">
                        <i class="feather icon-file-text text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20 text-c-white">Reports</h4>
                        <p class="m-b-20"></p>
                        <button class="btn"></button>
                    </div>
                </a>
            </div>
        </div>
        <!-- [ Main Content ] end -->

    </div>
<!-- [ Main Content ] end -->

@endsection
