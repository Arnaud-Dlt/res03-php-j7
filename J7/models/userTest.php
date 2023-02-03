<?php 

class User {
    private int $id ;
    private string $first_name ;
    private string $last_name ;
    private string $email ;
    private string $password ;
    
    public function __construct(string $first_name, string $last_name, string $email, string $password)
    {
        $this-> id = null;
        $this-> firstname = $firstname;
        $this-> lastname = $lastname;
        $this-> email = $email;
        $this-> password = $password;
    }
    
    
    /// GETTER
    
    public function getId() : string
    {
        return $this->id;
    }
    
    public function getFirstName() : string
    {
        return $this->firstname;
    }
    
    public function getLastName() : string
    {
        return $this->lastname;
    }
    
    public function getEmail() : string
    {
        return $this->email;
    }
    public function getPassword() : string
    {
        return $this->password;
    }
    
    
    /// SETTER
    
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function setFirstName(string $firstname) : void
    {
        $this->firstname = $firstname;
    }
    
    public function setLastName(string $lastname) : void
    {
        $this->lastname = $lastname;
    }
    
    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
    
    public function setPassword(string $password) : void
    {
        $this->password = $password;
    }
}

?>