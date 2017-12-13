<?php

$july = data ("F");

function JulyCheck($july){

if ($july =="july") {
    echo "Its July, so it can get really hot.";
}
else {
    echo "It’s not July, so at least we’re not in the peak of the heat.";
}
}

print JulyCheck($july);


?>