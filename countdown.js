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
    //ps is short for plural suffix.
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