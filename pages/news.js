document.querySelectorAll('.home').forEach (function(item) {
        item.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            let page = null
            if (localStorage.getItem('page')) {
             page = localStorage.getItem('page')
            }
            window.location.href = 'main.php'+"?page=" + page;
        });
});