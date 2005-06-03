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
$result0  = $ff->search('/txt/', '/tmp/File_Find/dir/', 'perl') ;
$result1  = $ff->search('/txt/', '/tmp/File_Find/dir', 'perl') ;
$result2 = File_Find::search('/txt/', '/tmp/File_Find/dir/', 'perl') ;

print_r($result0);
print_r($result1);
print_r($result2);

?>
--GET--
--POST--
--EXPECT--
Array
(
    [0] => /tmp/File_Find/dir/1.txt
    [1] => /tmp/File_Find/dir/2.txt
    [2] => /tmp/File_Find/dir/txtdir/5.txt
    [3] => /tmp/File_Find/dir/dir3/4.txt
    [4] => /tmp/File_Find/dir/dir2/3.txt
)
Array
(
    [0] => /tmp/File_Find/dir/1.txt
    [1] => /tmp/File_Find/dir/2.txt
    [2] => /tmp/File_Find/dir/txtdir/5.txt
    [3] => /tmp/File_Find/dir/dir3/4.txt
    [4] => /tmp/File_Find/dir/dir2/3.txt
)
Array
(
    [0] => /tmp/File_Find/dir/1.txt
    [1] => /tmp/File_Find/dir/2.txt
    [2] => /tmp/File_Find/dir/txtdir/5.txt
    [3] => /tmp/File_Find/dir/dir3/4.txt
    [4] => /tmp/File_Find/dir/dir2/3.txt
)
