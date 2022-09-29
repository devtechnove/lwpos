 <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                             <a href="/home" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-analytics"> <i class="mdi mdi-home"></i> <span data-key="t-dashboards">Pantalla de Inicio</span> </a>

                        </li> <!-- end Dashboard Menu -->

                        @can('acceso_empresa')
                        <li class="nav-item">
                             <a href="/empresa" class="nav-link {{ request()->routeIs('empresa.*') ? 'active' : '' }}" data-key="t-analytics"> <i class="mdi mdi-book-minus"></i> <span data-key="t-dashboards">Empresa</span> </a>

                        </li>
                        @endcan
                        <!-- end Dashboard Menu -->
                        @can('acceso_empresa')
                        <li class="nav-item">
                            <a class="nav-link menu-link {{ request()->routeIs('usuarios.*') ? 'active' : '' }} {{ request()->routeIs('roles.*') ? 'active' : '' }} {{ request()->routeIs('logins.*') ? 'active' : '' }} {{ request()->routeIs('logs.*') ? 'active' : '' }}" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                <i class="mdi mdi-lock"></i> <span data-key="t-apps">Seguridad</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                    @can('Ver Usuario')
                                    <li class="nav-item">
                                        <a href="/usuarios" class="nav-link {{ request()->routeIs('usuarios.*') ? 'active' : '' }}" data-key="t-calendar"> Usuarios </a>
                                    </li>
                                    @endcan
                                     @can('Ver Role')
                                     <li class="nav-item">
                                        <a href="/roles" class="nav-link {{ request()->routeIs('roles.*') ? 'active' : '' }}" data-key="t-roles"> Roles & permisos </a>
                                    </li>
                                    @endcan
                                     @can('Ver Logins')
                                      <li class="nav-item">
                                        <a href="/logins" class="nav-link {{ request()->routeIs('logins.*') ? 'active' : '' }}" data-key="t-historial"> Historial de sesión </a>
                                    </li>
                                    @endcan
                                    @can('Ver LogSistema')
                                     <li class="nav-item">
                                        <a href="/logs" class="nav-link {{ request()->routeIs('logs.*') ? 'active' : '' }}" data-key="t-historial">Logs del sistema </a>
                                    </li>
                                    @endcan

                                </ul>
                            </div>
                        </li>
                        @endcan
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
            <div class="sidebar-background"></div>
        </div>
