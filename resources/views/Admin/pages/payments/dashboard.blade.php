@extends('layouts.admin-app')
@section('content')

	@include('Admin.pages.payments.includes.nav')
	@include('includes.admin-header')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"> Dashboard</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- visitors  start -->
            <div class="col-sm-3">
                <div class="card bg-c-green text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">18</h2>
                        <h6 class="text-white">Payments</h6>
                        <i class="fab fa-amazon-pay"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-c-green text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">14</h2>
                        <h6 class="text-white">Active Payments</h6>
                        <i class="fab fa-amazon-pay"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-c-green text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">1</h2>
                        <h6 class="text-white">Pending Payments</h6>
                        <i class="fab fa-amazon-pay"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-c-green text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">16</h2>
                        <h6 class="text-white">Active Memberships</h6>
                        <i class="fab fa-amazon-pay"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<script src="../../asset/js/plugins/jquery.dataTables.min.js"></script>
<script src="../../asset/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="../../asset/js/plugins/apexcharts.min.js"></script>
<script src="../../asset/js/pages/todo.js"></script>

@endsection
