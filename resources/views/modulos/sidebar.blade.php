<div class="container-fluid">
    <div class="row">
        <div class="d-flex flex-column justify-content-between col-2 bg-dark min-vh-100">
            <div class="mt-4">
                <a class="text-white d-none d-sm-inline text-decoration-none d-flex align-item-center ms-4"
                    role="button">
                    <span class="fs-5"></span>
                </a>
                <hr class="text-white d-none d-sm-block" />
                <ul class="nav nav-pills flex-column mt-4 mt-sm-0" id="menu">
                    <li class="nav-item my-1 disabled">
                        <a href="#sidemenu0" data-bs-toggle="collapse"
                            class="nav-link text-white text-center text-sm-star" aria-current="page">
                            <i class="bi bi-star-fill"></i>
                            <span class="ms-2 d-none d-sm-inline">Getting Stated</span>
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="nav collapse collapse-horizontal ms-1 flex-column" id="sidemenu0"
                            data-bs-parent="#menu">
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="{{ url('/introduction') }}"
                                    aria-current="page">Introduction</a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="{{ url('/content') }}">Content</a>
                        </ul>
                    </li>

                    <br>

                    <li class="nav-item my-1 disabled">
                        <a href="#sidemenu1" data-bs-toggle="collapse"
                            class="nav-link text-white text-center text-sm-star" aria-current="page">
                            <i class="bi bi-pc-display-horizontal"></i>
                            <span class="ms-2 d-none d-sm-inline">FrontEnd</span>
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="nav collapse collapse-horizontal ms-1 flex-column" id="sidemenu1"
                            data-bs-parent="#menu">
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="#" aria-current="page">JavaScrip</a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="#">HTML</a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="#">CSS</a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="#">Bootstrap</a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="#">React</a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="#">VUE</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item my-1 disabled">
                        <a href="#sidemenu2" data-bs-toggle="collapse"
                            class="nav-link text-white text-center text-sm-star" aria-current="page">
                            <i class="bi bi-journal-code"></i>
                            <span class="ms-2 d-none d-sm-inline">BackEnd</span>
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="nav collapse collapse-horizontal ms-1 flex-column" id="sidemenu2"
                            data-bs-parent="#menu">
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="#" aria-current="page">PHP</a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="#">laravel</a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="#">Python</a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="#">Node JS</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item my-1 disabled">
                        <a href="#sidemenu3" data-bs-toggle="collapse"
                            class="nav-link text-white text-center text-sm-star" aria-current="page">
                            <i class="bi bi-database-down"></i>
                            <span class="ms-2 d-none d-sm-inline">Data Base</span>
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="nav collapse collapse-horizontal ms-1 flex-column" id="sidemenu3"
                            data-bs-parent="#menu">
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="{{ url('/mysql') }}" aria-current="page">MySQL</a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="nav-link text-white" href="{{ url('/mongodb') }}">Mongo DB</a>
                            </li>
                            <li class="nav-item my-1 pb-5">
                                <a class="nav-link text-white" href="#"></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-between col-9 ">
            @yield('contain')
        </div>
    </div>
</div>
</div>

@yield('script')
