<?php 
$arr = [1,2,3,4,5,6,7,8,9,10];

$oddSum = 0;
$evenSum = 0;

foreach($arr as $val){
    if($val % 2 == 0){
        $evenSum += $val;
    }else{
        $oddSum += $val;
    }
}

echo "Odd Sum: " . $oddSum ."\n";
echo "Even Sum: " . $evenSum."\n";

$num =9;
$isPrime=true;
for($i=2; $i<=$num/2; $i++)
{
    if($num % $i==0){
        $isPrime = false;
        break;
    }
}

if($isPrime){
    echo "$num is prime number";
}else{
    echo "$num is not prime number"."\n";
}


$arr = [1,2,3,4,5,7,-9];
$sum=0;
foreach($arr as $value)
{
    if($value > 0)
    {
        $sum +=$value;
    }
}
echo $sum;


$arr = [1,2,2,2,2,3,3,3,4,5,4,5,6,6,6,7];
$count=[];

foreach($arr as $value){
    if(isset($count[$value])){
        $count[$value]++;
    }else{
        $count[$value] = 1;
    }
}

foreach($count as $key=>$value)
{
    if($count>1)
    {
        echo $key . " => " . $value . " times\n";
    }
}




















