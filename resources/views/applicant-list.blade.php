@extends('layouts.main')

@section('content')

<header class="main-header">


    <nav class="navbar navbar-static-top">

        <div class="navbar-main">

          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

              </button>

              <a class="navbar-brand" href="index.html"><img src="{{ asset('css/style.css') }} assets/images/sadaka-logo.png" alt=""></a>

            </div>

            <div id="navbar" class="navbar-collapse collapse pull-left">

                <ul class="nav navbar-nav">

                  <li class="has-child"><a href="#">Donors</a>
                      <ul class="submenu">
                          <li class="submenu-item"><a href="donor-registration">Register</a></li>
                          <li class="submenu-item"><a href="donor-list">List of Donors</a></li>
                          <li class="submenu-item"><a href="donor-donate">Donate</a></li>
                      </ul>
                  </li>

                  <li class="has-child"><a href="#">Applicant</a>
                      <ul class="submenu">
                          <li class="submenu-item"><a href="applicant-registration">Register</a></li>
                          <li class="submenu-item"><a href="applicant-list">List of Applicants</a></li>
                          <li class="submenu-item"><a href="applicant-application">Request</a></li>
                          <li class="submenu-item"><a href="#">SMS</a></li>
                          <li class="submenu-item"><a href="#">Whatsapp</a></li>
                      </ul>
                  </li>
                  <li class="has-child"><a href="#">Distribution Centre</a>
                      <ul class="submenu">
                          <li class="submenu-item"><a href="centre-registration">Register</a></li>
                          <li class="submenu-item"><a href="centre-list">List of Centre</a></li>
                      </ul>
                  </li>

                  <li class="has-child"><a href="#">Community</a>
                      <ul class="submenu">
                          <li class="submenu-item"><a href="community-registration">Register on Behalf Faqir</a></li>
                          <li class="submenu-item"><a href="community-list">List of Faqir</a></li>
                          <li class="submenu-item"><a href="community-application">Request on Behalf Faqir</a></li>
                          <li class="submenu-item"><a href="#">SMS</a></li>
                          <li class="submenu-item"><a href="#">Whatsapp</a></li>
                      </ul>
                  </li>
                </ul>

              </div> <!-- /#navbar -->

          </div> <!-- /.container -->

        </div> <!-- /.navbar-main -->


    </nav>

</header> <!-- /. main-header -->

<div class="page-heading text-center">

    <div class="container zoomIn animated">
        <h1 class="page-title">LIST OF APPLICANTS<span class="title-under"></span></h1>
    </div>

</div>

<div class="main-container">

    <div class="container">

        <div class="row">

            <div class="col-md-12 fadeIn animated">

                {{-- <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p> --}}

            </div>

            <div class="col-md-12 fadeIn animated">

                <div id="cause-carousel" class="carousel slide cause-carousel" data-ride="carousel">

                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#cause-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#cause-carousel" data-slide-to="1"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">

                        <div class="item active">

                          <img src="assets/images/causes/slider/cause-slider-1.jpg" alt="">

                        </div>

                        <div class="item">

                          <img src="assets/images/causes/slider/cause-slider-2.jpg" alt="">

                        </div>

                      </div>
                </div>

            </div>

        </div>

        <div class="row ">

            <div class="col-md-12 fadeIn animate-onscroll">

                <h2 class="title-style-2">List of Applicants <span class="title-under"></span></h2>

                    {{-- <h4>TABLE STYLE 1</h4> --}}
                    <table class="table table-style-1">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>IC No</th>
                          <th>Name</th>
                          <th>Telephone No</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Notes</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>775652156369</td>
                          <td>Johari B Mat Piah</td>
                          <td>0196553169</td>
                          <td>johari@gmail.com</td>
                          <td>Taman Dengkil 3, Selangor</td>
                          <td>NA</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>596326541569</td>
                          <td>Ahmad B. Zainuddin</td>
                          <td>0126542063</td>
                          <td>ahmad@gmail.com</td>
                          <td>Taman Pahlawan, Kuala Selangor</td>
                          <td>NA</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>963456286591</td>
                          <td>Kassim B Abdul Sani</td>
                          <td>0196425138</td>
                          <td>kassim@gmail.com</td>
                          <td>Taman Puchong Jaya, Selangor</td>
                          <td>NA</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>864551720369</td>
                            <td>Khairil Suhaimi B Megat</td>
                            <td>0127964286</td>
                            <td>suhaimi@gmail.com</td>
                            <td>Taman Rimba Jaya, Klang, Selangor</td>
                            <td>NA</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>746254206429</td>
                            <td>Siti Maya Bt Abdul Kadir</td>
                            <td>0164210687</td>
                            <td>maya@gmail.com</td>
                            <td>Seksyen 20, Shah Alam, Selangor</td>
                            <td>NA</td>
                          </tr>
                      </tbody>
                    </table>
            </div>

        </div>

    </div>






</div> <!-- /.main-container  -->


@endsection
