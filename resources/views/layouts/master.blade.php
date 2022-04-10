<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freedom Tube</title>
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div id="title-container">
        <div id="logo-container">
            <img id="logo" src="{{asset('img/eagle 200 yt.png')}}" alt="">
        </div>
        
        <h1 id="header">Freedom Tube</h1>
    </div>
    <h5 class="content">Download music and audio from youtube, for free and without ads. We bring liberation
        from copyright
    </h5>
    
    @yield('content')
</body>
</html>