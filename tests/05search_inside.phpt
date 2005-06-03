--TEST--
File_Find::search() inside another object
--SKIPIF--
<?php 
include('./setup.php');
print $status; 
?>
--FILE--
<?php 
require_once('./setup.php');

class Foo {
 
   function search($pattern, $path, $type='php') {
       $retval = File_Find::search($pattern, $path, $type) ;
       return($retval);
   }

}

$f = new Foo();
$result0  = $f->search('/txt/', '/tmp/File_Find/dir/', 'perl') ;
$result1  = $f->search('/txt/', '/tmp/File_Find/dir', 'perl') ;
$result2 = Foo::search('/txt/', '/tmp/File_Find/dir/', 'perl') ;

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
