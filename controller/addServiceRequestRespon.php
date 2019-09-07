<?php
    session_start();
    include("../model/serviceRequestRespon.php");
$service_req_respons = new ServiceRequestRespon();
if(isset($_GET['btnAddSr'])){
$mechanicid =$_SESSION['mechanic'];
$servreqid = $_GET['servreqid'];
$bid=$_GET['bid'];
$biddesc=$_GET['biddesc'];
$data = [$servreqid,$mechanicid,$bid,$biddesc];
// print_r($data); die;
$service_req_respons->createServiceRequestRespon($data);

if($service_req_respons>0)
    {
        echo "<script>alert('Service Request has been send please wait for motorist response.');window.location='../view/mechanicDashboard.php'</script>";
    }
    else
    {
        echo "<script>alert('Service Request Failed');window.location='../view/mechanicDashboard.php'</script>";
    }
}
else {
    
}


?>