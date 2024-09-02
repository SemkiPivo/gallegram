<?php

use App\Application\Auth\Auth;
use App\Application\Views\View;

View::component('header', ["title" => 'Home']);
?>
    <div class="card mb-3">
        <div class="square">
            <img src="../../storage/images/1.jpg" class="card-img-top img-square" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
<?php
include __DIR__ . "/../components/footer.view.php";
?>