<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="{{url('/')}}"><img class="blur-up lazyloaded" src="{{asset('assets/images/dashboard/multikart-logo.png')}}" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle blur-up lazyloaded" src="{{asset('assets/images/dashboard/man.png')}}" alt="#">
            </div>
            <h6 class="mt-3 f-14">{{Auth::user()->firstname.' '.Auth::user()->surname}}</h6>
            <p>{{Auth::user()->role->description}}.</p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="{{route('admin.dashboard')}}"><i data-feather="home"></i><span>Dashboard</span></a></li>
            <li><a class="sidebar-header" href="{{route('admin.categories')}}"><i data-feather="bar-chart"></i>Categories</a></li>
            <li><a class="sidebar-header" href="{{route('admin.atributes')}}"><i data-feather="bar-chart"></i>Attributes</a></li>
            <li><a class="sidebar-header" href="{{route('admin.product.lists')}}"><i data-feather="box"></i><span>Products</span></a></li>
            <li><a class="sidebar-header" href="{{route('admin.orders.list')}}"><i data-feather="home"></i><span>Orders</span></a></li>
            {{-- <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Shipment</span></a></li> --}}
            
            
            {{-- <li><a class="sidebar-header" href="{{route('admin.media.list')}}"><i data-feather="camera"></i><span>Media</span></a></li> --}}
            <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.coupons.list')}}"><i class="fa fa-circle"></i>List Coupons</a></li>
                    <li><a href="{{route('admin.coupons.create')}}"><i class="fa fa-circle"></i>Create Coupons </a></li>
                </ul>
            </li>
            
            <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Payments</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.transactions')}}"><i class="fa fa-circle"></i>Transactions</a></li>
                    <li>
                        <a href="{{route('admin.withdrawals')}}"><i class="fa fa-circle"></i>
                            Withdrawals
                        </a>
        
                    </li>
                    <li>
                        <a href="{{route('admin.settlements')}}"><i class="fa fa-circle"></i>
                            Settlements
                        </a>
        
                    </li>
                </ul>
            </li>
            
            
            <li><a class="sidebar-header" href="{{route('admin.users.list')}}"><i data-feather="user-plus"></i>Users</a></li>
            <li><a class="sidebar-header" href="{{route('admin.shops.list')}}"><i data-feather="users"></i>Vendors</a></li>
            <li><a class="sidebar-header" href="{{route('admin.settings')}}"><i data-feather="settings"></i>Settings</a></li>
            <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Support</span></a>
            </li>
            <li><a class="sidebar-header" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i data-feather="log-in"></i><span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>