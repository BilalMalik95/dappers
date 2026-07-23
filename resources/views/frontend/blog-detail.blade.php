@extends('frontend.layout')
@section('content')

 <!-- ============== PAGE HERO ============== -->
<section class="section page-hero-wrap">
  <div class="container">
    <div class="page-hero-box">
      <div class="page-hero-content">
        <h1>Blog details</h1>
        <div class="breadcrumb">
          <i class="fas fa-home"></i>
          <a href="index.html">Home</a>
          <span class="sep">::</span>
          <span class="current">Blog Details</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============== BLOG DETAILS BODY ============== -->
<section class="section blog-details">
  <div class="container">

    <!-- Featured image -->
    <div class="blog-details-image">
      <img src="https://html-demo.themetechmount.com/altech/demo3/images/single-img-08.jpg" alt="Blog featured image">
    </div>

    <!-- Intro paragraph -->
    {{-- <p class="blog-details-text">
      Get the best themes and templates for the fitness and food category We strive
      to deliver best in class software solutions that generate best trailing total
      return for business services across great mission goals generating billion
      net incomeWell aware of the existing mobile app market trends to keep tabs
      on the evolving trend of the industry, to developing high gradequality at
      the top positions,to developing high gradequality at the top positions
    </p> --}}

    <!-- Quote block -->
    <div class="blog-quote">
      <span class="blog-quote-icon"><i class="fas fa-quote-right"></i></span>
      <div class="blog-quote-body">
        <p>
          Our team discussed every single detail to make sure Creatives Planet is the
          most versatile No coding skills Team discussed every single detail to make
          sure Creatives Planet is the most versatile No coding skills. Our team
          discuss every single detail to make sure Creatives Planet is the most
          versatile No coding skills.
        </p>
        <h5>Alex jhon martin</h5>
      </div>
    </div>

    <!-- Second image -->
    <div class="blog-details-image small">
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80" alt="Team meeting">
    </div>

    <!-- Body paragraph -->
    <p class="blog-details-text">
      We strive to deliver best in class software solutions that generate best
      trailing total return for business services across great mission goals
      generating billion net incomeWell aware of the existing mobile app market
      trends to keep tabs on the evolving trend of the industry, to developing
      high gradequality at the top positions,to developing high gradequality at
      the top positions.
    </p>

    <!-- Tags + Share row -->
    {{-- <div class="blog-tags-share">
      <div class="blog-tags">
        <strong>Tags:</strong>
        <a href="#">Cyber,</a>
        <a href="#">IT Solution,</a>
        <a href="#">Object</a>
      </div>
      <div class="blog-share">
        <strong>Share :</strong>
        <a href="#">Facebook,</a>
        <a href="#">Twitter,</a>
        <a href="#">Linkedin</a>
      </div>
    </div> --}}

    <!-- Leave a reply box -->
    {{-- <div class="blog-reply">
      <h3>Leave a reply</h3>
      <p>You must be <a href="#">logged in</a> to post a comment.</p>
    </div> --}}

  </div>
</section>
@endsection




