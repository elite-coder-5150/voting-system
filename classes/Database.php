<?php

    class Database extends PDO {
        public static $inst;
        public  $username;
        public  $password;
        public  $dns;
        public function __construct() {
            parent::__construct($this->dns);

            $this->dns = 'mysql:host=localhost;dbname=voting_system;charset=utf8';
            try {
                self::$inst = new PDO($this->dns, $this->username, $this->password);
                self::$inst->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PdoException $e) {
                echo $e->getMessage();
            }

            return self::$inst;
        }
    }
