<?php
function evaluate($name,$attendance,$hygiene,$rating){
    if($attendance<80){
        echo "$name ,You are fired from Rojan kirana Passal";
    }
    elseif ($hygiene<50) {
        echo "$name ,You are fired from Rojan kirana Passal";
    }
    elseif ($rating<2) {
        echo "$name ,You are fired from Rojan kirana Passal";
    }
    else{
        echo "Not fired for now";
    }
}
evaluate("Kushal",20,70,3);
?>