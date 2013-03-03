<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" media="all" href="shadow.css" />
    <link rel="stylesheet" type="text/css" media="screen" title="User Defined Style"
    href="<?php echo (!$sitestyle_shadow)?'shadow':$sitestyle_shadow ?>.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="Colored shadow"
    href="./colorshadow.css" />
    <title>Dynamic css box with shadow</title>
    <script type="text/javascript" src="functions.js"></script>
  </head>
  <body><div style="float: right;margin:0px 10px;"><a style="color: #888888;" href="http://www.floatinginspace.za.org">home</a></div>
    <div class="container">
      <div class="tlc"></div><div class="tll"></div><div class="tlt"></div>
      <div class="trc"></div><div class="trr"></div><div class="trt"></div>
      <div class="blc"></div><div class="bll"></div><div class="blb"></div>
      <div class="brc"></div><div class="brr"></div><div class="brb"></div>
      <div class="containerh">
        <div class="containerw">
          <div class="t"></div><div class="b"></div>
          <div class="l"></div><div class="r"></div>
          <div class="content">
            <h2>Dynamic box with shadow</h2>
            <p class="center">This technique uses css to have a box with dynamic width and height and a
            shadow/border. It should work in any standard complaiant browser. Go ahead and change the width of
            the browser to see. The shadow can be quite complex, with different images for the corners, the sides 
            next to the corners and the sides.</p>
            <p class="center">note: I use some png images with 8 bit transparency on this page. If your browser
            does not support it, the shadows might not look that good. If that is the case, please upgrade to a
            browser that displays variable transparency correctly.
            <br />I can recommend 
            <a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=108039&amp;t=84">
              <img class="ff" alt="Firefox button" title="Get Firefox!" src="../firefox_button.png" width="80"
              height="15" />
            </a></p>
          </div>
        </div>
      </div>
    </div>
    <p class="center">
      <a href="switch.php?set=colorshadow">click here to change to colored shadow style to see the different
      regions.</a>
      <br />
      <a href="switch.php?set=shadow">click here to change to the default style.</a>
      <br />
      <a href="javascript:changeSheets(2)">normal (js)</a>
      <br />
			<a href="javascript:changeSheets(3)">color (js)</a>
    </p>
    <p class="center" ><span style="font-size: x-small;color:#aaaaaa;"><!-- <a href="http://www.purpleray.za.net" style="color:#aaaaaa;font-size:x-small"> -->
      Opera 8.01 does not display the side div's correctly, this is a css bug.<!-- </a> --><br />
      IE also makes a mess of things.</span>
      
    </p>
    <div class="google_bottom center">
      <script type="text/javascript" src="../google_atr_unit.js"></script>
      <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script><br />
      <script type="text/javascript" src="../google_atr_bigbanner.js"></script>
      <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>      
    </div>
  </body>
</html>
