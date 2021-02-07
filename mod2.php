<?php

$idade = 89;

// if($idade >= 18){
//     echo "muy bien";
// }else{echo "muy malo";}

//echo ($idade >= 18)?  "muy bien" : "muy malo";

$menorDeIdade = ($idade < 18)? true : false;

if ($menorDeIdade == true){
    echo "menor de idade!".'</br><form action="https://www.google.com">
    <input type="submit" value="retorne"></form>';

}else{
    echo "maior de idade!".'</br><form action="https://www.eb.mil.br/web/ingresso/servico-militar">
        <input type="submit" value="alistamento"></form>';
}


?>

