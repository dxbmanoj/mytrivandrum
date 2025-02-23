<?php
$file = 'counter.txt';

if (!file_exists($file)) {
    file_put_contents($file, 7949); // Setting the counter to 7949 so the first visit will be 7950
}

$count = (int) file_get_contents($file);
$count++;
file_put_contents($file, $count);

echo $count;
?>
