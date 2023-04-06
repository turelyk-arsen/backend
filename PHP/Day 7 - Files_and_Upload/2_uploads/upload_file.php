<?php
if (isset($_POST['uploadBtn'])) {
    // $_FILES is a superglobal array to access properties of the upload files
    // echo '<pre>';
    // echo var_dump($_FILES);
    // echo '</pre>';

    // The upload files are placed in a temporary folder on the server.
    // These files must be saved/moved to the desired location/folder
    // Is there some errors? (conection lost, file too big, type file not good, ...)
    // let's check if there is an error during the file upload

    if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK) 
        die('Error during upload');
    
    // Limit the type of the file: only IMAGES
    $extension = array_search(
        $_FILES['myFile']['type'],
        array(
            '.jpg' => 'image/jpeg',
            '.png' => 'image/png',
            '.gif' => 'image/gif'
        )
    );

    if (!$extension) 
    die('File must be an image!');
    else {
        $fileName = time();
        $filePathe = "uploads/$fileName$extension";

        if(move_uploaded_file($_FILES['myFile']['tmp_name'], $filePathe)) {
            echo 'File uploaded!';
        } else {
            echo 'Problem uploading the file';
        }
    }
}
?>

<!-- enctype is mandatory to be able to upload file  -->
<form enctype="multipart/form-data" method='post'>
    <input type="file" name="myFile" id="myFile"> <br>
    <input type="submit" name="uploadBtn" value="Submit form">
</form>