<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Is it Burger Wednesday?</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="DESCRIPTION" content="Service which tells you if it's burger Wednesday" />
<meta name="KEYWORDS" content="burger, cheeseburger, hamburger, delicious, bacon cheeseburger, would you like fries with that?" />

<script type="text/javascript">
var today = new Date();
var dow = today.getDay();
var wednesday = 3;
var isitburgerwednesday = dow == wednesday;
if(!isitburgerwednesday) {
  var daysuntilnextburgerwednesday = wednesday - dow; 
  if (dow > wednesday) {
    daysuntilnextburgerwednesday = 7 - (dow - wednesday);
  }
}
var ie6 = false;
</script>
<script type="text/javascript" charset="utf-8" src="countdown.js"/>

<!--[if IE 6]>
<script type="text/javascript">
var ie6 = true;
</script>
<![endif]-->

<style type="text/css">
.burger_wednesday {
 background-image: url(hamburger.jpg);
}

p {
      font-size: 15em;
      text-align: center;
      display: none;
      width: 100%;
}
p.yes {
    color: green;
}
p.no {
   color: red;
   margin-bottom: 0px;
}
p.disabled {
     font-size: 5em;
     color: gray;
}
#timeleft {
  text-align: center;
  font-weight: bold;
}
</style>
</head>
<body>

<p class="yes" id="yes">Yes</p>
<p class="no" id="no">No</p>
<div id="timeleft">Time left until NEXT Burger Wednesday: <span id="countdown"></span></div>
<p class="disabled" id="disabled">Sorry, isitburgerwednesday.com was designed specifically to not work with your browser.</p>

<script type="text/javascript">
if (ie6) {
    document.getElementById("disabled").style.display='block';
} else if (isitburgerwednesday) {
   document.getElementById("yes").style.display='block';
   document.getElementsByTagName("body")[0].className = "burger_wednesday";
} else {
   document.getElementById("no").style.display='block';
   countdown(today.getFullYear(), today.getMonth(), today.getDate() + daysuntilnextburgerwednesday, 0, 0);
}
</script>
<noscript>
<? if(date("w") == 3) { ?>
<p class="yes" style="display:block">Yes</p>
<? } else { ?>
<p class="no" style="display:block">No</p>
<? } ?>
</noscript>
</body>
</html>