@extends('layouts.main')

@section('content')

	<div class="page-heading text-center">

		<div class="container zoomIn animated">

			<h1 class="page-title">GALLERY <span class="title-under"></span></h1>
			<p class="page-description">
				{{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus. --}}
			</p>

		</div>

	</div>

	<div class="main-container">

		<div class="container gallery fadeIn animated">

			<div class="row">


					<a href="{{ asset('images/gallery/7610291856_931fb9f461_k.jpg') }}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/7610291856_931fb9f461_k.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->

					<a href="{{ asset('images/gallery/children-82272_1280.jpg') }} assets/images/gallery/children-82272_1280.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/children-82272_1280.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->


					<a href="{{ asset('images/gallery/human-rights.jpg') }} assets/images/gallery/human-rights.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/human-rights.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->


					<a href="{{ asset('images/gallery/old-books-436498_1280.jpg') }}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/old-books-436498_1280.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->

					<a href="{{ asset('images/gallery/hunger-682834_1280.jpg') }}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/hunger-682834_1280.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->

					<a href="{{ asset('images/gallery/africa-education.jpg') }}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/africa-education.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->


					<a href="{{ asset('images/gallery/afghani-60798_1280.jpg') }}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/afghani-60798_1280.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->

					<a href="{{ asset('images/gallery/boy-60729_1280.jpg') }}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/boy-60729_1280.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->


					<a href="{{ asset('images/gallery/child-207573_1280.jpg') }}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/child-207573_1280.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->


					<a href="{{ asset('images/gallery/children-60654_1280.jpg') }}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/children-60654_1280.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->

					<a href="{{ asset('images/gallery/doll-87407_1280.jpg') }}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/doll-87407_1280.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->

					<a href="{{ asset('images/gallery/girl-62328_1280.jpg') }}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{ asset('images/gallery/thumb/girl-62328_1280.jpg') }}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->


			</div>

		</div>


	</div> <!-- /.main-container  -->

@endsection
