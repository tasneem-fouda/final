
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a user</h1>
    
    <form method="post" action="{{route('user.store')}}">
        @csrf 
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="email" />
        </div>
        <div>
            <label>Pass</label>
            <input type="pssowrd" name="pssowrd" placeholder="pssowrd" />
        </div>
        <div>
            <label>Mobile</label>
            <input type="text" name="mobile" placeholder="mobile" />
        </div>
        <div>
            <label>Add</label>
            <input type="text" name="add" placeholder="add" />
        </div>
        <div>
            <input type="submit" value="Save a New user" />
        </div>
    </form>
</body>
</html>