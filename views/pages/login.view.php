<?php

use App\Application\Alerts\Alert;
use App\Application\Views\View;

View::component('header', ["title" => 'Login']);
?>

<?php if(Alert::successMessage()){?>
    <div class="alert alert-success" role="alert">
        <?=Alert::successMessage(true)?>
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
            <form action="/login" method="post" class="form mx-auto" style="width: 30rem">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <?php if (isset($errors['email'])): ?>
                        <div id="emailError" class="ms-1 form-text text-danger"><?= $errors['email'] ?></div>
                    <?php endif; ?>
                    <?php if (isset($errors['database'])): ?>
                        <div id="databaseError" class="ms-1 form-text text-danger"><?= $errors['database'] ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <?php if (isset($errors['password'])): ?>
                        <div id="passwordError" class="ms-1 form-text text-danger"><?= $errors['password'] ?></div>
                    <?php endif; ?>
                </div>
                <div class="mx-auto" style="width: 10rem">
                    <button type="submit" class="btn btn-success px-5 mt-4 mb-3">Sign In</button>
                </div>

            </form>
        </div>
    </div>
</div>


<?php
include __DIR__ . "/../components/footer.view.php";
?>