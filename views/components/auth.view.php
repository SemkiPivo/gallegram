<?php
use App\Application\Auth\Auth;

if (!Auth::check()){
?>

    <div class="d-flex me-2">
        <div class="btn btn-success ms-lg-2 ms-lg-0">
            <a class="nav-link" href="/login">Login</a>
        </div>
        <div class="btn btn-warning ms-2">
            <a class="nav-link" href="/registration">Registration</a>
        </div>
    </div>

<?php
} else {
?>

    <div class="d-flex me-2">
        <form action="/logout" method="POST">
            <button class="btn btn-outline-danger ms-lg-2" type="submit">
                Logout
            </button>
        </form>
    </div>
<?php
}
?>
