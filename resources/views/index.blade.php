<!-- @extends('layouts.app')


@section('content')

    <h1 class='text-center'>Movies:</h1>
    <div class="movies">
        <div class="container">
            <div class="row row-cols-5 gy-2">
                @forelse($movies as $movie)
                <div class="col text-center bg-danger">
                    <div class="card bg-primary">
                        <h4 class='bg-warning'>{{ $movie->title }}</h4>
                        <img src="https://picsum.photos/200/" alt="{{ $movie->title }}">
                        <h5>{{ $movie->original_title }}</h5>
                        <p><strong>Nationality:</strong> {{ $movie->nationality}}</p>
                        <p><strong>Release Date:</strong> {{ $movie->date }}</span></p>
                        <p><strong>Movie vote:</strong> {{ $movie->vote }}</span></p>

                    </div>
                </div>
                @empty
                    <div class="col">
                    <p>No movies to show</p>
                    </div>
            </div>
            @endforelse
        </div>
    </div>
@endsection -->
