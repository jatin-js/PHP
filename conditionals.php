<?php
# CONDITIONALS

/*

==      Similar
===     Identical
<
>
<=
>=
!=      Not Similar
!==     Not Identical

 */

// $num = 4;

// if ($num == 5) {
//     echo '5 passed';
// } else if ($num == 6) {
//     echo '6 passed';
// } else {
//     echo 'did not pass';
// }

# NESTING IF

$num = 6;

// if ($num > 4) {
//     if ($num < 10) {
//         echo "$num passed";
//     }else{
//   echo "whatever";
//}
// }

/*
LOGICAL OPERATORS

and &&
or ||
xor
 */

// if ($num > 4 xor $num < 10) { //one should be true but not both
//     echo "$num passed";
// }

# SWITCH

$favColor = 'yellow';

switch ($favColor) {
    case 'red':echo 'Your favourite color is red';
        break;
    case 'blue':echo 'Your favourite color is blue';
        break;
    case 'green':echo 'Your favourite color is green';
        break;
    default:echo 'Your favourite color is something else';

}
