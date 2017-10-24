
      $(window).load(function () {
        $(".navigation > a").click(function() {
          if (!$(this).hasClass("active")) {
            $(".navigation").unbind('mouseleave');
            $(".navigation .second_level").removeClass("animated fadeInDown").hide();
            var el = $(this);
            el.addClass("hover");
            $(".navigation > a.active").fadeOut("fast", function() {
              var prev = $(this)
              prev.removeClass('active');
              container_pos = $(".navigation").offset()
              button_pos = el.offset()
              el.animate({ top: container_pos.top - button_pos.top }, 500, function() {
                el.addClass("active").removeClass("hover").css("top", 0);
                if (el.attr("href").length > 1 && el.attr("href") != "#") {
                  $(".navigation > a:not(.active)").removeClass("fadeInLeft animated").hide();
                  $(el.attr("href")).addClass("fadeInDown animated").show();
                } else {
                  prev.addClass("fadeInLeft animated").fadeIn("fast");
                }
              });
            });
          }

        });

        $(".navigation .back").hover(
          function () {
            var el = $(this)
            $(".navigation .second_level").removeClass("animated fadeInDown").hide();
            $(".navigation > a:not(.active)").addClass("fadeInLeft animated").show()
            $(".navigation").hover(function() {}, function() {
              $(this).unbind('mouseleave');
              $(".navigation > a:visible:not(.active)").hide().removeClass("fadeInLeft animated");
              el.closest(".second_level").addClass("animated fadeInDown").show();
            });
          });
      });