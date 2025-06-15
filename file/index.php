<?php
if($_FILES['fileupload']){
    $path = $_FILES['fileupload']['name'];
    $upload_path = 'uploads/' . $path;
    if(move_uploaded_file($_FILES['fileupload']['tmp_name'], $upload_path)){
        echo "File uploaded successfully: <a href='$upload_path'>$path</a>";
    }else {
        echo "Error uploading file, please try again.";
        die("Error uploading file, please try again.");
    }
}else {
    echo "no fies uploaded";

}

?>