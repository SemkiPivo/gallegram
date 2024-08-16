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
</div>
<?php
View::component('footer');
?>
