<?php
$cities = array('tokyo' => 13.6,
               'dc' => 0.6,
               'moscow' => 11.5);
$cities['london'] = 8.6;
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
            <li><?php echo "Population: $cities['tokyo'] million"; ?></li>
            <li><?php echo "Population: $cities['dc'] million"; ?></li>
            <li><?php echo "Population: $cities['moscow'] million"; ?></li>
            <li><?php echo "Population: $cities['london'] million"; ?></li>
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