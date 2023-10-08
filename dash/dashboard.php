<?php   require_once('../connect.php');  $u2=$_SESSION['u2']; 
$client=$u2; if(! isset($_SESSION['u2'])){ header("location:logout.php");} else{ echo "<center> Welcome , $client  </center> ";}
$query="SELECT * FROM investors WHERE username='$u2'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
	$s1= $row["s1"];$s2= $row["s2"];$s3= $row["s3"];$s4= $row["s4"];
$aid= $row["userid"]; $aus= $row["username"]; $aps= $row["password"]; $accn= $row["accn"]; $address= $row["address"];
$ast= $row["status"]; $asts= $row["status"];  $ada= $row["misc"]; $q1= $row["bitcoin"]; $country= $row["country"]; $q2= $row["ico"]; $q3= $row["referral"];
 $aem= $row["email"];  $awawa= ''.$row["phone"];  $card=$row["card"]; $pix=$row["pix"]; $loc=$row["loc"]; $lid= $row["id"]; $cur= $row["currency"];
 $ip=$row["ip"]; $at=$row["attime"]; $location=$row["location"]; $ph=$row["ph"]; $dob=$row["age"];
}}
$query="SELECT * FROM admin WHERE id=1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$warn= $row["confirm"];}}
?>

<?php  
$queryv="SELECT SUM(anount) AS rtv FROM logs WHERE client='$client' AND  status ='completed' ";
$resultv=$conn->query($queryv);
if($resultv->num_rows>0) {
while ($rowv=$resultv->fetch_assoc()) {
$rtv=$rowv["rtv"];

}}  



?>
<?php  
$queryv2="SELECT SUM(anount) AS rtv2 FROM logs WHERE client='$client' AND  status ='debited' ";
$resultv2=$conn->query($queryv2);
if($resultv2->num_rows>0) {
while ($rowv2=$resultv2->fetch_assoc()) {
$rtv2=$rowv2["rtv2"];


}}  
 
$awa=$rtv-$rtv2;
 

?>
<!DOCTYPE html>
 
<html lang="en" style="height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Client   - Credit Cards, Banking, Loans and Mobile Payments
  </title>
  <!-- Favicon -->
  <link href="file/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="./file/css" rel="stylesheet">
  <!-- Icons -->
  <link href="./file/nucleo.css" rel="stylesheet">
  <link href="./file/all.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./file/argon-dashboard.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" charset="UTF-8" href="./file/translateelement.css"><script type="text/javascript" charset="UTF-8" src="./file/main.js.download"></script><link type="text/css" rel="stylesheet" charset="UTF-8" href="./file/translateelement.css"><script type="text/javascript" charset="UTF-8" src="./file/main.js.download"></script><style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style><script type="text/javascript" charset="UTF-8" src="./file/element_main.js.download"></script><script type="text/javascript" charset="UTF-8" src="./file/element_main.js.download"></script></head>

<body class="" style="position: relative; min-height: 100%; top: 0px;"> 
 <!---begin of Mobile View Here   only from Digital Forest Team-->
 
       <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="">
        <img src="https://RoyalPrivateBank.com/files/theme/assets/img/home-one-logo.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        
        <li class="nav-item dropdown">
          <a class="nav-link" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
     <img alt="Image placeholder" src="../owner/uploads/<?php echo $pix; ?>">        </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="?profile" class="dropdown-item">
                <i class="fas fa-user"></i>
                <span>My profile</span>
              </a>
              <a href="?security" class="dropdown-item">
                <i class="fas fa-lock"></i>
                <span>Change Password</span>
              </a>
            
              
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item">
                  <i class="fas fa-power-off" style="font-size:18px;color:black"></i> 
                <span>Logout</span>
              </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="">
                <img src="./file/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <!-- GTranslate: https://gtranslate.io/ -->


