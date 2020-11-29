    <!--begin::Fonts-->
    <!--begin::Fonts -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Roboto:300,400,500,600,700", "DM Sans:400,400i,500,500i,700,700i"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script> --}}
{{-- 
    <!--end::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts--> --}}
    
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{ asset('assets/css/pages/login/classic/login-6.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/invoices/invoice-1.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles -->
    

    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon-1.ico') }}" />

<style>
.fa-disabled {
    opacity: 0.6;
    cursor: not-allowed;
}

tr {
    cursor: pointer;
}
</style>