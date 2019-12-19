<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <div class="d-sm-flex align-items-center justify-content-between mb-10">
          <img src="{{asset('assets/login/images/icons/favicon.png')}}" width="25px" alt="">
          <h1 style="margin-left:20px; margin-top:8px;" class="h3 text-gray-800">Sistem Inventaris Barang</h1>
        </div>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


              {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                      <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                      aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="#">
                          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Profile
                      </a>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Logout

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf


                          </form>
                      </a>

                  </div>
              </li>

          </ul>

      </nav>
      <!-- End of Topbar -->

