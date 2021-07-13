<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/register" method="post">
    @csrf
    <div>
        <div>
            Name<input type="text" name="name">
        </div>
        <div>
            Password<input type="password" name="password">
        </div>
        <div>
            Birthday<input type="date" name="birthday">
        </div>
        <div>
            Phone Number<input type="text" name="phone">
        </div>
        <div>
            Address<input type="text" name="address">
        </div>
        <div>
            <button type="submit">Add</button>
            <button type="reset">Delete</button>
        </div>
    </div>
</form>
</body>
</html>
