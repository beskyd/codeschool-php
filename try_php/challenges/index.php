<?php
$city = 'Tokyo';
$country = 'Japan';
$established = 1868;
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
            <li><?php echo $city; ?></li>
            <li>Country: <?php echo $country; ?></li>
            <li>Established:  <?php echo $established; ?></li>
          </ul>
        </div>
        <div class="details">
          <p>It officially became the capital after Emperor Meiji
            moved his seat to the city from the old capital of
            Kyoto.</p>
        </div>
      </div>
    </div>
  </body>
</html>