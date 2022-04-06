<!DOCTYPE html>
<html lang="en">

@extends('layouts.Header')
@section('header')
@endsection

<body class="bg-pink-light">
    <div class="d-flex">
        <nav class="navbar navbar-expand-lg navbar-light  " id="nav">
            <div class="container-fluid  mx-0 w-100 mb-auto">

                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100 m-5" id="navbarSupportedContent">


                    <aside class="w-100 position-sticky-fixed">
                        <div class="w-100">

                            <a class="navbar-brand " href="/">
                                <h4 class="fw-bold"><span class="text-primary">j</span>obhub</h4>
                            </a>

                            <div class="btn-group-vertical " role="group"
                                aria-label="Button group with nested dropdown">
                                <span class="link-secondary mt-5">Tools</span>
                                <a href="/AdminDashboard" type="button"
                                    class="btn d-flex align-items-center mt-3  rounded-pill py-2 pe-5"><i
                                        class="fa fa-home p-2"></i>Dashboard</a>
                                <a href="/profileEditad" type="button"
                                    class="btn d-flex align-items-center mt-3  rounded-pill py-2 pe-5"><i
                                        class="fa fa-home p-2"></i>Edit Profile</a>
                                <a href="/postjob" type="button"
                                    class="btn d-flex align-items-center mt-3 bg-darkBlue text-light rounded-pill py-2 pe-5"><i
                                        class="fa fa-pencil p-2"></i>Add Job</a>

                                <a href="" type="button"
                                    class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
                                        class="fa fa-heart-o p-2"></i>Favorite Jobs</a>
                                <a href="" type="button"
                                    class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
                                        class="fa fa-lock p-2"></i>Change Password</a>


                            </div>
                        </div>

                        <div class="w-100">



                            <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
                                <span class="link-secondary mt-5">Insights</span>
                                
                                <a href="" type="button"
                                    class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
                                        class="fa  fa-envelope-o p-2"></i>Inbox <span></span></a>
                                <a href="" type="button"
                                    class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
                                        class="fa fa-bell-o p-2"></i>Notification <span></span></a>



                            </div>
                        </div>
                    </aside>
                </div>


            </div>

        </nav>

        <section class="w-75 me-auto">
            <form class=" signin  d-flex justify-content-end m-1 align-items-start">

                <div class="dropdown d-flex align-items-center m-lg-5">
                    <a href="" id="dropdownMenuLink" class="btn p-1">
                        <img src="{{ URL::asset('images/b.jpg') }}" class=" rounded-pill" width="40" height="40"
                            alt="">
                    </a>
                    <a class="btn dropdown-toggle p-0" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ehsaselias
                    </a>

                    <ul class="dropdown-menu p-4 rounded-4" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/profileEditad">Dashboard</a></li>
                        <li><a class="dropdown-item" href="/profileEditad">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
                </li>
            </form>
            <section class="">


                <form action="{{ route('postjob') }}" method="POST" class="bg-white rounded-4 p-5 mx-2"
                    enctype="multipart/form-data">

                    @csrf
                    @if (session('error'))
                        <p class="alert alert-danger">{{ session('error') }}</p>
                    @endif
                    @if (session('success'))
                        <p class="alert alert-info">{{ session('success') }}</p>
                    @endif
                    <h1 class="fw-bolder">Add Job</h1>
                    <span class="link-secondary">Welcome to JobHub!</span><br>
                    <div class="row">
                        <div class="input-group mb-3 mt-4 col-lg-12">
                            <label class="w-100 my-2" for="">Title</label>
                            @error('job_title')
                                <p class="alert alert-danger">{{ $message }}</p><br>
                            @enderror
                            <input type="text" name="job_title" value="{{ old('job_title') }}"
                                class="form-control rounded-pill p-3" placeholder="Job Title">

                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3 mt-4 col-lg-12">
                            <label class="w-100 my-2" for="">Company Name</label>
                            @error('company_name')
                                <p class="alert alert-danger">{{ $message }}</p><br>
                            @enderror
                            <input type="text" name="company_name" value="{{ old('company_name') }}"
                                class="form-control rounded-pill p-3" placeholder="Company Name">

                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3 mt-4 col-lg-12">
                            <label class="w-100 my-2" for="">Job Details</label>
                            @error('job_details')
                                <p class="alert alert-danger">{{ $message }}</p><br>
                            @enderror
                            <textarea name="job_details" class="form-control rounded-pill p-3">
                               {{ old('job_details') }}
                        </textarea>

                        </div>
                    </div>


                    <div class="input-group mb-3 mt-4">
                        <label class="w-100 my-2" for="">Image Of Job</label>
                        @error('image')
                            <p class="alert alert-danger">{{ $message }}</p><br>
                        @enderror
                        <input type="file" value="{{ old('image') }}" name="image"
                            class="form-control rounded-4 p-3 py-5 text-center" placeholder="Upload Your Img"
                            style="border:1px dotted #ced4da !important;height: 150px;">

                    </div>

                    <div class="d-flex">
                        <button class="btn bg-darkBlue text-light rounded-4 border-0 p-3 px-5 m-auto Download"
                            type="submit">Save</button>
                    </div>
                </form>

            </section>

        </section>

    </div>
    @extends('layouts.Footer')
    @section('footer')
    @endsection
</body>

</html>
