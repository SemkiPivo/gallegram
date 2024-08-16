<?php
use App\Application\Auth\Auth;
?>

<div class="align-content-center me-3">
    <?php
        if (Auth::check()){
            $userName = Auth::user()->getName();
            echo "Welcome, $userName";
        }
    ?>
</div>