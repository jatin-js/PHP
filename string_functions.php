<?php
# substr()
# Returns a portion of as string

// $output = substr('Hello', 1, 3);
// $output = substr('Hello', -2);

// echo $output;

# strlen()
# Returns the length of a string

// $output = strlen('Hello World');
// echo $output;

# strpos()
# Finds the position of the first occurance of a sub string

// $output = strpos('Hello World', 'o');
// echo $output;

# strpos()
# Finds the position of the last occurance of a sub string

// $output = strrpos('Hello World', 'o');
// echo $output;

# trim()
# Strips whitespace

// $text = 'Hello World                ';
// var_dump($text);

// $trimmed = trim($text); //Used in forms if user put some spaces in last
// var_dump($trimmed);

# strtoupper
# Makes everything uppercase

// $output = strtoupper('Hello World');
// echo $output;

# strtolower
# Makes everything lowercase

// $output = strtolower('Hello World');
// echo $output;

# ucwords()
# Capitalize every word

// $output = ucwords('hello world');
// echo $output;

# str_replace()
# Replace all occurance of a search string with a replacement

// $text = 'Hello World';
// $output = str_replace('World', 'Everyone', $text);
// echo $output;

# is_string()
# Check if string

// $val = '22';
// $output = is_string($val); //If not string, it returns nothing
// echo $output;

// $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

// foreach ($values as $value) {
//     if (is_string($value)) {
//         echo "$value is a string<br>";
//     }
// }

# gzcompress()
# Compress a string

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, vel similique! Sit omnis recusandae esse, quis nihil beatae error officia tempore? Voluptatem modi perferendis odit quam, neque est facere, deserunt corrupti, accusamus doloribus ipsum! Unde officiis atque dignissimos fuga eaque cum, earum aspernatur necessitatibus illo nostrum voluptatibus tempore, aliquid nihil consectetur vitae molestiae, temporibus labore ipsa voluptatem pariatur? Deserunt, fugit? Ducimus assumenda molestiae blanditiis excepturi recusandae esse! Facilis, doloremque obcaecati recusandae eligendi velit inventore magnam voluptas deserunt? Accusantium in libero commodi reiciendis ratione repudiandae perferendis error sint pariatur natus magnam nam dolor dolores totam, illum dignissimos delectus? Minima, accusamus quam.";

$compressed = gzcompress($string);

// echo $compressed;

$original = gzuncompress($compressed);
echo $original;
