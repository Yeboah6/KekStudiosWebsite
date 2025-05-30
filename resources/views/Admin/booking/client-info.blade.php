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
        border-radius: 10px;
        background-color: #fff
    }
 legend {
        font-size: 18px;
        color: white;
        background-color: #DAA33E;
        padding: 5px 10px;
        border-radius: 4px;
    } 

    legend span {
        position: relative;
        font-size: 13px;
        left: 300px;
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
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue" style="position: sticky">
    <div class="m-header">
		<a href="#!" class="mob-toggler">
			<i class="feather icon-more-vertical"></i>
		</a>
	</div>
    <div class="collapse navbar-collapse">
    	<ul class="navbar-nav ml-auto">
    		<li>
    			<div class="">
    				<a href="/">
    					<i class="feather icon-user"></i>
    				</a>
    			</div>
    		</li>
    	</ul>
    </div>
</header>
	<!-- [ Header ] end -->

    <div class="pcoded-content" style="margin-top: 70px">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title" style="text-align: center">
                            <img src="../../assets/img/loader1.png" alt="KEKStudios Logo" style="width: 6%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 60px;">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('save.client.info') }}" method="POST">
                    @if (Session::has('success'))
		    		    	<div class="alert alert-success">{{ Session::get('success') }}</div>
		    		    @endif
		    		    @if (Session::has('fail'))
		    		    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
		    		    @endif

                    @csrf

                <fieldset id="personal" class="card-body">
                    <legend>Client Information <span>Step 1 of 2</span></legend>
                    <input type="text" name="client_id" class="form-control" hidden>
                    <div class="col-sm">
                            <div class="form-group">
                                <label class="floating-label" for="Full Name"><small class="text-danger">* </small>Full Name</label>
                                <input type="text" class="form-control" id="Full Name" name="full_name" value="{{old('full_name')}}">
                                 <span class="text-danger">@error('full_name'){{$message}}@enderror</span>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Phone"><small class="text-danger">* </small>Phone</label>
                                <input type="text" class="form-control" id="Phone" name="phone" value="{{old('phone')}}">
                                 <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Email"><small class="text-danger">* </small>Email</label>
                                <input type="email" class="form-control" id="Email" name="email" value="{{old('email')}}">
                                 <span class="text-danger">@error('email'){{$message}}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group fill">
                            <label class="floating-label" for="Address"><small class="text-danger">* </small>Address</label>
                            <input type="text" class="form-control" id="Address" name="address" value="{{old('address')}}">
                             <span class="text-danger">@error('address'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label class="floating-label" for="Company">Company Name</label>
                            <input type="text" class="form-control" id="Company" name="company_name" value="{{old('company_name')}}">
                             <span class="text-danger">@error('company_name'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary" style="border-radius: 20px;">Save & Continue</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

</div>

@endsection
