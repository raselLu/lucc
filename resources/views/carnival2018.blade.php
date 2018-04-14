<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LU CSE Carnival 2018</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<style>
@font-face {
  src: url("https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300");
  font-family: 'Open Sans Condensed', sans-serif;
}
.slide__text-desc {
  font-family: 'Open Sans Condensed', sans-serif;
}

*, *:before, *:after {
  box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html, body {
  font-size: 62.5%;
  overflow: hidden;
  height: 100%;
}

body {
  background: #000;
}

svg {
  display: block;
  overflow: visible;
}

.slider-container {
  position: relative;
  height: 500px;
  margin:auto;
  user-select: none;
  cursor: all-scroll;
}

.slider-control {
  z-index: 2;
  position: absolute;
  top: 0;
  width: 12%;
  height: 500px;
  transition: opacity 0.3s;
  will-change: opacity;
  opacity: 0;
}
.slider-control.inactive:hover {
  cursor: auto;
}
.slider-control:not(.inactive):hover {
  opacity: 1;
  cursor: pointer;
}
.slider-control.left {
  left: 0;
  background: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, transparent 100%);
}
.slider-control.right {
  right: 0;
  background: linear-gradient(to right, transparent 0%, rgba(0, 0, 0, 0.5) 100%);
}

.slider-pagi {
  position: absolute;
  z-index: 3;
  left: 50%;
  bottom: 2rem;
  transform: translateX(-50%);
  font-size: 0;
  list-style-type: none;
}
.slider-pagi__elem {
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 1rem;
  height: 1rem;
  margin: 0 0.5rem;
  border-radius: 50%;
  border: 2px solid #fff;
  cursor: pointer;
}
.slider-pagi__elem:before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  width: 1.2rem;
  height: 1.2rem;
  background: #fff;
  border-radius: 50%;
  transition: transform 0.3s;
  transform: translate(-50%, -50%) scale(0);
}
.slider-pagi__elem.active:before, .slider-pagi__elem:hover:before {
  transform: translate(-50%, -50%) scale(1);
}

.slider {
  z-index: 1;
  position: relative;
  height: 500px;
}
.slider.animating {
  transition: transform 0.5s;
  will-change: transform;
}
.slider.animating .slide__bg {
  transition: transform 0.5s;
  will-change: transform;
}

