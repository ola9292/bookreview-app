<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('allbooks')}}" method="GET">
        @csrf
        <input type="text" name="title">
        <button type="submit">Search</button>
        <button type="submit">Clear</button>
    </form>
    <a href="{{ route('allbooks', ['title'=>'zububu'])}}"></a>
    <div>
        @foreach ($books as $book)
            <h3>{{ $book->title }}</h3>
            <p>{{ $book->author}}</p>
        @endforeach

        {{ $books->links() }}
    </div>
</body>
</html>
