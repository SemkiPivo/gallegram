<?php
use App\Application\Views\View;
?>

<nav class="navbar navbar-expand-lg" style="background-color: white">
    <div class="container-fluid">
        <a class="navbar-brand me-md-auto" href="/home">PHP Mini Framework</a>
        <div class="mx-2 d-lg-none d-flex">
            <?php
                View::component('user-greeting');
                View::component('auth');
            ?>
        </div>
<!--        <a class="navbar-brand" href="/php-framework/home">PHP Mini Framework</a>-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts">Contacts</a>
                </li>
            </ul>
            <div class="mb-md-3 mb-lg-0 d-md-none d-lg-flex">
                <?php
                View::component('user-greeting');
                View::component('auth');
                ?>
            </div>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
