<?php
$people =array('Taro','Jiro','Saburo');

var_dump($people);

echo $people[0];

$person = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'saburo'
);

var_dump($person);

echo $person[1];

$hitobito = [
    [
        'hito' => 'Taro',
        'age' => '25',
        'male' => 'men',
    ],
    [
        'hito' => 'Jiro',
        'age' => '20',
        'male' => 'men',
    ],
    [
        'hito' => 'hanako',
        'age' => '16',
        'male' => 'women',
    ]
    ];

foreach($hitobito as $hito){
    echo $hito['hito'] . '(' . $hito['age'] . '歳' . $hito['male'] . ')' . '<br />';
}