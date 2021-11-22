<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <h4 class="text-center mt-5"> Article Lists </h4>

            <div class="my-5">
                    <div class="card mb-3">
                        <div class="card-body">

                            <h4>{{ $article->title }}</h4>
                            <p>
                                {{ $article->description }}
                            </p>



                            <a href="{{ route('article.index') }}" class="btn btn-primary">See All</a>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
