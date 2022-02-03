<?php 

namespace App\Entity;

class User {
    public const TYPE = 'user';
    public const ADMIN = 'admin';

    private ?int $id;
    private string $username;
    private string $email;
    private string $type;
    private string $password;

    public function __construct(string $username, string $email, string $password, ?string $type=null, ?int $id=null){
        $this->id=$id;
        $this->username=$username;
        $this->password=$password;
        $this->type=$type ?? self::TYPE ;
        $this->email=$email;
    }

    public function getId():?int{
        return $this->id;
    }

    public function getUsername():string {
        return $this->username;
    }

    public function getEmail():string {
        return $this->email;
    }

    public function getType():string {
        return $this->type;
    }

    public function setPassword(string $plainPassword):void{
        $this->password=password_hash($plainPassword, PASSWORD_ARGON2ID);
    }

    public function getPassword():string {
        return $this->password;
    }

    public function isAdmin():bool {
        return $this->type===self::ADMIN;
    }

}