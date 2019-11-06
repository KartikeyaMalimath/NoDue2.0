<?php

session_start();
include ('../database/db.php');

$dept = $_POST['dept'];

if(isset($_POST['submit'])) {
    echo $filename=$_FILES["csv"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    //we check,file must be have csv extention
    if($ext=="csv")
    {
        $cnt = 0;

        $uploaddir = './';
        $uploadfile = $uploaddir . "temp.csv";
        if (move_uploaded_file($_FILES['csv']['tmp_name'], $uploadfile)) {
            // $file = fopen("../dump/temp.csv", "r");
            // while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
            // {
            //     $cnt++;
            //     if($cnt == 1){
            //         continue;
            //     }
            //     $sql = "INSERT into $dept (USN,Name,Sem, phone, email) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]')";
            //     mysqli_query($con, $sql);
            // }
            // fclose($file);
            $path = getcwd();
            echo $path."hahaha";
            $test = "dump/temp.csv";
            $load = "LOAD DATA LOCAL INFILE 'temp.csv' INTO TABLE {$dept} FIELDS TERMINATED BY ',' ENCLOSED BY '\"' ESCAPED BY '\"' LINES TERMINATED BY '\r\n' IGNORE 1 LINES ( USN, Name, Sem, phone, email, @dummy, @dummy, @dummy, @dummy, @dummy)";
            mysqli_options($con, MYSQLI_OPT_LOCAL_INFILE, true);
            if(mysqli_query($con, $load)) {
                echo "CSV File has been successfully Imported.";
                echo "<script>alert('$dept data updated')</script>";
                echo "<script>window.location.replace('../upload.php')</script>";
            } else {
                echo "<script>alert('failed data updated')</script>";
                echo "<script>window.location.replace('../upload.php')</script>";
            }
            
        }
        else {
            echo "<script>alert('failed data updated')</script>";
            echo "<script>window.location.replace('../upload.php')</script>";
        }
        
    }
    else {
        echo "<script>alert('Upload CSV')</script>";
        echo "<script>window.location.replace('../upload.php')</script>";
    }
}
else if(isset($_POST['clear'])) {

    $sql = "DELETE FROM $dept";
    if(mysqli_query($con, $sql)){ 
        $alter = "ALTER TABLE $dept AUTO_INCREMENT = 1";
        if(mysqli_query($con, $alter)){
            echo "A-I set to 1";
            echo "<script>alert('{$dept} data sDelete');</script>";
            echo "<script>window.location.replace('../upload.php')</script>"; 
        }
        else {
            echo "<script>alert('failed to delete')</script>";
            echo "<script>window.location.replace('../upload.php')</script>";
        }
    }  

}

 
 