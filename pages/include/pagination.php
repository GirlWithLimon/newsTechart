<link rel="stylesheet" href="/assets/css/pagination.css">
<nav aria-label="Page navigation example">
    <div class="pagination-block">
        <ul class="pagination">
            <?php 
            $page = $newsController->getPageNumber();
            if ($page > 1): ?>
                <li class="page-item arrow">
                    <a class="page-link" href="?page=<?php echo ($page - 1)?>">&#8592</a>
                </li>
            <?php endif; ?>
        <?php 
            $pageCount = $newsController->getPageCount();
            for ($i = 1; $i <= $pageCount; $i++): ?>
                <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
            <?php if ($page < $pageCount): ?>
                <li class="page-item arrow">
                    <a class="page-link" href="?page=<?php echo ($page + 1)?>">&#8594</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>