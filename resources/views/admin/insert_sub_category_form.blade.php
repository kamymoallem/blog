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
<form method="post" action="{{ route('insert_sub_category') }}">
    @csrf
    <label for="title">tile:</label><br>
    <input type="text" id="title" name="title" value="John"><br>

    <label for="category">Choose a cat:</label><br>
    <select id="category" name="category">
        @foreach($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['title'] }}  </option>
        @endforeach

    </select><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
