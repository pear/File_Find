<?php
if (@include(dirname(__FILE__)."/../Find.php")) {
    $status = '';
} else if (@include('File/Find.php')) {
    $status = '';
} else {
    $status = 'skip';
}
?>
