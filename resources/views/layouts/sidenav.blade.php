       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

           <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               <div class="sidebar-brand-icon rotate-n-15">
                   <i class="fas fa-laugh-wink"></i>
               </div>
               <div class="sidebar-brand-text mx-3">Cypress </div>
           </a>

           <!-- Divider -->
           <hr class="sidebar-divider my-0">

           <!-- Nav Item - Dashboard -->
           <li class="nav-item active">
               <a class="nav-link"  href="{{ url('/') }}">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Dashboard</span></a>
           </li>
           @if(Auth::user()->role == 1)
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('users') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>User</span></a>
            </li>
           @endif
       </ul>
       <!-- End of Sidebar -->