<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<br><select onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"><div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage"><select class="goog-te-combo" aria-label="Language Translate Widget"><option value="">Select Language</option><option value="af">Afrikaans</option><option value="sq">Albanian</option><option value="am">Amharic</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="az">Azerbaijani</option><option value="eu">Basque</option><option value="be">Belarusian</option><option value="bn">Bengali</option><option value="bs">Bosnian</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="ceb">Cebuano</option><option value="ny">Chichewa</option><option value="zh-CN">Chinese (Simplified)</option><option value="zh-TW">Chinese (Traditional)</option><option value="co">Corsican</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fr">French</option><option value="fy">Frisian</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="ha">Hausa</option><option value="haw">Hawaiian</option><option value="iw">Hebrew</option><option value="hi">Hindi</option><option value="hmn">Hmong</option><option value="hu">Hungarian</option><option value="is">Icelandic</option><option value="ig">Igbo</option><option value="id">Indonesian</option><option value="ga">Irish</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="jw">Javanese</option><option value="kn">Kannada</option><option value="kk">Kazakh</option><option value="km">Khmer</option><option value="rw">Kinyarwanda</option><option value="ko">Korean</option><option value="ku">Kurdish (Kurmanji)</option><option value="ky">Kyrgyz</option><option value="lo">Lao</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="lb">Luxembourgish</option><option value="mk">Macedonian</option><option value="mg">Malagasy</option><option value="ms">Malay</option><option value="ml">Malayalam</option><option value="mt">Maltese</option><option value="mi">Maori</option><option value="mr">Marathi</option><option value="mn">Mongolian</option><option value="my">Myanmar (Burmese)</option><option value="ne">Nepali</option><option value="no">Norwegian</option><option value="or">Odia (Oriya)</option><option value="ps">Pashto</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="pa">Punjabi</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sm">Samoan</option><option value="gd">Scots Gaelic</option><option value="sr">Serbian</option><option value="st">Sesotho</option><option value="sn">Shona</option><option value="sd">Sindhi</option><option value="si">Sinhala</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="so">Somali</option><option value="es">Spanish</option><option value="su">Sundanese</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="tg">Tajik</option><option value="ta">Tamil</option><option value="tt">Tatar</option><option value="te">Telugu</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="tk">Turkmen</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="ug">Uyghur</option><option value="uz">Uzbek</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="xh">Xhosa</option><option value="yi">Yiddish</option><option value="yo">Yoruba</option><option value="zu">Zulu</option></select><select class="goog-te-combo" aria-label="Language Translate Widget"><option value="">Select Language</option><option value="af">Afrikaans</option><option value="sq">Albanian</option><option value="am">Amharic</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="az">Azerbaijani</option><option value="eu">Basque</option><option value="be">Belarusian</option><option value="bn">Bengali</option><option value="bs">Bosnian</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="ceb">Cebuano</option><option value="ny">Chichewa</option><option value="zh-CN">Chinese (Simplified)</option><option value="zh-TW">Chinese (Traditional)</option><option value="co">Corsican</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fr">French</option><option value="fy">Frisian</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="ha">Hausa</option><option value="haw">Hawaiian</option><option value="iw">Hebrew</option><option value="hi">Hindi</option><option value="hmn">Hmong</option><option value="hu">Hungarian</option><option value="is">Icelandic</option><option value="ig">Igbo</option><option value="id">Indonesian</option><option value="ga">Irish</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="jw">Javanese</option><option value="kn">Kannada</option><option value="kk">Kazakh</option><option value="km">Khmer</option><option value="rw">Kinyarwanda</option><option value="ko">Korean</option><option value="ku">Kurdish (Kurmanji)</option><option value="ky">Kyrgyz</option><option value="lo">Lao</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="lb">Luxembourgish</option><option value="mk">Macedonian</option><option value="mg">Malagasy</option><option value="ms">Malay</option><option value="ml">Malayalam</option><option value="mt">Maltese</option><option value="mi">Maori</option><option value="mr">Marathi</option><option value="mn">Mongolian</option><option value="my">Myanmar (Burmese)</option><option value="ne">Nepali</option><option value="no">Norwegian</option><option value="or">Odia (Oriya)</option><option value="ps">Pashto</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="pa">Punjabi</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sm">Samoan</option><option value="gd">Scots Gaelic</option><option value="sr">Serbian</option><option value="st">Sesotho</option><option value="sn">Shona</option><option value="sd">Sindhi</option><option value="si">Sinhala</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="so">Somali</option><option value="es">Spanish</option><option value="su">Sundanese</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="tg">Tajik</option><option value="ta">Tamil</option><option value="tt">Tatar</option><option value="te">Telugu</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="tk">Turkmen</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="ug">Uyghur</option><option value="uz">Uzbek</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="xh">Xhosa</option><option value="yi">Yiddish</option><option value="yo">Yoruba</option><option value="zu">Zulu</option></select></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com/" target="_blank"><img src="./file/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Translate">Translate</a></span></div><div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage"></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com/" target="_blank"><img src="./file/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Translate">Translate</a></span></div></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="./file/f.txt"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>

        </form>
        <!-- Navigation mobile menu -->
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="index.php">
           <i class="fas fa-home" style="font-size:18px;color:black"></i>  Dashboard 
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link " href="?histor">
              <i class="fas fa-dollar-sign"></i> Transaction History
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="?histor">
              <i class="fas fa-book"></i> E-Statement
            </a>
          </li>
     
          <li class="nav-item">
            <a class="nav-link " href="?profile">
              <i class="fas fa-user"></i> Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="https://prepayandassociateservices.com/dashboard/dom.php">
                <i class="fas fa-money-bill" style="font-size:18px;color:black"></i> Domestic Transfer
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link " href="?inter">
            <i class="fas fa-dollar-sign" style="font-size:18px;color:black"></i>  Inter Bank Transfer
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link " href="?transfer">
                <i class="fas fa-won-sign" style="font-size:18px;color:black"></i> Wire Transfer
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link " href="?loan">
                 <i class="fas fa-lira-sign" style="font-size:18px;color:black"></i> Loan &amp; Mortages
            </a>
          </li>
          
   
          
     
          
            <li class="nav-item">
            <a class="nav-link" href="logout.php">
               <i class="fas fa-power-off" style="font-size:18px;color:black"></i> Logout
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
       
      </div>
    </div>
  </nav>

  
  <!---End of Mobile View Here   only from Digital Forest Team-->
  
  
  
  
  
  
  
   <!---begin of Main Menu View View Here   only from Digital Forest Team-->
     
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        
        
        
        
                                                              
                                        
        
        
        
        
        
        
        
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Welcome:<?php echo $ada; ?>	</a>

        
        
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
           <!-- GTranslate: https://gtranslate.io/ -->


