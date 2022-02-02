<?php

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;

class User extends Model{

    const SESSION = "User";

    public static function login($login, $password){

    $sql = new Sql();

    $results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN", array(":LOGIN"=>$login
));

    if (count($results[0]) === 0)
    {
        throw new \Exceptiom("Usuario Inexistente ou senha invalida.");
    }

    $data = $reseults[0];

    if (password_verify($password, $data["despassword"]) === true)
    {
        $user = new User();

        $user->setData($data);
        
        $_SESSION[User::SESSION] = $user->getValues();

    } else {
        throw new \Exception("Usuario Inexistente ou senha invalida.");
    }
''
}

public static function verifyLogin($inadmin = true)
{

    if(
        !isset()$_SESSION[User::SESSION]
        ||
        !isset($_SESSION[User::SESSION])
        ||
        !(int)$_SESSION[User::SESSION]["iduser"] > 0
        ||
        (bool)$_SESSION[User::SESSSION]["inadmin"] !== $inadmin
        )
    ){
        header("Locarion: /admin/login");
    }
}

public static function logout()
{

        $_SESSION[User::SESSION] = NULL;
}



?>