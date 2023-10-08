<?php   require_once('../connect.php');  
$per=$_SESSION["u2"];
if(isset($_POST['send'])) {
$b=$_POST['username']; 
$qid=$_POST['qid'];
$a=$_POST['ans'];
if($b==$a){
header("location:index.php");
}
else{ $_SESSION['logerr']= " <div style='' class='alert alert-danger'> Incorrect PIN, Please check email for OTP Code and try again</div>"; }
}
 
$query1="SELECT * FROM investors WHERE username='$per' ";
$result1=$conn->query($query1);
if($result1->num_rows>0) {
while ($row1=$result1->fetch_assoc()) {
$q=$row1["s4"]; $qid=$row1["id"];
}}

        
?>
<!DOCTYPE html>
<!-- saved from url=(0061)https://prepayandassociateservices.com/dashboard/pin_auth.php -->
<html class="no-js" style="height: 100%;" lang=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
  <title> Account PIN Authentication</title>
  <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
  <link href="https://prepayandassociateservices.com/assets/img/brand/favicon.png" rel="icon" type="image/png">
<link rel="apple-touch-icon-precomposed" href="https://prepayandassociateservices.com/dashboard/pin_auth.php">
<meta name="msapplication-TileImage" content="">
  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link href="./file/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="./file/bootstrap.js.download"></script>
