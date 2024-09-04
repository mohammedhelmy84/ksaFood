


<x-sidebar></x-sidebar>
Orders
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Orders</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Orders</h6>
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
   
      <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">
                  <h6 class="text-center">Bill</h6>
                  <p class="text-center"><strong>Branch Name: </strong>{{$orders_branch->branch->name}}</p>
                  <p class="text-center"><strong>Order Date: </strong>{{$orders_branch->created_at}}</p>
                  
                  <i class="las la-print" style="display:block; font-size: 25px; margin-left:auto; margin-right:auto; text-align:center;"></i>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  @if(Session::has('massage'))
                  <div class="alert-icon-big alert alert-success " role="alert">
                      <div class="alert-icon">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
                      </div>
                      <div class="alert-content">
                          <h6 class='alert-heading'>Success Tips</h6>
                          <p>{{Session::get('massage')}}</p>
                      </div>
                  </div>
                  @endif
                  {{-- {{$orderitem->orderitem->order_id}} --}}
                  <div class="tex-center mx-auto p-2">
                 <table class="table table-stroped">
                   <thead>
                     <tr>
                       <th>PRODUCT</th>
                       <th>QUANTITY</th>
                       <th>PRICE</th>
                       <th>TOTAL</th>
                      </tr>
                   </thead>
                   <tbody>
                    @foreach($orderitems as $orderitem)
                     <tr>
                       <td>
                        <span class="badge text-bg-warning" style="color:#000 !important; font-weight:bold; width:100px !important;">Product <i class="las la-utensils" style="font-size: 18px"></i></span>
                        <p>{{$orderitem->product->name}}</p>
                       </td>
                       <td>
                        <span class="badge text-bg-warning" style="color:#000 !important; font-weight:bold; width:100px !important;">Quntity <i class="las la-shopping-cart" style="font-size: 18px"></i></span>
                        <p>{{$orderitem->quantity}}</p>
                       </td>
                       <td>
                        <span class="badge text-bg-warning" style="color:#000 !important; font-weight:bold; width:100px !important;">Price <i class="las la-dollar-sign" style="font-size: 18px"></i></span>
                        <p>{{$orderitem->price}}</p>
                       </td>
                       <td>
                        <span class="badge text-bg-warning" style="color:#000 !important; font-weight:bold; width:100px !important;">Total <i class="las la-dollar-sign" style="font-size: 18px"></i></span>
                        <p>{{number_format($orderitem->total,2)}}</p>
                       </td>
                     </tr>
                     @endforeach
                   </tbody>
                 </table>
                  </div>
                  <div class="tex-center mx-auto bg-dark p-2">
                    <span class="badge text-bg-success" style="color:#000 !important; font-weight:bold; width:100px !important;">Total <i class="las la-angle-double-right"></i></span>
                    <p class="text-center text-light">{{number_format($totalOrder,2)}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      

</main>
 