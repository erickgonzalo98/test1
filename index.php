<?php

function mostrarDatos(){

   $url = "https://jsonplaceholder.typicode.com/photos";
  
   $datos = file_get_contents ($url);

   $datos = json_decode($datos);

   var_dump($datos);

   $datos =array(
);
}
?>
<!DOCTYPE html>
<html lang= "en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title> tarea 1 </title>
<body>
   <div class="container">  
   <h3> Práctica 1 </h3> 
   <table class="table">
      <thead>
         <tr>
            <th> Photos </th>
            <th> id </th>
            <th> title </th>
            <th> albumId </th>
         </tr>
      </thead>
      <tbody>
      <?php mostrarDatos(); ?>   
      </tbody>
   </table>
   </div>
</body>
</html>