.slide {
  position: absolute;
  top: 0;
  width: 100%;
  height: 500px;
  overflow: hidden;
}
.slide.active .slide__overlay,
.slide.active .slide__text {
  opacity: 1;
  transform: translateX(0);
}
.slide__bg {
  position: absolute;
  top: 0;
  left: -50%;
  width: 100%;
  height: 500px;
  background-size: cover;
  will-change: transform;
}
.slide:nth-child(1) {
  left: 0;
}
.slide:nth-child(1) .slide__bg {
  left: 0;
  background-image: url("/img/programming.jpg");
}
.slide:nth-child(1) .slide__overlay-path {
  fill: #e99c7e;
}
@media (max-width: 991px) {
  .slide:nth-child(1) .slide__text {
    background-color: rgba(233, 156, 126, 0.8);
  }
}
.slide:nth-child(2) {
  left: 100%;
}
.slide:nth-child(2) .slide__bg {
  left: -50%;
  background-image: url("/img/hack.jpg");
}
.slide:nth-child(2) .slide__overlay-path {
  fill: #303030;
}
@media (max-width: 991px) {
  .slide:nth-child(2) .slide__text {
    background-color: rgba(48, 48, 48, 0.8);
  }
}
.slide:nth-child(3) {
  left: 200%;
}
.slide:nth-child(3) .slide__bg {
  left: -100%;
  background-image: url("/img/fifa.jpg");
}
.slide:nth-child(3) .slide__overlay-path {
  fill: #29424a;
}
@media (max-width: 991px) {
  .slide:nth-child(3) .slide__text {
    background-color: rgba(41, 66, 74, 0.8);
  }
}
.slide:nth-child(4) {
  left: 300%;
}
.slide:nth-child(4) .slide__bg {
  left: -150%;
  background-image: url("/img/idea.jpg");
}
.slide:nth-child(4) .slide__overlay-path {
  fill: grey;
}
@media (max-width: 991px) {
  .slide:nth-child(4) .slide__text {
    background-color: rgba(203, 198, 195, 0.8);
  }
}
.slide__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 500px;
}
.slide__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  height: 500px;
  min-height: 810px;
  transition: transform 0.5s 0.5s, opacity 0.2s 0.5s;
  will-change: transform, opacity;
  transform: translate3d(-20%, 0, 0);
  opacity: 0;
}
@media (max-width: 991px) {
  .slide__overlay {
    display: none;
  }
}
.slide__overlay path {
  opacity: 0.8;
}
.slide__text {
  position: absolute;
  width: 25%;
  bottom: 15%;
  left: 12%;
  color: #fff;
  transition: transform 0.5s 0.8s, opacity 0.5s 0.8s;
  will-change: transform, opacity;
  transform: translateY(-50%);
  opacity: 0;
}
@media (max-width: 991px) {
  .slide__text {
    left: 0;
    bottom: 0;
    width: 100%;
    height: 20rem;
    text-align: center;
    transform: translateY(50%);
    transition: transform 0.5s 0.5s, opacity 0.5s 0.5s;
    padding: 0 1rem;
  }
}
.slide__text-heading {
  font-family: "Polar", Helvetica, Arial, sans-serif;
  font-size: 5rem;
  margin-bottom: 2rem;
}
@media (max-width: 991px) {
  .slide__text-heading {
    line-height: 10rem;
    font-size: 3.5rem;
  }
}
.slide__text-desc {
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  font-size: 1.8rem;
  margin-bottom: 1.5rem;
}
@media (max-width: 991px) {
  .slide__text-desc {
    display: none;
  }
}
.slide__text-link {
  z-index: 5;
  display: inline-block;
  position: relative;
  padding: 0.5rem;
  cursor: pointer;
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  font-size: 2.3rem;
  perspective: 1000px;
}
@media (max-width: 991px) {
  .slide__text-link {
    margin: -2rem 0 8rem;
  }
}
.slide__text-link:before {
  z-index: -1;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 500px;
  background: #000;
  transform-origin: 50% 100%;
  transform: rotateX(-85deg);
  transition: transform 0.3s;
  will-change: transform;
}
.slide__text-link:hover:before {
  transform: rotateX(0);
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  
  var $slider = $(".slider"),
      $slideBGs = $(".slide__bg"),
      diff = 0,
      curSlide = 0,
      numOfSlides = $(".slide").length-1,
      animating = false,
      animTime = 500,
      autoSlideTimeout,
      autoSlideDelay = 2600,
      $pagination = $(".slider-pagi");
  
  function createBullets() {
    for (var i = 0; i < numOfSlides+1; i++) {
      var $li = $("<li class='slider-pagi__elem'></li>");
      $li.addClass("slider-pagi__elem-"+i).data("page", i);
      if (!i) $li.addClass("active");
      $pagination.append($li);
    }
  };
  
  createBullets();
  
  function manageControls() {
    $(".slider-control").removeClass("inactive");
    if (!curSlide) $(".slider-control.left").addClass("inactive");
    if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
  };
  
  function autoSlide() {
    autoSlideTimeout = setTimeout(function() {
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 0;
      changeSlides();
    }, autoSlideDelay);
  };
  
  autoSlide();
  
  function changeSlides(instant) {
    if (!instant) {
      animating = true;
      manageControls();
      $slider.addClass("animating");
      $slider.css("top");
      $(".slide").removeClass("active");
      $(".slide-"+curSlide).addClass("active");
      setTimeout(function() {
        $slider.removeClass("animating");
        animating = false;
      }, animTime);
    }
    window.clearTimeout(autoSlideTimeout);
    $(".slider-pagi__elem").removeClass("active");
    $(".slider-pagi__elem-"+curSlide).addClass("active");
    $slider.css("transform", "translate3d("+ -curSlide*100 +"%,0,0)");
    $slideBGs.css("transform", "translate3d("+ curSlide*50 +"%,0,0)");
    diff = 0;
    autoSlide();
  }

  function navigateLeft() {
    if (animating) return;
    if (curSlide > 0) curSlide--;
    changeSlides();
  }

  function navigateRight() {
    if (animating) return;
    if (curSlide < numOfSlides) curSlide++;
    changeSlides();
  }

  $(document).on("mousedown touchstart", ".slider", function(e) {
    if (animating) return;
    window.clearTimeout(autoSlideTimeout);
    var startX = e.pageX || e.originalEvent.touches[0].pageX,
        winW = $(window).width();
    diff = 0;
    
    $(document).on("mousemove touchmove", function(e) {
      var x = e.pageX || e.originalEvent.touches[0].pageX;
      diff = (startX - x) / winW * 70;
      if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
      $slider.css("transform", "translate3d("+ (-curSlide*100 - diff) +"%,0,0)");
      $slideBGs.css("transform", "translate3d("+ (curSlide*50 + diff/2) +"%,0,0)");
    });
  });
  
  $(document).on("mouseup touchend", function(e) {
    $(document).off("mousemove touchmove");
    if (animating) return;
    if (!diff) {
      changeSlides(true);
      return;
    }
    if (diff > -8 && diff < 8) {
      changeSlides();
      return;
    }
    if (diff <= -8) {
      navigateLeft();
    }
    if (diff >= 8) {
      navigateRight();
    }
  });
  
  $(document).on("click", ".slider-control", function() {
    if ($(this).hasClass("left")) {
      navigateLeft();
    } else {
      navigateRight();
    }
  });
  
  $(document).on("click", ".slider-pagi__elem", function() {
    curSlide = $(this).data("page");
    changeSlides();
  });
  
});
</script>
</head>

