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
        <h1 class="page-title">DONATION<span class="title-under"></span></h1>
    </div>

</div>

<div class="main-container">

    <div class="container">

        <div class="row">

            {{-- <div class="col-md-12 fadeIn animated">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

            </div> --}}

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

                <h2 class="title-style-2"> Donation <span class="title-under"></span></h2>


                    <div role="tabpanel">

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#cash" aria-controls="home" role="tab" data-toggle="tab">Cash</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Basic Needs</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Clothes/Others</a></li>
                            {{-- <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li> --}}
                          </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="cash">
                                {{-- Azmi Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur mollitia, libero quisquam impedit obcaecati, dignissimos, eum similique minima ab amet eos sequi distinctio qui modi? Possimus quos, fugit quia.</div> --}}
                                {{-- <div class="modal-content"> --}}
                                    {{-- <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
                                    </div> --}}


                                    <div class="modal-body">

                                        <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>

                                        <form action="donor-list">

                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <input type="text" name="ic" class="form-control" placeholder="IC Number*" required>
                                                </div>

                                                 <div class="form-group col-md-6">
                                                    <input type="text" name="name" class="form-control" placeholder="Full Name*" required>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <input type="text" name="tel-no" class="form-control" placeholder="Telephone No*" required>
                                                </div>

                                                 <div class="form-group col-md-6">
                                                    <input type="text" name="email" class="form-control" placeholder="E-mail Address*" required>
                                                </div>

                                                <div class="form-group col-md-12 ">
                                                    <input type="text" class="form-control" id="amount" placeholder="Amount (RM)">
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <textarea name="address" rows="5" class="form-control" placeholder="Address*" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <textarea name="additional-notes" rows="5" class="form-control" placeholder="Additional Notes"></textarea>
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
                                  </div>

                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="col-md-12 fadeIn animate-onscroll">

                                    <h3 class="title-style-1 text-center">List of Distribution Centre <span class="title-under"></span>  </h3>
                                    {{-- <h2 class="title-style-2 text-center">List of Distribution Centre<span class="title-under"></span></h2> --}}

                                        {{-- <h4>TABLE STYLE 1</h4> --}}
                                        <table class="table table-style-1">
                                          <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Centre Name</th>
                                              <th>Telephone No</th>
                                              <th>Address</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">1</th>
                                              <td><a href="donor-basic-needs">Masjid Jamek Sultan Ibrahim</a></td>
                                              <td>03-4628 4638</td>
                                              <td>Masjid Baru Daerah , K.selangor 45000 Kuala Selangor, Selangor Darul Ehsan.</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">2</th>
                                              <td><a href="donor-basic-needs">Masjid Al Umm</a></td>
                                              <td>03-8922 9747</td>
                                              <td>21, Jalan 1/3k, Seksyen 1, 43650 Bandar Baru Bangi, Selangor</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">3</th>
                                              <td><a href="donor-basic-needs">Masjid Universiti UKM (Masjid Kampus UKM)</a></td>
                                              <td>03-8921 5404</td>
                                              <td>Universiti Kebangsaan Malaysia, Jln Bangi, 43000 Kajang, Selangor</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td><a href="donor-basic-needs">Masjid Al-Hasanah</a></td>
                                                <td>03-8469 6143</td>
                                                <td>Persiaran Kemajuan, Seksyen 9, 43650 Bandar Baru Bangi, Selangor</td>
                                              </tr>
                                          </tbody>
                                        </table>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="col-md-12 fadeIn animate-onscroll">

                                    <h3 class="title-style-1 text-center">Page Under Maintenance <span class="title-under"></span>  </h3>
                                    {{-- <h2 class="title-style-2 text-center">List of Distribution Centre<span class="title-under"></span></h2> --}}

                                        {{-- <h4>TABLE STYLE 1</h4> --}}
                                        {{-- <table class="table table-style-1">
                                          <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Centre Name</th>
                                              <th>Telephone No</th>
                                              <th>Address</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">1</th>
                                              <td><a href="donor-basic-needs">Masjid Jamek Sultan Ibrahim</a></td>
                                              <td>03-4628 4638</td>
                                              <td>Masjid Baru Daerah , K.selangor 45000 Kuala Selangor, Selangor Darul Ehsan.</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">2</th>
                                              <td><a href="donor-basic-needs">Masjid Al Umm</a></td>
                                              <td>03-8922 9747</td>
                                              <td>21, Jalan 1/3k, Seksyen 1, 43650 Bandar Baru Bangi, Selangor</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">3</th>
                                              <td><a href="donor-basic-needs">Masjid Universiti UKM (Masjid Kampus UKM)</a></td>
                                              <td>03-8921 5404</td>
                                              <td>Universiti Kebangsaan Malaysia, Jln Bangi, 43000 Kajang, Selangor</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td><a href="donor-basic-needs">Masjid Al-Hasanah</a></td>
                                                <td>03-8469 6143</td>
                                                <td>Persiaran Kemajuan, Seksyen 9, 43650 Bandar Baru Bangi, Selangor</td>
                                              </tr>
                                          </tbody>
                                        </table> --}}
                                </div>
                          </div>

                    </div>

                    <p></p>


            </div>

        </div>

    </div>






</div> <!-- /.main-container  -->


@endsection
