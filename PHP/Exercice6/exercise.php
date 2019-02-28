<?php
// to create a function called "easterReverse"
function easterReverse ($myfile){
    //to get the file
    $fileContent = file_get_contents($myfile);
    // to find the half of the text
    $secondPart = substr($fileContent, floor(strlen($fileContent) / 2));
    //to substract the second half of the test
    $firstPart = substr($fileContent, 0, strlen($secondPart)-1);
    //to write in the midle of the file
    $file = fopen($myfile, 'r+');
    //
    fseek($file, strlen($firstPart), SEEK_SET);
    //  to reverse the second half part of the file.
    fwrite($file, strrev($secondPart), strlen($secondPart));
    // to close the file
    fclose($file);












}