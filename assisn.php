
<?php

$tutionFee = 30000;

$tutionFee = ($tutionFee>20000) ? "25 parcent commission" : (($tutionFee>10000) && ($tutionFee<20000)) ? "20 parcent commission" : (($tutionFee>7000) && ($tutionFee<10000)) ? "15 parcent commission" : "Data will be invalid";

echo $tutionFee;