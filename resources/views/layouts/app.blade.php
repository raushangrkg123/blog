<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rkg- @yield('title','website')</title>
</head>
<body>

<div style="background:aquamarine; width: 100%; height:20px; padding:10px;">
<h4 style="text-align: center; margin-top:0px;">Women and Child Development</h4>

</div>
<marquee behavior="" direction="">Ministry of Home Affairs</marquee>


<div style="padding-top:10px;" class="urls">
<span class="links"><a href="/">Home |</a></span>
<span class="links"><a href="/about">About|</a></span>
<span class="links"><a href="/post">Post |</a></span>
<a href="{{ route('blog') }}">Blog</a>
</div>

<div style="display: flex;" class="main">
<article style="width: 70%;">
    
    @hasSection('content')
 @yield('content')
 @else
 <h2>No Content Found</h2>        
    @endif
</article>

@section('sidebar')
   <div style="width:30%; background-color:aquamarine; height:342px; float: inline-end; margin-top: -30px; padding:15px;" class="side-content">
<div class="url">
    <li><a  href="/">Home</a> </li>
        <li> <a href="/about">About</a> </li>
         <li><a href="/post">Post</a> </li>
         @show
</div>
</div>


</div>
<footer style="background: rgb(145, 194, 145); padding:0px; border:1px solid black; border-radius: 7px;">
    <h2 style="text-align: center">rk gupta@copyright 2023</h2>
</footer>

</body>
</html>
