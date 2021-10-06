<?php
    class TraineeModel extends Database {
        protected $table = "trainee";

        public function login($email, $password)
        {
            $sqlLogin = "SELECT * FROM $this->table WHERE trainee_email = ? AND trainee_password = ? LIMIT 1";

            $stmtLogin = $this->conn->prepare($sqlLogin);

            $stmtLogin->execute([$email, $password]);

            $resultLogin = $stmtLogin->setFetchMode(PDO::FETCH_OBJ);
            // tổng số bản ghi
            $login = $stmtLogin->fetchObject();

            return $login;
        }

        public function getAll() {

            $sqlSelect = "SELECT * FROM $this->table";
    
            $stmt = $this->conn->prepare($sqlSelect);
    
            $stmt->execute();
    
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
    
            $courses = $stmt->fetchAll();
    
            return $courses;
        }
    
        // lấy ra 1 bản ghi duy nhất
        public function getSingle($id) {
    
            $sqlSelect = "SELECT * FROM $this->table WHERE id = ? LIMIT 1";
    
            $stmt = $this->conn->prepare($sqlSelect);
    
            $stmt->execute([$id]);
    
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
    
            $user = $stmt->fetchObject();
    
            return $user;
        }
    
        // lưu mới 1 bản ghi
        // hàm là tập hợp các câu lệnh để thực hiện 1 chức năng
        // hàm có input và output
        // input là tham số
        // output là return cuối hàm
        public function store(array $dataBind) {
    
            echo "<pre>";
            print_r($dataBind);
            echo "</pre>";
            $sqlInsert = "INSERT INTO $this->table ( ) VALUES ( )";
    
            $stmtInsert = $this->conn->prepare($sqlInsert);
    
            $resultInsert = $stmtInsert->execute($dataBind);
    
            // kết quả thực thi câu sql insert
            return $resultInsert;
        }
    
    
        // update 1 bản ghi
        public function update(array $dataRaw) {
            $dataBindSql = [];
            // sql update va sql delete
            $sqlUpdate = "UPDATE $this->table SET ";
    
            if (isset($dataRaw["user_name"])) {
                $sqlUpdate .= "`user_name` = ?";
                $dataBindSql[] = $dataRaw["user_name"];
            }
    
            if (isset($dataRaw["first_name"])) {
                $sqlUpdate .= ",`first_name` = ?";
                $dataBindSql[] = $dataRaw["first_name"];
            }
    
    
            $stmtInsert = $this->conn->prepare($sqlUpdate);
    
            // truyền cho ->execute là 1 mảng chỉ số
            $resultUpdate = $stmtInsert->execute($dataBindSql);
    
            // output
            return $resultUpdate;
        }
    
    
        // delete 1 bản ghi
        public function delete($id) {
    
            $sqlDelete = "DELETE FROM $this->table WHERE `id` = ?";
    
            $stmtDelete = $this->conn->prepare($sqlDelete);
    
            $resultDelete = $stmtDelete->execute([$id]);
    
            // output
            return $resultDelete;
        }

    }