<?php
#Crie um projeto em PHP para uma competição de natação, o sistema deverá permitir a inserção de competidores com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, 
#por exemplo, 6 a 12 anos categoria infantil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar a categoria para cada nadador que for cadastrado.

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//$categorias[] = 'idoso';
//print_r($categorias);

$nome = 'eduardo';
$idade = 19;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 and $idade <= 12) 
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo ('O nadador '.$nome.' está competindo na categoria infantil.');
        
    }
}
    else if($idade >= 13 and $idade <= 18 )
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'adolescente')
            echo ('O nadador '.$nome.' está competindo na categoria adolescente.');
        }
    }
        else
        {
            for($i = 0; $i <= count($categorias); $i++)
                {
                    if($categorias[$i] == 'adulto')
                    echo ('O nadador '.$nome.' está competindo na categoria adulta.');
                }
        }