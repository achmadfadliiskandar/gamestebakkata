<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body>
    <div class="login" id="login">
    <h2 class="judul" id="judul">Login Admin</h2>
    <form action="baclogin.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" required>
            <label for="password">Password</label>
            <input type="password" name="password" required>
            <button type="submit" id="submit" name="submit">Login</button>
    </form>
    </div>
</body>
<style>
    body{
        background-color: #6e7c91;
    }
    .login{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border-radius: 7px;
        height: 300px;
        margin-top: 150px;
        margin-left: 300px;
        margin-right: 200px;
        width: 800px;
        background-color: #896e91;
    }
    .judul{
        text-align: center;
        padding-top: 5px;
        font-size: 30px;
        text-transform: capitalize;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        padding-bottom: 5px;
    }
    form,input,label,button{
        display: block;
        margin-left: 21px; 
        margin-top: 10px;
        margin-bottom: 10px;
    }
    input{
        width: 90%;
        height: 30px;
    }
    button{
        width: 91%;
        height: 40px;
    }
    @media only screen and (max-width: 1200px) {
        .login{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border-radius: 7px;
        height: 300px;
        margin-top: 150px;
        margin-left: 20px;
        margin-right: 20px;
        width: 800px;
        background-color: #896e91;
    }
    form,input,label,button{
        display: block;
        margin-left: 10px; 
        margin-top: 10px;
        margin-bottom: 10px;
    }
    input{
        width: 90%;
        height: 30px;
    }
    button{
        width: 92%;
        height: 40px;
    }
    }
    @media only screen and (max-width: 880px) {
        .login{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border-radius: 7px;
        height: 300px;
        margin-top: 150px;
        margin-left: 20px;
        margin-right: 20px;
        width: 575px;
        background-color: #896e91;
    }
    form,input,label,button{
        display: block;
        margin-left: 10px; 
        margin-top: 10px;
        margin-bottom: 10px;
    }
    input{
        width: 90%;
        height: 30px;
    }
    button{
        width: 92%;
        height: 40px;
    }
    }
    @media only screen and (max-width: 600px) {
        .login{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border-radius: 7px;
        height: 300px;
        margin-top: 150px;
        margin-left: 50px;
        margin-right: 50px;
        width: 400px;
        background-color: #896e91;
    }
    form,input,label,button{
        display: block;
        margin-left: 10px; 
        margin-top: 10px;
        margin-bottom: 10px;
    }
    input{
        width: 90%;
        height: 30px;
    }
    button{
        width: 92%;
        height: 40px;
    }
    }
</style>
</html>