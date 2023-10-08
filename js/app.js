var resp_bot_nav_wrap = document.querySelector('.resp_bot_nav_wrap')
var nav = document.querySelector('.bot_nav_wrap nav')
resp_bot_nav_wrap.addEventListener('click', function(e){
	if (nav.style.display == 'block') {
		nav.style.display = 'none'
	}
	else {
		nav.style.display = 'block'
	}
})

var revapi1;

if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider11"] = {
  once:
    RS_MODULES.modules["revslider11"] !== undefined
      ? RS_MODULES.modules["revslider11"].once
      : undefined,
  init: function () {
    window.revapi1 =
      window.revapi1 === undefined ||
      window.revapi1 === null ||
      window.revapi1.length === 0
        ? document.getElementById("rev_slider_1_1")
        : window.revapi1;
    if (
      window.revapi1 === null ||
      window.revapi1 === undefined ||
      window.revapi1.length == 0
    ) {
      window.revapi1initTry =
        window.revapi1initTry === undefined ? 0 : window.revapi1initTry + 1;
      if (window.revapi1initTry < 20)
        requestAnimationFrame(function () {
          RS_MODULES.modules["revslider11"].init();
        });
      return;
    }
    window.revapi1 = jQuery(window.revapi1);
    if (window.revapi1.revolution == undefined) {
      revslider_showDoubleJqueryError("rev_slider_1_1");
      return;
    }
    revapi1.revolutionInit({
      revapi: "revapi1",
      visibilityLevels: "1240,1024,778,480",
      gridwidth: "1615,1160,960,480",
      gridheight: "620,620,578,480",
      lazyType: "smart",
      spinner: "spinner0",
      perspectiveType: "local",
      responsiveLevels: "1240,1024,778,480",
      progressBar: { disableProgressBar: true },
      navigation: {
        mouseScrollNavigation: false,
        onHoverStop: false,
        touch: {
          touchenabled: true,
          touchOnDesktop: true,
        },
        bullets: {
          enable: true,
          tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title">{{title}}</span>',
          style: "zeus",
          hide_onmobile: true,
          hide_under: 1300,
          v_offset: 30,
          space: 6,
        },
      },
      viewPort: {
        global: true,
        globalDist: "-200px",
        enable: false,
        visible_area: "20%",
      },
      fallbacks: {
        allowHTML5AutoPlayOnAndroid: true,
      },
    });
  },
}; // End of RevInitScript



jQuery(document).ready(function () {
  "use strict";

  /* Run Hover Slider */
  (function ($) {
    var hover_sliders = $(".cmsmasters_hover_slider");

    hover_sliders.each(function () {
      var slider = $(this),
        params = {};

      params.sliderBlock = "#" + slider.attr("id");

      if (slider.data("thumbWidth") !== undefined) {
        params.thumbWidth = Number(slider.data("thumbWidth"));
      }

      if (slider.data("thumbHeight") !== undefined) {
        params.thumbHeight = Number(slider.data("thumbHeight"));
      }

      if (slider.data("activeSlide") !== undefined) {
        params.activeSlide = Number(slider.data("activeSlide"));
      }

      if (slider.data("pauseTime") !== undefined) {
        params.pauseTime = Number(slider.data("pauseTime"));
      }

      if (slider.data("pauseOnHover") !== undefined) {
        params.pauseOnHover = Boolean(slider.data("pauseOnHover"));
      }

      $(params.sliderBlock).cmsmastersHoverSlider(params);
    });
  })(jQuery);

  /* Run Owl Sliders */
  cmsmasters_owl_sliders_run();

  jQuery(window).on("debouncedresize", function () {
    cmsmasters_owl_sliders_run();
  });
  
});


