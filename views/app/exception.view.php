<?php
use App\Application\Views\View;

View::component('header', ["title" => "An error has occurred"]);
if ($code )
?>
<div class="container">
    <div class="row mt-5">
        <h1>
            <span class="badge text-bg-danger mb-2">Error code: <?=$code?></span>
            <p><?=$message?></p>
        </h1>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Stack trace</h5>
            <p class="card-text"><pre>
                <?=$trace?>
            </pre> </p>
        </div>
    </div>
</div>
<?php
include __DIR__ . "/../components/footer.view.php";
?>