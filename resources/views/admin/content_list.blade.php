<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<style></style>
<body>
    @csrf
        @foreach($contents as $content)
            <a href="{{ route('delete_content', ['id' => $content['id']]) }}">
                <button>Delete</button>
            </a>
            <div>{{ $content['title'] }}</div><br><br>
        @endforeach
</body>
</html>
