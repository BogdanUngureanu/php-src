--TEST--
Valid type literals for return types
--FILE--
<?php
declare(strict_types=1);

class t {
    public function foo(): "foo"|"bar" {
        return "foo";
    }
}

$f = new t();
var_dump($f->foo());

function singleReturn(): "single" {
    return "single";
}

var_dump(singleReturn());

function test($t): "test"|"baz" { return $t; }

var_dump(test("baz"));

function test2($t): "test"|"baz"|"fox" { return $t; }

var_dump(test2("fox"));

function test3($t): 5|6|7 { return $t; }

var_dump(test3(6));
?>
--EXPECTF--
string(3) "foo"
string(6) "single"
string(3) "baz"
string(3) "fox"
int(6)