<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#"
                    data-toggle="sidebar"
                    class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#"
                    data-toggle="search"
                    class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        {{-- Search --}}
        {{-- <div class="search-element">
            <input class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
                data-width="250">
            <button class="btn"
                type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
         </div> --}}
        
    </form>

    {{-- Admin --}}
    @if(auth()->user()->role == 'admin')
    <ul class="navbar-nav navbar-right">
        <?php
            $stock = \DB::select("SELECT * from Barangs where stock < 1");
            $expired_at = \DB::select("SELECT * from Peminjams where expired_at > expired_at");
        ?>
            <ul class="navbar-nav navbar-right">
            <li class="dropdown dropdown-list-toggle"><a href="#"
                    data-toggle="dropdown"
                    class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">Messages
                        <div class="float-right">
                            <a href="#">Mark All As Read</a>
                        </div>
                    </div>
                    <div class="dropdown-list-content dropdown-list-message">
                        <a href="#"
                            class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-avatar">
                                <img alt="image"
                                    src="{{ asset('img/avatar/avatar-1.png') }}"
                                    class="rounded-circle">
                                <div class="is-online"></div>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Mulhaidin</b>
                                <p>Tolong cek ketersediaan Bangku!</p>
                                <div class="time">24 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#"
                            class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-avatar">
                                <img alt="image"
                                    src="{{ asset('img/avatar/avatar-2.png') }}"
                                    class="rounded-circle">
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Delawati</b>
                                <p>Bangku ruang 10 kok hilang, bagaimana ini?!?!</p>
                                <div class="time">1 Minute Ago</div>
                            </div>
                        </a>
                        <a href="#"
                            class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-avatar">
                                <img alt="image"
                                    src="{{ asset('img/avatar/avatar-3.png') }}"
                                    class="rounded-circle">
                                <div class="is-online"></div>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Agung Ardiansyah</b>
                                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div class="time">12 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#"
                            class="dropdown-item">
                            <div class="dropdown-item-avatar">
                                <img alt="image"
                                    src="{{ asset('img/avatar/avatar-4.png') }}"
                                    class="rounded-circle">
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Ardian Rahardiansyah</b>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                <div class="time">16 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#"
                            class="dropdown-item">
                            <div class="dropdown-item-avatar">
                                <img alt="image"
                                    src="{{ asset('img/avatar/avatar-5.png') }}"
                                    class="rounded-circle">
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Alfa Zulkarnain</b>
                                <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                <div class="time">Yesterday</div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer text-center">
                        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-list-toggle"><a href="#"
                data-toggle="dropdown"
                class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                    <a href="#"
                        class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-icon bg-primary text-white">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Template update is available now!
                            <div class="time text-primary">2 Min Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-icon bg-info text-white">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                            <div class="time">10 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-icon bg-success text-white">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                            <div class="time">12 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-icon bg-danger text-white">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Low disk space. Let's clean it!
                            <div class="time">17 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-icon bg-info text-white">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Welcome to Stisla template!
                            <div class="time">Yesterday</div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown"><a href="#"
                data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image"
                    src="{{ asset('img/avatar/avatar-1.png') }}"
                    class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{auth()->user()->name}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Login Sebagai : <br> {{auth()->user()->role}}</div>
                <a href="/features-profile"
                    class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                {{-- <a href="features-activities.html"
                    class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html"
                    class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a> --}}
                {{-- <div class="dropdown-item has-icon text-danger">
                    <form action="logout" method="POST">
                        @csrf
                        <button class="btn btn-danger fas fa-sign-out-alt">Logout</button>
                    </form>
                </div> --}}
                <div class="dropdown-divider"></div>
                <a href="/auth-login2"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
    @endif
    {{-- <div class="dropdown-divider"></div>
                <div class="dropdown-item has-icon text-danger">
                    <form action="logout" method="POST">
                        @csrf
                        <button>
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div> --}}

    {{-- User --}}
    @if(auth()->user()->role == 'mahasiswa')
    <ul class="navbar-nav navbar-right">
        <?php
        $stock = \DB::select("SELECT * from Barangs where stock < 1");
        $expired_at = \DB::select("SELECT * from Peminjams where expired_at > expired_at");
        ?>
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg d-flex">
            <i class="far fa-bell"></i>
            @if($stock)
            <div class="rounded-circle bg-success" style="width: 15px!important; height: 15px!important;">
                <span style="display: flex!important; justify-content: center!important; text-align: center!important; align-items: center; width: 15px!important; height: 15px!important; font-size: 12px;">{{ count($stock) }}</span>
            </div>
            @endif
            @if($expired_at)
            <div class="rounded-circle bg-success" style="width: 15px!important; height: 15px!important;">
                <span style="display: flex!important; justify-content: center!important; text-align: center!important; align-items: center; width: 15px!important; height: 15px!important; font-size: 12px;">{{ count($expired_at) }}</span>
            </div>
            @endif
        </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications</div>
                <div class="dropdown-list-content dropdown-list-icons">
                    @foreach ($stock as $stk)
                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-icon bg-danger text-white">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            <p>{{ $stk->nama_barang}}</p>
                            <div class="time">Barang sudah habis</div>
                        </div>
                    </a>
                    @endforeach
                    <a href="#"
                    class="dropdown-item">
                    <div class="dropdown-item-icon bg-success text-white">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Berhasil Meminjam Barang!</b> 
                        <div class="time">Today</div>
                    </div>
                </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="/baranguser">Periksa Barang<i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown"><a href="#"
                data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image"
                    src="{{ asset('img/avatar/avatar-1.png') }}"
                    class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{auth()->user()->name}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Login sebagai : {{auth()->user()->role}}</div>
                <a href="/features-profile"
                    class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                {{-- <a href="features-activities.html"
                    class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html"
                    class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a> --}}
                <div class="dropdown-divider"></div>
                <a href="/auth-login2"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
    @endif
</nav>
