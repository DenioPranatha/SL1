@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/achievement.css">
@endsection

@section('content')

{{-- "dir" => "tgc.jpg",
"title" => "3rd Place",
"desc" => "TGC In Action Essay Competition IPB University 2018",
"category" => "Competition",
"fullDesc" => "" --}}
<?php $a = ""; ?>
@if ($card["category"]=='Competition')
  <?php $a = "gold"; ?>
@elseif ($card["category"]=='Project')
  <?php $a = "silver"; ?>
@elseif ($card["category"]=='Organization')
  <?php $a = "bronze"; ?>
@endif

<div class="blue blue9" data-aos="slide-left" data-aos-duration="1000"></div>
<div class="blue blue10" data-aos="slide-left" data-aos-duration="2000"></div>
<div class="blue blue11" data-aos="slide-left" data-aos-duration="1500"></div>
<div class="blue blue12" data-aos="slide-right" data-aos-duration="2000"></div>
<div class="container">
    <div class="row1">
        <div class="desc-img" style="background-image: url('img/{{ $card['dir'] }}')">
        </div>
        <div class="blc-text1">
            <h1 class="headline" data-aos="fade" data-aos-duration="1500" data-aos-delay="500"><i>{{ $card['title'] }}</i></h1>
            <h1 class="subheadline" data-aos="fade" data-aos-duration="1500" data-aos-delay="500">{{ $card['desc'] }}</h1>
            <h3 class="bold lead mt-0" data-aos="fade" data-aos-duration="1500" data-aos-delay="500">Category: <span class="{{ $a }}">{{ $card['category'] }}</span></h3>
            <h3 class="detail" data-aos="fade" data-aos-duration="1000" data-aos-delay="1500">{{ $card['fullDesc'] }}</h3>
        </div>
    </div>
</div>

<div class="jumbotron4">
    <p class="lead text-center">You are currently in achievement detail page. Go back to <a href="/profile">profile</a></p>
    <hr class="my-4">
</div>

@endsection
