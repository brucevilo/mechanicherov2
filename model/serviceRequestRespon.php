<?php
	///ServiceRequestRespon model
	include("dbhelper.php");
	class ServiceRequestRespon{
		private $table="service_request_respon";
		private $fieldnames=["mechanicid","servreqid","bid","biddesc"];
		private $dbconn;
			// var_dump($this->fieldnames); die;
		function __construct()	{	$this->dbconn=new DBHelper();}
		function getAllServiceRequestRespon()	{	return $this->dbconn->getAll($this->table);}	
		function createServiceRequestRespon($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		function deleteServiceRequestRespon($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
		function updateServiceRequestRespon($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}
	}//end of class
?>
