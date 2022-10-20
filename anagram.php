<?php

$word = $argv[1];
if (isset($argv[2])) {
    $number = $argv[2];
} else {
    $number = 0;
}

$result = [];

$file = fopen("dico.txt", "r");

if ($file) {

    while (($buffer = fgets($file, 4096)) !== false) {
        if (strlen($buffer) - 1 == strlen($word)) {
            $result[] = $buffer;
            $i = 0;
            while ($i < strlen($word)) {
                for ($j = 0; $j < strlen($word); $j++) {
                    if ($word[$i] == $buffer[$j]) {
                        if ($i == strlen($word)-1) {
                            echo $buffer;
                        }
                        $i++;
                    }
                }
                break;
            }
        }
    }
    fclose($file);


    /* foreach ($result as $value) {
        $i = 0;
        while ($i < strlen($word)) {
            for ($j = 0; $j < strlen($word); $j++) {
                if ($word[$i] == $value[$j]) {
                    if ($i == strlen($word) -1) {
                        echo $value;
                    }
                    $i++;
                }
            }
            $i =5;
        }
    } */
}
