<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->title }} {{ $movie->publication_date }}</title>

    <!-- 
        - favicon
      -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
        - custom css link
      -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- 
        - google font link
      -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="#top">

    <!-- Your header content goes here -->

    <main>
        <article>

        

            <section class="movie-detail">
                <div class="container">

                    <figure class="movie-detail-banner">

                        <img src="/{{ $movie->image }}" alt="{{ $movie->title }} movie poster">

                        <button class="play-btn">
                            <ion-icon name="play-circle-outline"></ion-icon>
                        </button>

                    </figure>

                    <div class="movie-detail-content">

                        <p class="detail-subtitle">New Episodes</p>

                        <h1 class="h1 detail-title">
                            {{ $movie->title }}
                        </h1>

                        <div class="meta-wrapper">

                            <div class="badge-wrapper">
                                <div class="badge badge-fill">{{ $movie->rating }}</div>

                                <div class="badge badge-outline">{{ $movie->quality }}</div>
                            </div>

                            <div class="ganre-wrapper">
                                @foreach($movie->genre as $genre)
                                {{-- @dd($movie->genre) --}}
                                <a href="#">{{ $movie->genre ? $movie->genre->name : 'No genre available' }}
                                    ,</a>
                                @endforeach
                            </div>

                            <div class="date-time">

                                <div>
                                    <ion-icon name="calendar-outline"></ion-icon>

                                    <time datetime="{{ $movie->publication_date }}">{{ $movie->publication_date }}</time>
                                </div>

                                <div>
                                    <ion-icon name="time-outline"></ion-icon>

                                    <time datetime="PT{{ $movie->running_time }}M">{{ $movie->running_time }} min</time>
                                </div>

                            </div>

                        </div>

                        <p class="storyline">
                            {{ $movie->description }}
                        </p>

                        <div class="details-actions">

                            <button class="share">
                              <ion-icon name="share-social"></ion-icon>
              
                              <span>Share</span>
                            </button>
              
                            <div class="title-wrapper">
                              <p class="title">Prime Video</p>
              
                              <p class="text">Streaming Channels</p>
                            </div>
              
                            <button class="btn btn-primary">
                              <ion-icon name="play"></ion-icon>
              
                              <span>Watch Now</span>
                            </button>
              
                          </div>
                          <a href="./images/movie-4.png" download class="download-btn">
                            <span>Download</span>
              
                            <ion-icon name="download-outline"></ion-icon>
                          </a>

                        <!-- Add your download button here -->

                    </div>

                </div>
            </section>

            <section class="tv-series">
                <div class="container">
            
                    <p class="section-subtitle">Best TV Series</p>
                    <h2 class="h2 section-title">World Best TV Series</h2>
            
                    <ul class="movies-list">
                        @foreach($tvSeries as $tvSeries)
                        <li>
                            <div class="movie-card">
                                <a href="{{ route('movie.show', $movie->id) }}">
                                    <figure class="card-banner">
                                        <img src="../{{ $tvSeries->image }}" alt="{{ $tvSeries->title }} movie poster">
                                    </figure>
                                </a>
            
                                <div class="title-wrapper">
                                    <a href="                        {{ route('movie.show', $movie->id) }}
                                        ">
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

        </article>
        <x-footer></x-footer>
    </main>

    <!-- Your go to top button goes here -->

    <!-- 
        - custom js link
      -->
    <script src="/js/script.js"></script>

    <!-- 
        - ionicon link
      -->
    <script type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
