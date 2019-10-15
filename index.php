<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submission 2 MACD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }
    .container {
        text-align: center;
        margin: 0 auto;
    }
    .box {
        margin-top: 5vh;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h3>Form Upload Image Untuk Di Scan oleh AI Azure</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="image"><br><br>
                <input type="submit" name="Submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['Submit'])){

        // Create a Connection String
        $connectionString = "DefaultEndpointsProtocol=https;AccountName=".getenv('account_name').";AccountKey=".getenv('account_key');

        // Create blob client.
        $blobClient = BlobRestProxy::createBlobService($connectionString);

        // container name
        $container = "blockbobs";

        // get file data
        $nameFile = $_FILES['image']['name'];
        $nameTemp = $_FILES['image']['tmp_name'];

        // choose directory
        $directory = "upload/";

        // move a file
        $upload = move_uploaded_file($nameTemp, $directory.$nameFile);
        

        if ($upload){
            echo "Berhasil Upload<br>";
            echo "Link: <a href='".$directory.$nameFile."'>".$nameFile."</a>";
        } else {
            echo "Upload Gagal!!";
        }
    }

?>