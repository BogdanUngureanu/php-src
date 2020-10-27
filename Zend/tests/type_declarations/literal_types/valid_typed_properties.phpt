--TEST--
Valid literal types for types properties
--FILE--
<?php
declare(strict_types=1);

class t {
    public "bar"|"baz" $foo = "bar";
}

$f = new t();
var_dump($f->foo);
?>
--EXPECTF--
string(3) "bar"
