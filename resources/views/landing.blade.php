@extends('layout')
@section('content')

@include('slideshow')

@component('section', [
  'class' => 'is-dark skew-left',
  'id' => 'about'
])
<div class="small-sect">
    <h1 class="title">About</h1>
    <p>Quality Cuts is independently owned and operated offering the best lawncare to both commercial and residential properties. Quality Cuts is registered, insured and certainly qualified to fulfill all of your property maintance needs. Call, email, or
      <a href="#contact" class="scrolling">submit a request</a> to set up a fast, free estimate. </p>
</div>
@endcomponent





@component('section', [
  'class' => 'skew-right',
  'id' => 'lawnmowing'
])
<div class="small-sect">
<h1 class="title">Lawn mowing</h1>
<p>When you let Quality Cuts maintain your lawn care needs, you're not just investing in a beautiful looking lawn, you're also buying your free time back! Imagine coming home to a perfectly manicured lawn and being able to enjoy summer evenings doing as you please. Services may include mowing, bagging grass, fertilization, trimming shrubs/bushes, edging walks/drives and all services including blowing off all excess grass from walks/drives/etc.</p>
</div>
@endcomponent


@component('section', [
  'class' => 'is-success skew-right',
  'id' => 'mulch'
])
<div class="small-sect">
<h1 class="title">Mulch & Stone Delivery</h1>
<p>Let us shovel it for you! Nothing helps add curb appeal to your property then freshening up of mulch or decorative rock delivered and installed.</p>
</div>

@endcomponent

@component('section', [
  'class' => 'skew-left',
  'id' => 'springfall'
])
<div class="small-sect">
<h1 class="title">Spring & Fall Cleanup</h1>
<p>Leavs in the fall? Debris in the spring? Whatever cleaning up your lawn needs, we can make it look its best.</p>
</div>

@endcomponent



@component('section', [
  'class' => 'is-success skew-left',
  'id' => 'snowremoval'
])
<div class="small-sect">
<h1 class="title">Snow Removal</h1>
<p>Servicing commerical and residential properties, we can remove snow and salt from sidewalks small driveways.</p>
</div>

@endcomponent

@component('section', [
  'class' => 'skew-right',
  'id' => 'photos'
])
<div class="has-text-centered">
  <h1 class="title has-text-left">Photos</h1>
  <div class="columns">

    <div class="column">
      <img src="/images/grass.jpg">
    </div>

    <div class="column">
      <img src="/images/gardening.jpg">
    </div>

    <div class="column">
      <img src="/images/grass3.jpg">
    </div>
  </div>
  <a class="button is-large is-success" href="/photos">View Photo Gallery</a>
</div>

@endcomponent


@component('section', [
  'class' => 'is-dark skew-right',
  'id' => 'contact'
])
@include('contact')
@endcomponent



@endsection
