<?php
for ($i = 0; $i < 4; $i++) {
    echo $i;
}

echo "<br />";

for ($u = 1; $u <= 5; $u++) {
    echo $u * 2 . "<br />";
}

$k = 0;

while($k < 3){
    echo 'k= ' . $k . '<br />';
    $k += 1;
}

$count = 0;

while($count < 100){
        if($count ===4){
            echo "..." . "<br />";
        }
        if($count >=4 && $count<=17){
        $count++;
        continue;
        }
        if($count ==20){
            break;
        }
    $count++;
    echo $count . "<br />";
}

$num =0;

do{
    echo 'num=' . $num . '<br />';
    $num++;
}while($num < 3);

for ($fiz = 1; $fiz <=50; $fiz++){
    if($fiz % 3 == 0 && $fiz % 5 ==0){
        echo 'FIzzBuzz' . '<br />';
    }elseif($fiz % 3 == 0){
        echo 'Fizz' . '<br />';
    }elseif($fiz % 5 == 0){
        echo 'Buzz' . '<br />';
    }else{
        echo $fiz . '<br />';
    }
}

for ($j = 1; $j < 6; $j++) {
    echo "●";
  }