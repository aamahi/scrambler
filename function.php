<?php 

function displayKey($key){
    printf("value='%s'",$key);
}

function scramblerData($originalData,$key){
    $originalKey = "abcdefghijklmnopqrstuvwzyz0123456789";
    $data ='';
    $length = strlen($originalData);
    for($i=0;$i<$length;$i++){
        $currentChar  = $originalData[$i];
        $position = strpos($originalKey,$currentChar);
        if($position !==false){
            $data .= $key[$position];
        }else{
            $data .= $currentChar;
        }
    }
    return $data;
}

function decodeData($originalData,$key){
    $originalKey = "abcdefghijklmnopqrstuvwzyz0123456789";
    $data ='';
    $length = strlen($originalData);
    for($i=0;$i<$length;$i++){
        $currentChar  = $originalData[$i];
        $position = strpos($key,$currentChar);
        if($position !==false){
            $data .= $originalKey[$position];
        }else{
            $data .= $currentChar;
        }
    }
    return $data;
}