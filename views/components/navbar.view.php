<?php

use App\Application\Config\Config;
use App\Application\Views\View;
?>

<nav class="navbar navbar-expand-lg mb-1" style="background-color: white">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="../../icon.ico" alt="icon" width="30" height="30"></a>
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
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/profile">Profile</a>
                </li>
            </ul>
            <div class="mb-md-3 mb-lg-0 d-md-none d-lg-flex">
                <?php
                View::component('user-greeting');
                View::component('auth');
                ?>
            </div>
        </div>
    </div>
</nav>
