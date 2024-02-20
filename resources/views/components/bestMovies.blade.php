<section @props(['tvSeries']) class="tv-series">
    <div class="container">

        <p class="section-subtitle">Best TV Series</p>
        <h2 class="h2 section-title">World Best TV Series</h2>

        <ul class="movies-list">
            @foreach($tvSeries as $tvSeries)
            <li>
                <div class="movie-card">
                    <a href="                        {{ route('movie.show', $movie->id) }}
                        ">
                        <figure class="card-banner">
                            <img src="{{ $tvSeries->image }}" alt="{{ $tvSeries->title }} movie poster">
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