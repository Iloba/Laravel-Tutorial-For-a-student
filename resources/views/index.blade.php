<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
    <h1>Learning How to use Forms</h1>

    <form action="{{ route('save.students') }}" method="POST">
        @csrf
        <label for="">Name</label> <br>
        <input type="text" placeholder="Enter Name" name="name"> <br> <br>

        <label for="">Email</label> <br>
        <input type="text" placeholder="Enter Email" name="email"> <br> <br>

        <label for="">Phone</label> <br>
        <input type="number" placeholder="Enter Phone Number" name="phone"> <br> <br>

        <label for="">Jamb Score</label> <br>
        <input type="number" placeholder="Enter Jamb Score" name="jamb_score"> <br> <br>

        <label for="">Password</label> <br>
        <input type="password" placeholder="Enter Password" name="password"> <br> <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>