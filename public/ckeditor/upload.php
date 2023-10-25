<?php
if (isset($_FILES['upload']['tmp_name'])){
    $file = $_FILES['upload']['tmp_name'];
    $image_name = $_FILES['upload']['name'];
    $image_array = explode('.' , $image_name);
    $extension = end($image_array);
    $new_image_name = rand().'.'.$extension;
    if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'JPG' && $extension != 'PNG' && $extension != 'JPEG'){
        echo "<script>alert('Định dạng ảnh không đúng! Vui lòng thử lại')</script>";
    }elseif($_FILES['upload']['size']> 10000000){
        echo "<script>alert('Kích thước ảnh quá lớn! Vui lòng thử lại')</script>";
    }else{
        move_uploaded_file($file, 'upload/'.$new_image_name);
        $funciton_number = $_GET['CKEditorFuncNum'];
        $url = 'http://localhost/ckeditor/upload/'.$new_image_name;
        $message = '';
        echo "<script>window.parent.CKEDITOR.tools.callFunction($funciton_number, '$url', '$message')</script>";
    }
}
?>
