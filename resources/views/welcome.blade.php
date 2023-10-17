<!DOCTYPE html>
<html lang="en">

@php
    $nowrin = 1;
    $colors = ['red', 'green', 'blue', 'yellow'];

@endphp

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>

<body>
    <div class="nav-bar1">
        <div class="nav-bar2">
            <h1>AIUB</h1>
            <p>COURSE AND result</p>
            <p>REGESTRATION</p>
            <p>GRADE REPORT</p>
        </div>

        <div class="nav-bar2">
            <p>Welcome</p>
            <a href="">log out</a>
        </div>
    </div>


    <div class="profile">
        <h3>Islam,Nowrin</h3>
        <div class="profile_child">
            <table>
                <tr>
                    <td>
                        Student Id:
                    </td>
                    <td>
                        19-39339-1
                    </td>
                </tr>
                <tr>
                    <td>CG</td>
                    <td>3.54</td>
                </tr>
                <tr>
                    <td>CREDIT:</td>
                    <td>126</td>
                </tr>
                <tr>
                    <td>PROGRAM:</td>
                    <td>BSC,CSE</td>
                </tr>
                <tr>
                    <td>CORE:</td>
                    <td>Software Engineer</td>
                </tr>
                <tr>
                    <td>EMAIL:</td>
                    <td>Nowrinnova0088@gmail.com</td>
                </tr>
                <tr>
                    <td>Blood group:</td>
                    <td>o(+)</td>
                </tr>
            </table>
            <img src="/profile_picture.jpg" alt="">
        </div>


    </div>
    @foreach ($colors as $x)
        {{ $x }}
    @endforeach

</body>

</html>
