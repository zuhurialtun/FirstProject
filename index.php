<!DOCTYPE html>
<html lang="tr">
<html>
<head>
<style>
ul{
    list-style-type: none;
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  margin-bottom: 3px;
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
    $array = glob('*.{php,txt}', GLOB_BRACE);
    $files = glob('*', GLOB_ONLYDIR);
    $array = array_merge($files,$array);
    function listall($dir){
        echo '<ul>';
        foreach($dir as $file){
            if ($file != '.' && $file != '..') {
                echo '<li><a href="'.$file.'">'.$file.'</a> </li>';
                if(is_dir($file)){
                    listall(glob($file.'/*'));
                }
            }
            
        }
        echo '</ul>';
    }
    listall($array);
    
?>

</body>
</html>