/* Run Owl Slider */
function cmsmasters_owl_sliders_run() {
  var owl_sliders = jQuery(".cmsmasters_owl_slider");

  owl_sliders.each(function () {
    var slider = jQuery(this),
      data = [];

    data["data_id"] = slider.attr("id");
    (data["data_items"] = slider.data("items")),
      (data["data_singleItem"] = slider.data("singleItem")),
      (data["data_autoPlay"] = slider.data("autoPlay")),
      (data["data_stopOnHover"] = slider.data("stopOnHover")),
      (data["data_rewindNav"] = slider.data("rewindNav")),
      (data["data_slideSpeed"] = slider.data("slideSpeed")),
      (data["data_paginationSpeed"] = slider.data("paginationSpeed")),
      (data["data_rewindSpeed"] = slider.data("rewindSpeed")),
      (data["data_autoHeight"] = slider.data("autoHeight")),
      (data["data_transitionStyle"] = slider.data("transitionStyle")),
      (data["data_pagination"] = slider.data("pagination")),
      (data["data_navigation"] = slider.data("navigation")),
      (data["data_navigationPrev"] = slider.data("navigationPrev")),
      (data["data_navigationNext"] = slider.data("navigationNext"));

    cmsmasters_owl_slider_run(data);
  });
}

/* Owl Slider run */
function cmsmasters_owl_slider_run(data) {
  var data_id = data["data_id"],
    container = jQuery("#" + data_id),
    data_items = false,
    data_singleItem = true,
    data_autoPlay = false,
    data_stopOnHover = true,
    data_rewindNav = true,
    data_slideSpeed = 200,
    data_paginationSpeed = 800,
    data_rewindSpeed = 1000,
    data_autoHeight =
      checker.ua.safari && checker.os.mac && !checker.ua.chrome ? false : true,
    data_transitionStyle = false,
    data_pagination = true,
    data_navigation = true,
    data_navigationPrev =
      '<span class="cmsmasters_prev_arrow"><span></span></span>',
    data_navigationNext =
      '<span class="cmsmasters_next_arrow"><span></span></span>',
    params = {};

  if (data["data_items"] !== undefined) {
    data_items = Number(data["data_items"]);
  }

  if (data["data_singleItem"] !== undefined) {
    data_singleItem = Boolean(data["data_singleItem"]);
  }

  if (data["data_autoPlay"] !== undefined) {
    data_autoPlay =
      data["data_autoPlay"] === false ? false : Number(data["data_autoPlay"]);
  }

  if (data["data_stopOnHover"] !== undefined) {
    data_stopOnHover = Boolean(data["data_stopOnHover"]);
  }

  if (data["data_rewindNav"] !== undefined) {
    data_rewindNav = Boolean(data["data_rewindNav"]);
  }

  if (data["data_slideSpeed"] !== undefined) {
    data_slideSpeed = Number(data["data_slideSpeed"]);
  }

  if (data["data_paginationSpeed"] !== undefined) {
    data_paginationSpeed = Number(data["data_paginationSpeed"]);
  }

  if (data["data_rewindSpeed"] !== undefined) {
    data_rewindSpeed = Number(data["data_rewindSpeed"]);
  }

  if (data["data_autoHeight"] !== undefined) {
    data_autoHeight = Boolean(data["data_autoHeight"]);
  }

  if (data["data_transitionStyle"] !== undefined) {
    data_transitionStyle =
      data["data_transitionStyle"] === "fade"
        ? data["data_transitionStyle"]
        : false;
  }

  if (data["data_pagination"] !== undefined) {
    data_pagination = Boolean(data["data_pagination"]);
  }

  if (data["data_navigation"] !== undefined) {
    data_navigation = Boolean(data["data_navigation"]);
  }

  if (data["data_navigationPrev"] !== undefined) {
    data_navigationPrev = data["data_navigationPrev"];
  }

  if (data["data_navigationNext"] !== undefined) {
    data_navigationNext = data["data_navigationNext"];
  }

  params = {
    singleItem: data_singleItem,
    autoPlay: data_autoPlay,
    stopOnHover: data_stopOnHover,
    rewindNav: data_rewindNav,
    slideSpeed: data_slideSpeed,
    paginationSpeed: data_paginationSpeed,
    rewindSpeed: data_rewindSpeed,
    autoHeight: data_autoHeight,
    addClassActive: true,
    transitionStyle: data_transitionStyle,
    responsiveBaseWidth: "#" + data_id,
    pagination: data_pagination,
    navigation: data_navigation,
    navigationText: [data_navigationPrev, data_navigationNext],
  };

  if (data_singleItem === false) {
    if (data_items === false) {
      var contentWrap = container.closest(".content_wrap"),
        itemsNumber = 2;

      if (contentWrap.hasClass("fullwidth")) {
        itemsNumber = 4;
      } else if (
        contentWrap.hasClass("r_sidebar") ||
        contentWrap.hasClass("l_sidebar")
      ) {
        itemsNumber = 3;
      }
    } else {
      itemsNumber = data_items;
    }

    var firstPost = container.find(".cmsmasters_owl_slider_item"),
      postMinWidth = Number(firstPost.css("minWidth").replace("px", "")),
      postDesktopWidth = postMinWidth * 5 - 1,
      postDesktopSmallWidth = postMinWidth * 4 - 1,
      postTabletWidth = postMinWidth * 3 - 1,
      postMobileWidth = postMinWidth * 2 - 1,
      postFourColumns = itemsNumber > 4 ? 4 : itemsNumber,
      postThreeColumns = itemsNumber > 3 ? 3 : itemsNumber,
      postTwoColumns = itemsNumber > 2 ? 2 : itemsNumber,
      postOneColumns = 1;

    params.items = itemsNumber;
    params.itemsDesktop = false;
    params.itemsDesktop = [postDesktopWidth, postFourColumns];
    params.itemsDesktopSmall = [postDesktopSmallWidth, postThreeColumns];
    params.itemsTablet = [postTabletWidth, postTwoColumns];
    params.itemsMobile = [postMobileWidth, postOneColumns];
  }

  container.owlCarousel(params);
}

