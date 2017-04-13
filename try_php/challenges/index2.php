<?php
$cities = array('tokyo', 'dc', 'moscow', 'london');
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
            <?php foreach($cities as $city) {
              echo "<li>$city</li>";
            }; ?>
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