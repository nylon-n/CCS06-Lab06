<?php  

$name = $argv[1];
$age = $argv[2];


function AgeCalculator($age)
    {
        return date("Y") - $age;
    };


echo "Your name is " . $name . ", and your age is " . AgeCalculator($age);


if (AgeCalculator($age) >= 18){
    echo "\nYou are a voter.";
};


if (AgeCalculator($age) >= 60){
    echo "\nYou are a senior citizen.";
};


?>
