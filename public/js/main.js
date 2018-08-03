// Custom JS

// radeanf@gmail.com


var bgs = document.getElementsByClassName("bgs");
var subHeading = document.getElementById("subHeading");

TweenMax.ticker.fps(60);
TweenMax.from(bgs, 12,{ backgroundSize: '100%'})
TweenMax.to(bgs, 12,{ backgroundSize: '105%'})
// TweenMax.to(subHeading, 10,{ opacity: 0})
