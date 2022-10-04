<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suche</title>
    <link rel="stylesheet" href={{ asset('css/create.css') }}>
</head>
<body>
<a href="{{ route('profile.index') }}"><button class="button btn4">Zurück</button></a>
<h2>{{ $profile['id'] }}</h2>
<h1>{{ $profile['name'] }}</h1>
<h1>{{ $profile['email'] }}</h1>
<h1>{{ $profile['phone'] }}</h1>
<h1>{{ $profile['income'] }}</h1>
<img src="{{ asset('uploads/images/'.$profile->image_path) }}" width="100px" height="100px" alt="No Image" >
</body>
</html>
