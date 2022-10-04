<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h1>The option selected attribute</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form action="arrays" method="post">
@csrf
    Name:
    <input type="text" name="name" value="{{ old('name')}}"><br>

<label for="cars">Choose a car:</label>
<select name="options">
    <option value selected ="selected">Bitte auswählen</option>
    @foreach($cars as $key => $car)
        <option value="{{ $key }}">{{ $car }}</option>
    @endforeach

</select>
    <br>
    <input type="submit" value="Save">
</form>
</body>
</html>
