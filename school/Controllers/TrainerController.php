<?php
    class TrainerController {
        public function index()
        {
            include_once "Views/Trainer/index.php";
        }

        public function viewlogin()
        {
            include_once "Views/Trainer/login.php";
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
                    $trainer = new TrainerModel();

                    // gửi và nhận lại dữ liệu trả về từ database
                    $is_check = $trainer->login($data['email'], $data['password']);

                    if(is_object($is_check) && $is_check->id > 0) 
                    {
                        //check password and email
                        if($is_check->trainer_password === $data['password'] && $is_check->trainer_email == $data['email']) { 
                            
                            $_SESSION['admin_email'] = $is_check->trainer_email;
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
    }