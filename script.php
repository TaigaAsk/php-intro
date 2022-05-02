<?php
#Crie um projeto em PHP para uma competição de natação, o sistema deverá permitir a inserção de competidores com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, 
#por exemplo, 6 a 12 anos categoria infantil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar a categoria para cada nadador que for cadastrado.

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

# Validação dos campos -------------------------------------------------------------------

if(empty($nome))
{
    echo ('Erro: O campo Nome deve ser preenchido.') ;
    return;
}

if(strlen($nome)<3)
{
    echo ('Erro: O campo Nome deve ter mais de 2 caracteres.') ;
    return;
}

if(strlen($nome)>40)
{
    echo ('Erro: O campo Nome não deve ter mais de 40 caracteres.') ;
    return;
}

if(!is_numeric($nome))
{
    echo ('Erro: O campo Idade deve ser preenchido com numeros.') ;
    return;
}
#-----------------------------------------------------------------------------------------

if($idade >= 6 and $idade <= 12) 
{
    for($i = 0; $i <= 3; $i++)
    {
        if($categorias[$i] == 'infantil')
            echo ('O nadador '.$nome.' está competindo na categoria '.$categorias[$i]);
        
    }
}
else if($idade >= 13 and $idade <= 18 )
    {
        for($i = 0; $i <= 3; $i++)
        {
            if($categorias[$i] == 'adolescente')
            echo ('O nadador '.$nome.' está competindo na categoria '.$categorias[$i]);
        }
    }
else
    {
        for($i = 0; $i <= 3; $i++)
            {
                if($categorias[$i] == 'adulto')
                echo ('O nadador '.$nome.' está competindo na categoria '.$categorias[$i]);
            }
    }