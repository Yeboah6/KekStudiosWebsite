@extends('layouts.admin-app')
@section('content')

@include('Admin.pages.customers.includes.nav')
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
                            <h5 class="m-b-10">Add Client</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- liveline-section start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="floating-label" for="Full Name"><small class="text-danger">* </small>Full Name</label>
                                <input type="text" class="form-control" id="Full Name" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Phone"><small class="text-danger">* </small>Phone</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Email"><small class="text-danger">* </small>Email</label>
                                    <input type="email" class="form-control" id="Email" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Address"><small class="text-danger">* </small>Address</label>
                                    <input type="text" class="form-control" id="Address" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="floating-label" for="Company"><small class="text-danger">* </small>Company Name</label>
                                    <input type="text" class="form-control" id="Company" placeholder="">
                                </div>
                            </div>
                        <button class="btn btn-primary"> Add </button>
                    </div>
                </div>
            </div>
            <!-- liveline-section end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit email template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>



<script>
    $('#Description-editor').trumbowyg({
        svgPath: 'assets/css/plugins/icons.svg'
    });
</script>

@endsection
