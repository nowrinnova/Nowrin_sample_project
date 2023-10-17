<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student-file</title>
</head>

<body>
    <Label>REGESTRSTION:</Label>
    <form action="regestration">
        <label for="">Name</label><br>
        <input type="text" name="name"><br>
        <p>
            @error('name')
                {{ $message }}
            @enderror
        </p>
        <label for="">Email</label><br>
        <input type="email" name="email"><br>
        <p>
            @error('email')
                {{ $message }}
            @enderror
        </p>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <p>
            @error('password')
                {{ $message }}
            @enderror
        </p>
        <label for="">Re-Password</label><br>
        <input type="password" name="password_confirmation"><br>
        <p>
            @error('password')
                {{ $message }}
            @enderror
        </p>
        <button>submit</button>

    </form>
</body>

</html>
