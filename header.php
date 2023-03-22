<?php
if(!empty($_GET['file'])){   
    $file = $_GET['file'];
        // Define headers
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=".basename($file));
        header("Content-Type: application/octet-stream");
        header("Content-Transfer-Encoding: binary");
        header("expires: 0");
        header("cache-contro: revalidated, post-check= 0, pre-check");
        header("pragma: public");
        ob_clean();
        flush();
        readfile($file);                     //for reading the file
        exit;
    }else{
        echo 'The file you want here does not exist.';
    }
?>