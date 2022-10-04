<x-app-layout>
    <x-slot name="header">


    </x-slot>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8 Crud</title>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/alert.css') }}>
</head>
<body>
<h2 style="text-align: center">USER CRUD</h2>
<form action="{{ route('profile.search') }}" method="POST">
    @csrf
    <div style="text-align: right">
    <input type="text" name="id">
    <button type="submit" class="button btn2">Suche</button>
        @if ($error = Session::get('error'))
            <div class="alert2">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <p>{{ $error }}</p>
            </div>
        @endif
    </div>
</form>
@if ($message = Session::get('success'))
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>{{ $message }}</p>
    </div>
@endif

<a href="{{ route('profile.create') }}"><button class="button btn4">Neu</button></a>
<table>
    <tr>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Phone</th>
        <th>Income</th>
        <th>User Pic</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }} </td>
        <td>{{ $user->phone }} </td>
        <td>{{ $user->income }} Euro</td>
        <td><img src="{{ asset('uploads/images/'.$user->image_path) }}" width="100px" height="100px" alt="No Image" >  </td>
        <td>

            <a href="{{ route('profile.edit',$user->id) }}"><button class="button btn1">edit</button></a>
            <a href="{{ route('profile.show',$user->id) }}"><button class="button btn2">show</button></a>
            <form action="{{ route('profile.destroy',$user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="button btn3">Delete</button>

            </form>
        </td>
    </tr>

    @endforeach


</table>


</body>
</html>

</x-app-layout>
{{ $users->links() }}
