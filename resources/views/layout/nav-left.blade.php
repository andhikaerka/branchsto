<!--begin::Brand-->
<div class="aside-brand d-flex flex-column align-items-center flex-column-auto pt-5 pt-lg-18 pb-10">
    <!--begin::Logo-->
    <div class="btn p-0 symbol symbol-60 symbol-light-primary" href="?page=index" id="kt_quick_user_toggle">
        <div class="symbol-label">
            <img alt="Logo" src="{{ asset('assets/media/logos/premium-register.png') }}" class="h-75 align-self-end" />
        </div>
    </div>
    <!--end::Logo-->
</div>
<!--end::Brand-->
<!--begin::Nav Wrapper-->
<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pb-10">
    <!--begin::Nav-->
    <ul class="nav flex-column">
        @if(Auth::user()->email_verified_at == null)
        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Latest Projects">
            <a href="javascript:;" id="notif-1" class="nav-link btn btn-icon btn-hover-text-primary btn-lg active">
                <span class="flaticon-squares-4 icon-2x">
                </span>
            </a>
        </li>
        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Metronic Features">
            <a href="javascript:;" id="notif-2" class="nav-link btn btn-icon btn-hover-text-primary btn-lg" data-toggle="tab" data-target="#kt_aside_tab_2" role="tab">
                <span class="fa fa-user icon-2x">
                   
                </span>
            </a>
        </li>
        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Latest Reports">
            <a href="javascript:;" id="notif-3" class="nav-link btn btn-icon btn-hover-text-primary btn-lg" data-toggle="tab" data-target="#kt_aside_tab_3" role="tab">
                <span class="flaticon-bag icon-2x">
                   
                </span>
            </a>
        </li>
        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Project Management">
            <a href="{{ route('login.index') }}" class="nav-link btn btn-icon btn-hover-text-primary btn-lg" >
                <span class="flaticon2-gear icon-2x">
                    
                </span>
            </a>
        </li>
        @else
        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Latest Projects">
            <a href="#" class="nav-link btn btn-icon btn-hover-text-primary btn-lg active">
                <span class="flaticon-squares-4 icon-2x">
                </span>
            </a>
        </li>
        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Metronic Features">
            <a href="{{ route('profile.index') }}" class="nav-link btn btn-icon btn-hover-text-primary btn-lg">
                <span class="fa fa-user icon-2x">
                   
                </span>
            </a>
        </li>
        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Latest Reports">
            <a href="#" class="nav-link btn btn-icon btn-hover-text-primary btn-lg" data-toggle="tab" data-target="#kt_aside_tab_3" role="tab">
                <span class="flaticon-bag icon-2x">
                   
                </span>
            </a>
        </li>
        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Project Management">
            <a href="{{ route('login.index') }}" class="nav-link btn btn-icon btn-hover-text-primary btn-lg" >
                <span class="flaticon2-gear icon-2x">
                    
                </span>
            </a>
        </li>
        @endif


    </ul>
    <!--end::Nav-->
</div>
<!--end::Nav Wrapper-->