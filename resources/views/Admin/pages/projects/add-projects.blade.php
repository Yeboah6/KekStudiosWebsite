@extends('layouts.admin-app')
@section('content')

@include('Admin.pages.projects.includes.nav')
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
                            <h5 class="m-b-10">Create Project</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><small class="text-danger">* </small>Client Name</label>
                               <select class="mb-3 form-control">
                                    <option> -- Select Client -- </option>
                                    <option>Kofi Anan</option>
                                    <option>Philip J. Coulson</option>
                                </select>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><small class="text-danger">* </small>Service Type</label>
                                        <select class="mb-3 form-control">
                                            <option>Default select</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><small class="text-danger">* </small>Category</label>
                                        <select class="mb-3 form-control">
                                            <option>Default select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="ProjectTitle"><small class="text-danger">* </small>Project title</label>
                                <input type="text" class="form-control" id="ProjectTitle">
                            </div>
                            <div class="form-group">
                                <label for="ProjectDescription"><small class="text-danger">* </small>Project Description</label>
                                <textarea class="form-control"></textarea>
                                <br>
                                <span class="text-danger">Add Attachment If Any </span>
                                <br>
                                <div class="file btn waves-effect waves-light btn-outline-primary mt-3 file-btn">
                                    <i class="feather icon-paperclip"></i> Add Atachment
                                    <input type="file" name="file" />
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Estimated Budget</label>
                                        <select class="mb-3 form-control">
                                            <option>Default select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><small class="text-danger">* </small>Deadline</label>
                                        <input type="date" class="form-control" id="deadline" placeholder="Deadline">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="floating-label" for="source"><small class="text-danger">* </small>Out Source Expert</label>
                                    <input type="email" class="form-control" id="source" placeholder="">
                                </div>
                            </div>
                            <br>
                             <div class="form-group">
                                <label for="Additinal Notes">Additional Notes</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection