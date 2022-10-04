<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href={{ asset('css/create.css') }}>
</head>
<body>
<h2 style="text-align: center">Update User</h2>
<a href="{{ route('profile.index') }}"><button class="button btn4">Zurück</button></a>
<div>
    <form action="{{ route('profile.update',$userProfile->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $userProfile->name }}" >
        <input type="text" name="email" value="{{ $userProfile->email }}" >
        <input type="text" name="phone" value="{{ $userProfile->phone }}" >
        <input type="text" name="income" value="{{ $userProfile->income }}" ><br>
        <input type="file" name="image" value="{{ $userProfile->image_path }}" ><br>
        <img src="{{ asset('uploads/images/'.$userProfile->image_path) }}" width="100px" height="100px" alt="Image" ><br>

        <input type="submit" value="Update">
    </form>
</div>


</body>
</html>

