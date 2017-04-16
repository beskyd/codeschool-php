<?php 
//phpinfo(); 
$data = file_get_contents('https://www.codeschool.com/users/AyBeskyd.json');
// use json_decode with the second parameter set to -true- for the assoc. array option instead of the default object
$json_data = json_decode($data, true);
//var_dump($json_data['courses']['completed']);
$courses = $json_data['courses']['completed'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $json_data['user']['username']; ?>'s badges</title>
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
    <link rel="stylesheet" href="/css/grid.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <?php 
    foreach ($courses as $course) {
      echo '<div>';
      echo '<img src="' . $course["badge"] . '">';
      echo '<a href="' . $course["url"] . '">' . $course["title"] . '</a>';
      echo '</div>';
    }
    ?>
  </body>
</html>