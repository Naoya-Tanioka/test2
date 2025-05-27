<?php
$a = 6;
if($a === 5) {
    echo "\$aは５です";
}elseif($a === 7){
    echo "\$aは7です";
}else{
    echo "$aは５と７以外です";
}

$people = "Saburo";

switch($people) {
    case "Taro":
    echo "太郎です";
    break;
    case "Jiro":
    echo "次郎です";
    break;
    case "Saburo":
    echo "三郎です";
    break;
}

$b= 7;
$c= ($b > 5) ? "TRUE" or "FALSE";


$result = ()