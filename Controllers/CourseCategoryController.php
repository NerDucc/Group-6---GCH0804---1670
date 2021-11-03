<?php
class CourseCategoryController
{
    public function index()
    {
        // Call model
        $courseCategoryModel = new CourseCategoryModel();

        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];

            $courseCategories = $courseCategoryModel->fetchSearch($keyword);
        } else {
            // Use model functions
            $courseCategories = $courseCategoryModel->fetchAll();
        }

        // Return view
        include_once "Views/CourseCategory/index.php";
    }

    public function create()
    {
        include_once "Views/CourseCategory/create.php";
    }

    // Save data to database
    public function store()
    {
        $courseCategoryModel = new CourseCategoryModel();

        $data = [];

        $data[] = postInput('subjects_name');
        $data[] = postInput('description');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {


            $error = [];

            if (postInput('subjects_name') == '') {
                $_SESSION['error_subjects_name'] = $error['subjects_name'] = " Please enter the subject name ";

                $domain =  SITE_URL . "index.php?controller=courseCategory&action=create";
                header("Location: $domain");
                exit;
            } else {
                $is_check = $courseCategoryModel->fetchCheck($data['subjects_name']);
                if ($is_check != NULL) {
                    $_SESSION['error_subjects_name'] = $error['subjects_name'] = " This course name already exists ! ";

                    $domain =  SITE_URL . "index.php?controller=courseCategory&action=create";
                    header("Location: $domain");
                    exit;
                }
            }

            if (postInput('description') == '') {
                $_SESSION['error_subjects_description'] = $error['description'] = " Please enter a description of the course ";

                $domain =  SITE_URL . "index.php?controller=courseCategory&action=create";
                header("Location: $domain");
                exit;
            }

            //error empty means no error
            if (empty($error)) {

                $courseCategoryModel->fetchStore($data);

                if ($courseCategoryModel) {
                    $_SESSION['success'] = " Successfully added new ";

                    $domain =  SITE_URL . "index.php?controller=courseCategory&action=index";
                    header("Location: $domain");
                    exit;
                } else {
                    $_SESSION['error'] = " Add new failure ";

                    $domain =  SITE_URL . "index.php?controller=courseCategory&action=index";
                    header("Location: $domain");
                    exit;
                }
            }
        }
    }

    public function edit()
    {
        $id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;
        // define model
        $courseCategoryModel = new CourseCategoryModel();
        // get data from view and add to model
        $courseCategory = $courseCategoryModel->fetchOne($id);
        //send view
        include_once "Views/CourseCategory/edit.php";
    }

    public function update()
    {
        $courseCategoryModel = new CourseCategoryModel();

        $data = [];

        $data['subjects_name'] = postInput('subjects_name');
        $data['description'] = postInput('description');
        $data['id'] = postInput('id');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {


            $error = [];

            if (postInput('subjects_name') == '') {
                $_SESSION['error_subjects_name'] = $error['subjects_name'] = " Please enter the subject name ";

                $domain =  SITE_URL . "index.php?controller=courseCategory&action=edit";
                header("Location: $domain");
                exit;
            }

            if (postInput('description') == '') {
                $_SESSION['error_subjects_description'] = $error['description'] = " Please enter a description of the course ";

                $domain =  SITE_URL . "index.php?controller=courseCategory&action=create";
                header("Location: $domain");
                exit;
            }

            //error empty means no error
            if (empty($error)) {

                $courseCategoryModel->fetchUpdate($data);

                if ($courseCategoryModel) {
                    $_SESSION['success'] = " Update successful ";

                    $domain =  SITE_URL . "index.php?controller=courseCategory&action=index";
                    header("Location: $domain");
                    exit;
                } else {
                    $_SESSION['error'] = " Update failed ";

                    $domain =  SITE_URL . "index.php?controller=courseCategory&action=index";
                    header("Location: $domain");
                    exit;
                }
            }
        }
    }

    public function delete()
    {
        $id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;
        // create model
        $courseCategoryModel = new CourseCategoryModel();

        // get data from model after handling
        $courseCategory = $courseCategoryModel->fetchDelete($id);

        $_SESSION['success'] = " Record delete successful ";

        $domain =  SITE_URL . "index.php?controller=courseCategory&action=index";
        header("Location: $domain");
        exit;
    }
}
