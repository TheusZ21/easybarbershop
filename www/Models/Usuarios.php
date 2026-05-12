<?php

require_once __DIR__ . '/../Config/Database.php';

class Usuario {

    public static function save($dono, $barbearia, $email, $cpf, $fone, $senha){

        $conn = Database::connect();

        $sql = $conn->prepare("
            INSERT INTO usuarios (
                dono,
                barbearia,
                email,
                cpf,
                fone,
                senha
            )
            VALUES (
                :dono,
                :barbearia,
                :email,
                :cpf,
                :fone,
                :senha
            )
        ");

        $sql->bindValue(':dono', $dono);
        $sql->bindValue(':barbearia', $barbearia);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':fone', $fone);
        $sql->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT));

        return $sql->execute();
    }
}