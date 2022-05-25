<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <script src=" {{ asset('js/app.js') }} "></script>
    <title>Movies</title>
</head>

<body>
    <div class="container d-flex flex-wrap">
        @foreach ($movies as $movie)
        <div class="card m-5" style="width: 18rem;">
           
            <div class="card-body">
                <h5 class="card-title">Title: {{ $movie->title }}</h5>
                <p class="card-text">Original title: {{ $movie->original_title }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
                <li class="list-group-item">Date: {{ $movie->date }}</li>
                <li class="list-group-item">Vote: {{ $movie->vote }}</li>
            </ul>
            
        </div>
        @endforeach
    </div>
</body>

</html>
