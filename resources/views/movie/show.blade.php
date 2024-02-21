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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="#top">

    <!-- Your header content goes here -->
    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
                <!-- Modal content -->
            <div class="relative bg-gray-800 rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-700">
                    <h3 class="text-xl font-semibold text-white">
                        Choose a Seat
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-16 text-white md:p-5 space-y-4">

                    <div class="flex gap-2 justify-between items-center">
                        <div class="flex gap-2 items-center ">
                    <div class="bg-white w-full rounded-full" style="width: 10px; height: 10px"></div>
                    <span class="text-white">Available</span>
                        </div>

                        <div class="flex gap-2 items-center ">
                        <div class="bg-red-600 w-full rounded-full" style="width: 10px; height: 10px"></div>
                        <span class="text-white">Reserved</span>
                        </div>

                        <div class="flex gap-2 items-center ">
                        <div class="bg-yellow-300 w-full rounded-full" style="width: 10px; height: 10px"></div>
                        <span class="text-white">Selected</span>
                        </div>

                    </div>

                    <div class="flex flex-wrap gap-2">

                            <div class="w-12 h-12 flex justify-center items-center  rounded-lg">
                                <button>
                                <svg width="31" height="27" viewBox="0 0 31 27" fill="none" xmlns="http://www.w3.org/2000/svg"> <rect y="18.1118" width="30.5217" height="8.8882" rx="4.4441" fill="#D9D9D9"/> <rect x="4.69565" width="21.1304" height="20.4596" rx="3" fill="#D9D9D9"/> </svg>
                                </button>
                            </div>
                    </div>


                </div>
                <!-- Modal footer -->

            </div>
        </div>
    </div>


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

                            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="btn btn-primary">
                              {{-- <ion-icon name="play"></ion-icon> --}}

                              <span>Book Movie</span>
                            </button>

                          </div>


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
