<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="{{ url('/') }}">
		<meta charset="utf-8" />
		<title>
			{{ config('app.name', 'BRANCHSTO') }} | 
			@if(Request::segment(1)) {{ strtoupper(str_replace('_', ' ', Request::segment(1))) }} @endif
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!--begin::Global Theme Styles(used by all pages) -->
        @include('layout.stylesheets')
		<link href="{{ asset('assets/css/pages/invoices/invoice-1.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles -->
        <style>
            body{
                background-color:white;
            }
            .foto-verifikasi{
                margin-left:150vh;padding-top:30vh;width: 15%;height: 30%;
            }
            .header-verifikasi{
                background-color:#141D31;height: 50%;width: 100%;
            }
            .text-verifikasi{
                font-size: 16px;
                font-weight: bold;
                margin-left:20%;
                margin-top: 5%;
            }
        </style>

		<!--end::Layout Skins -->
		{{-- <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon-1.ico') }}" /> --}}
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">
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
				<div class="card-body p-0">
                    <!-- begin: Invoice-->
                    <!-- begin: Invoice header-->
                    <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0" style="background-color:#141D31;height:50vh">
                        <div class="sidebar-header flex-column-auto pt-5 pt-lg-19 pb-5 px-5 px-lg-10">
                            <!--begin::Toolbar-->
                            <div class="d-flex" style="position: absolute;
                            width: 577px;
                            height: 141px;
                            left: 471px;
                            top: 402px;
                            
                            background: #FFFFFF;
                            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
                            border-radius: 100px;
                            ">
                                <!--begin::Desktop Search-->
                                <div class="quick-search quick-search-inline flex-grow-1" id="kt_quick_search_inline" style="margin-left:10%">
                                    <div class="text-center mb-10">
                                        <div class="symbol symbol-60 symbol-circle symbol-xl-90">
                                            <div class="symbol-label" style="background-image:url({{ asset('assets/media/logos/premium-register.png') }})" ></div>
                                        </div>
                                        <div class="text-muted mb-2">Premium</div>
                                        <h4 class="font-weight-bold my-2">Registered</h4>
                                    </div>
                                </div>
                                {{-- <div class="quick-search quick-search-inline flex-grow-1" id="kt_quick_search_inline" style="margin-left:10%">
                                    <div class="text-center mb-10">
                                        <div class="symbol symbol-60 symbol-circle symbol-xl-90">
                                            <div class="symbol-label" style="background-image:url({{ asset('assets/media/logos/stable-register.png') }})"></div>
                                        </div>
                                        <div class="text-muted mb-2">Stable</div>
                                        <h4 class="font-weight-bold my-2">Registered</h4>
                                    </div>
                                </div>
                                <div class="quick-search quick-search-inline flex-grow-1" id="kt_quick_search_inline" style="margin-left:10%;margin-right:10%">
                                    <div class="text-center mb-10">
                                        <div class="symbol symbol-60 symbol-circle symbol-xl-90">
                                            <div class="symbol-label" style="background-image:url({{ asset('assets/media/logos/eo-register-1.png') }})"></div>
                                        </div>
                                        <div class="text-muted mb-2">EO</div>
                                        <h4 class="font-weight-bold my-2">Registered</h4>
                                    </div>
                                </div> --}}
                                <!--end::Desktop Search-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                    </div>
                    <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0" style="background-color:rgb(184, 176, 176);height:50vh">
                        <div class="col-md-9">
                            
                        </div>
                    </div>
                    <!-- end: Invoice header-->
                </div> 
            </div>
			<!--end::Page-->
		</div>


		<!--begin::Page Scripts -->
			@include('layout.scripts')
        <!--end::Page Scripts -->
        <script>
            $('#notif-1').click(function(e) {
            e.preventDefault();
                    swal.fire('Segera Lakukan Verifikasi Email!');
            });
            $('#notif-2').click(function(e) {
            e.preventDefault();
                    swal.fire('Segera Lakukan Verifikasi Email!');
            });
            $('#notif-3').click(function(e) {
            e.preventDefault();
                    swal.fire('Segera Lakukan Verifikasi Email!');
            });
            $('#notif-4').click(function(e) {
            e.preventDefault();
                    swal.fire('Segera Lakukan Verifikasi Email!');
            });
        </script>
	</body>

	<!-- end::Body -->
</html>