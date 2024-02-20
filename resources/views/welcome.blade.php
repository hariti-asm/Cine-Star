<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filmlane - Best movie collections</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="./index.html" class="logo">
        <img src="images/logo.svg" alt="Filmlane logo">
      </a>

      <div class="header-actions">

        <button class="search-btn">
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <div class="lang-wrapper">
          <label for="language">
            <ion-icon name="globe-outline"></ion-icon>
          </label>

          <select name="language" id="language">
            <option value="en">EN</option>
            <option value="au">AU</option>
            <option value="ar">AR</option>
            <option value="tu">TU</option>
          </select>
        </div>

        <button class="btn btn-primary">Sign in</button>

      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="./index.html" class="logo">
            <img src="images/logo.svg" alt="Filmlane logo">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="./index.html" class="navbar-link">Dashboard</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Movie</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Tv Show</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Web Series</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Pricing</a>
          </li>

        </ul>

        <ul class="navbar-social-list">

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Filmlane</p>

            <h1 class="h1 hero-title">
              Unlimited <strong>Movie</strong>, TVs Shows, & More.
            </h1>

            <div class="meta-wrapper">

              <div class="badge-wrapper">
                <div class="badge badge-fill">PG 18</div>

                <div class="badge badge-outline">HD</div>
              </div>

              <div class="ganre-wrapper">
                <a href="#">Romance,</a>

                <a href="#">Drama</a>
              </div>

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2022">2022</time>
                </div>

                <div>
                  <ion-icon name="time-outline"></ion-icon>

                  <time datetime="PT128M">128 min</time>
                </div>

              </div>

            </div>

            <button class="btn btn-primary">
              <ion-icon name="play"></ion-icon>

              <span>Watch now</span>
            </button>

          </div>

        </div>
      </section>





      <!-- 
        - #UPCOMING
      -->

      <section class="upcoming">
        <div class="container">

          <div class="flex-wrapper">

            <div class="title-wrapper">
              <p class="section-subtitle">Online Streaming</p>

              <h2 class="h2 section-title">Upcoming Movies</h2>
            </div>

            <ul class="filter-list">

              <li>
                <button class="filter-btn">Movies</button>
              </li>

              <li>
                <button class="filter-btn">TV Shows</button>
              </li>

              <li>
                <button class="filter-btn">Anime</button>
              </li>

            </ul>

          </div>

          <ul class="movies-list has-scrollbar">
            @foreach($movies as $movie)
            <li>
                <div class="movie-card">
                    {{-- {{ route('movie.details', $movie->id) }} --}}
                    <a href="">
                        <figure class="card-banner">
                            <img src="/{{ ($movie->image) }}" alt="{{ $movie->title }} movie poster">
                        </figure>
                    </a>
        
                    <div class="title-wrapper">
                        {{-- {{ route('movie.details', $movie->id) }} --}}
                        <a href="">
                            <h3 class="card-title">{{ $movie->title }}</h3>
                        </a>
        
                        <time datetime="{{ $movie->publication_date }}">{{ date('Y', strtotime($movie->publication_date)) }}</time>
                    </div>
        
                    <div class="card-meta">
                        <div class="badge badge-outline">{{ $movie->quality }}</div>
        
                        <div class="duration">
                            <ion-icon name="time-outline"></ion-icon>
                            <time datetime="PT{{ $movie->running_time }}M">{{ $movie->running_time }} min</time>
                        </div>
        
                        <div class="rating">
                            <ion-icon name="star"></ion-icon>
                            <data>{{ $movie->rating }}</data>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service">
        <div class="container">

          <div class="service-banner">
            <figure>
              <img src="images/service-banner.jpg" alt="HD 4k resolution! only $3.99">
            </figure>

            <a href="images/service-banner.jpg" download class="service-btn">
              <span>Download</span>

              <ion-icon name="download-outline"></ion-icon>
            </a>
          </div>

          <div class="service-content">

            <p class="service-subtitle">Our Services</p>

            <h2 class="h2 service-title">Download Your Shows Watch Offline.</h2>

            <p class="service-text">
              Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of
              passages of lorem
              Ipsum available, but the majority have suffered alteration in some injected humour.
            </p>

            <ul class="service-list">

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <ion-icon name="tv"></ion-icon>
                  </div>

                  <div class="card-content">
                    <h3 class="h3 card-title">Enjoy on Your TV.</h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                  </div>

                </div>
              </li>

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <ion-icon name="videocam"></ion-icon>
                  </div>

                  <div class="card-content">
                    <h3 class="h3 card-title">Watch Everywhere.</h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                  </div>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #TOP RATED
      -->

      <section class="top-rated">
        <div class="container">
            <p class="section-subtitle">Online Streaming</p>
            <h2 class="h2 section-title">Top Rated Movies</h2>
    
            <ul class="filter-list">
                <!-- Filter buttons -->
                <li><button class="filter-btn">Movies</button></li>
                <li><button class="filter-btn">TV Shows</button></li>
                <li><button class="filter-btn">Documentary</button></li>
                <li><button class="filter-btn">Sports</button></li>
            </ul>
    
            <ul class="movies-list">
                <!-- Iterate over top rated movies -->
                @foreach($topRatedMovies as $movie)
                <li>
                    <div class="movie-card">
                        <a href="./movie-details.html">
                            <figure class="card-banner">
                                <img src="{{ $movie->image }}" alt="{{ $movie->title }} movie poster">
                            </figure>
                        </a>
    
                        <div class="title-wrapper">
                            <a href="./movie-details.html">
                                <h3 class="card-title">{{ $movie->title }}</h3>
                            </a>
    
                            <time datetime="{{ $movie->publication_date }}">{{ date('Y', strtotime($movie->publication_date)) }}</time>
                        </div>
    
                        <div class="card-meta">
                            <div class="badge badge-outline">{{ $movie->quality }}</div>
    
                            <div class="duration">
                                <ion-icon name="time-outline"></ion-icon>
                                <time datetime="PT{{ $movie->running_time }}M">{{ $movie->running_time }} min</time>
                            </div>
    
                            <div class="rating">
                                <ion-icon name="star"></ion-icon>
                                <data>{{ $movie->rating }}</data>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    





      <!-- 
        - #TV SERIES
      -->

      <section class="tv-series">
        <div class="container">
    
            <p class="section-subtitle">Best TV Series</p>
            <h2 class="h2 section-title">World Best TV Series</h2>
    
            <ul class="movies-list">
                @foreach($tvSeries as $tvSeries)
                <li>
                    <div class="movie-card">
                        <a href="./movie-details.html">
                            <figure class="card-banner">
                                <img src="{{ $tvSeries->image }}" alt="{{ $tvSeries->title }} movie poster">
                            </figure>
                        </a>
    
                        <div class="title-wrapper">
                            <a href="./movie-details.html">
                                <h3 class="card-title">{{ $tvSeries->title }}</h3>
                            </a>
    
                            <time datetime="{{ $tvSeries->publication_date }}">{{ $tvSeries->publication_date }}</time>
                        </div>
    
                        <div class="card-meta">
                            <div class="badge badge-outline">{{ $tvSeries->quality }}</div>
    
                            <div class="duration">
                                <ion-icon name="time-outline"></ion-icon>
                                <time datetime="{{ $tvSeries->running_time }}">{{ $tvSeries->running_time }} min</time>
                            </div>
    
                            <div class="rating">
                                <ion-icon name="star"></ion-icon>
                                <data>{{ $tvSeries->rating }}</data>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
    
        </div>
    </section>
    




      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="cta-title">Trial start first 30 days.</h2>

            <p class="cta-text">
              Enter your email to create or restart your membership.
            </p>
          </div>

          <form action="" class="cta-form">
            <input type="email" name="email" required placeholder="Enter your email" class="email-field">

            <button type="submit" class="cta-form-btn">Get started</button>
          </form>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <x-footer></x-footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>