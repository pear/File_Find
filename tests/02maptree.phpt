--TEST--
File_Find::mapTree()
--SKIPIF--
<?php 
include('./setup.php');
print $status; 
?>
--FILE--
<?php 
require_once('./setup.php');

$ff = new File_Find();
$result  = $ff->mapTree('./dir') ;
//$result2 = File_Find::mapTree('./dir') ;

print_r($result);
//print_r($result2);

?>
--GET--
--POST--
--EXPECT--
Array
(
    [0] => Array
        (
            [0] => ./dir
            [1] => ./dir/txtdir
            [2] => ./dir/dir3
            [3] => ./dir/dir2
        )

    [1] => Array
        (
            [0] => ./dir/1.txt
            [1] => ./dir/2.txt
            [2] => ./dir/txtdir/5.txt
            [3] => ./dir/dir3/4.txt
            [4] => ./dir/dir3/4.bak
            [5] => ./dir/dir2/3.txt
            [6] => ./dir/dir2/3.bak
        )

)
