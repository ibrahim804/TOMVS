jQuery(document).ready(function ($) {

    //prevent right click
    $("#media-player").on("contextmenu", function () {
        return false;
    });

    // create player
    $('#media-player').mediaelementplayer({
        features: ['playpause', 'loop', 'current', 'progress', 'duration', 'volume']
    });
});


(function () {
    $('#carousel123').carousel({interval: 2000});
    $('#carouselABC').carousel({interval: 3600});
}());

(function () {
    $('.carousel-showmanymoveone .item').each(function () {
        var itemToClone = $(this);

        for (var i = 1; i < 4; i++) {
            itemToClone = itemToClone.next();

            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }

            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-" + (i))
                    .appendTo($(this));
        }
    });
}());

//news later signup
$('#btn-newlatter').on('click', function (e) {
    e.preventDefault();

    var path = base_url + "NewslaterCtrl/subscribe";
    var newlater_email = $('#news-later-email').val();
    $.ajax({
        type: 'POST',
        url: path,
        data: {
            subsc_email: newlater_email
        },
        success: function (response) {

            if (response == "success") {
                alert("Thank You For Subscribing!");
            } else {
                 $('#sign-up-newlater').addClass('animated wobble');
               // alert(response);
               $('#newlreponce').html(response);
            }

        }
    });

});


//mode newslater

$(window).load(function () {
    setTimeout(function () {
        if (!Cookies.get('modalShow')) {
            $('#sign-up-newlater').addClass('animated bounceInUp');
            $('#sign-up-newlater').modal('show');
            Cookies.set('modalShow', true);
       }

    }, 1000);
});