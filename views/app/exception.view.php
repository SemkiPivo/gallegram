<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Error has occurred</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
</body>
</html>