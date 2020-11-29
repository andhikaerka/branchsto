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
                background-color:#F8F8F8;
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
                
                <div class=" d-flex flex-column flex-column-fluid" style="margin-left:7%;margin-top:3%;">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid" >
                        <!--begin::Container-->
                        <div class="container-fluid">
                            <!-- begin::Card-->
                            <div class="card card-custom" >
                                <!--begin::Body-->
                                <div class="card-body pt-15">
                                    <!--begin::User-->
                                    <div class="text-center mb-10" style="height:50vh;margin-top: 15%">
                                        <div class="symbol symbol-60 symbol-circle symbol-xl-90">
                                            <div class="symbol-label" style="background-image:url({{ asset('assets/media/logos/verifikasi.png') }})"></div>
                                        </div>
                                        <h4 class="font-weight-bold my-4">Verify your email address</h4>
                                        <div class="text-muted ">Please check your email and click the verification link we sent you. <br> if you do not receive an email from us and make sure the email you registered is correct.</div>
                                        <a href="#" style="margin-left:40%;margin-right:40%;color:rgb(255, 255, 255); background-color:#2A4158; margin-top:2%;width:auto;" class="ext-muted form-control">RESEND EMAIL</a>
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Contact-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!-- end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
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