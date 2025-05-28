@extends('layouts.admin-app')
@section('content')

{{-- @include('includes.header') --}}

<style>
 .application-form {
        margin-top: 20px;
    }

 fieldset {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 4px;
        background-color: #fff
    }
 legend {
        font-size: 18px;
        color: white;
        background-color: #DAA33E;
        padding: 5px 10px;
        border-radius: 4px;
    } 
    .form-group {
        margin-bottom: 15px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    
    /* input[type="text"],
    input[type="date"], 
    input[type="email"],
      */
    input[type="file"]
    /* input[type='month'], */
    /* textarea, */
    /* select  */
    {
        width: calc(100% - 20px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f9f9f9;
      }

    input[type="radio"] {
        margin-right: 5px;
    }
    
    label span {
        color: #d93025;
    }

</style>

<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
    <div class="m-header">
		<a href="#!" class="mob-toggler">
			<i class="feather icon-more-vertical"></i>
		</a>
	</div>
    <div class="collapse navbar-collapse">
    	<ul class="navbar-nav ml-auto">
    		<li>
    			<div class="dropdown drp-user">
    				<a href="/">
    					<i class="feather icon-user"></i>
    				</a>
    			</div>
    		</li>
    	</ul>
    </div>
</header>
	<!-- [ Header ] end -->

    <div class="pcoded-content">
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

        <div class="row" style="margin-top: 80px;">
            <div class="col-md-6 offset-md-3">
                <form action="{{url('/personal-info')}}" method="POST">
                    @if (Session::has('success'))
		    		    	<div class="alert alert-success">{{ Session::get('success') }}</div>
		    		    @endif
		    		    @if (Session::has('fail'))
		    		    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
		    		    @endif

                    @csrf

                <fieldset id="personal" class="card-body">
                        <input type="text" name="user_id" hidden>
                    <input type="text" name="applicant_id" hidden>
                    <legend>Client Information</legend>
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
                    <div class="card-footer text-right">
                    <button type="submit" class="btn btn-success">Save</button>
                     <a href=""><button type="button" class="btn btn-primary">Next</button></a>
                </div>
                </fieldset>
            </form>
        </div>
    </div>

    <div class="row" style="margin-top: 80px;">
        <div class="col-md-6 offset-md-3">
            <form action="" method="POST">
                @if (Session::has('success'))
				    	<div class="alert alert-success">{{ Session::get('success') }}</div>
				    @endif
				    @if (Session::has('fail'))
				    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
				    @endif

                @csrf

                <fieldset id="personal" class="card-body">
                        <input type="text" name="user_id" hidden>
                    <input type="text" name="applicant_id" hidden>
                    <legend>Project Information</legend>
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
                        <div class="mt-3">
                            <i class="feather icon-paperclip"></i> Add Atachment
                            <br><br>
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
                    <div class="card-footer text-right">
                    <button type="submit" class="btn btn-success">Save</button>
                     <a href=""><button type="button" class="btn btn-primary">Next</button></a>
                </div>
                </fieldset>
            </form>
        </div>
    </div>
  </div>

<script>
    $('#Description-editor').trumbowyg({
        svgPath: 'assets/css/plugins/icons.svg'
    });
</script>

@endsection
