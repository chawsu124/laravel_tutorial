<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Tutorial</title>
</head>
<body>
    <h2>Session Tutorial by Waifer Kolar</h2>
    <h3>Session Lessons</h3>
    <h3>Welcome</h3>
    <!-- setSession -->
    @if(session('status'))
       {{session('status')}}  <!-- if session('status'), show it -->
        
    @endif
    <br>
    <a href="{{url('setSession')}}">
        <button>SetSession</button>
    </a>
    <br><br>
    <a href="{{url('getSession')}}">
        <button>GetSession</button>
    </a>
    <br><br>
    <a href="{{url('deleteSession')}}">
        <button>DeleteSession</button>
    </a>
    <br><br>
    <a href="{{url('setMultipleSession')}}">
        <button>SetMultipleSession</button>
    </a>
    
</body>
</html>