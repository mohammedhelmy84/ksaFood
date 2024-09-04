<x-sidebar></x-sidebar>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Type here...">
              </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                  <span class="d-sm-inline d-none">{{ auth()->user()->name }} <a href="{{url('/logout')}}">  <i class="las la-power-off"></i>Logout</a></span>
                </a>
              </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
              </li>
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell cursor-pointer"></i>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="{{url('/')}}/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span> from Laur
                          </h6>
                          <p class="text-xs text-secondary mb-0 ">
                            <i class="fa fa-clock me-1"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="{{url('/')}}/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New album</span> by Travis Scott
                          </h6>
                          <p class="text-xs text-secondary mb-0 ">
                            <i class="fa fa-clock me-1"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            Payment successfully completed
                          </h6>
                          <p class="text-xs text-secondary mb-0 ">
                            <i class="fa fa-clock me-1"></i>
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-fluid">
        @if ($errors->any())
        <div  style="background-color: lightpink !important;">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex align-items-center user-member__title mb-30 mt-30">
                    <h4 class="text-capitalize">add new Supervisor</h4>
                </div>
            </div>
        </div>
        <div class="card mb-50">
            <div class="row justify-content-center">
                <div class="col-sm-5 col-10">
                    <div class="mt-40 mb-50">
                        @if(Session::has('massage'))
                        <div class="alert-icon-big alert alert-warning " role="alert">
                         
                            <div class="alert-icon">
                                <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                            </div>

                            <div class="alert-content">

                                <h6 class='alert-heading'>Warning</h6>
                                <p>{{Session::get('massage')}}</p>
                            </div>
                        </div>
                        @endif


                        <form action="{{route('supervisor.store')}}" method="POST">
                            @csrf
                            <div class="edit-profile__body">
                                <div class="form-group mb-25">
                                    <label for="name" class="color-dark fs-14 fw-500 align-center">name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                        name="name" value="" id="name" placeholder="name">
                      
                                </div>
                                <div class="form-group mb-25">
                                  <label for="email" class="color-dark fs-14 fw-500 align-center">email <span
                                          class="text-danger">*</span></label>
                                  <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                      name="email" value="" id="email" placeholder="email">
                    
                              </div>
                                <div class="form-group mb-25">
                                    <label for="address" class="color-dark fs-14 fw-500 align-center">address<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                        name="address" id="address" value=""
                                        placeholder="address">
    
                                </div>
                                <div class="form-group mb-25">
                                    <label for="phone" class="color-dark fs-14 fw-500 align-center">phone <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                        name="phone" value="" id="phone" placeholder="phone">
                         
                                </div>
                               
                                <div class="form-group mb-25">
                                  <label for="branch" class="color-dark fs-14 fw-500 align-center">branch<span
                                          class="text-danger">*</span></label>
                                 <select name="branch_name" id="" class="form-select">
                                  <option selected>Select Branch</option>
                                  @foreach($branch as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                  @endforeach
                                     
                                 </select>
                            
                                 </div>
                                 <div class="form-group mb-25">
                                  <label for="password" class="color-dark fs-14 fw-500 align-center">password <span
                                          class="text-danger">*</span></label>
                                  <input type="password" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                      name="password" value="" id="password" placeholder="password">
                       
                              </div>

                                <div class="button-group d-flex pt-25 justify-content-md-end justify-content-start" style="margin-top: 30px;">
                                    <button type="submit"
                                        class="btn btn-primary btn-default btn-squared radius-md shadow2 btn-sm">Save</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>