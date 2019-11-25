<?php

include_once("conf/database.php");
include_once("controller/authController.php");
include_once("controller/companyController.php");
include_once("controller/forumController.php");
include_once("controller/vacancyController.php");

$request = $_SERVER['REQUEST_URI'];
$uriSegments = explode("/", parse_url($request, PHP_URL_PATH));
$numSegments = count($uriSegments);
$segment = $uriSegments[$numSegments - 1];

$auth = new authController();
$company = new companyController();
$forum = new forumController();
$vacancy = new vacancyController();

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
        $vacancy->create();
        break;
    case 'createVacancyProcess' :
        $vacancy->store();
        break;
    case 'editVacancy' :
        $vacancy->show();
        break;
    case 'editVacancyProcess' :
        $vacancy->update();
        break;
    case 'deleteVacancy' :
        $vacancy->destroy();
        break;
    case 'vacancy' :
        $vacancy->index();
        break;
    case 'vacancyDetail' :
        $vacancy->detail();
        break;
    case 'createPost' :
        $forum->create();
        break;
    case 'createPostProcess' :
        $forum->store();
        break;
    case 'editPost' :
        $forum->show();
        break;
    case 'editPostProcess' :
        $forum->update();
        break;
    case 'deletePost' :
        $forum->destroy();
        break;
    case 'post' :
        $forum->index();
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

