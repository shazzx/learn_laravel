<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('user.update', $id) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="username" placeholder="username">
        <button type="submit" >UPDATE USER</button>
    </form>
</body>
</html>