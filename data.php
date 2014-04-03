<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class=" ">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="H.E.A.R.T" />
  <meta name="keywords" content="h.e.a.r.t, home energy analyzer," />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="chrome=IE8" />
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
  
  <title>H.E.A.R.T</title>
  <meta name="description" content="H.E.A.R.T systems will help you get a start on saving money on your electricity bill"></meta>
 <link rel="icon" type="image/png" href="http://openclipart.org/image/800px/svg_to_png/135571/OCAL_Favorites_Icon_Selected_Green.png">


  <script type="text/javascript">
    var path = '';
    var mediaUrl = '';
    var preload = {};
  
    preload.account = {};
    preload.foreverSession = {};
  
    var DEBUG = false;
    var STRIPE_PUB_API_KEY = 'pk_phnG9Y3BlUIYXVpH1gkMOJ25RGbsI';
    var TITLE_APPEND = ' - H.E.A.R.T';
    var PARTNER_ENVIRONMENT = null;
    var PERSONAS = [""];
    
  </script>

<script type="text/javascript">
window.tests = window.tests || {};
</script>

  <!-- css pipeline -->
  
  <link href="app.css" rel="stylesheet" type="text/css" />
  <!-- /css pipeline -->

<script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script></head>

<body>

<div class="topbar hide">
   <h1></h1>
</div>

<div id="header" class="none">
  <div class="container">

<br>
      <a href="login2.html">Log Out</a>
    </span>
    <span class="sync hide">Loading...</span>

        <div class="links-container">
	<ul class="links">
	   <li><a href="registration2.html" class="button">Register</a></li>
<li><a href="login2.html" class="button">Log In</a></li></div>
	</ul>

</div>
  </div>
</div>

  <div id="app" class="app">
    

<div class="row cover" style="background-image:url(https://scontent-a-iad.xx.fbcdn.net/hphotos-ash3/t31.0-8/1909155_10152353707256079_1106097854_o.jpg);height:400px;background-position:center 40%;">
</div>
<br>
<center>

 <h2>User Data</h2>
 
<form id="myForm" action="data.php">
      
          <button id="submit">Show Data</button>

        </form>

<br>

<?php
      include_once ('db.php');

$result = mysql_query("SELECT * FROM energy");

while($row = mysql_fetch_array($result))
  {
  echo $row['power'];
  echo "<br>";
  }

	 mysql_close ();
?>

<br>

<form id="myForm" action="showgraph.html">
      
          <button id="submit">Show Graph</button>

        </form>
<br>
<br>

</div>

<br>
<br>

<style>
table,th,td
{

border-collapse:collapse;
border:;
}
th,td
{
padding:5px;
}
th,td
{
text-align:center;
}

</style>
 
<!-- js pipeline -->

<script type="text/javascript" src="https://zapier.cachefly.net/static/Cp8qm4/build/external.js" charset="utf-8"></script>

  <script type="text/javascript" src="https://zapier.cachefly.net/static/Cp8qm4/build/app.js" charset="utf-8"></script>
  <script type="text/javascript" src="https://zapier.cachefly.net/static/Cp8qm4/build/templates.js" charset="utf-8"></script>

<!-- /js pipeline -->


<script type="text/javascript">
setTimeout(function() {
  
  var stylesheet = document.createElement('link');
  stylesheet.href = 'https://zapier.cachefly.net/static/Cp8qm4/build/service-sprites.css';
  stylesheet.rel = 'stylesheet';
  stylesheet.type = 'text/css';
  document.getElementsByTagName('head')[0].appendChild(stylesheet);
  

  var stylesheet = document.createElement('link');
  stylesheet.href = '/generated/sprites.css';
  stylesheet.rel = 'stylesheet';
  stylesheet.type = 'text/css';
  document.getElementsByTagName('head')[0].appendChild(stylesheet);
}, 0);
</script>

    <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27002928-1']);
  _gaq.push(['_setDomainName', 'zapier.com']);
  // _gaq.push(['_trackPageview']); dont track pageload

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27002928-2', 'zapier.com');
  // ga('send', 'pageview'); dont track page load
</script>
    
    
  
  <script type="text/javascript">

  window.onload = function() {

    // viewportKey is basically from the account you create
    window.viewportApiKey = 'd61ae0c0-704b-11e2-8d3a-f77f01b9c359';
    
      window.viewportUrl = 'https://viewport.zapier.com:8443';
    

    
      window.viewportName = "Determined Herring"; // set this to override default geolocation identifer
    

    (function() {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;

      
        s.src = 'https://viewport.zapier.com/assets/static/js/build.js?viewport=js';
      

      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
     })();

  }

  </script>


<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"js-agent.newrelic.com/nr-100.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-5.newrelic.com","c342879a4c","1492474","M1ZRYEQCXktZUkNdCgocdUFYAERRV18YRgoLR2xCXwZHSwJQVVsQEA==",0,26,new Date().getTime(),"","","","",""]);</script></body>
</html>




