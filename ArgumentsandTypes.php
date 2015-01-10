<?php
if (is_string("bye"))
    echo 'It is a string';
else
echo "It is not a string";
    
var_dump(is_string("abc"));
var_dump(is_string("ABC"));
var_dump(is_string(568));
var_dump(is_string(true));
var_dump(is_integer(45));
var_dump(is_integer(46.6));
var_dump(is_bool(true));
?>
