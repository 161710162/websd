<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('artikel.index') }}">Artikel</a>
                                </li>
                                <li>
                                    <a href="{{ route('kategori.index') }}">Kategori Artikel</a>
                                </li>
                                </ul>
                        </li>
                        <li>
                            <a href="{{ route('staf.index') }}">
                                <i class="fas fa-table"></i>Staf</a>
                        </li>
                        <li>
                            <a href="{{ route('fasilitas.index') }}">
                                <i class="fas fa-desktop"></i>Fasilitas</a>
                        </li>
                        <li>
                            <a href="{{ route('ekskul.index') }}">
                                <i class="fas fa-tachometer-alt"></i>Ekstrakulikuler</a>
                        </li>
                        <li>
                            <a href="{{ route('prestasi.index') }}">
                                <i class="fas fa-desktop"></i>Prestasi</a>
                        </li>
                        <li>
                            <a href="{{ route('guru.index') }}">
                                <i class="fas fa-calendar-alt"></i>Guru</a>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>