1111111111
<?php 
 
echo date();
echo time();
echo '<p>';

echo strtotime('2016-01-01');

echo '<p>';

echo PHP_INT_MAX;

echo '<p>';

echo 1<<31;

echo '<p>';

echo intval(PHP_INT_MAX);

echo $_SERVER['HTTP_USER_AGENT'];
?>