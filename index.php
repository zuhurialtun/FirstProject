<!DOCTYPE html>
<html lang="tr">
<html>
<head>
<style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
</head>
<body>

<h2>Dosyalar</h2>

<?php
    $array = glob('./*');

    echo '<pre>';

    foreach($array as $path){
        echo '<a href="'.$path.'">'.substr($path,2).'</a> ';
    }
?>

</body>
</html>