  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
          <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Maroc 2024</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">

              @auth
                  <div class="image">
                      <img src="{{ asset('storage/'.auth()->user()->photo) }}" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                      <a href="#" class="d-block">{{ auth()->user()->nom }} {{ auth()->user()->prenom }}</a>
                      <a href="{{route('logout')}}" class="d-block">Deconnexion</a>
                  </div>
              @endauth
              @guest
                <a href="{{route('login')}}" class="d-block">Se connecter   </a>
              @endguest
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open">
                      <a href="#" class="nav-link active">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('regions.index') }}"
                                  class="nav-link @if (isset($regions)) active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Regoins</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('villes.index') }}"
                                  class="nav-link @if (isset($villes)) active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Villes</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('metiers.index') }}"
                                  class="nav-link @if (isset($metiers)) active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Metiers</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('etablissements.index') }}"
                                  class="nav-link @if (isset($etablissements)) active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Etablissements</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('formateurs.index') }}"
                                  class="nav-link @if (isset($formateurs)) active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Formateurs</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('permutations.index') }}"
                                  class="nav-link @if (isset($permutations)) active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Permutations</p>
                              </a>
                          </li>
                      </ul>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
