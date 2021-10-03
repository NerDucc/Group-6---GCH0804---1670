<?php
    class TrainerModel extends Database {
        protected $table = "trainer";

        public function login($email, $password)
        {
            $sqlLogin = "SELECT * FROM $this->table WHERE trainer_email = ? AND trainer_password = ? LIMIT 1";

            $stmtLogin = $this->conn->prepare($sqlLogin);

            $stmtLogin->execute([$email, $password]);

            $resultLogin = $stmtLogin->setFetchMode(PDO::FETCH_OBJ);
            // tổng số bản ghi
            $login = $stmtLogin->fetchObject();

            return $login;
        }
    }