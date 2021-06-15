<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center> <h1> halow  ,<?php   echo $name; ?>  </h1> </center>
   <form action="store" method="post">
       @csrf
<input type="text" name="name" id="name">
<button type="submit">send</button>
   </form>
</body>
</html>
