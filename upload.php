<?php
$upload_dir = __DIR__ . '/uploads';
if (!file_exists($upload_dir)) {
    if (!mkdir($upload_dir, 0777, true)) {
        die('Failed to create upload directory');
    }
}
// Check if a file was uploaded
if(isset($_FILES['user_file'])) {
    $file = $_FILES['user_file'];
    
    // File properties.extract information about the uploaded file
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    
    // Work out the file extension
    $file_ext = explode('.', $file_name);//splits the file name at each dot
    $file_ext = strtolower(end($file_ext));//gets the last part of the file extension
    //we define an array of allowed file extensions
    $allowed = array('txt', 'pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png');
    
    if(in_array($file_ext, $allowed)) {// checks if the uploaded file's extension is in this list
        //We check if there were no upload errors and if the file size is under 2MB (2097152 bytes)
        if($file_error === 0) {
            if($file_size <= 2097152) { // 2MB limit
                //We generate a new, unique filename using uniqid()
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                $file_destination = $upload_dir . '/' . $file_name_new;
                //We set the destination path for the file in the 'uploads' directory
                //the move_uploaded_file moves the file from it's temporary location to our desired destination
                if(move_uploaded_file($file_tmp, $file_destination)) {
                    echo "File uploaded successfully!";
                    echo "File is now located at: " . $file_destination;
                    if (file_exists($file_destination)) {
                        echo "File verified to exist at the destination.\n";
                    } else {
                        echo "Error: File not found at the destination after upload.\n";
                    }
                } else {
                    echo "There was an error uploading your file.". error_get_last()['message'];
                }
            } else {
                echo "Your file is too large!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}
  
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="user_file">
        <input type="submit" value="Upload File">
    </form>
</body>
</html>