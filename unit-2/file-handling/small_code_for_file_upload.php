<?php
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
} else {
    echo "<br>Sorry, there was an error uploading your file.";
}
?>