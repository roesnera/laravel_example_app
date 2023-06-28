<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Howdy gang!</h1>
    <div>
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" id="username">
            <input type="text" name="email" id="email">
            <input type="password" name="password" id="password">
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>