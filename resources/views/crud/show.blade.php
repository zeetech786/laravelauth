<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>
<body>
<h2 style="text-align: center">Show User</h2>
<a href="{{ route('profile.index') }}"><button class="button btn4">Zurück</button></a>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Einkommen</th>
        <th>Profile Image</th>
    </tr>
    <tr>
        <td>{{ $userProfile->name }}</td>
        <td>{{ $userProfile->email }} </td>
        <td>{{ $userProfile->phone }} </td>
        <td>{{ $userProfile->income }} Euro</td>
        <td><img src="{{ asset('uploads/images/'.$userProfile->image_path) }}" width="100px" height="100px" alt="Image" ></td>

</table>
</body>
</html>
