@extends('layouts.admin-app')
@section('content')

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

    input[type="file"]
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
            <form action="{{ route('save.project.info') }}" method="POST" enctype="multipart/form-data">
                @if (Session::has('success'))
				    	<div class="alert alert-success">{{ Session::get('success') }}</div>
				    @endif
				    @if (Session::has('fail'))
				    	<div class="alert alert-danger">{{ Session::get('fail') }}</div>
				    @endif

                @csrf

                <fieldset class="card-body">
                    <legend>Project Information <span>Step 2 of 2</span></legend>
                    <input type="text" class="form-control" name="client_infos_id" value="{{ $client -> id }}">
                    <input type="text" class="form-control" name="project_id" >
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><small class="text-danger">* </small>Service Type</label>
                                <select id="serviceSelect" name="service_type" class="mb-3 form-control" required>
                                    <option selected disabled> -- Select Service -- </option> 
                                    @foreach ($services as $key => $service)
                                        <option value="{{ $service['title'] }}">{{ $service['title'] }}</option> 
                                    @endforeach
                                </select>
                                <span class="text-danger">@error('service_type'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><small class="text-danger">* </small>Category</label>
                                <select id="categorySelect" name="category" class="mb-3 form-control" required disabled>
                                    <option value="">-- Select Service First --</option>
                                </select>
                                <span class="text-danger">@error('category'){{$message}}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="OrderService">Order Service</label>
                        <input type="text" class="form-control" id="OrderService" name="order_service" value="{{old('order_service')}}">
                        <span class="text-danger">@error('order_service'){{$message}}@enderror</span>
                    </div>
                   <div class="form-group">
                        <label for="ProjectTitle"><small class="text-danger">* </small>Project title</label>
                        <input type="text" class="form-control" id="ProjectTitle" name="project_title" value="{{old('project_title')}}">
                        <span class="text-danger">@error('project_title'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="ProjectDescription"><small class="text-danger">* </small>Project Description</label>
                        <textarea class="form-control" name="project_description" value="{{old('project_description')}}"></textarea>
                        <span class="text-danger">@error('project_description'){{$message}}@enderror</span>
                            <br>
                        <span class="text-danger">Add Attachment If Any </span>
                            <br>
                        <div class="mt-3">
                            <i class="feather icon-paperclip"></i> Add Atachment
                                <br><br>
                            <input type="file" name="attachment" />
                            <span class="text-danger">@error('attachment') {{$message}}@enderror</span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Estimated Budget</label>
                                <select class="mt-3 form-control control" id="budget" name="budget">
                                    <option selected disabled>Select your budget range...</option>
                                    <option value="under_500">Under $500</option>
                                    <option value="500_1000">$500 - $1,000</option>
                                    <option value="1000_2500">$1,000 - $2,500</option>
                                    <option value="2500_5000">$2,500 - $5,000</option>
                                    <option value="5000_10000">$5,000 - $10,000</option>
                                    <option value="over_10000">Over $10,000</option>
                                </select>
                                <span class="text-danger">@error('budget'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><small class="text-danger">* </small>Deadline</label>
                                <input type="date" class="form-control" id="deadline" name="deadline" min="2025-05-29" value="{{old('deadline')}}">
                                <span class="text-danger">@error('deadline'){{$message}}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="floating-label" for="source">Out Source Expert</label>
                            <input type="text" class="form-control" id="source" name="out_source_expert" value="{{old('out_source_expert')}}">
                            <span class="text-danger">@error('out_source_expert'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <br>
                     <div class="form-group">
                        <label for="Additinal Notes">Additional Notes</label>
                        <textarea class="form-control" name="add_notes" value="{{old('add_notes')}}"></textarea>
                        <span class="text-danger">@error('add_notes'){{$message}}@enderror</span>
                    </div>
                    <input type="hidden" name="agreement" value="0">
                    <input type="checkbox" name="agreement" value="1" required> I agree to the terms and conditions <span class="text-danger">*</span> 
                    <div class="card-footer text-right">
                    <a href="client-info" class="btn btn-primary" style="border-radius: 20px;"> <i class="feather icon-arrow-left"></i> Back</a>
                    <button type="submit" class="btn btn-primary" style="border-radius: 20px;">Submit</button>
                </div>
                </fieldset>
            </form>
        </div>
    </div>
  </div>

    <script>
    // Pass PHP services data to JavaScript
    const services = @json($services);

    // Get select elements
    const serviceSelect = document.getElementById('serviceSelect');
    const categorySelect = document.getElementById('categorySelect');

    // Handle service selection change
    serviceSelect.addEventListener('change', function() {
        const selectedService = this.value;
        
        // Clear category options
        categorySelect.innerHTML = '<option value="">-- Select Category --</option>';
        
        if (selectedService && services[selectedService]) {
            // Enable category select
            categorySelect.disabled = false;
            
            // Add categories for selected service
            if (services[selectedService].works && services[selectedService].works.length > 0) {
                services[selectedService].works.forEach(function(work) {
                    const option = document.createElement('option');
                    option.value = work.toLowerCase().replace(/[^a-z0-9]/g, '-');
                    option.textContent = work;
                    categorySelect.appendChild(option);
                });
            } else {
                // If no works defined, show a default message
                const option = document.createElement('option');
                option.value = '';
                option.textContent = 'No categories available';
                categorySelect.appendChild(option);
            }
        } else {
            // Disable category select if no service selected
            categorySelect.disabled = true;
            categorySelect.innerHTML = '<option value="">-- Select Service First --</option>';
        }
    });
    </script>

@endsection
