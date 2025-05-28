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
                            <h5 class="m-b-10">Payments</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Payments </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-btn" class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Payment ID</th>
                                        <th>Customer ID</th>
                                        <th>Date</th>
                                        <th>Service Provided</th>
                                        <th>Amount Charged</th>
                                        <th>Amount Paid</th>
                                        <th>Payment Method</th>
                                        <th>Balance</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>#14321</div>
                                        </td>
                                        <td>
                                            <div>CUST001</div>
                                        </td>
                                        <td>
                                            <div>9/05/2025</div>
                                        </td>
                                        <td>
                                            <div>
                                                Printing
                                            </div>
                                        </td>
                                        <td>
                                            <div>12,890</div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <div>MOMO PAY</div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <div  class="badge badge-danger badge-pill">Paid</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection
