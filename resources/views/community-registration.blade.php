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

<div class="main-container fadeIn animated">

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-form">

                <h2 class="title-style-2">Registration on Behalf Faqir<span class="title-under"></span></h2>

                <form action="community-list">

                    <div class="row">

                        <div class="form-group col-md-6">
                            <input type="text" name="ic" class="form-control" placeholder="Faqir IC Number*" required>
                        </div>

                         <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Faqir Full Name*" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <input type="text" name="tel-no" class="form-control" placeholder="Faqir Telephone No">
                        </div>

                         <div class="form-group col-md-6">
                            <input type="text" name="email" class="form-control" placeholder="Faqir E-mail Address">
                        </div>

                    </div>

                    <div class="form-group">
                        <textarea name="address" rows="5" class="form-control" placeholder="Faqir Current Address"></textarea>
                    </div>

                    <div class="form-group">
                        <textarea name="additional-notes" rows="5" class="form-control" placeholder="Faqir Additional Notes"></textarea>
                    </div>

                    <div class="form-group alerts">

                        <div class="alert alert-success" role="alert">

                        </div>

                        <div class="alert alert-danger" role="alert">

                        </div>

                    </div>

                     <div class="form-group">
                        <input type="submit" class="btn btn-primary pull-right" value="Submit">
                    </div>

                    <div class="clearfix"></div>

                </form>

            </div>

        </div> <!-- /.row -->


    </div>



</div>


@endsection
