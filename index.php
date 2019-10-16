<?php

require_once "vendor/autoload.php";
use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;

?>
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
        $connectionString = "DefaultEndpointsProtocol=[http|https];AccountName=;AccountKey=";

        // Create blob client.
        $blobClient = ServicesBuilder::getInstance()->createBlobService($connectionString);

        // container name
        $container = "blockbobs";
        $createContainerOptions->addMetaData("key1", "value1");
        $createContainerOptions->addMetaData("key2", "value2");

        // try {
        //     $blobRestProxy->createContainer($container, $createContainerOptions);
        // } catch (ServiceException $e){
        //     $code = $e->getCode();
        //     $error_message = $e->getMessage();
        //     echo $code.": ".$error_message."<br />";
        // }
        // var_dump($blobRestProxy);

        // // get file data
        // $nameFile = $_FILES['image']['name'];
        // $nameTemp = $_FILES['image']['tmp_name'];
        // var_dump($nameFile);

        // // choose directory
        // $directory = "upload/";

        // // move a file
        // $upload = move_uploaded_file($nameTemp, $directory.$nameFile);
        // var_dump($upload);
        
        // if ($upload){
        //     echo "Berhasil Upload<br>";
        //     $content = fopen($directory.$nameFile,"r");
        //     $blobName = "myblobs";

        //     try {
        //         $blobRestProxy->createBlockBlob($container, $blobName, $content);
        //     } catch(ServiceException $e){
        //         $code = $e->getCode();
        //         $error_message = $e->getMessage();
        //         echo $code.": ".$error_message."<br />";
        //     }

        // } else {
        //     echo "Upload Gagal!!";
        // }
    }

?>