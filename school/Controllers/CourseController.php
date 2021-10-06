<?php
class CourseController {


    // liệt kê các bản ghi
    public function index() {
        // echo "<br>" . __METHOD__;

        // khởi tạo model
        $courseModel = new CourseModel();
        // lấy data từ model
        $courses = $courseModel->getAll();

        // echo "<pre>";
        // print_r($courses);
        // echo "</pre>";

        // $abc = "X1234";

        // $dateNow = date("d/m/Y H:i:s");

        // nạp view
        // cách sai : include_once "../views/users/index.php";
        include_once "Views/TrainingStaff/course/index.php";
        // trả về phần hiển thị

        // index.php => router.php => controller cụ thể => model cụ thể => database.php kết nối CSDL
        // model trả data cho controller => gọi view và trả ra phần hiển thị
    }

    // trả về view thêm mới
    public function create() {
        echo "<br>" . __METHOD__;

        include_once "Views/TrainingStaff/course/create.php";
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
        $courseModel = new CourseModel();
        $courseModel->store($data);

        $domain =  SITE_URL."index.php?controller=course&action=index";
        header("Location: $domain");
        exit;
    }

    // trả về view sửa
    public function edit() {
        echo "<br>" . __METHOD__;

        $id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;
        // khởi tạo model
        $courseModel = new CourseModel();
        // lấy data từ model
        $course = $courseModel->getSingle($id);

        include_once "Views/TrainingStaff/course/edit.php";
    }

    // cập nhật vào db
    public function update() {
        echo "<br>" . __METHOD__;

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";


        // khởi tạo model
        $courseModel = new CourseModel();

        // viết theo hướng PDO có chống lại sql injection nến phải bind data theo thứ tự của các dấu ?
        // $dataRaw là 1 mảng kết hợp
        
    }


    public function delete() {
        echo "<br>" . __METHOD__;

        
    }
}