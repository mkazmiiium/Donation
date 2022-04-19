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
        <h1 class="page-title">BASIC NEEDS<span class="title-under"></span></h1>
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

                <h2 class="title-style-2">List of Basic Needs<span class="title-under"></span></h2>

                    {{-- <h4>TABLE STYLE 1</h4> --}}
                    <table class="table table-style-1">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Description</th>
                          <th>Per Item</th>
                          <th>Total Quantity</th>
                          <th>Request</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Rice</td>
                          <td>5kg</td>
                          <td>50</td>
                          <td><input type="checkbox" aria-label="Checkbox for following text input"> x 1qty</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Sugar</td>
                          <td>2kg</td>
                          <td>50</td>
                          <td><input type="checkbox" aria-label="Checkbox for following text input"> x 1qty</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Salt</td>
                          <td>1kg</td>
                          <td>50</td>
                          <td><input type="checkbox" aria-label="Checkbox for following text input"> x 1qty</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Milk</td>
                            <td>1 tin</td>
                            <td>50</td>
                            <td><input type="checkbox" aria-label="Checkbox for following text input"> x 1qty</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Egg</td>
                            <td>10 pcs</td>
                            <td>50</td>
                            <td><input type="checkbox" aria-label="Checkbox for following text input"> x 1qty</td>
                          </tr>
                      </tbody>
                    </table>
                    <div>
                        <button type="button" class="btn btn-primary pull-right">Apply</button>
                    </div>
            </div>

        </div>

    </div>






</div> <!-- /.main-container  -->


@endsection
