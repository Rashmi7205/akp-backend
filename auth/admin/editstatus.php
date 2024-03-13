<?php
    include("./enquire.php");
    if(isset($_GET['id'])){
        $enq = new Enquiry();
        $res = $enq->upadte_status($_GET['id'],$_POST['status']);
        if($res){
            echo "
                <script>
                    window.location.href='./enquirypage.php';
                </script>
            ";
        }
    }
    else{
        header("./");
    }
?>