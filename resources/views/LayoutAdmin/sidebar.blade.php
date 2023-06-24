  <!-- Sidebar Start -->
  <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
              <a href="{{ url('/dashboard') }}" class="text-nowrap logo-img">
                  <h3>Tubes WEB</h3>
              </a>
              <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                  <i class="ti ti-x fs-8"></i>
              </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
              <ul id="sidebarnav">
                  <li class="nav-small-cap">
                      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                      <span class="hide-menu">Home</span>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link {{ $title == 'Dashboard' ? 'active' : '' }}"
                          href="{{ url('/dashboard') }}">
                          <span>
                              <i class="ti ti-layout-dashboard"></i>
                          </span>
                          <span class="hide-menu">Dashboard</span>
                      </a>
                  </li>
                  <li class="nav-small-cap">
                      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                      <span class="hide-menu">Menu</span>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link {{ $title == 'Peserta' ? 'active' : '' }}" href="{{ url('/peserta') }}">
                          <span>
                              <i class="ti ti-user-check"></i>
                          </span>
                          <span class="hide-menu">Peserta</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link  {{ $title == 'Soal Ujian' ? 'active' : '' }}"
                          href="{{ url('/soalujian') }}">
                          <span>
                              <i class="ti ti-cards"></i>
                          </span>
                          <span class="hide-menu">Soal Ujian</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link {{ $title == 'Penilaian' ? 'active' : '' }}"
                          href="{{ url('/penilaian') }}">
                          <span>
                              <i class="ti ti-123"></i>
                          </span>
                          <span class="hide-menu">Penilaian</span>
                      </a>
                  </li>
              </ul>

          </nav>
          <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
  </aside>
  <!--  Sidebar End -->
