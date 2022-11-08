<?php
session_start();
if(isset($_POST['submit'])){
   
$errors = [];
count($errors);

   $request = $_POST;
   $title = $request['title'];
   $detail = $request['detail'];
   $author = $request['author'];
   
if(empty($title)){
    $msg = "Input Title";
    $errors['title'] = $msg;
} elseif(strlen($title) > 15){
    $msg = "Title is Too Long";
    $errors['title'] = $msg;
}
if(empty($detail)){
    $msg = "Input Details";
    $errors['detail'] = $msg;
}

if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    $_SESSION['old_data'] = $request;
    header("Location: ../index.php");
} else {
    echo " no error found";
}

} else{
    echo "submit btn a click kren";
}