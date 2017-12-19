<?php

for ($x=1; $x <= 100; $x++){

if( $x % 3 == 0 ){
        echo ("Woof");
    }
    if( $x % 5 == 0 ){
        echo ("Meow");
    }
    if(! (( $x % 3 == 0 ) || ( $x % 5 == 0 )) ){
        echo $x;
    }

       echo ('<br>');
   }

?>