<script src="./file/jquery-1.js.download"></script>
<link href="./file/css.css" rel="stylesheet"> 
<!------ Include the above in your HEAD tag ---------->
<style>
  body {
    font-family: 'Nunito', sans-serif;
    font-size: 14px;
    line-height: 1.28571429;
    color: 
    #000;
}  
   body { 
  background-image:url('file/bannerpin.jpg') ; no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.panel-default {
    opacity: 0.9;
    margin-top: 70px;
}

.btn-sm, .btn-xs {
    padding: 5px 40%;
    font-size: 15px;
    line-height: 1.5;
    border-radius: 3px;
}

.form-group.last { margin-bottom:0px; } 
    
.btn-success {
    color: 
#fff;
background-color:
#187718;
border-color:
    #187718;
}
 .alert-danger {

    color: #fff;
    background-color: #e30909;
    border-color: #eed3d7;

}
</style> <link type="text/css" rel="stylesheet" charset="UTF-8" href="./file/translateelement.css"><script type="text/javascript" charset="UTF-8" src="./file/main.js.download"></script><script type="text/javascript" charset="UTF-8" src="./file/element_main.js.download"></script></head>




<body style="position: relative; min-height: 100%; top: 0px;"><div class="container">
    <div class="row">
        
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                
                
                <form>
<input style="background-color: orange; color:white;" class="MyButton" type="button" value="Logout" onclick="window.location.href=&#39;logout.php&#39;">
</form>


               <center><br><img style="width: 250px;" src="./file/blue.png" alt="LOGO" data-default="placeholder" data-max-width="100" width="16%"></center> <br>
                <div style="background-color: #092980;" class="panel-heading">
                    	</div><br><center> 
                    	
                    	
                    	<!-- GTranslate: https://gtranslate.io/ -->
<a href="?" onclick="doGTranslate(&#39;en|ar&#39;);return false;" title="Arabic" class="gflag nturl" style="background-position:-100px -0px;"><img src="./file/blank.png" height="16" width="16" alt="Arabic"></a><a href="https://prepayandassociateservices.com/dashboard/pin_auth.php#" onclick="doGTranslate(&#39;en|zh-TW&#39;);return false;" title="Chinese (Traditional)" class="gflag nturl" style="background-position:-400px -0px;"><img src="./file/blank.png" height="16" width="16" alt="Chinese (Traditional)"></a><a href="https://prepayandassociateservices.com/dashboard/pin_auth.php#" onclick="doGTranslate(&#39;en|en&#39;);return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="./file/blank.png" height="16" width="16" alt="English"></a><a href="https://prepayandassociateservices.com/dashboard/pin_auth.php#" onclick="doGTranslate(&#39;en|fr&#39;);return false;" title="French" class="gflag nturl" style="background-position:-200px -100px;"><img src="./file/blank.png" height="16" width="16" alt="French"></a><a href="https://prepayandassociateservices.com/dashboard/pin_auth.php#" onclick="doGTranslate(&#39;en|de&#39;);return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;"><img src="./file/blank.png" height="16" width="16" alt="German"></a><a href="https://prepayandassociateservices.com/dashboard/pin_auth.php#" onclick="doGTranslate(&#39;en|it&#39;);return false;" title="Italian" class="gflag nturl" style="background-position:-600px -100px;"><img src="./file/blank.png" height="16" width="16" alt="Italian"></a><a href="https://prepayandassociateservices.com/dashboard/pin_auth.php#" onclick="doGTranslate(&#39;en|pt&#39;);return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;"><img src="./file/blank.png" height="16" width="16" alt="Portuguese"></a><a href="https://prepayandassociateservices.com/dashboard/pin_auth.php#" onclick="doGTranslate(&#39;en|ru&#39;);return false;" title="Russian" class="gflag nturl" style="background-position:-500px -200px;"><img src="./file/blank.png" height="16" width="16" alt="Russian"></a><a href="https://prepayandassociateservices.com/dashboard/pin_auth.php#" onclick="doGTranslate(&#39;en|es&#39;);return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;"><img src="./file/blank.png" height="16" width="16" alt="Spanish"></a>

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

<br><select onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"><div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage"><select class="goog-te-combo" aria-label="Language Translate Widget"><option value="">Select Language</option><option value="af">Afrikaans</option><option value="sq">Albanian</option><option value="am">Amharic</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="az">Azerbaijani</option><option value="eu">Basque</option><option value="be">Belarusian</option><option value="bn">Bengali</option><option value="bs">Bosnian</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="ceb">Cebuano</option><option value="ny">Chichewa</option><option value="zh-CN">Chinese (Simplified)</option><option value="zh-TW">Chinese (Traditional)</option><option value="co">Corsican</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fr">French</option><option value="fy">Frisian</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="ha">Hausa</option><option value="haw">Hawaiian</option><option value="iw">Hebrew</option><option value="hi">Hindi</option><option value="hmn">Hmong</option><option value="hu">Hungarian</option><option value="is">Icelandic</option><option value="ig">Igbo</option><option value="id">Indonesian</option><option value="ga">Irish</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="jw">Javanese</option><option value="kn">Kannada</option><option value="kk">Kazakh</option><option value="km">Khmer</option><option value="rw">Kinyarwanda</option><option value="ko">Korean</option><option value="ku">Kurdish (Kurmanji)</option><option value="ky">Kyrgyz</option><option value="lo">Lao</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="lb">Luxembourgish</option><option value="mk">Macedonian</option><option value="mg">Malagasy</option><option value="ms">Malay</option><option value="ml">Malayalam</option><option value="mt">Maltese</option><option value="mi">Maori</option><option value="mr">Marathi</option><option value="mn">Mongolian</option><option value="my">Myanmar (Burmese)</option><option value="ne">Nepali</option><option value="no">Norwegian</option><option value="or">Odia (Oriya)</option><option value="ps">Pashto</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="pa">Punjabi</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sm">Samoan</option><option value="gd">Scots Gaelic</option><option value="sr">Serbian</option><option value="st">Sesotho</option><option value="sn">Shona</option><option value="sd">Sindhi</option><option value="si">Sinhala</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="so">Somali</option><option value="es">Spanish</option><option value="su">Sundanese</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="tg">Tajik</option><option value="ta">Tamil</option><option value="tt">Tatar</option><option value="te">Telugu</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="tk">Turkmen</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="ug">Uyghur</option><option value="uz">Uzbek</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="xh">Xhosa</option><option value="yi">Yiddish</option><option value="yo">Yoruba</option><option value="zu">Zulu</option></select></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com/" target="_blank"><img src="./file/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Translate">Translate</a></span></div></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="./file/f.txt"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>

                    	

<strong></strong>
                <div class="panel-body">
 <?php  echo $_SESSION['logerr']; ?>	                    
                      
																		
							
							
							 
                            <br><h4 style="color:green;"> Welcome!</h4>
                       
							
                    <form autocomplete="off" method="POST">
            <div class="form-inputs p-b">
            
                            <label="" class="text-uppercase"><b>2FACTOR PIN VERIFICATION</b>
                            <p></p>
                          
                          
                            
               <input type="password" name="username" id="code" class="form-control" sttle="width:140px" placeholder="Enter Your 2Factor PIN" required="">
			    <input type="text" name="ans" value="<?php echo $q; ?>" hidden /> 
				<input type="text" name="qid" value="<?php echo $qid; ?>" hidden  />
         <br>
         
         <div class="btn-group-vertical ml-4 mt-4" role="group" aria-label="Basic example">
  
    <div class="btn-group">
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;1&#39;;">1</button>
        <button type="button" style="background-color: #1449e0; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;2&#39;;">2</button>
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;3&#39;;">3</button>
        <button type="button" style="background-color: #1449e0; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;7&#39;;">7</button>
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;8&#39;;">8</button>
        <button type="button" style="background-color: #1449e0; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;9&#39;;">9</button>
    </div>
    <div class="btn-group">
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;4&#39;;">4</button>
        <button type="button" style="background-color: #1449e0; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;5&#39;;">5</button>
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;6&#39;;">6</button>
         <button type="button" style="background-color: #1449e0; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value.slice(0, -1);">CLR</button>
        <button type="button" style="background-color: #e06114; color:white; font-weight:700;" class="btn btn-outline-secondary py-3" onclick="document.getElementById(&#39;code&#39;).value=document.getElementById(&#39;code&#39;).value + &#39;0&#39;;">0</button>
        <button type="submit" style="background-color: #092980;" name="send" class="btn btn-primary py-3" onclick="">Enter</button>
    </div>
    
    
</div>



         
         
            </label=""></div>
             
            <div class="divider">
              
            </div>
          
            <p class="text-center"><b></b>
            </p> <p class="text-center">The World in your Finger Tips</p>
          </form>
                </div>
                <div style="background-color: #092980;" class="panel-footer">
                    </div>
            </center></div>
        </div>
    </div>
</div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="./file/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div> 



              
               
               
               
               
               
               
               
               
               <div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>