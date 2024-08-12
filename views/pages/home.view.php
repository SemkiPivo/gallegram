<?php
use App\Application\Views\View;

View::component('header', ["title" => $title]);
?>

<div class="container">
        <div class="row mt-5">
            <h1>Welcome to
                <span class="badge text-bg-secondary">Home Page</span>
<!--                <span class="badge text-bg-secondary">--><?php //= $title ?><!--</span>-->
            </h1>
        </div>
    </div>


<?php
include __DIR__ . "/../components/footer.view.php";
?>