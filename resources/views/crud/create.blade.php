<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href={{ asset('css/create.css') }}>
</head>
<body>
<h2 style="text-align: center">Create New User</h2>

<a href="{{ route('profile.index') }}"><button class="button btn4">Zurück</button></a>
<div>
    <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Your name..">
        <input type="text" name="email" placeholder="Your Email..">
        <input type="text" name="phone" placeholder="Your Phone">
        <input type="text" name="income" placeholder="Your income.."><br>
        Profile Pic:<br>
        <input type="file" name="image" placeholder="Your income.."><br>

        <input type="submit" value="Save">
    </form>
</div>


</body>
</html>
