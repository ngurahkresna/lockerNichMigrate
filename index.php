<?php

include_once("conf/database.php");
include_once("controller/authController.php");
include_once("controller/companyController.php");

$request = $_SERVER['REQUEST_URI'];
$uriSegments = explode("/", parse_url($request, PHP_URL_PATH));
$numSegments = count($uriSegments);
$segment = $uriSegments[$numSegments - 1];

$auth = new authController();
$company = new companyController();

switch ($segment) {

    case '' :
        include_once('views/home.php');
        break;
    case 'home' :
        include_once('views/home.php');
        break;
    case 'logout' :
        $auth->logout();
        break;
    case 'login' :
        $auth->index();
        break;
    case 'loginProcess' :
        $auth->login();
        break;
    case 'register' :
        include_once('views/register.php');
        break;
    case 'registerProcess' :
        $auth->registerProcess();
        break;
    case 'editProfile' :
        $auth->show();
        break;
    case 'editProfileProcess' :
        $auth->update();
        break;
    case 'deleteAccount' :
        $auth->destroy();
        break;
    case 'createVacancy' :
        include_once('views/createVacancy.php');
        break;
    case 'editVacancy' :
        include_once('views/editVacancy.php');
        break;
    case 'deleteVacancy' :
        echo 'Delete Lowongan';
        break;
    case 'vacancy' :
        include_once('views/vacancy.php');
        break;
    case 'vacancyDetail' :
        include_once('views/vacancyDetail.php');
        break;
    case 'createPost' :
        include_once('views/createPost.php');
        break;
    case 'editPost' :
        include_once('views/editPost.php');
        break;
    case 'deletePost' :
        echo 'delete postingan';
        break;
    case 'post' :
        include_once('views/post.php');
        break;
    case 'createCompany' :
        $company->create();
        break;
    case 'createCompanyProcess' :
        $company->store();
        break;
    case 'editCompany' :
        $company->show();
        break;
    case 'editCompanyProcess' :
        $company->update();
        break;
    case 'company' :
        $company->index();
        break;
    case 'deleteCompany' :
        $company->destroy();
        break;
    case 'createArticle' :
        include_once('views/createArticle.php');
        break;
    case 'editArticle' :
        include_once('views/editArticle.php');
        break;
    case 'article' :
        include_once('views/article.php');
        break;
    case 'deleteArticle' :
        echo 'delete article';
        break;
    case 'detailArticle' :
        include_once('views/detailArticle.php');
        break;
    default :
        echo '404 Not Found';
        break;
}
?>

