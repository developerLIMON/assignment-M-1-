<?php
//Celsius and Farenheit Conversation//

$temperature=readline("Enter The Temperature Value: ");

echo "Choose the Conversation Type\n";
echo "F:Convert to Farenheit\n";
echo "C:Convert to Celsius\n";

$choice=strtoupper(readline("Enter Your Choice: "));

if ($choice == "F"){
    $farenheit = ($temperature * 9/5) + 32;
    echo "It is $farenheit °F\n";
}elseif($choice =="C"){
    $calsius =($temperature - 32)* 5/9;
    echo "It is $calsius °C\n";
}else {
    echo "Invalid Choice!Please choose F or C";
}

?>