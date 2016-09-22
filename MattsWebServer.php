<html>
<head>
    <title>Matt's Web Site</title>
</head>
<body>
<style>
    ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: gray;
    }
    li{
        font-size: 20px;
        float: left;
        border-right: white;
    }
    li a{
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    li a:hover{
        background-color: black;
    }
    .text-center{
        display: block;
        color: black;
        text-align: center;
    }
    p{
        font-size: 18px;
    }
    .smaller-pic{
        width: 400px;
        height: 700px;
    }
</style>
<div class="container-fluid">
<h1 class="text-center">Matthew Langford</h1>
    <ul>
        <li><a href="http://52.89.245.19/MattsWebServer.php">Menu Home</a> </li>
        <li><a href="#">Assignment 1</a></li>
        <li><a href="#">Assignment 2</a></li>
        <li><a href="#">Assignment 3</a></li>
        <li><a href="#">E-commerce Site</a></li>
    </ul>
    <br>
    <img class="smaller-pic" src="matthew.jpg">
    <p>
        Hello, my name is Matthew Langford, I am a CSIS student. I am married with three children.<br>
        I enjoy playing board games with my friends and family, video games when I have time,<br>
        and learning new things. I really enjoy the Nolan brothers films,Star Wars, and<br>
        anything Sci-Fi or Medieval. The only things I read anymore are tutorials and game reviews,<br>
        so I don't really have a favorite book. Oh yeah, I really enjoy php so far haha!<br>
    </p>
<?php echo '<p></p>'; ?>
</div>
</body>
</html>