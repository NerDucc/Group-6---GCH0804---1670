<?php
    class TraineeController {
        public function index()
        {
            include_once "Views/Trainee/index.php";
        }

        public function viewlogin()
        {
            include_once "Views/Trainee/login.php";
        }

        public function login()
        {
            $data = [
                'email'    => postInput("email"),
                'password' => md5(postInput("password"))
            ];

            $error = [];

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                // check dữ liệu người dùng nhập vào
                if($data['email'] == '') 
                {
                    $error['email'] = " Email không được để trống ! ";
                }
        
                // check dữ liệu người dùng nhập vào
                if($data['password'] == '') 
                {
                    $error['password'] = " Mật khẩu không được để trống ! ";
                }

                if(empty($error)) 
                {
                    $trainee = new TraineeModel();

                    // gửi và nhận lại dữ liệu trả về từ database
                    $is_check = $trainee->login($data['email'], $data['password']);

                    if(is_object($is_check) && $is_check->id > 0) 
                    {
                        //check password and email
                        if($is_check->trainee_password === $data['password'] && $is_check->trainee_email == $data['email']) { 
                            
                            $_SESSION['admin_email'] = $is_check->trainee_email;
                            $_SESSION['admin_id'] = $is_check->id;

                            // trả về trang tổng 
                            $domain =  SITE_URL."index.php?controller=admin&action=index";
                            header("Location: $domain");
                            exit;
                        }else {
                            echo printf("Mật khẩu nhập không đúng");
                        }
                    }
                    else
                    {
                        // đăng nhập thất bại
                        $_SESSION['error'] = " Đăng nhập thất bại ";
                    }
                }
            }
        }
        // liệt kê các bản ghi
    public function indexTrainee() {
        // echo "<br>" . __METHOD__;

        // khởi tạo model
        $trainee = new TraineeModel();
        // lấy data từ model
        $trainees = $trainee->getAll();

        // echo "<pre>";
        // print_r($courses);
        // echo "</pre>";

        // $abc = "X1234";

        // $dateNow = date("d/m/Y H:i:s");

        // nạp view
        // cách sai : include_once "../views/users/index.php";
        include_once "Views/TrainingStaff/trainee/index.php";
        // trả về phần hiển thị

        // index.php => router.php => controller cụ thể => model cụ thể => database.php kết nối CSDL
        // model trả data cho controller => gọi view và trả ra phần hiển thị
    }

    // trả về view thêm mới
    public function create() {
        echo "<br>" . __METHOD__;

        include_once "Views/TrainingStaff/trainee/create.php";
    }

    // lưu data khi thêm mới
    public function store() {
        echo "<br>" . __METHOD__;

        // viết validate thì cũng sẽ viết validate trong controller
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $data = [];
        $data[] = isset($_POST["user_name"]) ? $_POST["user_name"] : "";
        $data[] = isset($_POST["first_name"]) ? $_POST["first_name"] : "";
        

        // khởi tạo model
        $trainee = new TraineeModel();
        $trainee->store($data);

        $domain =  SITE_URL."index.php?controller=trainee&action=indexTrainee";
        header("Location: $domain");
        exit;
    }

    // trả về view sửa
    public function edit() {
        echo "<br>" . __METHOD__;

        $id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;
        // khởi tạo model
        $trainee = new TraineeModel();
        // lấy data từ model
        $course = $trainee->getSingle($id);

        include_once "Views/TrainingStaff/trainee/edit.php";
    }

    // cập nhật vào db
    public function update() {
        echo "<br>" . __METHOD__;

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";


        // khởi tạo model
        $trainee = new TraineeModel();

        // viết theo hướng PDO có chống lại sql injection nến phải bind data theo thứ tự của các dấu ?
        // $dataRaw là 1 mảng kết hợp
        
    }


    public function delete() {
        echo "<br>" . __METHOD__;

        
    }
    }