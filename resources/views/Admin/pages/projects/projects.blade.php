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
                            <h5 class="m-b-10">Projects</h5>
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
                        <h5>Projects </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-btn" class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Client ID</th>
                                        <th>Service Type</th>
                                        <th>Project Title</th>
                                        <th>Deadline</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                        <tr>
                                        <td>
                                            <div>{{ $project -> project_id}}</div>
                                        </td>
                                        <td>
                                            <div>{{ $project -> client -> client_id}}</div>
                                        </td>
                                        <td>
                                            <div>{{ $project -> service_type}}</div>
                                        </td>
                                        <td>
                                            <div>
                                                {{ $project -> project_title}}
                                            </div>
                                        </td>
                                        <td>
                                            <div>{{ $project -> deadline->format('Y-m-d')}}</div>
                                        </td>
                                        <td>
                                            <div  class="badge badge-primary badge-pill">In Progress</div>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="" class="btn btn-icon btn-success"><i class="feather icon-edit"></i></a>
                                                <a href="{{'view-projects/'.$project -> id}}" class="btn btn-icon btn-primary"><i class="feather icon-eye"></i></a>
                                                <a href="" class="btn btn-icon btn-danger"><i class="feather icon-trash-2"></i></a>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                    
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
