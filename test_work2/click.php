<?php
session_start();


$file= $_GET['file'];

$ext = pathinfo($file, PATHINFO_EXTENSION);
if($ext != "csv"){                                                              //проверка полученного файла на расширение .csv
    $_SESSION['massege'] = 'pleas using csv file';
    return header( 'location: http://localhost/test_work2/upload.php');
}

else{
    $file = fopen($file, 'r');
    $line = fgetcsv($file);

    if ($line[0] === null or $line[1] === null){                               //является название файла или содержимое пустым
        $_SESSION['massege'] = 'file is null';
        return header( 'location: http://localhost/test_work2/upload.php');
    }


    else{
        $ext = pathinfo('upload/'.$line[0], PATHINFO_EXTENSION);
        if($ext==='txt' or $ext === 'log' or $ext === 'html'){                  //проверка файла на допустимое расширение
            $fp = fopen( 'upload/'.$line[0],'w');
            fwrite($fp, $line[1]);
            fclose($fp);

            $_SESSION['massege'] = 'file add directory';
            return header( 'location: http://localhost/test_work2/upload.php');
        }
        else{
            $_SESSION['massege'] = 'please using file .txt .log .html';
            return header( 'location: http://localhost/test_work2/upload.php');
        }

    }


}

