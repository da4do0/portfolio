<?php
    require_once('connessione-admin.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $link = $_POST['link'];
        $path = $_FILES['file_to_upload'];


       

        $file = $_FILES['file_to_upload'];
        move_uploaded_file($file['tmp_name'], "img-upload-work\\".basename($file['name']));

         $sql = "INSERT into work (id, path, title, subtitle, link)
                values('', '".basename($file['name'])."', '$title', '$subtitle', '$link');";

        if($connessione -> query($sql) == false){
        }else{
        }

    }
?>