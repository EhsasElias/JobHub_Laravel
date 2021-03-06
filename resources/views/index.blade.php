<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/styleEN.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}">
        <title>jobHub.com</title>
    </head>
<body class="fs-6">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="nav">
            <div class="container-fluid d-flex align-items-center">
                <a class="navbar-brand " href="/index">
                    <h4 class="fw-bold"><span class="text-primary">j</span>obhub</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0 m-auto w-50 p-1  justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/findjob">Find Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Companies</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu p-4 rounded-4" aria-labelledby="navbarDropdown">
                                <li class=""><a class="dropdown-item " href="/aboutUS">About Us</a></li>
                                <li class=""><a class="dropdown-item" href="/contactUS">Contact Us</a></li>
                                <li class=""><a class="dropdown-item" href="/signIN">Sign In</a></li>
                                <li class=""><a class="dropdown-item" href="/SignUP">Sign Up</a></li>
                                <li class=""><a class="dropdown-item" href="#">FAQs</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex signinSignup">
                        <button class="btn text-light bg-primary m-2 rounded-pill" type="submit">Post a Job</button>
                        <button class="btn border-primary text-primary m-2 rounded-pill" id="signIn" type="submit">Sign
                            in</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- First Section (Slider + Adds) -->

    <section class=" bg-lightBlue pt-5 ">

        <section class=" mt-5 ">



            <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active bg-primary" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2" class="bg-primary"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3" class="bg-primary"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active col-lg-6">
                        <div class="card mb-3 mx-auto w-50">
                            <div class="row g-0">
                                <div class="">
                                    <img src="{{ URL::asset('images/o1.png') }}" class="img-fluid rounded-start d-flex m-auto "
                                        width="300" alt="...">
                                </div>
                                <div class="">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text text-center"><small class="text-muted">Last updated 3 mins
                                                ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-lg-6">
                        <div class="card mb-3 mx-auto w-50 ">
                            <div class="row g-0">
                                <div class="">
                                    <img src="{{ URL::asset('images/o2.png') }}" class="img-fluid rounded-start d-flex m-auto"
                                        alt="...">
                                </div>
                                <div class="">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-lg-6">
                        <div class="card mb-3 mx-auto w-50 ">
                            <div class="row g-0">
                                <div class="">
                                    <img src="{{ URL::asset('images/o3.png') }}" class="img-fluid rounded-start d-flex m-auto"
                                        alt="...">
                                </div>
                                <div class="">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="fa fa-angle-double-left bg-primary p-4 fs-4" aria-hidden="true"></span>

                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="fa fa-angle-double-right bg-primary p-4 fs-4" aria-hidden="true"></span>

                </button>
            </div>

            <section class="w-100 pb-5">
                <h4 class="fs-big fw-bolder mt-5 col-lg-6 mx-auto mt-4 mb-1">
                    Find the perfect
                    <span class="text-primary"> job</span> for you
                </h4>
                <p class="link-secoundery col-lg-6 m-auto">Search your career opportunity through 12,800 jobs</p>
                <div class="rounded-5 p-3 col-lg-6 mx-auto my-4">
                    <div class="input-group">
                        <input type="search" class="form-control border-0" placeholder="Job Title Or Keyword"
                            aria-describedby="suffixId">
                        <input type="search" class="form-control border-0 border-left-dark me-2" placeholder="Location"
                            aria-describedby="suffixId">
                        <span class=" border-0 bg-primary rounded-pill fa fa-search text-light p-3"
                            id="suffixId"></span>
                    </div>
                </div>
                <div>
                    <h5>

                    </h5>

                </div>

            </section>




        </section>

    </section>


    <section>
        <div class="w-75 mx-auto my-5">
            <h1 class="fw-border text-center">Featuered Tenders</h1>
            <p class="link-secoundery text-center">work in best companies</p>
            <div class="d-flex cards">
                <div class="rounded-4 p-4 m-2 m-auto" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o1.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">UN</h4>
                    <p class="py-2">Is an American multinational computer software company. Incorporated in Delaware and
                        headquartered in San Jose, California.</p>
                    <h5>14 jobs</h5>
                </div>
                <div class="rounded-4 p-4 m-2" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o2.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">UN</h4>
                    <p class="py-2">Is an American multinational computer software company. Incorporated in Delaware and
                        headquartered in San Jose, California.</p>
                    <h5>14 jobs</h5>
                </div>
                <div class="rounded-4 p-4 m-2" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o3.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">UN</h4>
                    <p class="py-2">Is an American multinational computer software company. Incorporated in Delaware and
                        headquartered in San Jose, California.</p>
                    <h5>14 jobs</h5>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="w-75 mx-auto my-5">
            <h1 class="fw-border text-center">Featuered Jobs</h1>
            <p class="link-secoundery text-center">work in best companies</p>
            <div class="d-flex cards">
                <div class="rounded-4 p-4 m-2 m-auto" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o1.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">UN</h4>
                    <p class="py-2">Is an American multinational computer software company. Incorporated in Delaware and
                        headquartered in San Jose, California.</p>
                    <h5>14 jobs</h5>
                </div>
                <div class="rounded-4 p-4 m-2" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o2.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">UN</h4>
                    <p class="py-2">Is an American multinational computer software company. Incorporated in Delaware and
                        headquartered in San Jose, California.</p>
                    <h5>14 jobs</h5>
                </div>
                <div class="rounded-4 p-4 m-2" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o3.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">UN</h4>
                    <p class="py-2">Is an American multinational computer software company. Incorporated in Delaware and
                        headquartered in San Jose, California.</p>
                    <h5>14 jobs</h5>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="w-75 mx-auto my-5">
            <h1 class="fw-border text-center">Our Parteners</h1>
            <p class="link-secoundery text-center">Always on trust</p>
            <div class="d-flex justify-content-between">
               <div>
                <img src="{{ URL::asset('images/o1.png') }}" class="rounded-4 shadow-lg" alt="" width="100" height="100">
                <p class="fw-bolder text-center">UN</p>
               </div>
               <div>
                <img src="{{ URL::asset('images/o2.png') }}" class="rounded-4 shadow-lg" alt="" width="100" height="100">
                <p class="fw-bolder text-center">UN</p>
               </div>
               <div>
                <img src="{{ URL::asset('images/o3.png') }}" class="rounded-4 shadow-lg" alt="" width="100" height="100">
                <p class="fw-bolder text-center">UN</p>
               </div>
                     </div>
        </div>
    </section>

    <div class="bg-lightBlue" style="font-size: 1rem !important;">
        <div class="w-75 p-5 d-flex flex-wrap m-auto justify-content-between">
            <div class="my-2">
                <a class="text-dark text-decoration-none d-block" href="#">
                    <h4 class="fw-bold m-0"><span class="text-primary">j</span>obhub</h4>
                </a>
                <div>
                    <h5 class="fw-bold">Call us</h5>
                    <h2 class="text-primary">999999999</h2>
                    <p class="link-secoundery">90 Fifth Avenue, 3rd Floor
                        Yemen,<br> Sanaa 1980
                        office@jobHub.com</p>
                </div>
            </div>

            <div class="my-2">
                <h5 class="fw-bold">For Candidates</h5>
                <p class="link-secoundery">Find Jobs</p>
                <p class="link-secoundery">Candidate Dashboard</p>
                <p class="link-secoundery">My Applications</p>
                <p class="link-secoundery">Favourite Jobs</p>
                <p class="link-secoundery">My inbox</p>
            </div>
            <div class="my-2">
                <h5 class="fw-bold">For Candidates</h5>
                <p class="link-secoundery">Find Jobs</p>
                <p class="link-secoundery">Candidate Dashboard</p>
                <p class="link-secoundery">My Applications</p>
                <p class="link-secoundery">Favourite Jobs</p>
                <p class="link-secoundery">My inbox</p>
            </div>
            <div>
                <h5 class="fw-bold">For Candidates</h5>
                <p class="link-secoundery">Find Jobs</p>
                <p class="link-secoundery">Candidate Dashboard</p>
                <p class="link-secoundery">My Applications</p>
                <p class="link-secoundery">Favourite Jobs</p>
                <p class="link-secoundery">My inbox</p>
            </div>
        </div>
    </div>


    <footer class="bg-pink-light py-4">

        <div class="w-75 m-auto d-flex justify-content-between flex-wrap">
            <p class="link-secoundery">&copy; 2021 Jobhub. All Rights Reseved. </p>
            <div>
    
                <span class="fa fa-facebook px-2"></span>
                <span class="fa fa-twitter px-2"></span>
                <span class="fa fa-github px-2"></span>
            </div>
        </div>
    
    </footer>
    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>

</body>

</html>