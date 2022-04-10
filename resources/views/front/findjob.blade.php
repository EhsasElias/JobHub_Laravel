<!DOCTYPE html>
<html lang="en">
    @extends('layouts.Header')
    @section('header')
    @endsection


<body>
    @extends('layouts.Nav')
    @section('nav')
    @endsection
    <section class=" bg-lightBlue pt-5 ">

        <section class=" mt-5 ">

            <section class="w-100 pb-5">
                <h4 class="fs-big fw-bolder mt-5 col-lg-6 mx-auto mt-4 mb-1">
                    Find the perfect
                    <span class="text-primary"> job</span> for you
                </h4>
                <p class="link-secoundery col-lg-6 mx-auto mb-5">Search your career opportunity through 12,800 jobs</p>
                <div class="d-flex col-lg-6 mx-auto  flex-wrap">
                    <div class="input-group d-flex">
                        <input type="search" id="search" class="form-control border-0"
                            style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;"
                            placeholder="Job Title Or Keyword" aria-describedby="suffixId">

                        <div class="d-flex  border-left-dark ">
                            <select id="categories" class="border-0">
                                <option value="all" class="rounded-1">All</option>
                                <option value="com">Company</option>
                                <option value="city">City</option>
                            </select>
                            <select id="com-name" class="border-0 "></select>

                        </div>
                        <span class=" border-0 bg-primary  text-light p-3 d-block" id="suffixId"
                            style="border-top-right-radius: 50px;border-bottom-right-radius: 50px;">Find Jobs</span>
                    </div>
                </div>
                <div>
                    <h5>

                    </h5>

                </div>

            </section>

        </section>

    </section>
</body>
   








    <section>
        <div class="w-75 mx-auto my-5">
            <h1 class="fw-border text-center">Jobs</h1>
            <p class="link-secoundery text-center">work in best companies & best cities</p>
            <div class="selected-parent d-flex flex-wrap justify-content-between">

                <div class="rounded-4 p-4 m-2 selected " style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o1.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">UN</h4>
                    <p>Designer</p>
                    <p class="py-2">
                        Is an American multinational <br>
                        computer software company. <br>
                        Incorporated in Delaware<br>
                        and headquartered in San Jose, <br>
                        California.</p>
                    <h5><span class="fa fa-map-marker px-3 text-darkBlue"></span> Sanaa</h5>
                </div>
                <div class="rounded-4 p-4 m-2 selected" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o2.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">IOM</h4>
                    <p>Potographer</p>
                    <p class="py-2">
                        Is an American multinational <br>
                        computer software company. <br>
                        Incorporated in Delaware<br>
                        and headquartered in San Jose, <br>
                        California.</p>
                    <h5><span class="fa fa-map-marker px-3 text-darkBlue"></span>Taiz</h5>
                </div>
                <div class="rounded-4 p-4 m-2 selected" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o3.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">ADRA</h4>
                    <p>Analyzer</p>
                    <p class="py-2">
                        Is an American multinational <br>
                        computer software company. <br>
                        Incorporated in Delaware<br>
                        and headquartered in San Jose, <br>
                        California.</p>
                    <h5><span class="fa fa-map-marker px-3 text-darkBlue"></span>Hadramoot</h5>
                </div>

                <div class="rounded-4 p-4 m-2 selected" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o1.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">UN</h4>
                    <p>Engineer</p>
                    <p class="py-2">
                        Is an American multinational <br>
                        computer software company. <br>
                        Incorporated in Delaware<br>
                        and headquartered in San Jose, <br>
                        California.</p>
                    <h5><span class="fa fa-map-marker px-3 text-darkBlue"></span> Sanaa</h5>
                </div>
                <div class="rounded-4 p-4 m-2 selected" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o2.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">IOM</h4>
                    <p>Porogrammer</p>
                    <p class="py-2">
                        Is an American multinational <br>
                        computer software company. <br>
                        Incorporated in Delaware<br>
                        and headquartered in San Jose, <br>
                        California.</p>
                    <h5><span class="fa fa-map-marker px-3 text-darkBlue"></span>Taiz</h5>
                </div>
                <div class="rounded-4 p-4 m-2 selected" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o3.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">ADRA</h4>
                    <p>Engineer</p>
                    <p class="py-2">
                        Is an American multinational <br>
                        computer software company. <br>
                        Incorporated in Delaware<br>
                        and headquartered in San Jose, <br>
                        California.</p>
                    <h5><span class="fa fa-map-marker px-3 text-darkBlue"></span>Hadramoot</h5>
                </div>

                <div class="rounded-4 p-4 m-2 selected" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o1.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">UN</h4>
                    <p>Porogrammer</p>

                    <p class="py-2">
                        Is an American multinational <br>
                        computer software company. <br>
                        Incorporated in Delaware<br>
                        and headquartered in San Jose, <br>
                        California.</p>
                    <h5><span class="fa fa-map-marker px-3 text-darkBlue"></span> Sanaa</h5>
                </div>
                <div class="rounded-4 p-4 m-2 selected" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o2.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">IOM</h4>
                    <p>Doctor</p>
                    <p class="py-2">
                        Is an American multinational <br>
                        computer software company. <br>
                        Incorporated in Delaware<br>
                        and headquartered in San Jose, <br>
                        California.</p>
                    <h5><span class="fa fa-map-marker px-3 text-darkBlue"></span>Taiz</h5>
                </div>
                <div class="rounded-4 p-4 m-2 selected" style="border:1px solid #eee ">
                    <img src="{{ URL::asset('images/o3.png') }}" width="100" height="100" class="rounded-4" alt="">
                    <h4 class="fw-bold pt-3">ADRA</h4>
                    <p>Analizer</p>
                    <p class="py-2">
                        Is an American multinational <br>
                        computer software company. <br>
                        Incorporated in Delaware<br>
                        and headquartered in San Jose, <br>
                        California.</p>
                    <h5><span class="fa fa-map-marker px-3 text-darkBlue"></span>Hadramoot</h5>
                </div>




            </div>
            <div class="modal-footer border-top-0 d-flex justify-content-between">
                <div class="d-flex flex-nowrap">
                    <button class="btn bg-darkBlue text-light" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal">1</button>
                    <button class="btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">2</button>
                    <button class="btn " data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">3</button>
                </div>

                <button class="btn bg-darkBlue text-light rounded-4 px-lg-4" data-bs-target="#exampleModalToggle2"
                    data-bs-toggle="modal">Show more</button>

            </div>
        </div>

    </section>


    <div class="bg-lightBlue" style="font-size: 1rem !important;">
        <div class="w-75 p-5 d-flex flex-wrap m-auto justify-content-between">
            <div class="my-2">
                <a class="text-dark text-decoration-none d-block" href="/">
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
    
    @extends('layouts.Footer')
    @section('footer')
    @endsection
    <script src="{{ URL::asset('js/app.js') }}"></script>




</html>