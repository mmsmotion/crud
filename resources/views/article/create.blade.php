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
    <div class="row">
        <div class="col-12">
            <div class="my-5">
                <form action="{{ route('article.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Article Title</label>
                        <input type="text" name="title" class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-select" id="">
                            @foreach(\App\Models\Category::all() as $c)
                                <option value="{{ $c->id }}">{{ $c->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea type="text" name="description" class="form-control" rows="7"></textarea>
                    </div>
                    <button class="btn btn-lg btn-primary">Create Article</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
