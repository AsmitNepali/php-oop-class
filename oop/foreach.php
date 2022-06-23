<?php
function inputData(array $name)
{
    foreach($name as $key => $word)
    {
        $key+=1;
        echo"$key----$word\n";
    }
}
inputData(["Aas","ajdf","fjdfj"]);
