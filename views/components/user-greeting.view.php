<?php
use App\Application\Auth\Auth;
?>

<div class="align-content-center me-2">
    <?php
        if (Auth::check()){
            $userName = Auth::user()->getName();
            $userEmail = Auth::user()->getEmail();
            echo $userName ? "Welcome, $userName" : "Welcome, $userEmail";
        }
    ?>
</div>