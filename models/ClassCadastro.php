<?php
namespace Models;

class ClassCadastro extends ClassCrud{

    #Realizará a inserção no banco de dados
    public function insertCad($arrVar)
    {
     
        $this->insertDB(
          "users",
          "?,?,?,?,?,?,?,?,?",
                array(
                    0,
                    $arrVar['nome'],
                    $arrVar['email'],
                    $arrVar['hashSenha'],
                    $arrVar['dataNascimento'],
                    $arrVar['cpf'],
                    $arrVar['dataCreate'],
                    'user',
                    'confirmation'
                )
        );

        $this->insertDB(
            "confirmation",
                "?,?,?",
                array(
                    0,
                    $arrVar['email'],
                    $arrVar['token']
                )
        );
    }

    #Veriricar se já existe o mesmo email cadastro no db
    public function getIssetEmail($email)
    {
        $isEmail=$this->selectDB(
            "*",
            "users",
            "where email=?",
            array(
                $email
            )
        );
        //Retorna quantidade de linhas
        return $qtRow=$isEmail->rowCount();
    }
}