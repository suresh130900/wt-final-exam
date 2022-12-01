<?php

function greeting(){

    $timeOfDay = date('a');
    if($timeOfDay == 'am' && $timeOfDay<12){
        return 'Good morning, welcome to our site';
    }
    if($timeOfDay >=20 && $timeOfDay=='pm')
    {
        return 'Good Evening, welcome to our site';
    }
    else if($timeOfDay >17 && $timeOfDay=='pm')
    {
        return 'Good Evening, welcome to our site';
    }
    else if($timeOfDay >12 && $timeOfDay=='pm')
    {
        return 'Good Afternoon, welcome to our site';
    }
   
    //echo $timeOfDay;
}

function daytime()
{
    $hour = date('e');

    if ($hour >= 20) 
    {
        $greetings = "Good Night";
    } 
    elseif ($hour > 17) 
    {
        $greetings = "Good Evening";
    } 
    elseif ($hour > 11) 
    {
        $greetings = "Good Afternoon";
    } 
    elseif ($hour < 12) 
    {
        $greetings = "Good Morning";
    }

    echo $greetings;
}
daytime(); 

$time = greeting();
echo $time;
?>