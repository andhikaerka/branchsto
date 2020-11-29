
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>
			{{ config('app.name', 'BRANCHSTO') }} | 
			@if(Request::segment(1)) {{ strtoupper(str_replace('_', ' ', Request::segment(1))) }} @endif
		</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Global Theme Styles(used by all pages) -->
        @include('layout.stylesheets')
		<!--end::Global Theme Styles -->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed sidebar-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="{{ asset('assets/media/logos/profile.png') }}" class="logo-default max-h-30px" />
			</a>
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left d-flex flex-column" id="kt_aside">
					<!--begin::nav-left-->
					@include('layout.nav-left')
					<!--end::nav-left-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Header Wrapper-->
						<div class="header-wrapper rounded-top-xl d-flex flex-grow-1 align-items-center">
							<!--begin::Container-->
							<div class="container-fluid d-flex align-items-center justify-content-end justify-content-lg-between flex-wrap">
								
								<!--begin::nav-top-->
									@include('layout.nav-top')
								<!--end::nav-top-->
								
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center py-3">
								</div>
								<!--end::Toolbar-->
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Header Wrapper-->
					</div>
					<!--end::Header-->

					<!-- begin:: Content -->
					@include('sweetalert::alert')
					@yield('content')
					<!-- end:: Content -->

					<!-- begin:: Footer -->
					@include('layout.footer')
					<!-- end:: Footer -->
				</div>
				<!--end::Wrapper-->

				<!--begin::nav-right-->
				@include('layout.nav-right')
				<!--end::nav-right-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		
		<!--begin::Page Scripts -->
		@include('layout.scripts')
		<!--end::Page Scripts -->
	</body>
	<!--end::Body-->
</html>