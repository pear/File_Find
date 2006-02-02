--TEST--
File_Find::test 'shell' mode patterns
--SKIPIF--
<?php 
include('./setup.php');
print $status; 
?>
--FILE--
<?php 
require_once('./setup.php');

// *.php -> .*\.php$
$result[0] = &File_Find::search('*.*', 'File_Find/dir/', 'shell', false);
$result[1] = &File_Find::search('*.bak', 'File_Find/dir/', 'shell', false);
$result[2] = &File_Find::search('*3*', 'File_Find/', 'shell', false, 'both');

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    foreach($result as $k => $r) {
        $result[$k] = str_replace("\\", '/', $result[$k]);
    }
}

print_r($result[0]);
print_r($result[1]);
print_r($result[2]);

$tcases[] = array("*scope", "msscope");
$tcases[] = array("some*", "something");
$tcases[] = array("some*", "some");
$tcases[] = array("some", "something.wrong");
$tcases[] = array("*som?e*", "som_exx.dll");
$tcases[] = array("*.dll", "som_exx.dll");
$tcases[] = array("*.dll", "som_exx.dll.bak");

foreach($tcases as $tc) {
    list($tm, $tf) = $tc;
    echo ( File_Find_match_shell($tm, $tf) ) ? "TRUE  " : "FALSE ";
    echo "$tm \t$tf\n";
}

?>
--GET--
--POST--
--EXPECT--
Array
(
    [0] => File_Find/dir/1.txt
    [1] => File_Find/dir/2.txt
    [2] => File_Find/dir/txtdir/5.txt
    [3] => File_Find/dir/dir3/4.bak
    [4] => File_Find/dir/dir3/4.txt
    [5] => File_Find/dir/dir2/3.bak
    [6] => File_Find/dir/dir2/3.txt
)
Array
(
    [0] => File_Find/dir/dir3/4.bak
    [1] => File_Find/dir/dir2/3.bak
)
Array
(
    [0] => File_Find/dir/dir3
    [1] => File_Find/dir/dir2/3.bak
    [2] => File_Find/dir/dir2/3.txt
)
TRUE  *scope 	msscope
TRUE  some* 	something
TRUE  some* 	some
TRUE  some 	something.wrong
TRUE  *som?e* 	som_exx.dll
TRUE  *.dll 	som_exx.dll
FALSE *.dll 	som_exx.dll.bak
