$(window).scroll(function () {
  if ($(this).scrollTop() > $(this).height()) {
    $('.top').addClass('active');
  } else {
    $('.top').removeClass('active');
  }
});

$('.top').click(function () {
  $('html, body').stop().animate({scrollTop: 0}, 'slow', 'swing');
});

// $(window).on('load', function () {
//   $('.preloader').delay(200).fadeOut('slow');
// });

$(window).on('load', function () {
  $('.preloader').fadeOut('fast');
});

$(document).ready(function () {
  $('.main-nav__hamb--up, .main-nav__hamb--down').click(function () {
    $('.main-nav__item:not(.main-nav__item--logo)').slideToggle();
  });
});

$(document).ready(function () {
  $('.parent-container').magnificPopup({
    delegate: '.photo__item > a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery: {enabled: true},
    image: {
      cursor: 'mfp-zoom-out-cur',
    },
  });
  // $('.mfp-content .mfp-figure figure').append('.photo__item-caption');
});

$(document).ready(function () {
  $("#share").jsSocials({
    shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "pocket", "vkontakte", "line", "email"]
  });
});

$(document).ready(function () {
  $("#country").countrySelect();
});

$(document).ready(function () {
  $('.count__wrapper').each(function () {
    var arrow = $(this);
    arrow.find('a.count__arrow-up').click(function () {
      var data = arrow.find('input').val();
      arrow.find('input').val(parseInt(data) + 1);
      return false
    });
    arrow.find('a.count__arrow-down').click(function () {
      var data = arrow.find('input').val();
      if (data > 1) {
        arrow.find('input').val(parseInt(data) - 1);
      }
      return false;
    });
    arrow.keydown(function (event) {
      if ((event.keyCode > 57 || event.keyCode < 49) && (event.keyCode < 35 || event.keyCode > 39) && event.keyCode != 8 && event.keyCode != 46)
        return false;
    });
  });
});


$(document).ready(function (e) {

  $("#form-send").on('submit', (function (e) {
      e.preventDefault();

      // var ajaxData = new FormData();
      // $.each($(".email_attachment"), function(i, obj) {
      //   $.each(obj.files,function(i,file){
      //     ajaxData.append('photo['+i+']', file);
      //   });
      // });

      var checkboxes = [];
      $('input[name="visited_ch_group[]"]').each(function () {
        if ($(this).is(":checked")) {
          checkboxes.push($(this).val());
        }
      });
      checkboxes = checkboxes.join(", ").toString();

      $("#form-send__status").hide();
      // $('#send-message').hide();
      $('#form-send__loader').show();
        $.ajax({
          url: "php/form.php",
          type: "POST",
          dataType: 'json',
          cache: false,
          // contentType: false,
          // processData: false,
          data: {
            // "photos" : ajaxData,
            "name": $('input[name="sender_name"]').val(),
            "surname": $('input[name="sender_surname"]').val(),
            "patronymic": $('input[name="sender_patronymic"]').val(),
            "country": $('input[name="sender_country"]').val(),
            "count": $('input[name="sender_count"]').val(),
            "email": $('input[name="sender_email"]').val(),
            "phone": $('input[name="sender_phone"]').val(),
            "message": $('textarea[name="sender_msg"]').val(),
            "visited": checkboxes,
            "assessment": $('input[name="assessment_r_group"]:checked').val(),
            "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
          },
          success: function (response) {
            $("#form-send__status").fadeIn();
            $('#form-send__loader').hide();
            if (response.type == "error") {
              // $('#send-message').show();
              $("#form-send__status").attr("class", "form-send__error");
            } else if (response.type == "message") {
              // $('#send-message').hide();
              $("#form-send__status").attr("class", "form-send__success");
            }
            $("#form-send__status").html(response.text);
          },
          error: function () {
          }
        });
    }
  ));
});
