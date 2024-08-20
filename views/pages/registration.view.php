<?php
use App\Application\Views\View;

View::component('header', ["title" => $title]);
?>

<div class="mx-5 my-5">
    <div class="card mx-auto" style="width: 35rem;">
        <div class="card-body">
            <div class="row my-3 mx-auto" style="width: 15rem;">
                <h1>
                    <span class="badge rounded-pill text-bg-secondary">
                        Registration
                    </span>
                </h1>
            </div>
            <form action="/registration" method="post" class="form">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="Test" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="test@test.com" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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
                    <button type="submit" class="btn btn-secondary px-5">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>





<?php
include __DIR__ . "/../components/footer.view.php";
?>