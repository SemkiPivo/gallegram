<?php
use App\Application\Views\View;

View::component('header', ["title" => "An error has occurred"]);
?>
<div class="container">
    <div class="row mt-5">
        <h1>
            <span class="badge text-bg-danger">Error code: <?=$code?></span>
            <p><?=$message?></p>
        </h1>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">String trace</h5>
            <p class="card-text"><pre>
                <?=$trace?>
            </pre> </p>
        </div>
    </div>
</div>
<?php
include __DIR__ . "/../components/footer.view.php";
?>