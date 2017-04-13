<?php
$cities = array('dc', 'london', 'moscow');
print_r($cities);
$cities[] = 'tokyo';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/master.css" media="screen">
    <title>Try PHP</title>
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <div class="info">
          <ul>
            <li><?php echo $cities[1]; ?></li>
          </ul>
        </div>
        <div class="details">
          <p>

          </p>
        </div>
      </div>
    </div>
  </body>
</html>