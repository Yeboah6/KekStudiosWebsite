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
							<h5>Client List</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card user-profile-list">
					<div class="card-body">
						<div class="dt-responsive table-responsive">
							<table id="basic-btn" class="table nowrap">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Phone</th>
										<th>Address</th>
										<th>Company Name</th>
										<th>Registration date</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($clients as $client)
										<tr>
                                        <td>{{ $client -> client_id}}</td>
										<td>
											<div class="d-inline-block align-middle">
												<div class="d-inline-block">
													<h6 class="m-b-0">{{ $client -> full_name}}</h6>
													<p class="m-b-0">{{ $client -> email}}</p>
												</div>
											</div>
										</td>
										<td>{{ $client -> phone}}</td>
										<td>{{ $client -> address}}</td>
										<td>{{ $client -> company_name}}</td>
										<td>{{ $client->created_at->format('M d, Y') }}</td>
										<td>
											<span class="badge badge-light-success">Active</span>
											<div class="overlay-edit">
												<a href="" class="btn btn-icon btn-success"><i class="feather icon-edit"></i></a>
												<a href="" class="btn btn-icon btn-primary"><i class="feather icon-eye"></i></a>
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
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->

<!-- datatable Js -->
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>


<script>
	$('#user-list-table').DataTable();
</script>
@endsection
