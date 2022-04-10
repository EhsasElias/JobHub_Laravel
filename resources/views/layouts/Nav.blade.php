@yield('nav')
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="nav">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand " href="/">
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
                            <li class=""><a class="dropdown-item" href="/signUP">Sign Up</a></li>
                            <li class=""><a class="dropdown-item" href="#">FAQs</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex signinSignup">
                    <a href="/signIN" class="btn text-light bg-primary m-2 rounded-pill">Post a Job</a>
                    <button class="btn border-primary text-primary m-2 rounded-pill" id="signIn" type="submit">Sign
                        in</button>
                </form>
            </div>
        </div>
    </nav>
</header>