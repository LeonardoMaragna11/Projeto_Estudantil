<?php

    session_start();
    require_once("servidor.php");
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);


    try{
        $sql ="SELECT * FROM tb_usuario WHERE login_us=? AND senha_us=?";
        $res = $serv->prepare($sql);
        $res->bindvalue(1,$usuario);
        $res->bindvalue(2,$senha);
        $res->execute();

        if($campo = $res->fetch(PDO::FETCH_ASSOC)){
            $_SESSION['usuario']['id'] = $campo["cod_us"];
            $_SESSION['usuario']['nome'] = $campo["nome_us"];
            $_SESSION['usuario']['nivel'] = $campo["nivel_us"];
            header("Location: menu.php");
            if(isset($_SESSION['erro']['informacao'])){
                unset($_SESSION['erro']['informacao']);
            }
        }else{
            $_SESSION['erro']['informacao'] ="<div class='informacao'>Usuario ou senha errados</div>";
            $_SESSION['erro']['inputerro'] = 'inputerro';
            header("Location: index.php");
        }
    }catch(PDOException $e){
            echo($e->getMessage());
    }

    

?>