<?php

require_once './vendor/autoload.php';
use app\classes\Blog;

if($_GET['page'] == 'home')
{
    include "pages/home.php";
} elseif ($_GET['page'] == 'all-blogs')
{
    $blog = new Blog();
    $blogs = $blog->allBlogs();
    include "pages/blogs.php";
} elseif ($_GET['page'] == 'details')
{
    $blog = new Blog();
    $details = $blog->getBlogDetails($_GET['id']);
    include 'pages/details.php';
}