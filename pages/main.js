document.querySelectorAll('.news-item').forEach (function(item) {
        item.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            localStorage.setItem('page', page);
            window.location.href = 'news.php'+"?id=" + this.getAttribute('data-id');
        });
});