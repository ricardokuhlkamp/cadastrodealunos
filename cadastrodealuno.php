<?php

    include_once('conexao.php');

    $nome_aluno=$_POST['nome_aluno']; //variaveis que recebem os parametros pelo método POST
    $matricula=$_POST['matricula'];
    $data_nascimento=$_POST['data_nascimento'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $logradouro=$_POST['logradouro'];
    $numero=$_POST['numero'];
    $complemento=$_POST['complemento'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $pais=$_POST['pais'];

    $sql = 'INSERT INTO tb_alunos(nome_aluno,matricula,data_nascimento,email,telefone,logradouro,numero,complemento,bairro,cidade,estado,pais) VALUES (:nome_aluno,:matricula,:data_nascimento,:email,:telefone,:logradouro,:numero,:complemento,:bairro,:cidade,:estado,:pais)';
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nome_aluno',$nome_aluno);
    $stmt->bindParam(':matricula',$matricula);
    $stmt->bindParam(':data_nascimento',$data_nascimento);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':telefone',$telefone);
    $stmt->bindParam(':logradouro',$logradouro);
    $stmt->bindParam(':numero',$numero);
    $stmt->bindParam(':complemento',$complemento);
    $stmt->bindParam(':bairro',$bairro);
    $stmt->bindParam(':cidade',$cidade);
    $stmt->bindParam(':estado',$estado);
    $stmt->bindParam(':pais',$pais);

    $stmt->execute();