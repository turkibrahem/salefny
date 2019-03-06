<!doctype html>
<html lang="en">
<head>
    <title>page2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">

</head>
<style>
    .mh{
        color: white ;

    }
    .mh:hover{
        color: #0c0120c5;
    }
</style>

<body style="background: url(images/ismailia01.jpg); background-size:1400px; ">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" style="background-color:#0c01209d; border:#0c01209d" >
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <li style="list-style: none;">
                <a class="navbar-brand topnav" href="#">
                    <img src="images/logopages.png">  </a> </li>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right " style="margin-top:20px; ">

                <li><a href="#"  class="mh"><span class="glyphicon glyphicon-log-out mh"> Logout</span> </a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>



<br> <br> <br> <br> <br> <br>
<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Activity')" id="defaultOpen" style="color: rgb(8, 157, 177)">Activity</button>
    <button class="tablinks" onclick="openCity(event, 'Offered')"  style="color: rgb(8, 157, 177)">Offered</button>
    <button class="tablinks" onclick="openCity(event, 'request')" style = "color: rgb(8, 157, 177)" >request</button>
    <button class="tablinks" onclick="openCity(event, 'Notice')"  style = "color: rgb(8, 157, 177)">Notice</button>
    <button class="tablinks" onclick="openCity(event, 'Neighbours' )"  style = "color: rgb(8, 157, 177)">Neighbours</button>
    <button class="tablinks" onclick="openCity(event, 'Workers')" style = "color: rgb(8, 157, 177)" >Workers</button>
    <button class="tablinks" onclick="openCity(event, 'Places')" style = "color: rgb(8, 157, 177)" >Places</button>
</div>

<div id="Activity" class="tabcontent" style="background:#0c01209d; opacity:0.7;">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    @extends('layout.app')


        @section('content')
            <div class="content">
                <div class="container">
                    <h1>Posts</h1>

                    @if(count($posts) >0)



                        <div class="row container">
                            @foreach($posts as $post)
                                <div class="col-sm-4">

                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{$post->firstname}} - {{$post->lastname}}</h3>
                                        </div>
                                        <div class="panel-body">
                                            <h2> {{$post->subject}}</h2>

                                            {{--  <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%,height:50%" >   --}}

                                            <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%,height:50%" >


                                            <span class="label label-danger">created at : {{$post->created_at}}  </span>
                                            <span class="label label-info">  by {{$post->user->name}}</span>

                                            <a class="pull-right" href="/posts/{{$post->id}}" class="btn btn-warning">More</a>
                                        </div>
                                    </div>

                                </div>

                            @endforeach

                            {{$posts->links()}}
                        </div>

                </div>

            </div>


            @else


                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh  !</strong> <a href="#" class="alert-link">No posts !</a> and try submitting again.
                </div>



            @endif

        @endsection






    <p style= color:white></p>

</div>

<div id="Offered" class="tabcontent" style="background:#0c01209d; opacity:0.7;" >
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <h3 style="color:rgb(255, 255, 255)" >What's in your neighbourhood?</h3>
    <p style= color:white;">Paris is the capital of France.</p>
</div>

<div id="request" class="tabcontent" style="background:#0c01209d; opacity:0.7;">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <h3 style="color:rgb(255, 255, 255)">Things your neighbours have asked for</h3>
    <p style= color:white;></p>

</div>

<div id="Notice" class="tabcontent" style="background:#0c01209d; opacity:0.7;">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <h3 style="color:rgb(255, 255, 255)">Neighbourhood Notice Board</h3>
    <p style= color:white;></p>
</div>



<div id="Neighbours" class="tabcontent" style="background:#0c01209d; opacity:0.7;">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <h3 style="color:rgb(255, 255, 255)">People in your neighbourhood</h3>
    <p style= color:white;"></p>
</div>



<div id="Workers" class="tabcontent" style="background:#0c01209d;; opacity:0.7;">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <h3 style="color:rgb(255, 255, 255)"> Workers</h3>
    <p style= color:white></p>
</div>

<div id="Places" class="tabcontent" style="background:#0c01209d;; opacity:0.7;">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <h3 style="color:rgb(255, 255, 255)"> Places</h3>
    <p style= color:white></p>
</div>








<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>


