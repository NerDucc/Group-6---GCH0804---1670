<?php
    class TrainingStaffModel extends Database {
        protected $table = "training_staff";

        public function login($email, $password)
        {
            $sqlLogin = "SELECT * FROM $this->table WHERE training_staff_email = ? AND training_staff_password = ? LIMIT 1";

            $stmtLogin = $this->conn->prepare($sqlLogin);

            $stmtLogin->execute([$email, $password]);

            $resultLogin = $stmtLogin->setFetchMode(PDO::FETCH_OBJ);
            // tổng số bản ghi
            $login = $stmtLogin->fetchObject();

            return $login;
        }
    }