$(document).ready(function () {

    $.ajax({
        url: 'http://localhost/TEP/TEP-CMS/wp-json/wp/v2/posts',
        type: 'GET',
        success: function (data) {
            console.log(data);

            $.each(data, function (index, element) {
                var htmlContent = '<div class="portfolio-item"><div class="u-BoxShadow100"><div class="Blurb">'+
                    '<a href="#"><img class="img-responsive" src="'+element.featured_thumbnail_url+'" alt="featured_image"></a>'+
                    '<div class="u-Padding30 text-center">'+
                    '<h4 class="text-uppercase u-MarginTop10 u-MarginBottom10 u-Weight700 u-LineHeight1-5"><a class="Blurb__hoverText link-normal" href="#">'+element.title.rendered+'</a></h4>'+
                    '<p class="small u-MarginBottom25"><a class="btn-go" href="#">'+element.post_author+'</a> | <a class="btn-go" href="#">'+element.date+'</a></p>'+
                    '<p class="u-LineHeight2">'+element.excerpt.rendered+'</p>'+
                    '<p class="u-MarginTop35 u-MarginBottom0">'+
                    '<a class="btn-go text-uppercase small text-muted" href="#" role="button">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>'+
                    '</p></div></div></div></div>';

                $('.js-Portfolio').append(htmlContent);
            });
        }
    });
});