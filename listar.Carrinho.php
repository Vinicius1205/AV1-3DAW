<?php
$x=0;
$dados="";
$arqProduto="carrinho.txt";
$fp=fopen("carrinho.txt","w");
fgets($dados);

while($dados)
{
    $dadosExplode=explode(";",$dados);
    echo $dadosExplode[$x]",";
    echo "<br>";
    $x++;
}
fclose($fp);
?>
