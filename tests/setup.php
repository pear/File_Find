<?php
if (@include(dirname(__FILE__)."/../Find.php")) {
    $status = '';
} else if (@include('File/Find.php')) {
    $status = '';
} else {
    $status = 'skip';
}

@mkdir('/tmp/File_Find/');
@mkdir('/tmp/File_Find/dir');

touch('/tmp/File_Find/dir/1.txt');
touch('/tmp/File_Find/dir/2.txt');

@mkdir('/tmp/File_Find/dir/dir2');
touch('/tmp/File_Find/dir/dir2/3.txt');
touch('/tmp/File_Find/dir/dir2/3.bak');

@mkdir('/tmp/File_Find/dir/dir3');
touch('/tmp/File_Find/dir/dir3/4.txt');
touch('/tmp/File_Find/dir/dir3/4.bak');

@mkdir('/tmp/File_Find/dir/txtdir');
touch('/tmp/File_Find/dir/txtdir/5.txt');

@mkdir('/tmp/File_Find/dir2/');
@mkdir('/tmp/File_Find/dir2/0');
touch('/tmp/File_Find/dir2/0/1.txt');

@mkdir('/tmp/File_Find/dir2/1');
touch('/tmp/File_Find/dir2/1/1.txt');

@mkdir('/tmp/File_Find/dir2/2');
touch('/tmp/File_Find/dir2/2/1.txt');

?>
