<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="icon" href="/assets/images/vector.png" type="image/x-icon">
</head>
<body>
    <?php include 'include/header.php'; ?>
    <main> 
        <?php  include_once "../php/controllers/NewsController.php"; ?>
       <?php  
            $newsController = new NewsController($pdo);
            $news = $newsController->getNewsOnPage();
            $lastNews = $newsController->getLastNews();
       ?>
   
        <div class="lastnews">
            <img class = "lastnews-img" src="/assets/images/<?= $lastNews['image'] ?>" alt="Последняя новость">
           <div class="lastnews-textblock">
             <div class="lastnews-info">
                <h1 id="lastnews-name"><?= $lastNews['title'] ?></h1>
                <div id="lastnews-info"><?= $lastNews['announce'] ?></div>
            </div>
           </div>
          
        </div>
        <div class="news">
            <h1 class="newsHead">Новости</h1>
            <div class="allNews">
                <?php foreach ($news as $newsItem):?>
                <div class="news-item" data-id="<?= $newsItem['id'] ?>">
                    <span class="newsDate"><?= date('d.m.Y', strtotime($newsItem['date'])) ?></span>
                    <h1 class="newsTitle"><?= $newsItem['title'] ?></h1>
                    <div class="announce"><?= $newsItem['announce'] ?></div>
                    <button class="button-newsInfo">подробнее &#8594</button>
                </div>
                <?php endforeach;?>
            </div>
        </div>
         <?php include 'include/pagination.php'; ?>
    </main>
    <?php include 'include/footer.php'; ?>
    <script>
        var page = <?php echo  $newsController->getPageNumber(); ?>;
    </script>
    <script src="main.js"></script>
</body>
</html>