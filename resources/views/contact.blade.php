@extends('layouts.main')

@section('content')

	<div class="page-heading text-center">

		<div class="container zoomIn animated">

			<h1 class="page-title">CONTACT US <span class="title-under"></span></h1>
			<p class="page-description">
				{{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus. --}}
			</p>

		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">CONTACT FORM <span class="title-under"></span></h2>

					<form action="php/mail.php" class="contact-form ajax-form">

						<div class="row">

							<div class="form-group col-md-6">
	                            <input type="text" name="name" class="form-control" placeholder="Name*" required>
	                        </div>

	                         <div class="form-group col-md-6">
	                            <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
	                        </div>

						</div>

                        <div class="form-group">
                            <textarea name="message" rows="5" class="form-control" placeholder="Message*" required></textarea>
                        </div>

                        <div class="form-group alerts">

                        	<div class="alert alert-success" role="alert">

							</div>

							<div class="alert alert-danger" role="alert">

							</div>

                        </div>

                         <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Send message</button>
                        </div>

                        <div class="clearfix"></div>

					</form>

				</div>

				<div class="col-md-4 col-md-offset-1 col-contact">

					<h2 class="title-style-2"> MySumbangan CONTACTS <span class="title-under"></span></h2>
					<p>
						<b>MySumbangan</b> Institute of IR4.0 (IIR4.0)
                        formerly known as Institute of Visual Informatics (IVI)
                        Universiti Kebangsaan Malaysia
                        43600 UKM Bangi, Selangor
					</p>

					<div class="contact-items">

						<ul class="list-unstyled contact-items-list">
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> Universiti Kebangsaan Malaysia</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> +603-8921 6073</li>

							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> mysumbangan@ukm.edu.my</li>
						</ul>
					</div>



				</div>

			</div> <!-- /.row -->


		</div>



	</div>

	<div id="contact-map" class="contact-map">

	</div>

@endsection
