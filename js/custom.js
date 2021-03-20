
// Set the date we're counting down to
var date_begin = $('#event_date').text();
var countDownDate = new Date("january 14, 2021 08:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    var usaTime = new Date().toLocaleString("en-US", {timeZone: "America/Chicago"});
    var dtx = new Date( usaTime );
    dtx.setHours(dtx.getHours() + 0);
    
  // Find the distance between now and the count down date
var distance = countDownDate - dtx;
  //var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"


  if(days <= 0) { days = 0; }
  if(hours <= 0) { hours = 0; }
  if(minutes <= 0) { minutes = 0; }
  if(seconds <= 0) { seconds = 0; }

  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer-box").innerHTML = "EXPIRED";
  }
}, 1000);




