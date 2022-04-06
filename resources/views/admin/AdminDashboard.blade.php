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


                    <aside class="w-100 position-sticky-fixed bg-pink-light">
                        <div class="w-100">

                            <a class="navbar-brand " href="/">
                                <h4 class="fw-bold"><span class="text-primary">j</span>obhub</h4>
                            </a>

                            <div class="btn-group-vertical " role="group"
                                aria-label="Button group with nested dropdown">
                                <span class="link-secondary mt-5">Tools</span>
                                <a href="/AdminDashboard" type="button"
                                    class="btn d-flex align-items-center mt-3 bg-darkBlue text-light  rounded-pill py-2 pe-5"><i
                                        class="fa fa-home p-2"></i>Dashboard</a>
                                <a href="/profileEditad" type="button"
                                    class="btn d-flex align-items-center mt-3  rounded-pill py-2 pe-5"><i
                                        class="fa fa-home p-2"></i>Edit Profile</a>
                                <a href="/postjob" type="button"
                                    class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
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
                        <li><a class="dropdown-item" href="/profileDashboard">Dashboard</a></li>
                        <li><a class="dropdown-item" href="/profileEdit">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
                </li>
            </form>
            <section class="">
                <div class="bg-white rounded-4 p-5 mx-2">
                    <h1 class="fw-bolder">Dashboard</h1>
                    <span class="link-secondary">Welcome to JobHub!</span><br>
                    <div class="row justify-content-evenly">
                        <button type="button" class="btn col-md-5 d-flex  rounded-4 align-items-center my-2"
                            style="background-color: #FFF8EC;">
                            <div class="fa  fa-file-text-o  fs-2 bg-white rounded-3 p-3"></div>
                            <div class="mx-auto">
                                <h4 class="fw-bolder">13</h4>
                                <p class="link-secondary">Job application</p>
                            </div>
                        </button>
                        <button type="button" class="btn  col-md-5  d-flex  rounded-4 align-items-center my-2"
                            style="background-color: #FFF8EC;">
                            <div class="fa fa-user   fs-2 bg-white rounded-3 p-3"></div>

                            <div class="mx-auto">
                                <h4 class="fw-bolder">14</h4>
                                <p class="link-secondary">Profile visits</p>
                            </div>
                        </button>
                        <button type="button" class="btn  col-md-5  d-flex  rounded-4 align-items-center my-2"
                            style="background-color: #FFF8EC;">
                            <div class="fa fa-envelope-o  fs-2 bg-white rounded-3 p-3"></div>

                            <div class="mx-auto">
                                <h4 class="fw-bolder">155</h4>
                                <p class="link-secondary">Unread messages</p>
                            </div>
                        </button>
                        <button type="button" class="btn  col-md-5  d-flex  rounded-4 align-items-center my-2"
                            style="background-color: #FFF8EC;">
                            <div class="fa  fa-bell-o  fs-2 bg-white rounded-3 p-3"></div>
                            <div class="mx-auto">
                                <h4 class="fw-bolder">103</h4>
                                <p class="link-secondary">Notifications</p>
                            </div>
                        </button>
                    </div>
                    

                </div>
            </section>

        </section>

    </div>


    @extends('layouts.Footer')
    @section('footer')
    @endsection
</body>

</html>
