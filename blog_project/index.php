<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'autoload.php';

// إنشاء مستخدم مرة واحدة فقط
// $user = new User();
// $user->create("Ali", "ali@mail.com");

$controller = new ArticleController();

// إنشاء مقال جديد (بشكل مؤقت – لاحقًا هيكون بـ form)
$controller->store("أول مقال", "هذا هو المحتوى", 1);

// عرض جميع المقالات
$controller->index();
