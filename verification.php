<?php

$note = $_POST['note'];
$effectif = $_POST['effectif'];

$percentage = ((float) ($note) / (float) ($effectif)) * 100;
if ($percentage >= 60) {
    echo "vous etes dans la premiere division";
} elseif (45<$percentage || $percentage<=59) {
    echo "vous etes dans la deuxieme division";
} elseif (33<$percentage || $percentage<=44) {
    echo "vous etes dans la troisieme division";
} else {
    echo "vous avez echouez";
}