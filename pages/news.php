<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="/assets/css/news.css">
    <link rel="icon" href="/assets/images/vector.png" type="image/x-icon">
</head>
<body>
    <?php include 'include/header.php'; ?>
    <main> 
        <?php  include_once "../php/controllers/NewsController.php"; ?>
       <?php  
            $newsController = new NewsController($pdo);
            $news = $newsController->getNewsItem();
       ?>
       <p class="location" > 
            <a class="home" id="home-head">Главная</a>
            / 
            <span id="text-of-news"><?= $news['title'] ?></span>
        </p>
        <h1 id="news-name"><?= $news['title'] ?></h1>
         <span class="newsDate"><?= date('d.m.Y', strtotime($news['date'])) ?></span>
        <div class="news">
            <div class="news-part">
                    <h2><?= $news['announce'] ?></h2>
                    <div class="content"><?= $news['content'] ?></div>
                </div>
            <div class="news-img">
                <img class = "news-img" src="/assets/images/<?= $news['image'] ?>" alt="Последняя новость">
            </div>
        </div>
        <button class="home" id="button-returnToHome">&#8592 назад к новостям</button>
        
    </main>
    <?php include 'include/footer.php'; ?>
    <script src="../assets/js/news.js"></script>
</body>
</html>