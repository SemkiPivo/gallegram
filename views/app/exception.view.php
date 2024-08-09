<?php
include __DIR__ . "/../components/header.php";
?>
<div class="container">
    <div class="row mt-5">
        <h1>
            <span class="badge text-bg-warning">Error code: <?=$code?></span>
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
include __DIR__ . "/../components/footer.php";
?>