<?php
$path = '/dir1/myfile.php';
$file = 'file1.txt';

// //return file name
// echo basename($path) . "<br>";

// //no extension
// echo basename($path, '.php') . "<br>";

// // dir name
// echo dirname($path);


// //returns 1 if file exists
// echo file_exists($file);

// echo realpath($file);

// echo is_file($file);

// echo is_writable($file);

// echo filesize($file);

// mkdir('testing');

// //removes if empty
// rmdir('testing');

// echo copy('file1.txt', 'file2.txt');

// rename('file2.txt', 'hello.txt');


//removes the file
// unlink('hello.txt');



// // write to file
// echo file_put_contents($file, 'Derpa derp');

// //write from file to string
// echo file_get_contents($file);

// $current = file_get_contents($file);
// $current .= ' Goodbye';
// file_put_contents($file, $current);
// echo "browsersync";

//open file for reading

// $fh = fopen($file, 'r');
// $data = fread($fh, filesize($file));
// echo $data;

$fh = fopen('file3.txt', 'w');
$txt = ' fh write\n';
$data = fwrite($fh, $txt);
$txt = ' fh write2';
$data = fwrite($fh, $txt);
fclose($fh);
echo $data;


