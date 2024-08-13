<?php
use App\Application\Views\View;

View::component('header', ["title" => $title]);
?>

<div class="mx-5">
    <div class="my-3">
        <div class="row">
            <h1>
                <span class="badge rounded-pill text-bg-success">
                    Login Page
                </span>
            </h1>
        </div>
    </div>

    <form action="/login" method="post" class="form">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="test@test.com">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-outline-success px-5 me-2">Login</button>
        or
        <a class="btn btn-outline-success px-5 ms-2" href="/registration">Register</a>
    </form>
</div>


<?php
include __DIR__ . "/../components/footer.view.php";
?>