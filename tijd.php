<?php

$b= explode(" " , $argv[1]);
$c= 0;

foreach ($b as $value)
    $a= substr($value, -1);
switch ($a) {
    case 'd':
        $c=$c+((int)$value * 86400);
        break;

    case 'h':
        $c=$c+((int) $value * 3600);

        break;

    case 'm':
        $c=$c+((int) $value * 60);

        break;

    case 's':
        $c=$c+(int) $value;

        break;


    default:
        echo "is geen tijd";
        break;
}

echo "${c} seconde";
?>