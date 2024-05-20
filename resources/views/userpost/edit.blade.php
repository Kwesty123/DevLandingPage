<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>create a product</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form method="post" action="{{ route('userpost.update', ['userpost' => $userpost]) }}">
        @csrf
        @method('put')
        <div>
            <label>post</label>
            <input type="text" name="id" placeholder="id" value="{{ $userpost->appname }}" />
            <input type="text" name="post" placeholder="post" value="{{ $userpost->description }}" />
        </div>
        <div>
            <input type="submit" value="Update Post" />
        </div>
    </form>
</body>

</html>
