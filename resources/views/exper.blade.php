<!DOCTYPE html>
<html lang="en">

@include('Header')

<body class="bg-pink-light">

  <div class="d-flex">
    <nav class="navbar navbar-expand-lg navbar-light  " id="nav">
      <div class="container-fluid  mx-0 w-100 mb-auto">

        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100 m-5" id="navbarSupportedContent">


          <aside class="w-100 position-sticky-fixed">
            <div class="w-100">

              <a class="navbar-brand " href="/index">
                <h4 class="fw-bold"><span class="text-primary">j</span>obhub</h4>
              </a>

              <div class="btn-group-vertical " role="group" aria-label="Button group with nested dropdown">
                <span class="link-secondary mt-5">Tools</span>
                <a href="/profileDashboard" type="button"
                  class="btn d-flex align-items-center mt-3  rounded-pill py-2 pe-5"><i
                    class="fa fa-home p-2"></i>Dashboard</a>
                <a href="/profileEdit" type="button"
                  class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i class="fa fa-pencil p-2"></i>Edit
                  Profile</a>
                <a href="/skills" type="button"
                  class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
                    class="fa  fa-cogs p-2"></i>Skills</a>
                <a href="/exper" type="button"
                  class="btn d-flex align-items-center bg-darkBlue text-light mt-3 rounded-pill py-2 pe-5"><i
                    class="fa  fa-briefcase p-2"></i>Work Experience</a>
                <a href="/edutrains" type="button"
                  class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i class="fa fa-book p-2"></i>Edu &
                  Train</a>
                <a href="" type="button" class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
                    class="fa fa-heart-o p-2"></i>Favorite Jobs</a>
                <a href="" type="button" class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
                    class="fa fa-lock p-2"></i>Change Password</a>


              </div>
            </div>

            <div class="w-100">



              <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
                <span class="link-secondary mt-5">Insights</span>
                <a href="" type="button" class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
                    class="fa  fa-envelope-o p-2"></i>Inbox <span></span></a>
                <a href="" type="button" class="btn d-flex align-items-center mt-3 rounded-pill py-2 pe-5"><i
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
            <img src="{{ URL::asset('images/b.jpg') }}" class=" rounded-pill" width="40" height="40" alt="">
          </a>
          <a class="btn dropdown-toggle p-0" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
            aria-expanded="false">
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
          <h1 class="fw-bolder">Work Experiences</h1>
          <span class="link-secondary">Welcome to JobHub!</span><br>

          <table class="table table-borderless my-5">
            <thead>
              <tr>
                <th scope="col">
                  <h4>Experiences</h4>
                </th>

              </tr>
            </thead>
            <tbody>
              <tr>

                <td>App Developer</td>

                <td class="link-secondary">
                  <i class="fa fa-pencil p-2" data-bs-toggle="modal" href="#exampleModalToggle2" role="button"></i>
                  <i class="fa fa-trash-o p-2 text-danger exper" data-bs-toggle="modal" href="#exampleModalToggle"
                    role="button"></i>

                </td>
              </tr>
              <tr>

                <td>Web Designer</td>
                <td class="link-secondary">
                  <i class="fa fa-pencil p-2" data-bs-toggle="modal" href="#exampleModalToggle2" role="button"></i>
                  <i class="fa fa-trash-o p-2 text-danger exper" data-bs-toggle="modal" href="#exampleModalToggle"
                    role="button"></i>

                </td>
              </tr>
              <tr>

                <td>Translator</td>
                <td class="link-secondary">
                  <i class="fa fa-pencil p-2" data-bs-toggle="modal" href="#exampleModalToggle2" role="button"></i>
                  <i class="fa fa-trash-o p-2 text-danger exper" data-bs-toggle="modal" href="#exampleModalToggle"
                    role="button"></i>
                </td>
              </tr>
            </tbody>
          </table>


          <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">

                <div class="modal-body m-auto">
                  Are you Sure Of Deleting This Item
                </div>
                <div class="modal-footer m-auto border-top-0">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                    data-bs-toggle="modal">Cancel</button>
                  <button class="btn btn-danger" data-bs-target="#exampleModalToggle"
                    data-bs-toggle="modal">Delete</button>

                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">

                <div class="modal-body m-auto">
                  <input type="text" placeholder="work expr.." class="form-control p-3 px-5 rounded-4">
                </div>
                <div class="modal-footer m-auto border-top-0">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                    data-bs-toggle="modal">Cancel</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                    data-bs-toggle="modal">Edit</button>

                </div>
              </div>
            </div>
          </div>


        </div>
      </section>

    </section>


  </div>

@include('Footer')
</body>

</html>