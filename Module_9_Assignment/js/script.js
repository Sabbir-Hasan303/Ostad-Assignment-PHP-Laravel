let header = document.querySelector("header");

window.addEventListener("scroll", () => {
    header.classList.toggle("shadow", window.scrollY > 0)
})

$(document).ready(function () {

    $(".filter-item").click(function () {
        var value = $(this).attr('data-filter');

        if (value == "all") {
            $('.post-box').show('1000');
        }
        else {
            $(".post-box").not('.' + value).hide('3000');
            $('.post-box').filter('.' + value).show('3000');

        }
    });

    if ($(".filter-item").removeClass("active-filter")) {
        $(this).removeClass("active-filter");
    }
    $(this).addClass("active-filter");

});

function myFunction() {
    $(document).ready(function () {

        // Search blog posts
        $('#search-btn').on('click', function () {
            var query = $('#search-input').val().toLowerCase();
            $('.blog-post').each(function () {
                var title = $(this).find('h3').text().toLowerCase();
                var excerpt = $(this).find('p').text().toLowerCase();
                if (title.indexOf(query) !== -1 || excerpt.indexOf(query) !== -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

        // Filter blog posts by category
        $('.category-link').on('click', function (e) {
            e.preventDefault();
            var category = $(this).text().toLowerCase();
            $('.blog-post').each(function () {
                var categories = $(this).data('categories').split(',').map(function (item) {
                    return item.trim().toLowerCase();
                });
                if (categories.indexOf(category) !== -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

    });
}

function showAlert() {
    alert("Thank you for contacting us!");
}