<?php

    include_once('conexao.php');

    //consultar no banco de dados

    // Criar a Query para recuperar os registros do BD
    $query_usuarios = "SELECT id, nome_aluno,matricula,data_nascimento,email,telefone,logradouro,numero,complemento,bairro,cidade,estado,pais 
                        FROM tb_alunos                        
                        ORDER BY id ASC";

    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    $dados="";
    while ($ron_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
        extract($ron_usuario);
        $dados .= "<tr>
                        <td>$id</td>
                        <td>$nome_aluno</td>
                        <td>$matricula</td>
                        <td>$data_nascimento</td>
                        <td>$email</td>
                        <td>$telefone</td>
                        <td>$logradouro</td>
                        <td>$numero</td>
                        <td>$complemento</td>
                        <td>$bairro</td>
                        <td>$cidade</td>
                        <td>$estado</td>
                        <td>$pais</td>
                </tr>";        
    };

    echo $dados;