("use strict");

/* Correct OS & Browser Check */
var ua = navigator.userAgent,
  checker = {
    os: {
      iphone: ua.match(/iPhone/),
      ipod: ua.match(/iPod/),
      ipad: ua.match(/iPad/),
      blackberry: ua.match(/BlackBerry/),
      android: ua.match(/(Android|Linux armv6l|Linux armv7l)/),
      linux: ua.match(/Linux/),
      win: ua.match(/Windows/),
      mac: ua.match(/Macintosh/),
    },
    ua: {
      ie: ua.match(/MSIE/),
      ie6: ua.match(/MSIE 6.0/),
      ie7: ua.match(/MSIE 7.0/),
      ie8: ua.match(/MSIE 8.0/),
      ie9: ua.match(/MSIE 9.0/),
      ie10: ua.match(/MSIE 10.0/),
      ie11: ua.match(/MSIE 11.0/),
      opera: ua.match(/Opera/),
      firefox: ua.match(/Firefox/),
      chrome: ua.match(/Chrome/),
      safari: ua.match(/(Safari|BlackBerry)/),
    },
  };

var search = document.querySelector('.cmsmasters_header_search_form')
document.querySelector('.mid_search_but_wrap').addEventListener('click', function(e) {
  e.preventDefault();
  search.classList.toggle('show-search')
})
document.querySelector('.cmsmasters_header_search_form_close').addEventListener('click', function(e) {
  e.preventDefault();
  search.classList.toggle('show-search')
})

function googleTranslateElementInit2() {
  new google.translate.TranslateElement(
    {
      pageLanguage: "en",
      autoDisplay: false
    },
    'google_translate_element2'
  )
}


/* <![CDATA[ */
eval(function (p, a, c, k, e, r) {
  e = function (c) {
    return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
  };
  if (!''.replace(/^/, String)) {
    while (c--) r[e(c)] = k[c] || e(c);
    k = [function (e) {
      return r[e]
    }];
    e = function () {
      return '\\w+'
    };
    c = 1
  }
  while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
  return p
}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'), 0, {}))
/* ]]> */

function translateToSpanish() {
  var userLang = navigator.language || navigator.userLanguage;

  // Check if the user is in Mexico (you can add more conditions based on your needs)
  if (userLang.toLowerCase() == 'es-mx') {
    doGTranslate('en|es')
  }
}