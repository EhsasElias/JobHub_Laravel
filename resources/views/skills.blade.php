<!DOCTYPE html>
<html lang="en">

@include('Header')

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

                            <a class="navbar-brand " href="/index">
                                <h4 class="fw-bold"><span class="text-primary">j</span>obhub</h4>
                            </a>

                            <div class="btn-group-vertical " role="group"
                                aria-label="Button group with nested dropdown">
                                <span class="link-secondary mt-5">Tools</span>
                                <a href="/profileDashboard" type="button"
                                    class="btn d-flex align-items-center mt-3  rounded-pill py-2 pe-5"><i
                                        class="fa fa-home p-2"></i>Dashboard</a>
                                <a href="/profileEdit" type="button"
                                    class="btn d-flex align-items-center mt-3  rounded-pill py-2 pe-5"><i
                                        class="fa fa-pencil p-2"></i>Edit Profile</a>
                                <a href="/skills" type="button"
                                    class="btn d-flex align-items-center mt-3 bg-darkBlue text-light rounded-pill py-2 pe-5"><i
                                        class="fa  fa-cogs p-2"></i>Skills</a>
                                <a href="/exper" type="button"
                                    class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
                                        class="fa  fa-briefcase p-2"></i>Work Experience</a>
                                <a href="/edutrains" type="button"
                                    class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
                                        class="fa fa-book p-2"></i>Edu & Train</a>
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
            <form class=" signin  d-flex justify-content-end m-1 align-items-start ">

                <div class="dropdown d-flex align-items-center m-lg-5">
                    <a href="" id="dropdownMenuLink" class="btn p-1">
                        <img src="{{ URL::asset('images/b.jpg') }}" class=" rounded-pill" width="40" height="40" alt="">
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
                    <h1 class="fw-bolder">Skills</h1>
                    <span class="link-secondary">Welcome to JobHub!</span><br>

                    <div>
                        <h4 class="mt-4">
                            Sugg...
                        </h4>
                        <div class="mt-4"> <button type="button" class="btn bg-lightBlue rounded-pill m-2">Work from home<i
                                    class="fa fa-trash-o px-2"></i></button>
                            <button type="button" class="btn bg-lightBlue rounded-pill m-2">Part-time<i
                                    class="fa fa-trash-o px-2"></i></button>
                            <button type="button" class="btn bg-lightBlue rounded-pill m-2">Administration<i
                                    class="fa fa-trash-o px-2"></i></button>
                            <button type="button" class="btn bg-lightBlue rounded-pill m-2">Finance<i
                                    class="fa fa-trash-o px-2"></i></button>
                            <button type="button" class="btn bg-lightBlue rounded-pill m-2">IT<i
                                    class="fa fa-trash-o px-2"></i></button>
                            <button type="button" class="btn bg-lightBlue rounded-pill m-2">Engineering<i
                                    class="fa fa-trash-o px-2"></i></button>
                            <button type="button" class="btn bg-lightBlue rounded-pill m-2">Manufacturing<i
                                    class="fa fa-trash-o px-2"></i></button>
                            <button type="button" class="btn bg-lightBlue rounded-pill m-2">Sales<i
                                    class="fa fa-trash-o px-2"></i></button>
                        </div>


                        <div class="input-group mb-3 mt-4">
                            <input type="text" class="form-control rounded-pill p-3" placeholder="Skill" id="skill">
                            <button class="btn bg-lightBlue rounded-pill p-3 a-skill">Add Skill</button>
                        </div>


                    </div>
                </div>
            </section>

        </section>

    </div>


@include('Footer')
</body>

</html>