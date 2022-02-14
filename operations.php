<?php 

    
    require_once('dbconfig.php');
    $db = new dbconfig();

    class operations extends dbconfig
    {
        // Insert Record in the Database
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                $grupigjakut = $db->check($_POST['grupigjakut']);
                $rhd = $db->check($_POST['rhd']);
                $vendi = $db->check($_POST['vendi']);
                $nrkontakt = $db->check($_POST['nrkontakt']);
                $doza1 = $db->check($_POST['doza1']);
            

                if($this->insert_record($grupigjakut,$rhd,$vendi,$nrkontakt,$doza1))
                {
                    echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
        }


      // Insert Record in the Database Using Query    
        function insert_record($a,$b,$c,$d,$e)
        {
            global $db;
            $query = "insert into kerkesat (grupigjakut,rhd,vendi,nrkontakt,doza1) values('$a','$b','$c','$d','$e')";
            $result = mysqli_query($db->connection,$query);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

       // View Database Record
        public function view_record()
        {
            global $db;
            $query = "select * from kerkesat";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }
        public function get_nr($nrpersonal)
        {
            global $db;
            $sql = "select * from useri where nrpersonal='$nrpersonal'";
            $data = mysqli_query($db->connection,$sql);
            return $data;
        
        }

        // Get Particular Record
        public function get_record($id)
        {
            global $db;
            $sql = "select * from kerkesat where ID='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }

        public function set_messsage($msg)
        {
            if(!empty($msg))
            {
                $_SESSION['Message']=$msg;
            }
            else
            {
                $msg = "";
            }
        }


       
        public function Delete_record($id)
        {
            global $db;
            $query = "delete from kerkesat where ID='$id'";
            $result = mysqli_query($db->connection,$query);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    

    }




        ?>