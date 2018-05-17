
<?php
  function image ($i) {
    return "background-image: url(/images/$i)";
  }

 ?>


<div class="slideshow-component" id="top">
  <div id="static-text" class="container center-horz title">
    <img src="/images/logo-big-white.png" alt="quality cuts lawn care logo" id="logo">
  </div>
  <div class="slideshow hero is-fullheight">
    <div class="slide-image hero-body" style="{{ image('qclctruck.png') }}"></div>
    <div class="slide-image hero-body" style="{{ image('snowplow2.jpg') }}"></div>

    <div class="slide-image hero-body" style="{{ image('qclclawnmower.png') }}"></div>
    <div class="slide-image hero-body" style="{{ image('grass.png') }}"></div>
  </div>

  <div class="scroll-continue">
    <a href="#about" class="scrolling"><i class="far fa-angle-double-down"></i></a>
  </div>
</div>
