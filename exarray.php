<?php
$lista1 =['nome' => 'fulano','idade' => '90',
'atributos' => ['força' => '60','agilidade' => '80','destreza' => '50'],
'vida' => 1000,
'mana' => 920
];

echo "NOME: ".$lista1[nome]."<br/>";
echo "FORÇA: ".$lista1[atributos][força]."<br/>";
echo "VIDA: ".$lista1[vida];


?>