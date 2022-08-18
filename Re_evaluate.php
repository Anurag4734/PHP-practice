<?php
function evaluate($name,$attendance,$hygiene,$rating){
    if($attendance<80 && $hygiene<50){
        echo $name. ",You are fired from Rojan kirana Passal";
    }
    elseif ($hygiene<50 && $rating<2) {
        echo $name. ",You are fired from Rojan kirana Passal";
    }
    else{
        echo "Not fired for now";
    }
}
evaluate("Kushal",60,53,3.5);
?>