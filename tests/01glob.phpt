--TEST--
File_Find::glob()
--SKIPIF--
<?php 
include('./setup.php');
print $status; 
?>
--FILE--
<?php 
require_once('./setup.php');

$ff = new File_Find();
$result  = &$ff->glob( '/.*txt/', './dir/', 'perl' ) ;
$result2 = &File_Find::glob( '/.*txt/', './dir/', 'perl' ) ;

print_r($result);
print_r($result2);

?>
--GET--
--POST--
--EXPECT--
Array
(
    [0] => 1.txt
    [1] => 2.txt
    [2] => txtdir
)
Array
(
    [0] => 1.txt
    [1] => 2.txt
    [2] => txtdir
)

