<?php require_once('../connect.php');

if (isset($_POST['send'])) {
  $a = htmlspecialchars($_POST["username"]);
  $b = $_POST["password"];
  // $accn = $_POST["accn"];
  $c = $_POST["pin"];
  $myusername = stripslashes($a);
  $query = "SELECT * FROM investors JOIN users ON investors.userid = users.userid WHERE users.username='$myusername' AND users.password='$b' AND users.pin='$c' ";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $u2 = $row["username"];
      $status = $row["status"];
      if ($status == "P") {
        $u2 = $row["username"];
        $_SESSION["u2"] = $u2;
        unset($_SESSION['ilog2']);
        $_SESSION['ilog'] = 1;
        header('location:../dash/');
      } else {
        echo "<div style='color:white; background:orange; height:100px;'><h4>THIS ACCOUNT IS DEACTIVATED , PLS CONTACT BANK FOR VERIFICATION</h4><div>";
      }
    }
  } else {
    $warn = "<div class='alert alert-danger'> <i class='fa fa-close'></i> Authentication failed! some information not correct</div><br><br><br>";
    $_SESSION['logerr'] = 2;
  }
} else {
  $_SESSION['logerr'] = 2;
}


?>
       
<!DOCTYPE html>
<html lang="en-US" class="cmsmasters_html">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="../xmlrpc.html" />
<meta name='robots' content='noindex, follow' />

  <title>My Account - Royal Private Bank</title>
  <link rel="canonical" href="index.html" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="My Account - Royal Private Bank" />
  <meta property="og:url" content="index.html" />
  <meta property="og:site_name" content="Royal Private Bank" />
  <meta name="twitter:card" content="summary_large_image" />
  <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://RoyalPrivateBank.com/my-account/","url":"https://RoyalPrivateBank.com/my-account/","name":"My Account - Royal Private Bank","isPartOf":{"@id":"https://RoyalPrivateBank.com/#website"},"datePublished":"2015-11-24T10:03:09+00:00","dateModified":"2015-11-24T10:03:09+00:00","breadcrumb":{"@id":"https://RoyalPrivateBank.com/my-account/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://RoyalPrivateBank.com/my-account/"]}]},{"@type":"BreadcrumbList","@id":"https://RoyalPrivateBank.com/my-account/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://RoyalPrivateBank.com/"},{"@type":"ListItem","position":2,"name":"My Account"}]},{"@type":"WebSite","@id":"https://RoyalPrivateBank.com/#website","url":"https://RoyalPrivateBank.com/","name":"Royal Private Bank","description":"Just another WordPress site","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://RoyalPrivateBank.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"}]}</script>
  <!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='https://fonts.googleapis.com/' />
<link rel="alternate" type="application/rss+xml" title="Royal Private Bank &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Royal Private Bank &raquo; Comments Feed" href="../comments/feed/index.html" />
<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/RoyalPrivateBank.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.2"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){p.clearRect(0,0,i.width,i.height),p.fillText(e,0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(t,0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(p&&p.fillText)switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!s("\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!s("\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
  display: inline !important;
  border: none !important;
  box-shadow: none !important;
  height: 1em !important;
  width: 1em !important;
  margin: 0 0.07em !important;
  vertical-align: -0.1em !important;
  background: none !important;
  padding: 0 !important;
}
</style>
  <link rel='stylesheet' id='validate-engine-css-css' href='../wp-content/plugins/wysija-newsletters/css/validationEngine.jqueryfc84.css?ver=2.14' type='text/css' media='all' />
<link rel='stylesheet' id='layerslider-css' href='../wp-content/plugins/LayerSlider/assets/static/layerslider/css/layerslider56ef.css?ver=7.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css' href='../wp-includes/css/dist/block-library/style.min3781.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-vendors-style-css' href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style2ff6.css?ver=8.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-css' href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style2ff6.css?ver=8.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='classic-theme-styles-css' href='../wp-includes/css/classic-themes.min3781.css?ver=6.2.2' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--color-1: #505050;--wp--preset--color--color-2: #6a6a6a;--wp--preset--color--color-3: #e53b24;--wp--preset--color--color-4: #212121;--wp--preset--color--color-5: #f7f7f7;--wp--preset--color--color-6: #ffffff;--wp--preset--color--color-7: #d2d2d8;--wp--preset--color--color-8: #e53b24;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='../wp-content/plugins/contact-form-7/includes/css/stylesf2b4.css?ver=5.7.7' type='text/css' media='all' />
<link rel='stylesheet' id='cookie-law-info-css' href='../wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-publicb12b.css?ver=3.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='cookie-law-info-gdpr-css' href='../wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-gdprb12b.css?ver=3.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css' href='../wp-content/plugins/woocommerce/assets/css/select2823d.css?ver=7.0.0' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='alister-bank-theme-style-css' href='../css/main.css' type='text/css' media='screen, print' />
<link rel='stylesheet' id='alister-bank-style-css' href='../css/app.css' type='text/css' media='screen, print' />
<style id='alister-bank-style-inline-css' type='text/css'>

  .header_mid .header_mid_inner .logo_wrap {
    width : 203px;
  }

  .header_mid_inner .logo img.logo_retina {
    width : 203px;
    max-width : 203px;
  }


      .headline_color {
        background-color:#fcfcfc;
      }
      
    .headline_aligner {
      min-height:180px;
    }
    

  .header_top {
    height : 40px;
  }
  
  ul.top_line_nav > li > a {
    line-height : 37px;
  }
  
  .header_mid {
    height : 87px;
  }
  
  .header_bot {
    height : 45px;
  }
  
  #page.cmsmasters_heading_after_header #middle, 
  #page.cmsmasters_heading_under_header #middle .headline .headline_outer {
    padding-top : 87px;
  }
  
  #page.cmsmasters_heading_after_header.enable_header_top #middle, 
  #page.cmsmasters_heading_under_header.enable_header_top #middle .headline .headline_outer {
    padding-top : 127px;
  }
  
  #page.cmsmasters_heading_after_header.enable_header_bottom #middle, 
  #page.cmsmasters_heading_under_header.enable_header_bottom #middle .headline .headline_outer {
    padding-top : 132px;
  }
  
  #page.cmsmasters_heading_after_header.enable_header_top.enable_header_bottom #middle, 
  #page.cmsmasters_heading_under_header.enable_header_top.enable_header_bottom #middle .headline .headline_outer {
    padding-top : 172px;
  }
  
  @media only screen and (max-width: 1024px) {
    .header_top,
    .header_mid,
    .header_bot {
      height : auto;
    }
    
    .header_mid .header_mid_inner > div,
    .header_mid .header_mid_inner .cmsmasters_header_cart_link {
      height : 87px;
    }
    
    #page.cmsmasters_heading_after_header #middle, 
    #page.cmsmasters_heading_under_header #middle .headline .headline_outer, 
    #page.cmsmasters_heading_after_header.enable_header_top #middle, 
    #page.cmsmasters_heading_under_header.enable_header_top #middle .headline .headline_outer, 
    #page.cmsmasters_heading_after_header.enable_header_bottom #middle, 
    #page.cmsmasters_heading_under_header.enable_header_bottom #middle .headline .headline_outer, 
    #page.cmsmasters_heading_after_header.enable_header_top.enable_header_bottom #middle, 
    #page.cmsmasters_heading_under_header.enable_header_top.enable_header_bottom #middle .headline .headline_outer {
      padding-top : 0 !important;
    }
  }
  
  @media only screen and (max-width: 768px) {
    .header_mid .header_mid_inner > div, 
    .header_bot .header_bot_inner > div,
    .header_mid .header_mid_inner .cmsmasters_header_cart_link {
      height:auto;
    }
  }
  
  @media only screen and (max-width: 1024px) {
    .enable_header_centered .header_mid .header_mid_inner .cmsmasters_header_cart_link {
      height:auto;
    }
  }

