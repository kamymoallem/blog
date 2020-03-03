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
<form method="post" action="{{ route('insert_content') }}">
    @csrf
    <label for="title">tile:</label><br>
    <input type="text" id="title" name="title" value="John"><br>
    <label for="text">text:</label><br>
    <textarea id="text" name="text">text</textarea><br>

    <label for="sub_category">Choose a cat:</label><br>
    <select id="sub_category" name="sub_category">
        @foreach($subCategories as $subCategory)
            <option value="{{ $subCategory['id'] }}">{{ $subCategory['title'] }} from {{ $subCategory['category']['title'] }} </option>
        @endforeach

    </select><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
