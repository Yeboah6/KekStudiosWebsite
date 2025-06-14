@extends('layouts.admin-app')
@section('content')


@include('includes.Admin-header')
@include('Admin.pages.projects.includes.nav')
	
	

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Task Detail</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Task</a></li>
                            <li class="breadcrumb-item"><a href="#!">Task Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ task-detail-left ] start -->
            <div class="col-xl-4 col-lg-12 task-detail-right">
                <div class="card">
                    <div class="card-body bg-c-green">
                        <div class="counter text-center">
                            <h4 id="timer" class="text-white m-0"></h4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Project Details</h5>
                    </div>
                    <div class="card-body task-details">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><i class="fas fa-adjust m-r-5"></i> Project:</td>
                                    <td class="text-right"><span class="float-right"><a class="text-secondary" href="#!"> Singular app</a></span></td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-calendar-alt m-r-5"></i> Updated:</td>
                                    <td class="text-right">12 May, 2015</td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-credit-card m-r-5"></i> Created:</td>
                                    <td class="text-right">25 Feb, 2015</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-chart-line m-r-5"></i> Priority:</td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <a href="#!" class="text-secondary"><i class="fas fa-upload m-r-5"></i> Highest</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-user-plus m-r-5"></i> Added by:</td>
                                    <td class="text-right"><a class="text-secondary" href="#!">Winnie</a></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-thermometer-half m-r-5"></i> Status:</td>
                                    <td class="text-right">Published</td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <span>
                                <a href="#!" class="text-muted f-16 m-r-10"><i class="fas fa-random"></i> </a>
                            </span>
                            <span class="m-r-10">
                                <a href="#!" class="text-muted f-16"><i class="fas fa-ellipsis-v"></i></a>
                            </span>
                            <div class="btn-group d-inline-block">
                                <button class="btn drp-icon btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-thumbs-up"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#!">Check in</a>
                                    <a class="dropdown-item" href="#!">Attach screenshot</a>
                                    <a class="dropdown-item" href="#!">Reassign</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Edit task</a>
                                    <a class="dropdown-item" href="#!">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Attached Files</h5>
                    </div>
                    <div class="card-body task-attachment">
                        <ul class="media-list p-0">
                            <li class="media d-flex m-b-15">
                                <div class="m-r-20 file-attach">
                                    <i class="far fa-file-word f-28 text-muted"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#!" class="m-b-5 d-block text-secondary">Overdrew_scowled.doc</a>
                                    <div class="text-muted">
                                        <small>Size: 1.2Mb</small>
                                        <small>
                                            Added by <a href="#!" class="text-secondary">Winnie</a>
                                        </small>
                                    </div>
                                </div>
                                <div class="float-right text-muted">
                                    <i class="fas fa-download f-18"></i>
                                </div>
                            </li>
                            <li class="media d-flex m-b-15">
                                <div class="m-r-20 file-attach">
                                    <i class="far fa-file-powerpoint f-28 text-muted"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#!" class="m-b-5 d-block text-secondary">And_less_maternally.pdf</a>
                                    <div class="text-muted">
                                        <small>Size: 0.11Mb</small>
                                        <small>
                                            Added by <a href="#!" class="text-secondary">Eugene</a>
                                        </small>
                                    </div>
                                </div>
                                <div class="float-right text-muted">
                                    <i class="fas fa-download f-18"></i>
                                </div>
                            </li>
                            <li class="media d-flex m-b-15">
                                <div class="m-r-20 file-attach">
                                    <i class="far fa-file-pdf f-28 text-muted"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#!" class="m-b-5 d-block text-secondary">The_less_overslept.pdf</a>
                                    <div class="text-muted">
                                        <small>Size:5.9Mb</small>
                                        <small>
                                            Added by <a href="#!" class="text-secondary">Natalie</a>
                                        </small>
                                    </div>
                                </div>
                                <div class="float-right text-muted">
                                    <i class="fas fa-download f-18"></i>
                                </div>
                            </li>
                            <li class="media d-flex m-b-15">
                                <div class="m-r-20 file-attach">
                                    <i class="far fa-file-excel f-28 text-muted"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#!" class="m-b-5 d-block text-secondary">Well_equitably.mov</a>
                                    <div class="text-muted">
                                        <small>Size:20.9Mb</small>
                                        <small>
                                            Added by <a href="#!" class="text-secondary">Jenny</a>
                                        </small>
                                    </div>
                                </div>
                                <div class="float-right text-muted">
                                    <i class="fas fa-download f-18"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="card">
                    <div class="card-header">
                        <h5>Assigned Users</h5>
                    </div>
                    <div class="card-body user-box assign-user">
                        <div class="media">
                            <div class="media-left media-middle mr-3">
                                <a href="#!">
                                    <img class="img-fluid img-radius" src="assets/images/user/avatar-1.jpg" alt="chat-user">
                                </a>
                            </div>
                            <div class="media-body">
                                <h6>Sortino media</h6>
                                <p>Software Engineer</p>
                            </div>
                            <div>
                                <a href="#!" class="text-muted"> <i class="icon-options-vertical"></i></a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left media-middle mr-3">
                                <a href="#!">
                                    <img class="img-fluid img-radius" src="assets/images/user/avatar-2.jpg" alt="chat-user">
                                </a>
                            </div>
                            <div class="media-body">
                                <h6>Larry heading</h6>
                                <p>Web Designer</p>
                            </div>
                            <div>
                                <a href="#!" class="text-muted"> <i class="icon-options-vertical"></i></a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left media-middle mr-3">
                                <a href="#!">
                                    <img class="img-fluid img-radius" src="assets/images/user/avatar-3.jpg" alt="chat-user">
                                </a>
                            </div>
                            <div class="media-body">
                                <h6>Mark</h6>
                                <p>Chief Financial Officer (CFO)</p>
                            </div>
                            <div>
                                <a href="#!" class="text-muted"> <i class="icon-options-vertical"></i></a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left media-middle mr-3">
                                <a href="#!">
                                    <img class="img-fluid img-radius" src="assets/images/user/avatar-1.jpg" alt="chat-user">
                                </a>
                            </div>
                            <div class="media-body">
                                <h6>John Doe</h6>
                                <p>Senior Marketing Designer</p>
                            </div>
                            <div>
                                <a href="#!" class="text-muted"> <i class="icon-options-vertical"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- [ task-detail-left ] end -->
            <!-- [ task-detail-right ] start -->
            <div class="col-xl-8 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-3"><i class="fas fa-ticket-alt m-r-5"></i>Please update Bootstrap version</h5>
                        <button class="btn waves-effect waves-light btn-primary float-right"><i class="far fa-bell m-r-5"></i>Check in</button>
                    </div>
                    <div class="card-body">
                        <div class="m-b-20">
                            <h6>Overview</h6>
                            <hr>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="m-b-20">
                            <h6>What we need</h6>
                            <hr>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                        <div class="m-b-20 col-sm-12">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="text-primary f-14 m-b-10">
                                        1. The standard Lorem Ipsum passage
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="text-primary f-14 m-b-10">
                                        2. The standard Lorem Ipsum passage
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="m-b-20">
                            <h6>Requirements</h6>
                            <hr>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <div class="table-responsive m-t-20">
                                <table class="table m-b-0 f-14 b-solid requid-table">
                                    <thead>
                                        <tr class="text-uppercase">
                                            <th>#</th>
                                            <th>Task</th>
                                            <th>Due Date</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-muted">
                                        <tr>
                                            <td>1</td>
                                            <td>Design mockup</td>
                                            <td class="text-danger"> <i class="far fa-calendar-alt"></i>&nbsp; 22 December, 16</td>
                                            <td>The standard Lorem Ipsum</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Software Engineer</td>
                                            <td> <i class="far fa-calendar-alt"></i>&nbsp; 01 December, 16</td>
                                            <td>The standard Lorem passage</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Photoshop And Illustrator</td>
                                            <td class="text-warning"> <i class="far fa-calendar-alt"></i>&nbsp; 15 December, 16</td>
                                            <td>The standard Lorem Ipsum</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Allocated Resource</td>
                                            <td> <i class="far fa-calendar-alt"></i>&nbsp; 28 December, 16</td>
                                            <td>The standard Lorem passage</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Financial Controlle</td>
                                            <td> <i class="far fa-calendar-alt"></i>&nbsp; 20 December, 16</td>
                                            <td>The standard Lorem Ipsum</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="float-left mt-4">
                            <span class=" txt-primary"> <i class="fas fa-chart-line"></i>
                                Status </span>
                            <div class="dropdown-secondary dropdown d-inline-block">
                                <button class="btn waves-effect waves-light btn waves-effect waves-light btn-primary dropdown-toggle " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</button>
                                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <a class="dropdown-item active" href="#!">Open</a>
                                    <a class="dropdown-item" href="#!">On hold</a>
                                    <a class="dropdown-item" href="#!">Resolved</a>
                                    <a class="dropdown-item" href="#!">Closed</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Dublicate</a>
                                    <a class="dropdown-item" href="#!">Invalid</a>
                                    <a class="dropdown-item" href="#!">Wontfix</a>
                                </div>
                            </div>
                        </div>
                        <div class="float-right d-flex mt-4">
                            <span>
                                <a href="#!" class="text-muted m-r-10 f-16"><i class="fas fa-edit"></i> </a>
                            </span>
                            <span class="m-r-10">
                                <a href="#!" class="text-muted f-16"><i class="fas fa-trash"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                {{-- <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text"><i class="fas fa-plus m-r-5"></i> Comments</h5>
                        <button type="button" class="btn waves-effect waves-light btn-icon btn-primary float-right m-0">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div class="card-body task-comment">
                        <ul class="media-list p-0">
                            <li class="media">
                                <div class="media-left mr-3">
                                    <a href="#!">
                                        <img class="img-fluid media-object img-radius comment-img" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading txt-primary">Lorem Ipsum <span class="f-12 text-muted ml-1">Just now</span></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    <div class="m-t-10 m-b-25">
                                        <span><a href="#!" class="m-r-10 text-secondary">Reply</a></span><span><a href="#!" class="m-r-10 text-secondary">Edit</a> </span>
                                    </div>
                                    <hr>
                                    <div class="media mt-2">
                                        <a class="media-left mr-3" href="#!">
                                            <img class="img-fluid media-object img-radius comment-img" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="media-heading txt-primary">Lorem Ipsum <span class="f-12 text-muted ml-1">Just now</span></h6>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            <div class="m-t-10 m-b-25">
                                                <span><a href="#!" class="m-r-10 text-secondary">Reply</a></span><span><a href="#!" class="m-r-10 text-secondary">Edit</a> </span>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media mt-2">
                                <div class="media-left mr-3">
                                    <a href="#!">
                                        <img class="img-fluid media-object img-radius comment-img" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading txt-primary">Lorem ipsum<span class="f-12 text-muted ml-1">Just now</span></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    <div class="m-t-10 m-b-25">
                                        <span><a href="#!" class="m-r-10 text-secondary">Reply</a></span><span><a href="#!" class="m-r-10 text-secondary">Edit</a> </span>
                                    </div>
                                    <hr>
                                </div>
                            </li>
                        </ul>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Add Task...">
                            <div class="input-group-append">
                                <button class="btn waves-effect waves-light btn-primary" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <!-- [ task-detail-right ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>

<script>
    // Set the date we're counting down to
    var d = new Date();
    d.setDate(d.getDate() + 10);
    var countDownDate = new Date(d).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("timer").innerHTML = "<b>" + days + "</b>days : <b>" + hours + "</b>h : <b>" +
            minutes + "</b>m : <b>" + seconds + "</b>s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "Times over";
        }
    }, 1000);
</script>

@endsection