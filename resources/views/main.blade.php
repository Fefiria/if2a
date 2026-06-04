
    <!doctype html>
    <html lang="en">
    <!--begin::Head-->
    <head><script>(function(w,i,g){w[g]=w[g]||[];if(typeof w[g].push=='function')w[g].push(i)})
    (window,'GTM-WHH7CJ83','google_tags_first_party');</script><script>(function(w,d,s,l){w[l]=w[l]||[];(function(){w[l].push(arguments);})('set', 'developer_id.dYzg1YT', true);
            w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s);j.async=true;j.src='/wzrt/';
            f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer');</script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>AdminLTE 4 | Unfixed Sidebar</title>

        <!--begin::Accessibility Meta Tags-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
        <meta name="color-scheme" content="light dark" />
        <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
        <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
        <!--end::Accessibility Meta Tags-->

        <!--begin::Primary Meta Tags-->
        <meta name="title" content="AdminLTE 4 | Unfixed Sidebar" />
        <meta name="author" content="ColorlibHQ" />
        <meta
        name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance."
        />
        <meta
        name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant"
        />
        <!--end::Primary Meta Tags-->

        <!--begin::Accessibility Features-->
        <!-- Skip links will be dynamically added by accessibility.js -->
        <meta name="supported-color-schemes" content="light dark" />
        <link rel="preload" <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}" as="style" />
        <!--end::Accessibility Features-->

        <!--begin::Fonts-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
        crossorigin="anonymous"
        media="print"
        onload="this.media='all'"
        />
        <!--end::Fonts-->

        <!--begin::Third Party Plugin(OverlayScrollbars)-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous"
        />
        <!--end::Third Party Plugin(OverlayScrollbars)-->

        <!--begin::Third Party Plugin(Bootstrap Icons)-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous"
        />
        <!--end::Third Party Plugin(Bootstrap Icons)-->

        <!--begin::Required Plugin(AdminLTE)-->
        <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}" />
        <!--end::Required Plugin(AdminLTE)-->
    <script data-cfasync="false" nonce="ef1ea391-9ebd-40cc-bba2-06437a0c4d95">try{(function(w,d){!function(F,G,H,I){if(F.zaraz)console.error("zaraz is loaded twice");else{F[H]=F[H]||{};F[H].executed=[];F.zaraz={deferred:[],listeners:[]};F.zaraz._v="5882";F.zaraz._n="ef1ea391-9ebd-40cc-bba2-06437a0c4d95";F.zaraz.q=[];F.zaraz._f=function(J){return async function(){var K=Array.prototype.slice.call(arguments);F.zaraz.q.push({m:J,a:K})}};for(const L of["track","set","debug"])F.zaraz[L]=F.zaraz._f(L);F.zaraz.init=()=>{var M=G.getElementsByTagName(I)[0],N=G.createElement(I),O=G.getElementsByTagName("title")[0];O&&(F[H].t=G.getElementsByTagName("title")[0].text);F[H].x=Math.random();F[H].w=F.screen.width;F[H].h=F.screen.height;F[H].j=F.innerHeight;F[H].e=F.innerWidth;F[H].l=F.location.href;F[H].r=G.referrer;F[H].k=F.screen.colorDepth;F[H].n=G.characterSet;F[H].o=(new Date).getTimezoneOffset();if(F.dataLayer)for(const P of Object.entries(Object.entries(dataLayer).reduce((Q,R)=>({...Q[1],...R[1]}),{})))zaraz.set(P[0],P[1],{scope:"page"});F[H].q=[];for(;F.zaraz.q.length;){const S=F.zaraz.q.shift();F[H].q.push(S)}N.defer=!0;for(const T of[localStorage,sessionStorage])Object.keys(T||{}).filter(V=>V.startsWith("_zaraz_")).forEach(U=>{try{F[H]["z_"+U.slice(7)]=JSON.parse(T.getItem(U))}catch{F[H]["z_"+U.slice(7)]=T.getItem(U)}});N.referrerPolicy="origin";N.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(F[H])));M.parentNode.insertBefore(N,M)};["complete","interactive"].includes(G.readyState)?zaraz.init():F.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async bO=>new Promise(bP=>{if(bO){bO.e&&bO.e.forEach(bQ=>{try{const bR=d.querySelector("script[nonce]"),bS=bR?.nonce||bR?.getAttribute("nonce"),bT=d.createElement("script");bS&&(bT.nonce=bS);bT.innerHTML=bQ;bT.onload=()=>{d.head.removeChild(bT)};d.head.appendChild(bT)}catch(bU){console.error(`Error executing script: ${bQ}\n`,bU)}});Promise.allSettled((bO.f||[]).map(bV=>fetch(bV[0],bV[1])))}bP()});zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
    <!--end::Head-->
    <!--begin::Body-->
    <body class="sidebar-expand-lg sidebar-open bg-body-tertiary">
        <!--begin::App Wrapper-->
        <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
                </li>
                <li class="nav-item d-none d-md-block">
                <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-md-block">
                <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <!--end::Start Navbar Links-->

            <!--begin::End Navbar Links-->
            <ul class="navbar-nav ms-auto">
                <!--begin::Navbar Search-->
                <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="bi bi-search"></i>
                </a>
                </li>
                <!--end::Navbar Search-->

                <!--begin::Messages Dropdown Menu-->
                <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-chat-text"></i>
                    <span class="navbar-badge badge text-bg-danger">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <a href="#" class="dropdown-item">
                    <!--begin::Message-->
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                        <img
                            src="{{ url('assets/img/user1-128x128.jpg') }}"
                            alt="User Avatar"
                            class="img-size-50 rounded-circle me-3"
                        />
                        </div>
                        <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-end fs-7 text-danger"
                            ><i class="bi bi-star-fill"></i
                            ></span>
                        </h3>
                        <p class="fs-7">Call me whenever you can...</p>
                        <p class="fs-7 text-secondary">
                            <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                        </div>
                    </div>
                    <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <!--begin::Message-->
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                        <img
                            src="../assets/img/user8-128x128.jpg"
                            alt="User Avatar"
                            class="img-size-50 rounded-circle me-3"
                        />
                        </div>
                        <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-end fs-7 text-secondary">
                            <i class="bi bi-star-fill"></i>
                            </span>
                        </h3>
                        <p class="fs-7">I got your message bro</p>
                        <p class="fs-7 text-secondary">
                            <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                        </div>
                    </div>
                    <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <!--begin::Message-->
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                        <img
                            src="../assets/img/user3-128x128.jpg"
                            alt="User Avatar"
                            class="img-size-50 rounded-circle me-3"
                        />
                        </div>
                        <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-end fs-7 text-warning">
                            <i class="bi bi-star-fill"></i>
                            </span>
                        </h3>
                        <p class="fs-7">The subject goes here</p>
                        <p class="fs-7 text-secondary">
                            <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                        </p>
                        </div>
                    </div>
                    <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
                </li>
                <!--end::Messages Dropdown Menu-->

                <!--begin::Notifications Dropdown Menu-->
                <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-bell-fill"></i>
                    <span class="navbar-badge badge text-bg-warning">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="bi bi-envelope me-2"></i> 4 new messages
                    <span class="float-end text-secondary fs-7">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="bi bi-people-fill me-2"></i> 8 friend requests
                    <span class="float-end text-secondary fs-7">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                    <span class="float-end text-secondary fs-7">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
                </div>
                </li>
                <!--end::Notifications Dropdown Menu-->

                <!--begin::Fullscreen Toggle-->
                <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                </a>
                </li>
                <!--end::Fullscreen Toggle-->

                <!--begin::User Menu Dropdown-->
                <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img
                    src="../assets/img/user2-160x160.jpg"
                    class="user-image rounded-circle shadow"
                    alt="User Image"
                    />
                    <span class="d-none d-md-inline">Felicia Yeow</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!--begin::User Image-->
                    <li class="user-header text-bg-primary">
                    <img
                        src="../assets/img/user2-160x160.jpg"
                        class="rounded-circle shadow"
                        alt="User Image"
                    />
                    <p>
                        Felicia Yeow - Web Developer
                        <small>Member since Nov. 2023</small>
                    </p>
                    </li>
                    <!--end::User Image-->
                    <!--begin::Menu Body-->
                    <li class="user-body">
                    <!--begin::Row-->
                    <form method="POST" action="{{ route('logout') }}" class="float-end">
                        @csrf

                        <a href="{{ route('logout') }}"
                        class="btn btn-primary btn-flat"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                            Log Out
                        </a>
                    </form>
                    <!--end::Row-->
                    </li>
                    <!--end::Menu Body-->
                    <!--begin::Menu Footer-->
                    <!--end::Menu Footer-->
                </ul>
                </li>
                <!--end::User Menu Dropdown-->
            </ul>
            <!--end::End Navbar Links-->
            </div>
            <!--end::Container-->
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
            <!--begin::Brand Link-->
            <a href="../index.html" class="brand-link">
                <!--begin::Brand Image-->
                <img
                src="{{ url('assets/img/AdminLTELogo.png') }}"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"
                />
                <!--end::Brand Image-->
                <!--begin::Brand Text-->
                <span class="brand-text fw-light">AdminLTE 4</span>
                <!--end::Brand Text-->
            </a>
            <!--end::Brand Link-->
            </div>
            <!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
            <nav class="mt-2">
                <!--begin::Sidebar Menu-->
                <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-speedometer"></i>
                            <p>
                                Dashboard
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../index.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../index2.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../index3.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v3</p>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="nav-icon bi bi-speedometer"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('periode.index') }}" class="nav-link">
                            <i class="nav-icon bi bi-php artisan route:list"></i>
                            <p>Periode</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('fakultas.index') }}" class="nav-link">
                            <i class="nav-icon bi bi-bank"></i>
                            <p>Fakultas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('prodi.index') }}" class="nav-link">
                            <i class="nav-icon bi bi-building"></i>
                            <p>Program Studi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('mahasiswa.index') }}" class="nav-link">
                            <i class="nav-icon bi bi-people"></i>
                            <p>Mahasiswa</p>
                        </a>
                    </li>
                </ul>
            <!--end::Sidebar Menu-->
            </nav>
            </div>
            <!--end::Sidebar Wrapper-->
        </aside>
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">@yield('content-title')</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Unfixed Layout</li>
                    </ol>
                </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <h1>@yield('title')</h1>
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools">
                        <button
                            type="button"
                            class="btn btn-tool"
                            data-lte-toggle="card-collapse"
                            title="Collapse"
                        >
                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <button
                            type="button"
                            class="btn btn-tool"
                            data-lte-toggle="card-remove"
                            title="Remove"
                        >
                            <i class="bi bi-x-lg"></i>
                        </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @yield('content')
                        </div>
                    <!-- /.card-body -->
                    <div class="card-footer">Footer</div>
                    <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
                </div>
                <!--end::Row-->
            </div>
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        <footer class="app-footer">
            <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">Anything you want</div>
            <!--end::To the end-->
            <!--begin::Copyright-->
            <strong>
            Copyright &copy; 2014-2025&nbsp;
            <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer>
        <!--end::Footer-->
        </div>
        <!--end::App Wrapper-->
        <!--begin::Script-->
        <!--begin::Third Party Plugin(OverlayScrollbars)-->
        <script
        src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
        crossorigin="anonymous"
        ></script>
        <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
        <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        crossorigin="anonymous"
        ></script>
        <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        crossorigin="anonymous"
        ></script>
        <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
        <script src="{{ asset('js/adminlte.js') }}"></script>
        <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
        <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

            // Disable OverlayScrollbars on mobile devices to prevent touch interference
            const isMobile = window.innerWidth <= 992;

            if (
            sidebarWrapper &&
            OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
            !isMobile
            ) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                theme: Default.scrollbarTheme,
                autoHide: Default.scrollbarAutoHide,
                clickScroll: Default.scrollbarClickScroll,
                },
            });
            }
        });
        </script>
        <!--end::OverlayScrollbars Configure-->
        <!--end::Script-->
    <script src="https://code.jquery.com/jquery-4.0.0.slim.js" integrity="sha256-M+GjhMBfXikM1izMplICCTscIj5hzPCp6uDzaypxtgg=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var nama = $(this).data("nama");
            event.preventDefault();
            swal({
                    title: `Apakah Anda yakin ingin menghapus data ${nama} ini?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
    </body>
    <!--end::Body-->
</html>
