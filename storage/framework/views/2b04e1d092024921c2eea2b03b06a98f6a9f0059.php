<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}
</style> -->
</head>
<body>
   
<div class="container">
  <h2>Generating PDF of forms</h2>
  <div>

  <form action="<?php echo e(URL::to('/edit/profile')); ?>" method="get">
  View name: <input type="text" name="name"><br>
  
  <input type="submit" value="Download"></form>
  </div>                              
  <!-- <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Forms
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Auditors<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Certificate</a></li>
        </ul>
      </li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Certificate<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Certificate</a></li>
        </ul>
      </li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">PCA<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Extraordinary</a></li>
          <li><a tabindex="-1" href="#">PCA1</a></li>
          <li><a tabindex="-1" href="#">PCA2</a></li>
          <li><a tabindex="-1" href="#">PCA3</a></li>
          <li><a tabindex="-1" href="#">PCA4</a></li>
          <li><a tabindex="-1" href="#">PCA10</a></li>
        </ul>
      </li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Registration<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Form1</a></li>
          <li><a tabindex="-1" href="#">Form15</a></li>
          <li><a tabindex="-1" href="#">Form18</a></li>
          <li><a tabindex="-1" href="#">Form19</a></li>
          <li><a tabindex="-1" href="#">Form44</a></li>
          <li><a tabindex="-1" href="#">Form45</a></li>
          <li><a tabindex="-1" href="#">Form46</a></li>
        </ul>
      </li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Secretary<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">individual</a></li>
          <li><a tabindex="-1" href="#">firm</a></li>
          <li><a tabindex="-1" href="#">certificate</a></li>
        </ul>
      </li>
    </ul>
  </div> -->
</div>
<!-- <button type="button" class="btn btn-primary" style="margin-left:230px; margin-top:10px;">PDF</button> -->
<!-- <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
$(".dropdown-menu li a").click(function(){		 
    $(this).parents(".dropdown").find('.btn').html('<img src="img/lorem.png" alt="lorem">' + $(this).text() + ' <span class="caret"></span>' );
    $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
    
});
</script> -->


</body>
</html>
