<?php
$path = 'dir0/dir1/myfile.php';
$file = 'file1.txt';

# Return filename
// echo basename($path);

# Return filename without ext
// echo basename($path, '.php');

# Return the dir name from path
// echo dirname($path);

# Check if file exists
// echo file_exists($file);     // Return 1 even if it's a folder
// echo file_exists('test');       // Return 1, test is a folder name

# Get abs path
// echo realpath($file);

# Checks to see if file
// echo is_file($file);       // Return 1 only if it's a file

# Check if file is writeable
// echo is_writable($file);

# Check if file is readable
// echo is_readable($file);

# Get File size
// echo filesize($file);

# Create a directory
// mkdir('testing');

# Remove dir if empty
// rmdir('testing');

# Copy file
// echo copy('file1.txt', 'file2.txt');

# Rename file
// rename('file2.txt', 'myfile.txt');

# Delete File
// unlink('myfile.txt');

# Write from file to string
// echo file_get_contents($file);

# Write string to file
// echo file_put_contents($file, 'Goodbye World');

# Append in file
// $current = file_get_contents($file);
// $current .= ' Goodbye World';
// file_put_contents($file, $current);

# Open File for reading
// $handle = fopen($file, 'r');
// $data = fread($handle, filesize($file));
// echo $data;
// fclose($handle);

# Open File for writing
$handle = fopen('file2.txt', 'w');
$text = "Jatin Singh\n";
fwrite($handle, $text);
$txt = "Steve Smith\n";
fwrite($handle, $txt);
fclose($handle);
