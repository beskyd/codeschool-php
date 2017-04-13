<?php
$year = 1774;
$cities = array(
  'tokyo' => [
    13.6,
    1868,
    'Japan',
  ],
  'dc' => [
    0.6,
    1790,
    'United States'
  ],
  'moscow' => [
    11.5,
    1147,
    'Russia'
  ],
  'london' => [
    8.6,
    43,
    'England'
  ],
);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/master.css" media="screen" title="no title">
    <title>Try PHP</title>
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <div class="info">
          <ul>
            <li>City of Washington DC</li>
            <li>Population: <?php echo $cities['dc'][0]; ?> million.</li>
            <li>Established: <?php echo $cities['dc'][1]; ?> AD.</li>
            <li>Country: <?php echo $cities['dc'][2]; ?></li>
          </ul>
        </div>
        <div class="details">
          <p>
            <?php
              if ($year >= $cities['dc'][1]) {
                echo 'Washington DC is the capital of the United States';
              } elseif ($year == 1774) {
                echo 'The US capital is still in Philadelphia.';
              } else {
                $difference = $cities['dc'][1] - $year;
                echo "There are $difference years until DC is established.";
              }
            ?>
          </p>
        </div>
      </div>
      <div class="map">
        <img src="/images/map-us.png" alt="map of the United States" />
      </div>
    </div>
  </body>
</html>