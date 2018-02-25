<h2> <?php
 $str = 'In My Cart : 11 items';
$int = filter_var($str, FILTER_SANITIZE_NUMBER_INT);
print_r($int);
?> </h2>
