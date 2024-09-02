<?php
use App\Application\Auth\Auth;
use App\Application\Views\View;

View::component('header', ["title" => $title]);
$user = Auth::user();
?>

<div class="album my-3">
    <div class="container">

        <div class="row profile-header">
            <div class="col-4 profile-avatar">
                <div class="square">
                    <img src="../../storage/images/avatar.jpg" alt="avatar" class="bd-placeholder-img rounded-circle">
                </div>
            </div>
            <div class="col-8 profile-info">
                <div class="ms-4">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <h3><?= $user->getName() ?></h3>
                        </div>
                        <div class="col-auto me-2">
                            <a href="#" class="btn btn-outline-secondary">Edit</a>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <p class="text-secondary"><?= $user->getEmail() ?></p>
                    </div>
                    <div>
                        <p>*description*</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-2 mt-3">
            <div class="col">
                <div class="card shadow-sm square">
                    <img src="../../storage/images/1.jpg" alt="" class="bd-placeholder-img rounded">
<!--                    <svg class="bd-placeholder-img rounded" width="100%" height="192" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm square">
                    <img src="../../storage/images/2.jpg" alt="" class="bd-placeholder-img rounded">
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm square">
                    <img src="../../storage/images/3.jpg" alt="" class="bd-placeholder-img rounded">
                </div>
            </div>
        </div>
    </div>
</div>