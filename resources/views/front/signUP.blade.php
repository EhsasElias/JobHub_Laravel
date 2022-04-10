<!DOCTYPE html>
<html lang="en">

@extends('layouts.Header')
@section('header')
@endsection



<body>
    @extends('layouts.Nav')
    @section('nav')
    @endsection
    <div tabindex="-1" class="py-5 my-5">
        <form method="POST" action="{{ route('save_user') }}" class="modal-dialog"  enctype="multipart/form-data">
            @if (session('error'))
                        <p class="alert alert-danger">{{ session('error') }}</p>
                    @endif
                    @if (session('success'))
                        <p class="alert alert-info">{{ session('success') }}</p>
                    @endif
            <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title">Sign up</h5>
                    <a href="/" role="button" class="btn-close"></a>
                </div>
                <div class="modal-body">
                    @csrf
                    
                    <div class="modal-body">
                        <div class="input-group  mb-3 flex-wrap">
                            @error('name')
                                <p class="alert alert-danger">{{ $message }}</p><br>
                            @enderror
                            <input type="text" class="form-control d-block" name="name" placeholder="Username"
                               >
                        </div>
                        <div class="input-group mb-3">

                            @error('email')
                                <p class="alert alert-danger">{{ $message }}</p><br>
                            @enderror
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                >
                        </div>
                        <div class="input-group mb-3">
                            @error('password')
                                <p class="alert alert-danger">{{ $message }}</p><br>
                            @enderror
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                >
                        </div>


                        <div class="input-group mb-3">

                            <input type="password" class="form-control" placeholder="Repeate Password"
                              >
                        </div>
                        <div class="input-group mb-3">
                            @error('image')
                                <p class="alert alert-danger">{{ $message }}</p><br>
                            @enderror
                            <input type="file" class="form-control" name="image" placeholder="Userimg"
                             >
                        </div>
                        <ul class="list-group">
                            Choose Role
                            <li class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" name="super" value="super" aria-label="...">
                              Super Admin
                            </li>
                            <li class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" name="admin" value="admin" aria-label="...">
                              Admin
                            </li>
                            <li class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" name="client" value="client" aria-label="...">
                              Client
                            </li>
                            
                            
                          </ul>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="0" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Active
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="1" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Not Active
                            </label>
                          </div>
                    </div>
                    <a href="/signIN">Sign in</a>
                </div>
                <div class="modal-footer justify-content-between">
                    <a class="btn btn-primary" href="/">cancel</a>

                    <button class="btn btn-primary" type="submit">Create Account</button>
                </div>

            </div>

        </form>
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
