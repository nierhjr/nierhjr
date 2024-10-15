<!DOCTYPE html>
<html lang="en">
    <head>
        <title>This is all about me</title>
        <link rel="stylesheet" href="style.css">
       </head>
    <body>
        <nav>
            <ul class="topnav" id="dropdownClick">
                <li><a class="active" href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contacts">Contacts</a></li>
                <li><a href="about.html">About</a></li>
                <li class="topnav-right"><a href="#signin">Sign In</a></li>
                <li class="topnav-right"><a href="#signup">Sign Up</a></li>
                <li class="dropdownIcon"><a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a></li>
            </ul>
        </nav>

<div class="container" id="section-1-gradient">
<div class="row">
    <div class="col-6">
        <div class="leftSide-col">
            <h1 class="large">The Best Thing About Football</h1>
            <h1 class="large">Football is everything </h1>
        </div>
        <form>
            <div class="leftSide-col">
                <h2>username</h2>
                <input type="text" class="inputbox" name="username" placeholder="username">
                <h2>password</h2>
                <input type="text" class="inputbox" name="password" id="" placeholder="password">
            </div>
        </form>
    </div>
    <div class="col-6">
        <div class="rightSide-col">
           <div class="videoContainer">
            <iframe width="360" height="315" src="VID-20220130-WA0002.mp4" frameborder="0" allowfullscreen></iframe>
           </div>
        </div>
    </div>
</div>
</div>


<header>
     <h1 class="section2Header">The Standards Of Awaresomeness</h1> 
</header>
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="box">
                <div class="icon">
                    <img src="nierh1.jpg" width="120" height="120">
                </div>
                <label>Chat with Me</label>
                <p>Football, also known as soccer in some parts of the world, is a popular team sport played between two teams of 11 players each. 
                    The objective of the game is to score goals by kicking a ball into the opposing team's net. 
                    The team that scores more goals by the end of the match wins.
                   </p>
            </div>
        </div>
        <div class="col-4">
            <div class="box">
                <div class="icon">
                    <img src="nierh2.jpg" width="120" height="120">
                </div>
                <label>See My World</label>
                <p>Football, also known as soccer in some parts of the world, is a popular team sport played between two teams of 11 players each. 
                    The objective of the game is to score goals by kicking a ball into the opposing team's net. 
                    The team that scores more goals by the end of the match wins.
                   </p>
            </div>
        </div>
        <div class="col-4">
            <div class="box">
                <div class="icon">
                    <img src="nierh3.jpg" width="120" height="120">
                </div>
                <label>Really Me</label>
                <p>Football, also known as soccer in some parts of the world, is a popular team sport played between two teams of 11 players each. 
                    The objective of the game is to score goals by kicking a ball into the opposing team's net. 
                    The team that scores more goals by the end of the match wins.
                   </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button class="learnMore"><a href="learn_more.html">Learn More</a></button>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
    <div class="col-7">
        <article>
            <p>Football, also known as soccer in some parts of the world, is a popular team sport played between two teams of 11 players each. 
                The objective of the game is to score goals by kicking a ball into the opposing team's net. 
                The team that scores more goals by the end of the match wins.Football, also known as soccer in some parts of the world, is a popular team sport played between two teams of 11 players each. 
                The objective of the game is to score goals by kicking a ball into the opposing team's net. 
                The team that scores more goals by the end of the match wins.Football, also known as soccer in some parts of the world, is a popular team sport played between two teams of 11 players each. 
                The objective of the game is to score goals by kicking a ball into the opposing team's net. 
                The team that scores more goals by the end of the match wins.</p>
        </article>
    </div>
    <div class="col-5">
        <div class="slopeIcon">
        <img src="me2.jpg">
        </div>
    </div>
</div>
</div>

<footer class="footsy">
    <div class="row">
        <div class="col-3 mobileStack">
            <h1>Company</h1>
            <ul>
            <li>About</li>
            <li>Blogs</li>
            <li>Careers</li>
            </ul>
        </div>
        <div class="col-3 mobileStack">
            <h1>Company</h1>
            <ul>
            <li>About</li>
            <li>Blogs</li>
            <li>Careers</li>
            </ul>
        </div>
        <div class="col-3 mobileStack">
            <h1>Company</h1>
            <ul>
            <li>About</li>
            <li>Blogs</li>
            <li>Careers</li>
            </ul>
        </div>
        <div class="col-3 mobileStack">
            <h1>Company</h1>
            <ul>
            <li>About</li>
            <li>Blogs</li>
            <li>Careers</li>
            </ul>
        </div>
    </div>
</footer>


<!-- SEE -->


                    <script type="text/javascript">
            var name = "anania";
            var age=23;
            var message ="my name is " + name + " and i'm " + age + " years old";
alert(message);
          function dropdownMenu() {
            var x = document.getElementById("dropdownClick");
            if (x.className === "topnav") {
                x.className += " responsive";
                //change topnav to topnav.responsive
            }
            else{
                x.className = "topnav";
            }
           }
        </script>
    </body>
</html>