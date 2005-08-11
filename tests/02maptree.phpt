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
$result0  = $ff->mapTree('/tmp/File_Find/dir/') ;
$result1  = $ff->mapTree('/tmp/File_Find/dir') ;
$result2 = File_Find::mapTree('/tmp/File_Find/dir') ;

print_r($result0);
print_r($result1);
print_r($result2);

?>
--GET--
--POST--
--EXPECT--
Array
(
    [0] => Array
        (
            [0] => /tmp/File_Find/dir
            [1] => /tmp/File_Find/dir/txtdir
            [2] => /tmp/File_Find/dir/dir3
            [3] => /tmp/File_Find/dir/dir2
        )

    [1] => Array
        (
            [0] => /tmp/File_Find/dir/1.txt
            [1] => /tmp/File_Find/dir/2.txt
            [2] => /tmp/File_Find/dir/txtdir/5.txt
            [3] => /tmp/File_Find/dir/dir3/4.txt
            [4] => /tmp/File_Find/dir/dir3/4.bak
            [5] => /tmp/File_Find/dir/dir2/3.txt
            [6] => /tmp/File_Find/dir/dir2/3.bak
        )

)
Array
(
    [0] => Array
        (
            [0] => /tmp/File_Find/dir
            [1] => /tmp/File_Find/dir/txtdir
            [2] => /tmp/File_Find/dir/dir3
            [3] => /tmp/File_Find/dir/dir2
        )

    [1] => Array
        (
            [0] => /tmp/File_Find/dir/1.txt
            [1] => /tmp/File_Find/dir/2.txt
            [2] => /tmp/File_Find/dir/txtdir/5.txt
            [3] => /tmp/File_Find/dir/dir3/4.txt
            [4] => /tmp/File_Find/dir/dir3/4.bak
            [5] => /tmp/File_Find/dir/dir2/3.txt
            [6] => /tmp/File_Find/dir/dir2/3.bak
        )

)
Array
(
    [0] => Array
        (
            [0] => /tmp/File_Find/dir
            [1] => /tmp/File_Find/dir/txtdir
            [2] => /tmp/File_Find/dir/dir3
            [3] => /tmp/File_Find/dir/dir2
        )

    [1] => Array
        (
            [0] => /tmp/File_Find/dir/1.txt
            [1] => /tmp/File_Find/dir/2.txt
            [2] => /tmp/File_Find/dir/txtdir/5.txt
            [3] => /tmp/File_Find/dir/dir3/4.txt
            [4] => /tmp/File_Find/dir/dir3/4.bak
            [5] => /tmp/File_Find/dir/dir2/3.txt
            [6] => /tmp/File_Find/dir/dir2/3.bak
        )

)
