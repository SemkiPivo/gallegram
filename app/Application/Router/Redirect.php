<?php

namespace App\Application\Router;

class Redirect implements RedirectInterface
{

    public static function to(string $route): void
    {
        header("Location: $route");
//        echo "<script>window.location.href='$route'</script>";
        die();
    }
}