<body>
    <div>
    <h1 style="color:#fff; text-align:center; font-size:60px">Leading University Computer Club</h1>
    <div class="slider-container">
      <div class="slider-control left inactive"></div>
      <div class="slider-control right"></div>
      <ul class="slider-pagi"></ul>
      <div class="slider">
        <div class="slide slide-0 active">
          <div class="slide__bg"></div>
          <div class="slide__content">
            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
              <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
            <div class="slide__text">
              <h2 class="slide__text-heading" style="font-family: 'Open Sans Condensed', sans-serif;">National Programming Contest </h2>
              <p class="slide__text-desc" style="font-family: 'Open Sans Condensed', sans-serif;"> North South University hosted this event 12 times from 1997 to 1999, 2004 to 2006, 2008 to 2011, 2013 and 2015 while Bangladesh University of Engineering and Technology hosted thrice from 2001 to 2003. East West University hosted the event in 2007.</p>
              <a  class="slide__text-link" style="font-family: 'Open Sans Condensed', sans-serif;">Learn More</a>
            </div>
          </div>
        </div>
        <div class="slide slide-1 ">
          <div class="slide__bg"></div>
          <div class="slide__content">
            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
              <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
            <div class="slide__text">
              <h2 class="slide__text-heading" style="font-family: 'Open Sans Condensed', sans-serif;">Hackathon</h2>
              <p class="slide__text-desc" style="font-family: 'Open Sans Condensed', sans-serif;">The goal of a hackathon is to create usable software. Hackathons tend to have a specific focus, which can include the programming language used, the operating system, an application, an API, or the subject and the demographic group of the programmers. In other cases, there is no restriction on the type of software being created.</p>
              <a class="slide__text-link" style="font-family: 'Open Sans Condensed', sans-serif;">Learn More</a>
            </div>
          </div>
        </div>
        <div class="slide slide-2">
          <div class="slide__bg"></div>
          <div class="slide__content">
            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
              <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
            <div class="slide__text">
              <h2 class="slide__text-heading" style="font-family: 'Open Sans Condensed', sans-serif;">Gaming Contest</h2>
              <p class="slide__text-desc" style="font-family: 'Open Sans Condensed', sans-serif;">PC games, also known as computer games or personal computer games, are video games played on a personal computer rather than a dedicated video game console or arcade machine. Their defining characteristics include a more diverse and user determined gaming hardware and software, and a generally greater capacity in input, processing, and video output.</p>
              <a class="slide__text-link" style="font-family: 'Open Sans Condensed', sans-serif;">Learn More</a>
            </div>
          </div>
        </div>
        <div class="slide slide-3">
          <div class="slide__bg"></div>
          <div class="slide__content">
            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
              <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
            <div class="slide__text">
              <h2 class="slide__text-heading" style="font-family: 'Open Sans Condensed', sans-serif;">Moving Business Forward</h2>
              <p class="slide__text-desc" style="font-family: 'Open Sans Condensed', sans-serif;">Sales is the direct result of marketing and sales data is sometimes even more important than the sales themselves. Why did they buy? What did they buy? When? Who bought? How much did it cost? Then a comparison of sales YTD or Year over Year. This analysis can optimize your ability to sell with WebCorpCo Analytics.</p>
              <a class="slide__text-link" style="font-family: 'Open Sans Condensed', sans-serif;">Learn More</a>
            </div>
          </div>
        </div>
    </div>
</div>
</div>
<h1 style="color: white;">Hello</h1>
<h1>Hello</h1>
<h1>Hello</h1>
<h1>Hello</h1>
<h1>Hello</h1>
<h1 style="color: white;">Hello</h1>
<h1>Hello</h1>
<h1>Hello</h1>
</body>
</html>