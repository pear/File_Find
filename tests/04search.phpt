--TEST--
File_Find::search()
--SKIPIF--
<?php 
include('./setup.php');
print $status; 
?>
--FILE--
<?php 
require_once('./setup.php');

$ff = new File_Find();
$result  = $ff->search('/txt/', './dir', 'perl') ;
$result2 = File_Find::search('/txt/', './dir', 'perl') ;

print_r($result);
print_r($result2);

?>
--GET--
--POST--
--EXPECT--
Array
(
    [0] => ./dir/1.txt
    [1] => ./dir/2.txt
    [2] => ./dir/txtdir/5.txt
    [3] => ./dir/dir3/4.txt
    [4] => ./dir/dir2/3.txt
)
Array
(
    [0] => ./dir/1.txt
    [1] => ./dir/2.txt
    [2] => ./dir/txtdir/5.txt
    [3] => ./dir/dir3/4.txt
    [4] => ./dir/dir2/3.txt
)

