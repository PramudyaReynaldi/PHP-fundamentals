<?php

// --------------- Tipe data number -----------------
// |                                                |
// |      > int => integer (Bilangan bulat)         |
// |      > float => Bilangan pecahan               |
// |                                                |
// --------------------------------------------------

// ------------------- int (integer)-----------------
                                                    
echo "Desimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b1010);

echo "Underscore number : ";
var_dump(1_000_000);


echo "\n\n";

// ------------------- float (bilangan pecahan) -----------------

echo "Floating point : ";
var_dump(1.234);

echo "Floating point dengan E notation plus: (1.7 x 1000)";
var_dump(1.7e3);

echo "Floating point tanpa E notation minus : (1.7 x 0.001)";
var_dump(1.7e-3);

echo "Underscore di floating point : ";
var_dump(1_234.567_890);

echo "\n\n";

// -------------------------------------------------------------
// |                                                           |
// |                    OVERFLOW INTEGER                       |
// |                                                           |
// -------------------------------------------------------------
// |           Integer juga mempunyai batas maksimum           |
// |  Jika bilangan integer lebih dari 9223372036854775807     |
// |         Maka otomatis akan mengkonversi ke float.         |
// -------------------------------------------------------------


echo "Overflow integer : ";
var_dump(9223372036854775807); // Sebelum overflow masih berupa integer

echo "Overflow integer yang di konversi : ";
var_dump(9223372036854775808); // Setelah overflow otomatis berpindah kedalam float