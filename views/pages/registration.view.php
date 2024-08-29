<?php
use App\Application\Views\View;
use App\Application\Alerts\Error;
ob_start();
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
                    <input type="text" class="form-control <?=Error::has('name') ? 'is-invalid' : '' ?>" id="name" name="name">
                    <div id="validationName" class="invalid-feedback">
                        <?=Error::get('name')?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control <?=Error::has('email') ? 'is-invalid' : '' ?>" id="email" name="email" aria-describedby="emailHelp">
                    <div id="validationEmail" class="invalid-feedback">
                        <?=Error::get('email')?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control <?=Error::has('password') ? 'is-invalid' : '' ?>" id="password" name="password">
                    <div id="validationPassword" class="invalid-feedback"><?=Error::get('password')?></div>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Password confirmation</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                <div class="mx-auto" style="width: 10rem">
                    <button type="submit" class="btn btn-secondary px-5 mt-4 mb-3">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    let password = document.getElementById('password');
    let passwordConfirmation = document.getElementById('password_confirmation');
    if (password.classList.contains('is-invalid')){
        passwordConfirmation.classList.add('is-invalid')
    }
</script>

<?php
ob_end_flush();
include __DIR__ . "/../components/footer.view.php";
?>