<?php 

    require_once('dbconfig.php');
    $db = new operations();
    
    if(isset($_GET['D_ID']))
    {
        global $db;
        $ID = $_GET['D_ID'];

        if($db->Delete_Record($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:shpalljet.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }
?>