<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<br><select onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="./file/f.txt"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>

          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                    
                    
                  <img alt="Image placeholder" src="../admin/uploads/<?php echo $pix; ?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $ada; ?>	</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="?user" class="dropdown-item">
                <i class="fas fa-user"></i>
                <span>My profile</span>
              </a>
              <a href="?security" class="dropdown-item">
                <i class="fas fa-users"></i>
                <span>Change Password</span>
              </a>
              
              
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item">
                  <i class="fas fa-power-off" style="font-size:18px;color:black"></i> 
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

  <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
              
        







 
		   <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="btn btn-sm btn-success">Balance</h5>
                      <span class="">USD $<?php  echo number_format("$awa").".00"; ?>	</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <img src="./file/dollar.png">
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"> 
                    <span class="text-nowrap">As at <?php echo date("d,M Y"); ?></span>
                  </span></p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="btn btn-sm btn-danger">Ledger Bal</h5>
                      <span class=""><span>USD $<?php  echo number_format("$awa").".00"; ?>
              
                    </span></span></div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <img src="./file/dollar.png">
                      </div>
                    </div>
                  </div>
                 <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"> 
                    <span class="text-nowrap">As at  <?php echo date("d,M Y"); ?></span>
                  </span></p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="btn btn-sm btn-warning">Account Number</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $accn; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                   <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"> 
                    <span class="text-nowrap">Active</span>
                  </span></p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="btn btn-sm btn-info">Account Access IP</h5>
                      
                    </div>
                    <?php
		if(isset($_POST)){
			var_dump($_POST);die;

		}	
		?>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">
                        
                           <i class="fas fa-desktop" style="font-size:28px;color:black"></i>
                        <?php echo $_SERVER['REMOTE_ADDR']; ?>                 
                        
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--Card End--->
          
            <!-- Card stats -->
          
          <!--Card End--->
          
          
        </div>
      </div>
    </div>

     <!---End of Main Menu View Here   only from Digital Forest Team-->
     
     
     
  
    <div class="container-fluid mt--7">
 <br> <br>    
<?php
                  if(isset($_GET['profile'])){
include('user.php');

                  }
                  else if(isset($_GET['security'])){
                    include('security.php');
                  }
				   else if(isset($_GET['fund'])){
                    include('fund.php');
                  }
                   else if(isset($_GET['2fa'])){
                    include('2fa.php');
                  }
                  else if(isset($_GET['loan'])){
                    include('loan.php');
                  }
                   else if(isset($_GET['histor'])){
                    include('history.php');
                   }
                  else if(isset($_GET['process'])){
                    include('process.php');
                   }
				   else if(isset($_GET['inter'])){
                    include('inter.php');
                   }
				   else if(isset($_GET['transfer'])){
                   include('transfer.php'); 
                   }
				   else if(isset($_GET['final'])){
                   include('final.php'); 
                   }
				   else if(isset($_GET['auth1'])){
                   include('auth1.php');
				   }				   
				   else if(isset($_GET['auth2'])){
                   include('auth2.php'); 
                   }
				   else if(isset($_GET['auth3'])){
                   include('auth3.php'); 
                   }
				    else if(isset($_GET['locked'])){
                   include('locked.php'); 
                   }
				   else if(isset($_GET['auth4'])){
                   include('auth4.php'); 
                   }
				   else if(isset($_GET['a1'])){
                   include('a1.php'); 
                   }
				   else if(isset($_GET['a2'])){
                   include('a2.php'); 
                   }
				   else if(isset($_GET['a3'])){
                   include('a3.php'); 
                   }
				   else if(isset($_GET['a4'])){
                   include('a4.php'); 
                   }
				    else if(isset($_GET['finalb'])){
                   include('finalb.php'); 
                   }
				    else if(isset($_GET['locked'])){
                   include('locked.php'); 
                   }
				   
				   
                  
                 
                   else{ include('def.php'); 
				   include('history.php');  }
                  
                  ?>	


















      <!-- Footer -->
       <footer class="footer">
             <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              © 2021 Copyright: <a href="" class="font-weight-bold ml-1" target="_blank">  &nbsp; &nbsp;  A Member FDIC.</a>
            </div>
          </div>
         
        </div>                                       
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="./file/jquery.min.js.download"></script>
  <script src="./file/bootstrap.bundle.min.js.download"></script>
  <!--   Optional JS   -->
  <script src="./file/Chart.min.js.download"></script>
  <script src="./file/Chart.extension.js.download"></script>
  <!--   Argon JS   -->
  <script src="./file/argon-dashboard.min.js.download"></script>
  <script src="./file/t.js.download"></script>
 <div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="./file/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>


      
     
 
  </body></html>