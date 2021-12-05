<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Love test </title>
     
    <style>
 * {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
}
.topnav {
  overflow: hidden;
  background-color: #333;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.content {
  background-color: #ddd;
  padding: 10px;
  height: 635px;
  background-image:  linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.5)),url(img/love.jpg);
  background-r
}
.footer {
  background-color: #333;
  padding: 10px;
}
.footer p{
  color:white;
  text-align:center;

}
h3 {
  animation-duration: 5s;
  animation-name: slidein;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  color:hsla(0, 100%, 90%, 0.3);
  font-size:40px;
}

@keyframes slidein {
  from {
    margin-left: 50%;
    width: 300%;
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}

.form{
    text-transform: uppercase;
    font: 700 1rem;
    height:400px;
        width:800px;
        margin-left:150px;
        margin-top:70px;
       padding-left:100px;
       padding-top:100px;
        background:hsla(0, 100%, 90%, 0.3);
        border-radius:20px;
        border: 3px solid pink;

}
.separator {
    display: block;
    position: relative;
    width: 100%;
    margin: 1rem
 0 3rem;

    height: 1px;

}
:after, :before {
    box-sizing: border-box;
}
#img{
  padding-left:10px;
}
  </style>
  
</head>
<body>
     
<div class="topnav">
 
 <a href="#">Link</a>
 <a href="#">Link</a>
 <a href="#">Link</a>
 <h3>Love Meter</h3> 
</div>

<div class="content">
<form action="love.php" method="POST" class="form">
<table >

<tr>

<td style="background-color:pink"> your name</td>

<td rowspan="2" style="font-family:'Adobe Gothic Std';color:brown">

</td>
 
<td style="background-color:pink"> your lovers name</td>

</tr>

<tr>

<td><input type="text" name="name1" style="color:black"/></td>

<td><input type="text" name="name2" style="color:black"/></td>

</tr>

<tr>

<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 
 <input  type="submit" name="submit" value="Calculate" style="color:brown width: 50px; background-color:pink;"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td>
</tr>
<br>


<tr>
<td id="img">
  <img src="img/hsaeart.png" alt="" id="img">
</td>
<td> </td>
<td> <img src="img/hsaeart.png" alt="" id="img"></td>
</tr>
<tr>
<?php

if(isset($_POST['submit'])){
  if($_POST['name1']==null || $_POST['name2']==null){
    echo"please enter your name and partner ";
  }
 else if($_POST['name1']==$_POST['name2']){
   echo"name must be deffirent";
 }
else{

    $rand=rand(40,100);
   
    echo "result : " .$rand."%";
$filename="ln.txt";
$content=$_POST['name1'].  " "  .$_POST['name2'];


$fp=fopen($filename,'a+');
fwrite($fp,$content);
}
}
?>
</tr>
</table>

</form>


</div>
<div class="footer">
 <p>love is when you sit beside someone doing nothing, yet you feel perfectly happy </p>
</div>
</body>
</html>