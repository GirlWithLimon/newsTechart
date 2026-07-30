<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <?php include 'include/header.php'; ?>
    <main> 
        <?php include_once "php/database/connect.php"; ?>
        <div class="lastnews">
            <img class = "lastnews-img" src="/assets/images/2d5cd7667363c7f7351d1139d489d61b.jpg" alt="Последняя новость">
            <div class="lastnews-info">
                <h1 id="lastnews-name">Название последней новости</h1>
                <p id="lastnews-info">Последняя новость</p>
            </div>
        </div>
        <div class="news">
             <div>
                <h1>Название последней новости</h1>
                <p >Последняя новость</p>
            </div>
             <div>
                <h1>Название последней новости</h1>
                <p >Последняя новость</p>
            </div>
             <div>
                <h1>Название последней новости</h1>
                <p >Последняя новость</p>
            </div>
        </div>
    </main>
    <?php include 'include/footer.php'; ?>
</body>
</html>