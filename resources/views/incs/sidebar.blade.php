    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Dashboard</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
  
        {{-- <!--Dashboard-->
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li> --}}
  
        <!--Lend & Return Books-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseo" aria-expanded="true" aria-controls="collapseo">
            <i class="fas fa-fw fa-book"></i>
            <span>Account</span>
          </a>
          <div id="collapseo" class="collapse" aria-labelledby="headingo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/borrow') }}">Deposit</a>
                <a class="collapse-item" href="{{ url('/borrow') }}">Earnings</a>
                <a class="collapse-item" href="{{ url('/return') }}">Withdrawals</a>
  
            </div>
          </div>
        </li>
  
        {{-- <!-- Book Management -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-book"></i>
            <span>Book Management</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ url('/addBook') }}">Add Books</a>
              <a class="collapse-item" href="{{ url('/manageBook') }}">Manage Books</a>
              <a class="collapse-item" href="{{ url('/categories') }}">Categories</a>
            </div>
          </div>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>spin</span></a>
        </li>
  
        <!--Profile Management-->
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Profile Management</span></a>
        </li>
    
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
      </ul>
      <!-- End of Sidebar -->