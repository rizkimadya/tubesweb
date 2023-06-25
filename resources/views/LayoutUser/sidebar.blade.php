  <!-- Sidebar Start -->
  <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
              <a href="{{ url('/dashboard-peserta') }}" class="text-nowrap logo-img">
                  <h3>Selamat Ujian</h3>
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
                      <span class="hide-menu">Menu</span>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link {{ $title == 'Ujian' ? 'active' : '' }}"
                          href="{{ url('/dashboard-peserta') }}">
                          <span>
                              <i class="ti ti-layout-dashboard"></i>
                          </span>
                          <span class="hide-menu">Ujian</span>
                      </a>
                  </li>
              </ul>

          </nav>
          <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
  </aside>
  <!--  Sidebar End -->
