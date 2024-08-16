<?php
use App\Application\Views\View;

View::component('header', ["title" => $title]);
?>

<div class="mx-5 my-3">
    <div class="card mx-auto" style="width: 35rem;">
        <div class="card-body">
            <div class="row mx-auto" style="width: 10rem;">
                <h1>
                <span class="badge rounded-pill text-bg-success">
                    Login
                </span>
                </h1>
            </div>
            <form action="/login" method="post" class="form">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="test@test.com">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-outline-success px-5">Login</button>
                    <p class="mx-3 mt-2">or</p>
                    <a class="btn btn-outline-warning px-5" href="/registration">Register</a>
                </div>

            </form>
        </div>
    </div>


</div>


<?php
include __DIR__ . "/../components/footer.view.php";
?>