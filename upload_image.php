<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
</head>
<body>
  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Upload image</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
  //  echo "reached here: ". basename($_FILES['uploaded_file']['name']). "<br/>";
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded<br/><br/>";
    // echo "python output below2";
     echo "Results:<br/>";
     $cmd = "sudo python classify_image.py --image uploads/".  basename( $_FILES['uploaded_file']['name']$
     while (@ ob_end_flush()); // end all output buffers if any

     $proc = popen($cmd, 'r');
     echo '<pre>';
     while (!feof($proc))
     {
        echo fread($proc, 16384);
        @ flush();
     }
     echo '</pre>';
    } else{
        echo "There was an error uploading the file, please try again!";
    }

  }
?>