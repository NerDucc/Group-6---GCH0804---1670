<?php
    class AdminModel extends Database {
        protected $table = "admins";

        public function login($email, $password)
        {
            $sqlLogin = "SELECT * FROM $this->table WHERE admin_email = ? AND admin_password = ? LIMIT 1";

            $stmtLogin = $this->conn->prepare($sqlLogin);

            $stmtLogin->execute([$email, $password]);

            $resultLogin = $stmtLogin->setFetchMode(PDO::FETCH_OBJ);
            // tổng số bản ghi
            $login = $stmtLogin->fetchObject();

            return $login;
        }
    }