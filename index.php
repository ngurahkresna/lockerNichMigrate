<?php

include_once("conf/database.php");
include_once("controller/authController.php");

$request = $_SERVER['REQUEST_URI'];
$uriSegments = explode("/", parse_url($request, PHP_URL_PATH));
$numSegments = count($uriSegments);
$segment = $uriSegments[$numSegments - 1];

switch ($segment) {

    case '' :
        include_once('views/home.php');
        break;
    case 'login' :
        include_once('views/login.php');
        break;
    case 'register' :
        include_once('views/register.php');
        break;
    case 'editProfile' :
        include_once('views/editProfile.php');
        break;
    case 'deleteaccount' :
        echo 'deleteacc';
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
    case 'deletepost' :
        echo 'delete postingan';
        break;
    case 'post' :
        include_once('views/post.php');
        break;
    case 'createCompany' :
        include_once('views/createCompany.php');
        break;
    case 'editCompany' :
        include_once('views/editCompany.php');
        break;
    case 'company' :
        include_once('views/company.php');
        break;
    case 'deleteCompany' :
        echo 'delete perusahaan';
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

