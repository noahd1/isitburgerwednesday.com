<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Is it Burger Wednesday?</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="DESCRIPTION" content="Service which tells you if it's burger Wednesday" />
<meta name="KEYWORDS" content="burger, cheeseburger, hamburger, delicious, bacon cheeseburger, would you like fries with that?" />

<script type="text/javascript">

function countdown(year, month, day, hour, minute) {   
 
  //Convert both today's date and the target date into miliseconds.
  var Todays_Date = (new Date()).getTime();                                 
  var Target_Date = (new Date(year, month, day, hour, minute, 00)).getTime(); 

  //Find their difference, and convert that into seconds.
  var Time_Left = Math.round((Target_Date - Todays_Date) / 1000);

  if(Time_Left < 0) {
    Time_Left = 0;
  }
 
  if(Time_Left == 0) {
    window.location.href = '';
  } else {
    var countdown = document.getElementById("countdown");
    var days = Math.floor(Time_Left / (60 * 60 * 24));
    Time_Left %= (60 * 60 * 24);
    var hours = Math.floor(Time_Left / (60 * 60));
    Time_Left %= (60 * 60);
    var minutes = Math.floor(Time_Left / 60);
    Time_Left %= 60;
    var seconds = Time_Left;

    var dps = 's'; var hps = 's'; var mps = 's'; var sps = 's';
    if(days == 1) dps ='';
    if(hours == 1) hps ='';
    if(minutes == 1) mps ='';
    if(seconds == 1) sps ='';

    countdown.innerHTML = days + ' day' + dps + ' ';
    countdown.innerHTML += hours + ' hour' + hps + ' ';
    countdown.innerHTML += minutes + ' minute' + mps + ' and ';
    countdown.innerHTML += seconds + ' second' + sps;

    //Recursive call, keeps the clock ticking.
    setTimeout('countdown(' + year + ',' + month + ',' + day + ',' + hour + ',' + minute + ');', 1000);    
  }

}

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
  display: none;
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
   document.getElementById("timeleft").style.display='block';
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
