<?php

use App\Application\Alerts\Alert;
use App\Application\Views\View;
use App\Application\Alerts\Error;


View::component('header', ["title" => 'Login']);
?>

<?php if(Alert::successMessage()){?>
    <div class="alert alert-success" role="alert">
        <?=Alert::successMessage(true)?>
    </div>
<?php }?>
<?php if(Alert::dangerMessage()){?>
    <div class="alert alert-danger" role="alert">
        <?=Alert::dangerMessage(true)?>
    </div>
<?php }?>

<div>
    <div class="card mx-auto" style="width: 40rem;">
        <div class="card-body">
            <div class="row my-3 mx-auto" style="width: 10rem;">
                <h1>
                <span class="badge rounded-pill text-bg-success">
                    Login
                </span>
                </h1>
            </div>
            <form action="/login" method="post" class="form mx-auto col justify-content-center" style="width: 30rem">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" class="form-control <?=Error::has('email') ? 'is-invalid' : '' ?>" id="email" name="email" aria-describedby="emailHelp">
                    <div id="validationEmail" class="invalid-feedback">
                        <?=Error::get('email')?>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control <?=Error::has('password') ? 'is-invalid' : '' ?>" id="password" name="password">
                    <div id="validationPassword" class="invalid-feedback"><?=Error::get('password')?></div>
                </div>
                <div class="mx-auto row" style="width: 15rem">
                    <button type="submit" class="btn btn-success px-5 mt-4 mb-3">Sign In</button>
                    <p class="mt-2 text-center text-secondary">Don't have an account?</p>
                    <a href="/registration" class="btn btn-outline-secondary mb-3">Sign up</a>
                </div>

            </form>
        </div>
    </div>
</div>


<?php
include __DIR__ . "/../components/footer.view.php";
?>