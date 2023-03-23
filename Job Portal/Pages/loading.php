<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loading</title>

  <link rel="stylesheet" href="../Css/loading.css">
</head>
<body>

<div class="akoto">
<div class="leap-frog">
<div class="leap-frog__dot"></div>
<div class="leap-frog__dot"></div>
<div class="leap-frog__dot"></div>
</div>
</div>
  
<script>
    $(window).on('load',function(){
      $(".akoto").fadeOut(2000);
    });
  </script>

</body>
</html>