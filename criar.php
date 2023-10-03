<?php

$arqProduto="carrinho.txt";
$fp=fopen("carrinho.txt","a");

$id="";
$valor="";
$qtd="";
$op=$_POST['value'];
$dadosFinais="";

switch($op)
{
    case 1:
        $id=$_POST['id'];
        $valor=22;
        $qtd=$_POST['quant'];
        $dadosFinais = $id. ";" .
        $valor .  ";" . $qtd . ";";
        fwrite($fp,$dadosFinais);

        break;
    case 2:
        $id=$_POST['id'];
        $valor=23;
        $qtd=$_POST['quant'];
        $dadosFinais = $id. ";" .
        $valor .  ";" . $qtd . ";";
        fwrite($fp,$dadosFinais);
        break;

    case 3:
        $id=$_POST['id'];
        $valor=26;
        $qtd=$_POST['quant'];
        $dadosFinais = $id. ";" .
        $valor .  ";" . $qtd . ";";
        fwrite($fp,$dadosFinais);
        break;
    case 4:
        $id=$_POST['id'];
        $valor=25;
        $qtd=$_POST['quant'];
        $dadosFinais = $id. ";" .
        $valor .  ";" . $qtd . ";";
        fwrite($fp,$dadosFinais);
        break;
    case 5:
        $id=$_POST['id'];
        $valor=30;
        $qtd=$_POST['quant'];
        $dadosFinais = $id. ";" .
        $valor .  ";" . $qtd . ";";
        fwrite($fp,$dadosFinais);
        break;
    case 6:
        $id=$_POST['id'];
        $valor=27;
        $qtd=$_POST['quant'];
        $dadosFinais = $id. ";" .
        $valor .  ";" . $qtd . ";";
        fwrite($fp,$dadosFinais);
        break;
    default:
}
fclose($fp);


?>
