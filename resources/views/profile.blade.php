@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/style.css">
@endsection

@section('content')
    <div class="blue blue1" data-aos="slide-right" data-aos-duration="1000"></div>
    <div class="blue blue3" data-aos="slide-right" data-aos-duration="2000"></div>
    <div class="container">
      <div class="blue blue2" data-aos="slide-left" data-aos-duration="1500"></div>
      <div class="row">
        <div class="im blc">
          <img src="img/face.png" width="360px" class="center">
        </div>
        <div class="blc blc-text">
          <h1 class="display-4" data-aos="fade" data-aos-duration="1500" data-aos-delay="500">Denio Pranatha</h1>
          <h3 class="bold lead mt-0" data-aos="fade" data-aos-duration="1500" data-aos-delay="500">College Student | Graphic Designer</h3>
          <h3 class="lead ent" data-aos="fade" data-aos-duration="1000" data-aos-delay="1500">"Whatever you are, be a good one"</h3>
        </div>
      </div>
    </div>


    <div class="jumbotron1 text-center">
      <h1 class="display-4 smaller" data-aos="fade-up" data-aos-duration="1000">About</h1>
      <br>
      <p class="lead" data-aos="fade-up" data-aos-duration="1000">Energetic and inventive college student with superb problem-solving, communication, and analytical abilities. Seeking carreer advancement in computer science and engineering field. I master backend development programming languages (e.g. PHP, mySQL), data processing languages (e.g. C, Python, RStudio, Tableau), and UI/UX design tools (e.g. CSS, Figma, Adobe Illustrator). Over the span of 5 years, I participated in science community, exchange study, and several invention festivals.</p>
    </div>

    <div class="jumbotron jumbotron-fluid text-center">
      <div class="container">
        <h1 class="display-4 smaller" data-aos="fade-up" data-aos-duration="1000">Portfolio</h1>

      </div>
    </div>

    <div class="blue blue4" data-aos="slide-right" data-aos-duration="1000"></div>
    <div class="blue blue5" data-aos="slide-left" data-aos-duration="1000"></div>

    <div id="carouselExample" class="carousel">
      <div class="carousel-inner">
        @foreach($cards as $card)
          <?php $a = ""; ?>
          @if ($card["category"]=='Competition')
            <?php $a = "gold"; ?>
          @elseif ($card["category"]=='Project')
            <?php $a = "silver"; ?>
          @elseif ($card["category"]=='Organization')
            <?php $a = "bronze"; ?>
          @endif
          <div class="carousel-item">
            <a href="/{{ $card["id"] }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="wrapper">
                        <img src="img/{{ $card["dir"] }}" alt="...">
                    </div>
                    <div class="card-body text-center {{ $a }}">
                        <p class="card-text display5">{{ $card["title"] }}</p>
                        <p class="card-text">{{ $card["desc"] }}</p>
                    </div>
                </div>
            </a>
          </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="jumbotron3 text-center justify-content-center">
      <h1 class="display-4 smaller" data-aos="fade-in" data-aos-duration="1000">Skills</h1>

      <div class="bar-cont" data-aos="zoom-right" data-aos-duration="1000">
        <div class="icon-wrapper"><img src="img/sql.png" alt=""></div>
        <div class="bar-capt">SQL</div>
        <div class="progress progress-striped active">
          <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 93%;"></div>
        </div>
      </div>

      <div class="bar-cont"data-aos="zoom-right" data-aos-duration="1000" data-aos-delay="300">
        <div class="icon-wrapper"><img src="img/php.png" alt=""></div>
        <div class="bar-capt">PHP</div>
        <div class="progress progress-striped active">
          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
        </div>
      </div>

      <div class="bar-cont" data-aos="zoom-right" data-aos-duration="1000" data-aos-delay="600">
        <div class="icon-wrapper"><img src="img/html.png" alt=""></div>
        <div class="bar-capt">HTML/CSS</div>
        <div class="progress progress-striped active">
          <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 82%;"></div>
        </div>
      </div>

      <div class="bar-cont" data-aos="zoom-right" data-aos-duration="1000" data-aos-delay="900">
        <div class="icon-wrapper"><img src="img/py.png" alt=""></div>
        <div class="bar-capt">Python</div>
        <div class="progress progress-striped active">
          <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
        </div>
      </div>
    </div>

    <div class="blue blue6" data-aos="slide-right" data-aos-duration="1000"></div>
    <div class="blue blue7" data-aos="slide-left" data-aos-duration="1000"></div>
    <div class="blue blue8" data-aos="slide-up" data-aos-duration="1000"></div>

    <div class="jumbotron4 text-center">
      <h1 class="display-4 smaller" data-aos="zoom-in" data-aos-duration="1000">Organization Involvements</h1>
      <p class="lead" data-aos="zoom-right" data-aos-duration="1000">The organizations in which I have participated</p>
      <div class="org-container">
        <img src="img/kirs.png" width="120px" data-aos="zoom-in" data-aos-duration="1000">
        <img src="img/bpa.jpg" width="120px" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
        <img src="img/afs.png" width="120px" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="800">
        <img src="img/ti12.png" width="120px" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1200">
        <img src="img/pm.png" width="120px" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1600">
      </div>
    </div>
@endsection

