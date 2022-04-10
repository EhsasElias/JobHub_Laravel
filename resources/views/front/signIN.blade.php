<!DOCTYPE html>
<html lang="en">

    @extends('layouts.Header')
    @section('header')
    @endsection

<body>
    @extends('layouts.Nav')
    @section('nav')
    @endsection

    <div tabindex="-1" class="my-5 py-5" >
        <div class="modal-dialog ">
            <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title">Login in</h5>
                    <a href="/login" role="button" class="btn-close" ></a>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" placeholder="Password" aria-label="Password"
                                aria-describedby="basic-addon1">
                        </div>
                        <a href="/signUP" >Create Acount</a>
                    </div>

                </div>

                <div class="modal-footer justify-content-between">
                    <a class="btn btn-primary" href="/">cancel</a>

                    <a class="btn btn-primary" href="/login">Sign in</a>
                </div>

            </div>
        </div>
    </div>
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

</body>

</html>