<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a user</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('user.update', ['user' => $user])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$user->name}}" />
        </div>
        <div>
            <label>email</label>
            <input type="text" name="email" placeholder="email" value="{{$user->email}}" />
        </div>
        <div>
            <label>password</label>
            <input type="text" name="password" placeholder="password" value="{{$user->password}}" />
        </div>
        <div>
            <label>mobile</label>
            <input type="text" name="mobile" placeholder="mobile" value="{{$user->mobile}}" />
        </div>
        <div>
            <label>add</label>
            <input type="text" name="add" placeholder="add" value="{{$user->add}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>