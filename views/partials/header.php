<?php if (isLogin()): ?>

<header class="bg-color1">
    <nav
        class="navbar navbar-expand-lg navbar-dark <?= in_array(str_replace('/', '', request()->path()), ['search']) ? 'container-fluid' : 'container' ?>">
        <a class="navbar-brand" href="/">
            <img src="images/logo.png" width="130" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/categories">
                        Browse Categories
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/search">
                        Search
                    </a>
                </li>
            </ul>

            <div class="text-center text-sm-right">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item my-auto"><button class="btn btn-md btn-outline-light border-0"><img
                                src="images/icons/flash.png" width="20px"> Try Premium</button></li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- <img id="navbar-profile-picture" src="" width="30px" height="30px"
                                class="mr-1 rounded-circle">  -->
                            <span id="navbar-profile-name"> <?= auth()->fullname  ?> </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <a class="dropdown-item" href="/profile">My Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/logout">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php else: ?>

<header class="bg-color1">
    <nav
        class="navbar navbar-expand-lg navbar-dark <?= in_array(str_replace('/', '', request()->path()), ['search']) ? 'container-fluid' : 'container' ?>">
        <a class="navbar-brand" href="/">
            <img src="images/logo.png" width="130" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/categories">
                        Browse Categories
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/search">
                        Search
                    </a>
                </li>
            </ul>

            <div class="text-center text-sm-right">
                <button class="btn btn-md btn-outline-light border-0" data-toggle="modal"
                    data-target="#modal-login">Login</button>
                <button class="btn btn-md btn-outline-light border-width2" data-toggle="modal"
                    data-target="#modal-register">Register</button>
            </div>
        </div>
    </nav>
</header>

<?php endif; ?>