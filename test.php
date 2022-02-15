<?php
$p=readline();
if($p<40){
    echo "fail";
}elseif ($p>40&&$p<=69) {
    echo "d";
}elseif ($p>=70&&$p<80){
    echo "c";
}elseif ($p>=80&&$p<90){
    echo "b";
}elseif ($p>=90&&$p<=100){
    echo "a";
}