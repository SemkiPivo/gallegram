<?php
use App\Application\Views\View;
use App\Application\Alerts\Error;

View::component('header', ["title" => 'Registration']);
?>

<div>
    <div class="card mx-auto" style="width: 40rem;">
        <div class="card-body">
            <div class="row my-3 mx-auto" style="width: 15rem;">
                <h1>
                    <span class="badge rounded-pill text-bg-secondary">
                        Registration
                    </span>
                </h1>
            </div>
            <form action="/registration" method="post" class="form mx-auto" style="width: 30rem">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control <?= Error::has('name') ? 'is-invalid' : '' ?>" id="name" name="name">
                    <div id="validationName" class="invalid-feedback">
                        <?= Error::get('name') ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control <?= Error::has('email') ? 'is-invalid' : '' ?>" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmed" class="form-label">Password confirmation</label>
                    <input type="password" class="form-control" id="password_confirmed" name="password_confirmed" required>
                </div>
                <div class="mx-auto" style="width: 10rem">
                    <button type="submit" class="btn btn-secondary px-5 mt-4 mb-3">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>





<?php
include __DIR__ . "/../components/footer.view.php";
?>