</style>
<link rel='stylesheet' id='alister-bank-adaptive-css' href='../css/adaptive.css' type='text/css' media='screen, print' />
<link rel='stylesheet' id='alister-bank-retina-css' href='../css/retina.css' type='text/css' media='screen' />
<link rel='stylesheet' id='alister-bank-icons-css' href='../css/fontello.css' type='text/css' media='screen' />
<link rel='stylesheet' id='alister-bank-icons-custom-css' href='../wp-content/themes/alister-bank/theme-vars/theme-style/css/fontello-custom8a54.css?ver=1.0.0' type='text/css' media='screen' />
<link rel='stylesheet' id='animate-css' href='../wp-content/themes/alister-bank/css/animate8a54.css?ver=1.0.0' type='text/css' media='screen' />
<link rel='stylesheet' id='ilightbox-css' href='../wp-content/themes/alister-bank/css/ilightbox3601.css?ver=2.2.0' type='text/css' media='screen' />
<link rel='stylesheet' id='ilightbox-skin-dark-css' href='../wp-content/themes/alister-bank/css/ilightbox-skins/dark-skin3601.css?ver=2.2.0' type='text/css' media='screen' />
<link rel='stylesheet' id='alister-bank-fonts-schemes-css' href='../css/alister-bank.css' type='text/css' media='screen' />
<link rel='stylesheet' id='google-fonts-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='alister-bank-theme-vars-style-css' href='../wp-content/themes/alister-bank/theme-vars/theme-style/css/vars-style8a54.css?ver=1.0.0' type='text/css' media='screen, print' />
<link rel='stylesheet' id='alister-bank-gutenberg-frontend-style-css' href='../wp-content/themes/alister-bank/gutenberg/cmsmasters-framework/theme-style/css/frontend-style8a54.css?ver=1.0.0' type='text/css' media='screen' />
<link rel='stylesheet' id='alister-bank-woocommerce-style-css' href='../css/plugin-style.css' type='text/css' media='screen' />
<link rel='stylesheet' id='alister-bank-woocommerce-adaptive-css' href='../wp-content/themes/alister-bank/woocommerce/cmsmasters-framework/theme-style/css/plugin-adaptive8a54.css?ver=1.0.0' type='text/css' media='screen' />
<script type='text/javascript' src='../js/jquery.min.js' id='jquery-core-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0' id='jquery-migrate-js'></script>
<script type='text/javascript' id='layerslider-utils-js-extra'>
/* <![CDATA[ */
var LS_Meta = {"v":"7.5.0","fixGSAP":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.utils56ef.js?ver=7.5.0' id='layerslider-utils-js'></script>
<script type='text/javascript' src='../wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.kreaturamedia.jquery56ef.js?ver=7.5.0' id='layerslider-js'></script>
<script type='text/javascript' src='../wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.transitions56ef.js?ver=7.5.0' id='layerslider-transitions-js'></script>
<script type='text/javascript' id='cookie-law-info-js-extra'>
/* <![CDATA[ */
var Cli_Data = {"nn_cookie_ids":[],"cookielist":[],"non_necessary_cookies":[],"ccpaEnabled":"","ccpaRegionBased":"","ccpaBarEnabled":"","strictlyEnabled":["necessary","obligatoire"],"ccpaType":"gdpr","js_blocking":"","custom_integration":"","triggerDomRefresh":"","secure_cookies":""};
var cli_cookiebar_settings = {"animate_speed_hide":"500","animate_speed_show":"500","background":"#FFF","border":"#b1a6a6c2","border_on":"","button_1_button_colour":"#000","button_1_button_hover":"#000000","button_1_link_colour":"#fff","button_1_as_button":"1","button_1_new_win":"","button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#444","button_2_as_button":"","button_2_hidebar":"","button_3_button_colour":"#000","button_3_button_hover":"#000000","button_3_link_colour":"#fff","button_3_as_button":"1","button_3_new_win":"","button_4_button_colour":"#000","button_4_button_hover":"#000000","button_4_link_colour":"#fff","button_4_as_button":"1","button_7_button_colour":"#61a229","button_7_button_hover":"#4e8221","button_7_link_colour":"#fff","button_7_as_button":"1","button_7_new_win":"","font_family":"inherit","header_fix":"","notify_animate_hide":"1","notify_animate_show":"","notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"bottom","scroll_close":"","scroll_close_reload":"","accept_close_reload":"","reject_close_reload":"","showagain_tab":"1","showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#000","show_once_yn":"","show_once":"10000","logging_on":"","as_popup":"","popup_overlay":"1","bar_heading_text":"","cookie_bar_as":"banner","popup_showagain_position":"bottom-right","widget_position":"left"};
var log_object = {"ajax_url":"https:\/\/RoyalPrivateBank.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/cookie-law-info/legacy/public/js/cookie-law-info-publicb12b.js?ver=3.1.1' id='cookie-law-info-js'></script>
<script type='text/javascript' src='../js/rbtools.min.js' async id='tp-tools-js'></script>
<script type='text/javascript' src='../js/rs6.min.js' async id='revmin-js'></script>
<script type='text/javascript' id='zxcvbn-async-js-extra'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https:\/\/RoyalPrivateBank.com\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-includes/js/zxcvbn-async.min5152.js?ver=1.0' id='zxcvbn-async-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/debounced-resize.min8a54.js?ver=1.0.0' id='debounced-resize-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/modernizr.min8a54.js?ver=1.0.0' id='modernizr-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/respond.min8a54.js?ver=1.0.0' id='respond-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/jquery.iLightBox.min3601.js?ver=2.2.0' id='iLightBox-js'></script>
<meta name="generator" content="Powered by LayerSlider 7.5.0 - Build Heros, Sliders, and Popups. Create Animations and Beautiful, Rich Web Content as Easy as Never Before on WordPress." />
<!-- LayerSlider updates and docs at: https://layerslider.com -->
<link rel="https://api.w.org/" href="../wp-json/index.html" /><link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/7632.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.html?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 6.2.2" />
<meta name="generator" content="WooCommerce 7.0.0" />
<link rel='shortlink' href='../indexdc20.html?p=7632' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed7302.json?url=https%3A%2F%2FRoyalPrivateBank.com%2Fmy-account%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed03a4?url=https%3A%2F%2FRoyalPrivateBank.com%2Fmy-account%2F&amp;format=xml" />
  <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
  <meta name="generator" content="Powered by Slider Revolution 6.6.14 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="..//uploads/2017/09/cropped-favicon-75x75.png" sizes="32x32" />
<link rel="icon" href="..//uploads/2017/09/cropped-favicon-300x300.png" sizes="192x192" />
<link rel="apple-touch-icon" href="..//uploads/2017/09/cropped-favicon-180x180.png" />
<meta name="msapplication-TileImage" content="../..//uploads/2017/09/cropped-favicon-300x300.png" />
<script>function setREVStartSize(e){
      //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
        try {
          var pw = document.getElementById(e.c).parentNode.offsetWidth,
            newh;
          pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
          e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
          e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
          e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
          e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
          e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
          e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
          e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
          if(e.layout==="fullscreen" || e.l==="fullscreen")
            newh = Math.max(e.mh,window.RSIH);
          else{
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
            for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
            e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
            for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
                      
            var nl = new Array(e.rl.length),
              ix = 0,
              sl;
            e.tabw = e.tabhide>=pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
            e.tabh = e.tabhide>=pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
            var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
            newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
          }
          var el = document.getElementById(e.c);
          if (el!==null && el) el.style.height = newh+"px";
          el = document.getElementById(e.c+"_wrapper");
          if (el!==null && el) {
            el.style.height = newh+"px";
            el.style.display = "block";
          }
        } catch(e){
          console.log("Failure at Presize of Slider:" + e)
        }
      //});
      };</script>
</head>
<body data-rsssl=1 class="page-template-default page page-id-7632 theme-alister-bank woocommerce-account woocommerce-page woocommerce-no-js">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
<div class="cmsmasters_header_search_form">
      <span class="cmsmasters_header_search_form_close cmsmasters_theme_icon_cancel"></span><form method="get" action="https://RoyalPrivateBank.com/">
      <div class="cmsmasters_header_search_form_field">
        <input type="search" name="s" placeholder="Enter Keywords" value="" />
        <button type="submit">Search</button>
      </div>
    </form></div>
<!-- _________________________ Start Page _________________________ -->
<div id="page" class="csstransition cmsmasters_liquid fullwidth fixed_header enable_header_top enable_header_bottom cmsmasters_heading_after_header hfeed site">

<!-- _________________________ Start Main _________________________ -->
<div id="main">
  <div class="cmsmasters_dynamic_cart_wrap"><div class="cmsmasters_dynamic_cart"><a href="javascript:void(0)" class="cmsmasters_dynamic_cart_button"><span class="count_wrap cmsmasters-icon-bag-1"><span class="count cmsmasters_dynamic_cart_count">0</span></span></a><div class="widget_shopping_cart_content"></div></div></div>
<!-- _________________________ Start Header _________________________ -->
<header id="header">
  <div class="header_top d-none" data-height="40"><div class="header_top_outer"><div class="header_top_inner"><div class="header_top_inner_border">
<div class="social_wrap">
  <div class="social_wrap_inner">
    <ul>
        <li>
          <a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_1 cmsmasters-icon-twitter" title="Twitter" target="_blank"></a>
        </li>
        <li>
          <a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_2 cmsmasters-icon-facebook-1" title="Facebook" target="_blank"></a>
        </li>
        <li>
          <a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_3 cmsmasters-icon-youtube" title="YouTube" target="_blank"></a>
        </li>
        <li>
          <a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_4 cmsmasters-icon-instagram" title="Instagram" target="_blank"></a>
        </li>
        <li>
          <a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_5 cmsmasters-icon-gplus-1" title="Google+" target="_blank"></a>
        </li>
    </ul>
  </div>
</div><div class="top_nav_wrap"><a class="responsive_top_nav" href="javascript:void(0)"><span></span></a><nav><div class="menu-top-line-navigation-container"><ul id="top_line_nav" class="top_line_nav"><li id="menu-item-14206" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-14206"><a href="../../index.html"><span class="nav_item_wrap">About Bank</span></a></li>
<li id="menu-item-14197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14197"><a href="../careers/index.html"><span class="nav_item_wrap">Careers</span></a></li>
<li id="menu-item-14198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14198"><a href="../credit-cards/index.html"><span class="nav_item_wrap">Credit Cards</span></a></li>
<li id="menu-item-14199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14199"><a href="../services/index.html"><span class="nav_item_wrap">Services</span></a></li>
</ul></div></nav></div></div></div></div><div class="header_top_but closed"><span class="cmsmasters_theme_icon_slide_bottom"></span></div></div><div class="header_mid" data-height="87"><div class="header_mid_outer"><div class="header_mid_inner"><div class="logo_wrap"><a href="../../index.html" title="Royal Private Bank" class="logo">
  <img src="..//uploads/2017/11/logo-1-2.png" alt="Royal Private Bank" />
<img class="logo_retina" src="..//uploads/2017/11/logo-1-2.png" alt="Royal Private Bank" width="203" height="34" />
</a>
</div><div class="mid_search_but_wrap"><a href="javascript:void(0)" class="mid_search_but cmsmasters_header_search_but cmsmasters-icon-search-3">Search</a></div><div class="slogan_wrap"><div class="slogan_wrap_inner"><div class="slogan_wrap_text"><ul>
<li><a href="../contacts/index.html" class="cmsmasters-icon-chat-3">Contact Us</a></li>
<li><a href="../contacts/index.html" class="cmsmasters-icon-location-3">Locations</a></li>
<li><a href="index.html" class="cmsmasters-icon-user-3">Sign In</a></li>
</ul></div></div></div></div></div></div><div class="header_bot" data-height="45"><div class="header_bot_outer"><div class="header_bot_inner"><span class="header_bot_border_top"></span><div class="resp_bot_nav_wrap"><div class="resp_bot_nav_outer"><a class="responsive_nav resp_bot_nav" href="javascript:void(0)"><span></span></a></div></div><a href="../cart/index.html" class="cmsmasters_header_cart_link"><span class="count_wrap cmsmasters-icon-bag-1"><span class="count cmsmasters_dynamic_cart_count">0</span></span></a><!-- _________________________ Start Navigation _________________________ --><div class="bot_nav_wrap"><nav><div class="menu-primary-navigation-container"><ul id="navigation" class="bot_nav navigation"><li id="menu-item-14191" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-14191 menu-item-depth-0"><a href="../../index.html"><span class="nav_item_wrap"><span class="nav_title">Home</span></span></a>
<ul class="sub-menu">
  <li id="menu-item-14207" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-14207 menu-item-depth-1"><a href="../../index.html"><span class="nav_item_wrap"><span class="nav_title">Home Default</span></span></a>	</li>
  <li id="menu-item-14148" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14148 menu-item-depth-1"><a href="../boxed/index.html"><span class="nav_item_wrap"><span class="nav_title">Home Boxed</span></span></a>	</li>
</ul>
</li>
<li id="menu-item-14195" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14195 menu-item-depth-0"><a href="../credit-cards/index.html"><span class="nav_item_wrap"><span class="nav_title">Credit Cards</span></span></a></li>
<li id="menu-item-14140" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14140 menu-item-depth-0"><a><span class="nav_item_wrap"><span class="nav_title">Features</span></span></a>
<ul class="sub-menu">
  <li id="menu-item-14192" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14192 menu-item-depth-1"><a href="../about-bank/index.html"><span class="nav_item_wrap"><span class="nav_title">About Bank</span></span></a>	</li>
  <li id="menu-item-14184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14184 menu-item-depth-1"><a href="../careers/index.html"><span class="nav_item_wrap"><span class="nav_title">Careers</span></span></a>	</li>
  <li id="menu-item-14196" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14196 menu-item-depth-1"><a href="../services/index.html"><span class="nav_item_wrap"><span class="nav_title">Services</span></span></a>	</li>
  <li id="menu-item-14151" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14151 menu-item-depth-1"><a href="../shop/index.html"><span class="nav_item_wrap"><span class="nav_title">Shop</span></span></a>	</li>
  <li id="menu-item-14194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14194 menu-item-depth-1"><a href="../contacts/index.html"><span class="nav_item_wrap"><span class="nav_title">Contacts</span></span></a>	</li>
  <li id="menu-item-14312" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14312 menu-item-depth-1"><a href="../website-disclaimer/index.html"><span class="nav_item_wrap"><span class="nav_title">Website Disclaimer</span></span></a>	</li>
</ul>
</li>
<li id="menu-item-14136" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14136 menu-item-mega menu-item-mega-cols-four menu-item-depth-0"><a><span class="nav_item_wrap"><span class="nav_title">Shortcodes</span></span></a>
<div class="menu-item-mega-container">
<ul class="sub-menu">
  <li id="menu-item-14147" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14147 menu-item-depth-1"><a><span class="nav_item_wrap"><span class="nav_title">1</span></span></a>
  <ul class="sub-menu">
    <li id="menu-item-14152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14152 menu-item-depth-subitem"><a href="../blog-shortcode/index.html"><span class="nav_item_wrap"><span class="nav_title">Blog Shortcode</span></span></a>		</li>
    <li id="menu-item-14153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14153 menu-item-depth-subitem"><a href="../buttons-icons/index.html"><span class="nav_item_wrap"><span class="nav_title">Buttons &#038; Icons</span></span></a>		</li>
    <li id="menu-item-14154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14154 menu-item-depth-subitem"><a href="../clients/index.html"><span class="nav_item_wrap"><span class="nav_title">Clients</span></span></a>		</li>
    <li id="menu-item-14156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14156 menu-item-depth-subitem"><a href="../counters-progress-bars/index.html"><span class="nav_item_wrap"><span class="nav_title">Counters &#038; Progress Bars</span></span></a>		</li>
    <li id="menu-item-14157" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14157 menu-item-depth-subitem"><a href="../custom-html-css-js/index.html"><span class="nav_item_wrap"><span class="nav_title">Custom HTML, CSS, JS</span></span></a>		</li>
    <li id="menu-item-14158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14158 menu-item-depth-subitem"><a href="../dividers/index.html"><span class="nav_item_wrap"><span class="nav_title">Dividers</span></span></a>		</li>
  </ul>
  </li>
  <li id="menu-item-14137" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14137 menu-item-depth-1"><a><span class="nav_item_wrap"><span class="nav_title">2</span></span></a>
  <ul class="sub-menu">
    <li id="menu-item-14164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14164 menu-item-depth-subitem"><a href="../embedded/index.html"><span class="nav_item_wrap"><span class="nav_title">Embedded</span></span></a>		</li>
    <li id="menu-item-14165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14165 menu-item-depth-subitem"><a href="../featured-blocks/index.html"><span class="nav_item_wrap"><span class="nav_title">Featured Blocks</span></span></a>		</li>
    <li id="menu-item-14163" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14163 menu-item-depth-subitem"><a href="../gallery/index.html"><span class="nav_item_wrap"><span class="nav_title">Gallery</span></span></a>		</li>
    <li id="menu-item-14162" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14162 menu-item-depth-subitem"><a href="../google-maps/index.html"><span class="nav_item_wrap"><span class="nav_title">Google Maps</span></span></a>		</li>
    <li id="menu-item-14161" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14161 menu-item-depth-subitem"><a href="../icon-boxes/index.html"><span class="nav_item_wrap"><span class="nav_title">Icon Boxes</span></span></a>		</li>
    <li id="menu-item-14160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14160 menu-item-depth-subitem"><a href="../icon-lists/index.html"><span class="nav_item_wrap"><span class="nav_title">Icon Lists</span></span></a>		</li>
    <li id="menu-item-14159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14159 menu-item-depth-subitem"><a href="../images/index.html"><span class="nav_item_wrap"><span class="nav_title">Images</span></span></a>		</li>
  </ul>
  </li>
  <li id="menu-item-14138" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14138 menu-item-depth-1"><a><span class="nav_item_wrap"><span class="nav_title">3</span></span></a>
  <ul class="sub-menu">
    <li id="menu-item-14166" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14166 menu-item-depth-subitem"><a href="../notice-boxes/index.html"><span class="nav_item_wrap"><span class="nav_title">Notice Boxes</span></span></a>		</li>
    <li id="menu-item-14173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14173 menu-item-depth-subitem"><a href="../portfolio-shortcode/index.html"><span class="nav_item_wrap"><span class="nav_title">Portfolio Shortcode</span></span></a>		</li>
    <li id="menu-item-14167" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14167 menu-item-depth-subitem"><a href="../posts-or-projects-slider/index.html"><span class="nav_item_wrap"><span class="nav_title">Posts or Projects Slider</span></span></a>		</li>
    <li id="menu-item-14168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14168 menu-item-depth-subitem"><a href="../pricing-tables/index.html"><span class="nav_item_wrap"><span class="nav_title">Pricing Tables</span></span></a>		</li>
    <li id="menu-item-14169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14169 menu-item-depth-subitem"><a href="../profiles/index.html"><span class="nav_item_wrap"><span class="nav_title">Profiles</span></span></a>		</li>
    <li id="menu-item-14171" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14171 menu-item-depth-subitem"><a href="../quotes/index.html"><span class="nav_item_wrap"><span class="nav_title">Quotes</span></span></a>		</li>
    <li id="menu-item-14172" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14172 menu-item-depth-subitem"><a href="../sidebar/index.html"><span class="nav_item_wrap"><span class="nav_title">Sidebars</span></span></a>		</li>
  </ul>
  </li>
  <li id="menu-item-14139" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14139 menu-item-depth-1"><a><span class="nav_item_wrap"><span class="nav_title">4</span></span></a>
  <ul class="sub-menu">
    <li id="menu-item-14170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14170 menu-item-depth-subitem"><a href="../sliders/index.html"><span class="nav_item_wrap"><span class="nav_title">Sliders</span></span></a>		</li>
    <li id="menu-item-14178" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14178 menu-item-depth-subitem"><a href="../social-sharing/index.html"><span class="nav_item_wrap"><span class="nav_title">Social Sharing</span></span></a>		</li>
    <li id="menu-item-14177" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14177 menu-item-depth-subitem"><a href="../special-headings/index.html"><span class="nav_item_wrap"><span class="nav_title">Special Headings</span></span></a>		</li>
    <li id="menu-item-14176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14176 menu-item-depth-subitem"><a href="../tables/index.html"><span class="nav_item_wrap"><span class="nav_title">Tables</span></span></a>		</li>
    <li id="menu-item-14175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14175 menu-item-depth-subitem"><a href="../tabs-tours/index.html"><span class="nav_item_wrap"><span class="nav_title">Tabs &#038; Tours</span></span></a>		</li>
    <li id="menu-item-14174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14174 menu-item-depth-subitem"><a href="../toggles-accordions/index.html"><span class="nav_item_wrap"><span class="nav_title">Toggles &#038; Accordions</span></span></a>		</li>
  </ul>
  </li>
</ul>
</div>
</li>
<li id="menu-item-14141" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14141 menu-item-mega menu-item-mega-cols-four menu-item-depth-0"><a><span class="nav_item_wrap"><span class="nav_title">Post Types</span></span></a>
<div class="menu-item-mega-container">
<ul class="sub-menu">
  <li id="menu-item-14142" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14142 menu-item-depth-1"><a><span class="nav_item_wrap"><span class="nav_title">Blog</span></span></a>
  <ul class="sub-menu">
    <li id="menu-item-14181" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14181 menu-item-depth-subitem"><a href="../standard-blog/index.html"><span class="nav_item_wrap"><span class="nav_title">Standard Blog</span></span></a>		</li>
    <li id="menu-item-14180" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14180 menu-item-depth-subitem"><a href="../masonry-blog/index.html"><span class="nav_item_wrap"><span class="nav_title">Masonry Blog</span></span></a>		</li>
    <li id="menu-item-14179" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14179 menu-item-depth-subitem"><a href="../timeline-blog/index.html"><span class="nav_item_wrap"><span class="nav_title">Timeline Blog</span></span></a>		</li>
  </ul>
  </li>
  <li id="menu-item-14143" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14143 menu-item-depth-1"><a><span class="nav_item_wrap"><span class="nav_title">Projects Grid</span></span></a>
  <ul class="sub-menu">
    <li id="menu-item-14183" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14183 menu-item-depth-subitem"><a href="../projects-grid/index.html"><span class="nav_item_wrap"><span class="nav_title">Large Gap</span></span></a>		</li>
    <li id="menu-item-14185" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14185 menu-item-depth-subitem"><a href="../no-gap-projects-grid/index.html"><span class="nav_item_wrap"><span class="nav_title">No Gap</span></span></a>		</li>
    <li id="menu-item-14182" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14182 menu-item-depth-subitem"><a href="../1-pixel-gap-projects-grid/index.html"><span class="nav_item_wrap"><span class="nav_title">1 Pixel Gap</span></span></a>		</li>
  </ul>
  </li>
  <li id="menu-item-14144" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14144 menu-item-depth-1"><a><span class="nav_item_wrap"><span class="nav_title">Masonry Puzzle</span></span></a>
  <ul class="sub-menu">
    <li id="menu-item-14186" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14186 menu-item-depth-subitem"><a href="../large-gap-masonry/index.html"><span class="nav_item_wrap"><span class="nav_title">Large Gap</span></span></a>		</li>
    <li id="menu-item-14187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14187 menu-item-depth-subitem"><a href="../no-gap-masonry/index.html"><span class="nav_item_wrap"><span class="nav_title">No Gap</span></span></a>		</li>
    <li id="menu-item-14190" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14190 menu-item-depth-subitem"><a href="../1-pixel-gap-masonry/index.html"><span class="nav_item_wrap"><span class="nav_title">1 Pixel Gap</span></span></a>		</li>
  </ul>
  </li>
  <li id="menu-item-14145" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14145 menu-item-depth-1"><a><span class="nav_item_wrap"><span class="nav_title">Profiles</span></span></a>
  <ul class="sub-menu">
    <li id="menu-item-14188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14188 menu-item-depth-subitem"><a href="../horizontal/index.html"><span class="nav_item_wrap"><span class="nav_title">Horizontal</span></span></a>		</li>
    <li id="menu-item-14189" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14189 menu-item-depth-subitem"><a href="../vertical/index.html"><span class="nav_item_wrap"><span class="nav_title">Vertical</span></span></a>		</li>
    <li id="menu-item-14146" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14146 menu-item-depth-subitem"><a href="../profile/max-turner/index.html"><span class="nav_item_wrap"><span class="nav_title">Open Profile</span></span></a>		</li>
  </ul>
  </li>
</ul>
</div>
</li>
<li id="menu-item-14193" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14193 menu-item-depth-0"><a href="../blog/index.html"><span class="nav_item_wrap"><span class="nav_title">News</span></span></a></li>
</ul></div></nav></div><!-- _________________________ Finish Navigation _________________________ --></div></div></div></header>
<!-- _________________________ Finish Header _________________________ -->


<!-- _________________________ Start Middle _________________________ -->
<div id="middle">
<div class="headline cmsmasters_color_scheme_default">
        <div class="headline_outer">
          <div class="headline_color"></div><div class="headline_inner align_left">
          <div class="headline_aligner"></div><div class="headline_text_wrap"><div class="headline_text"><h1 class="entry-title">My Account</h1></div><div class="cmsmasters_breadcrumbs"><div class="cmsmasters_breadcrumbs_aligner"></div><div class="cmsmasters_breadcrumbs_inner"><a href="../../index.html" class="cms_home">Home</a>
  <span class="breadcrumbs_sep"> / </span>
  <span>My Account</span></div></div></div></div></div>
      </div><div class="middle_inner">
<div class="content_wrap fullwidth">

<!--_________________________ Start Content _________________________ -->
<div class="middle_content entry"><div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>

    <h2>Login</h2>
<?php echo $warn; ?>
    <form class="woocommerce-form woocommerce-form-login login" method="post">

      
      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="username">Username or email address&nbsp;<span class="required">*</span></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="" />			</p>
      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="password">Password&nbsp;<span class="required">*</span></label>
        <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
      </p>
      
      <!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="password">Account Number&nbsp;<span class="required">*</span></label>
        <input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="accn" id="accn" autocomplete="current-password" />
      </p> -->
      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="password">Login Pin&nbsp;<span class="required">*</span></label>
        <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="pin" id="password" autocomplete="current-password" />
      </p>

      
      <p class="form-row">
        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
          <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
        </label>
        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="fd59a0755a" /><input type="hidden" name="_wp_http_referer" value="/my-account/" />				
        <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="send" value="Log in">Log in</button>
      </p>
      

      
    </form>


</div>
<div class="cl"></div></div>
<!-- _________________________ Finish Content _________________________ -->



    </div>
  </div>
</div>
<!-- _________________________ Finish Middle _________________________ -->
  <!-- _________________________ Start Bottom _________________________ -->
  <div id="bottom" class="cmsmasters_color_scheme_footer">
    <div class="bottom_bg">
      <div class="bottom_outer">
        <div class="bottom_inner sidebar_layout_14141414">
  <aside id="text-2" class="widget widget_text">			<div class="textwidget"><p><img decoding="async" style="margin-bottom: 12px;" src="..//uploads/2017/11/logo-1-2.png" alt="" /></p>
<ul class="styled_list">
<li><a href="../about-bank/index.html">About Royal Private Bank</a></li>

<li><a href="../services/index.html">Royal Private Bank Group</a></li>
<li><a href="../careers/index.html">Careers</a></li>
<li><a href="../website-disclaimer/index.html">Website Disclaimer</a></li>
</ul>
</div>
    </aside><aside id="text-4" class="widget widget_text"><h3 class="widgettitle">Banking with Us</h3>			<div class="textwidget"><ul class="styled_list">
<li><a href="../services/index.html">Internet Banking</a></li>
<li><a href="../services/index.html">Mobile Banking</a></li>

<li><a href="../services/index.html">Rates and Charges</a></li>

</ul>
</div>
    </aside><aside id="text-3" class="widget widget_text"><h3 class="widgettitle">Customer Service</h3>			<div class="textwidget"><ul class="styled_list">
<li><a href="../about-bank/index.html">About us</a></li>
<li><a href="../careers/index.html">Jobs</a></li>

<li><a href="../contacts/index.html">Contact us</a></li>

</ul>
</div>
    </aside><aside id="text-6" class="widget widget_text"><h3 class="widgettitle">Socials</h3>			<div class="textwidget"><ul class="styled_list">
<li><a href="#">Twitter</a></li>
<li><a href="#">Instagram</a></li>
<li><a href="#">Facebook</a></li>
<li><a href="#">YouTube</a></li>
<li><a href="#">Pinterest</a></li>
</ul>
</div>
    </aside>				</div>
      </div>
    </div>
  </div>
  <!-- _________________________ Finish Bottom _________________________ -->
  <a href="javascript:void(0)" id="slide_top" class="cmsmasters_theme_icon_slide_top"><span></span></a>
</div>
<!-- _________________________ Finish Main _________________________ -->

<!-- _________________________ Start Footer _________________________ -->
<footer id="footer">
  <div class="footer cmsmasters_color_scheme_footer cmsmasters_footer_small">
  <div class="footer_inner">
    <div class="footer_nav_wrap"><nav><div class="menu-footer-navigation-container"><ul id="footer_nav" class="footer_nav"><li id="menu-item-14200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14200"><a href="../about-bank/index.html">About Bank</a></li>
<li id="menu-item-14205" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14205"><a href="../services/index.html">Services</a></li>
<li id="menu-item-14204" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14204"><a href="../credit-cards/index.html">Credit Cards</a></li>
<li id="menu-item-14202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14202"><a href="../careers/index.html">Careers</a></li>
<li id="menu-item-14201" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14201"><a href="../blog/index.html">Blog</a></li>
<li id="menu-item-14203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14203"><a href="../contacts/index.html">Contacts</a></li>
</ul></div></nav></div>		<span class="footer_copyright copyright">
      Royal Private Bank &copy; 2023 / All Rights Reserved		</span>
  </div>
</div></footer>
<!-- _________________________ Finish Footer _________________________ -->

</div>
<span class="cmsmasters_responsive_width"></span>
<!-- _________________________ Finish Page _________________________ -->


    <script>
      window.RS_MODULES = window.RS_MODULES || {};
      window.RS_MODULES.modules = window.RS_MODULES.modules || {};
      window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
      window.RS_MODULES.defered = false;
      window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
      window.RS_MODULES.type = 'compiled';
    </script>
    <!--googleoff: all--><div id="cookie-law-info-bar" data-nosnippet="true"><span>This website uses cookies to improve your experience. We'll assume you're ok with this, but you can opt-out if you wish. <a role='button' data-cli_action="accept" id="cookie_action_close_header" class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button wt-cli-accept-btn">Accept</a></span></div><div id="cookie-law-info-again" data-nosnippet="true"><span id="cookie_hdr_showagain">Privacy &amp; Cookies Policy</span></div><div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog" aria-labelledby="cliSettingsPopup" aria-hidden="true">
  <div class="cli-modal-dialog" role="document">
  <div class="cli-modal-content cli-bar-popup">
      <button type="button" class="cli-modal-close" id="cliModalClose">
      <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"></path><path d="M0 0h24v24h-24z" fill="none"></path></svg>
      <span class="wt-cli-sr-only">Close</span>
      </button>
      <div class="cli-modal-body">
      <div class="cli-container-fluid cli-tab-container">
  <div class="cli-row">
    <div class="cli-col-12 cli-align-items-stretch cli-px-0">
      <div class="cli-privacy-overview">
        <h4>Privacy Overview</h4>				<div class="cli-privacy-content">
          <div class="cli-privacy-content-text">This website uses cookies to improve your experience while you navigate through the website. Out of these, the cookies that are categorized as necessary are stored on your browser as they are essential for the working of basic functionalities of the website. We also use third-party cookies that help us analyze and understand how you use this website. These cookies will be stored in your browser only with your consent. You also have the option to opt-out of these cookies. But opting out of some of these cookies may affect your browsing experience.</div>
        </div>
        <a class="cli-privacy-readmore" aria-label="Show more" role="button" data-readmore-text="Show more" data-readless-text="Show less"></a>			</div>
    </div>
    <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                        <div class="cli-tab-section">
            <div class="cli-tab-header">
              <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="necessary" data-toggle="cli-toggle-tab">
                Necessary							</a>
                              <div class="wt-cli-necessary-checkbox">
                  <input type="checkbox" class="cli-user-preference-checkbox"  id="wt-cli-checkbox-necessary" data-id="checkbox-necessary" checked="checked"  />
                  <label class="form-check-label" for="wt-cli-checkbox-necessary">Necessary</label>
                </div>
                <span class="cli-necessary-caption">Always Enabled</span>
                          </div>
            <div class="cli-tab-content">
              <div class="cli-tab-pane cli-fade" data-id="necessary">
                <div class="wt-cli-cookie-description">
                  Necessary cookies are absolutely essential for the website to function properly. This category only includes cookies that ensures basic functionalities and security features of the website. These cookies do not store any personal information.								</div>
              </div>
            </div>
          </div>
                                  <div class="cli-tab-section">
            <div class="cli-tab-header">
              <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="non-necessary" data-toggle="cli-toggle-tab">
                Non-necessary							</a>
                              <div class="cli-switch">
                  <input type="checkbox" id="wt-cli-checkbox-non-necessary" class="cli-user-preference-checkbox"  data-id="checkbox-non-necessary" checked='checked' />
                  <label for="wt-cli-checkbox-non-necessary" class="cli-slider" data-cli-enable="Enabled" data-cli-disable="Disabled"><span class="wt-cli-sr-only">Non-necessary</span></label>
                </div>
                          </div>
            <div class="cli-tab-content">
              <div class="cli-tab-pane cli-fade" data-id="non-necessary">
                <div class="wt-cli-cookie-description">
                  Any cookies that may not be particularly necessary for the website to function and is used specifically to collect user personal data via analytics, ads, other embedded contents are termed as non-necessary cookies. It is mandatory to procure user consent prior to running these cookies on your website.								</div>
              </div>
            </div>
          </div>
                    </div>
  </div>
</div>
      </div>
      <div class="cli-modal-footer">
      <div class="wt-cli-element cli-container-fluid cli-tab-container">
        <div class="cli-row">
          <div class="cli-col-12 cli-align-items-stretch cli-px-0">
            <div class="cli-tab-footer wt-cli-privacy-overview-actions">
            
                              <a id="wt-cli-privacy-save-btn" role="button" tabindex="0" data-cli-action="accept" class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">SAVE &amp; ACCEPT</a>
                          </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
<div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
<!--googleon: all-->	<script type="text/javascript">
    (function () {
      var c = document.body.className;
      c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
      document.body.className = c;
    })();
  </script>
  <link rel='stylesheet' id='rs-plugin-settings-css' href='../css/revslider.css' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<script type='text/javascript' src='../wp-content/plugins/cmsmasters-mega-menu/js/jquery.megaMenu077c.js?ver=1.2.9' id='megamenu-js'></script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/swv/js/indexf2b4.js?ver=5.7.7' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/RoyalPrivateBank.com\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/indexf2b4.js?ver=5.7.7' id='contact-form-7-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.mindc32.js?ver=2.7.0-wc.7.0.0' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/RoyalPrivateBank.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min823d.js?ver=7.0.0' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.minf988.js?ver=1.0.9-wc.7.0.0' id='selectWoo-js'></script>
<script type='text/javascript' src='../wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2' id='wp-polyfill-inert-js'></script>
<script type='text/javascript' src='../wp-includes/js/dist/vendor/regenerator-runtime.min8fa4.js?ver=0.13.11' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='../wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' src='../wp-includes/js/dist/hooks.min6c65.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
<script type='text/javascript' src='../wp-includes/js/dist/i18n.mine57b.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type='text/javascript' id='password-strength-meter-js-extra'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-admin/js/password-strength-meter.min3781.js?ver=6.2.2' id='password-strength-meter-js'></script>
<script type='text/javascript' id='wc-password-strength-meter-js-extra'>
/* <![CDATA[ */
var wc_password_strength_meter_params = {"min_password_strength":"3","stop_checkout":"","i18n_password_error":"Please enter a stronger password.","i18n_password_hint":"Hint: The password should be at least twelve characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! \" ? $ % ^ & )."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min823d.js?ver=7.0.0' id='wc-password-strength-meter-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.minc599.js?ver=2.1.4-wc.7.0.0' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min823d.js?ver=7.0.0' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_26cce176820f70dcc9aa6906d5b2f415","fragment_name":"wc_fragments_26cce176820f70dcc9aa6906d5b2f415","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min823d.js?ver=7.0.0' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/cmsmasters-hover-slider.min8a54.js?ver=1.0.0' id='cmsmasters-hover-slider-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/easing.min8a54.js?ver=1.0.0' id='easing-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/easy-pie-chart.min8a54.js?ver=1.0.0' id='easy-pie-chart-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/mousewheel.min8a54.js?ver=1.0.0' id='mousewheel-js'></script>
<script type='text/javascript' src='../js/owlcarousel.min.js' id='owlcarousel-js'></script>
<script type='text/javascript' src='../wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/request-animation-frame.min8a54.js?ver=1.0.0' id='request-animation-frame-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/scrollspy8a54.js?ver=1.0.0' id='scrollspy-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/scroll-to.min8a54.js?ver=1.0.0' id='scroll-to-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/stellar.min8a54.js?ver=1.0.0' id='stellar-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/waypoints.min8a54.js?ver=1.0.0' id='waypoints-js'></script>
<script type='text/javascript' id='alister-bank-script-js-extra'>
/* <![CDATA[ */
var cmsmasters_script = {"theme_url":"https:\/\/RoyalPrivateBank.com\/wp-content\/themes\/alister-bank","site_url":"https:\/\/RoyalPrivateBank.com\/","ajaxurl":"https:\/\/RoyalPrivateBank.com\/wp-admin\/admin-ajax.php","nonce_ajax_like":"15a40a5301","nonce_ajax_view":"1a50efee00","project_puzzle_proportion":"0.7069","gmap_api_key":"AIzaSyAWfYHN10ti_kRg5lF26fZ5HokDnIDG8Ck","gmap_api_key_notice":"Please add your Google Maps API key","gmap_api_key_notice_link":"read more how","primary_color":"#6a6a6a","ilightbox_skin":"dark","ilightbox_path":"vertical","ilightbox_infinite":"0","ilightbox_aspect_ratio":"1","ilightbox_mobile_optimizer":"1","ilightbox_max_scale":"1","ilightbox_min_scale":"0.2","ilightbox_inner_toolbar":"0","ilightbox_smart_recognition":"0","ilightbox_fullscreen_one_slide":"0","ilightbox_fullscreen_viewport":"center","ilightbox_controls_toolbar":"1","ilightbox_controls_arrows":"0","ilightbox_controls_fullscreen":"1","ilightbox_controls_thumbnail":"1","ilightbox_controls_keyboard":"1","ilightbox_controls_mousewheel":"1","ilightbox_controls_swipe":"1","ilightbox_controls_slideshow":"0","ilightbox_close_text":"Close","ilightbox_enter_fullscreen_text":"Enter Fullscreen (Shift+Enter)","ilightbox_exit_fullscreen_text":"Exit Fullscreen (Shift+Enter)","ilightbox_slideshow_text":"Slideshow","ilightbox_next_text":"Next","ilightbox_previous_text":"Previous","ilightbox_load_image_error":"An error occurred when trying to load photo.","ilightbox_load_contents_error":"An error occurred when trying to load contents.","ilightbox_missing_plugin_error":"The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\\\/a>."};
/* ]]> */
</script>
<script type='text/javascript' src='../js/jquery.script.js' id='alister-bank-script-js'></script>
<script type='text/javascript' id='alister-bank-theme-script-js-extra'>
/* <![CDATA[ */
var cmsmasters_theme_script = {"primary_color":"#6a6a6a"};
/* ]]> */
</script>
<script type='text/javascript' src='../js/jquery.theme-script.js' id='alister-bank-theme-script-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/jquery.tweet.mine7f0.js?ver=1.3.1' id='twitter-js'></script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/js/smooth-sticky.min20b9.js?ver=1.0.2' id='smooth-sticky-js'></script>
<script type='text/javascript' src='../wp-includes/js/comment-reply.min3781.js?ver=6.2.2' id='comment-reply-js'></script>
<script type='text/javascript' id='alister-bank-woocommerce-script-js-extra'>
/* <![CDATA[ */
var cmsmasters_woo_script = {"currency_symbol":"\u00a3","thumbnail_image_width":"75","thumbnail_image_height":"75"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/alister-bank/woocommerce/cmsmasters-framework/theme-style/js/jquery.plugin-script8a54.js?ver=1.0.0' id='alister-bank-woocommerce-script-js'></script>
</body>
</html>
