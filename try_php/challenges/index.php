<?php
$cities = array(
  'tokyo' => [
    13.6,
    1868,
    'Japan'
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
    ]
);

$cities['london'] = [
  8.6,
  43,
  'England'
];

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
            <li>City of London</li>
            <li>Population: <?php echo $cities['london'][0]; ?> million.</li>
            <li>Established: <?php echo $cities['london'][1]; ?> AD.</li>
            <li>Country: <?php echo $cities['london'][2]; ?></li>
          </ul>
        </div>
        <div class="details">
          <p>
            London is the capital and most populous city of England,
            Great Britain, and the United Kingdom.
            On the River Thames in the south east of the island of Great Britain,
            London has been a major settlement for two millennia.
            It was founded by the Romans, who named it Londinium.
          </p>
        </div>
      </div>
    </div>
  </body>
</html>