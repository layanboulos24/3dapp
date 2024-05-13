<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		
		$this->$pageURI();
	}
    // home page function
	function home()
	{
		$this->load->view('home');
	}

	function apiCoke()
	{
		$this->load->view('coke');
	}
	
	function dbCreateTable()
	{
		echo "Create Table Function";
	}

	function dbInsertData()
	{
		echo "Data Insert Function";
	}

	function dbGetData()
	{
		$data = $this->model->getData();
		echo json_encode($data);
	}

	function apiCreateTable()
	{
	  	
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiModels()
	{
		$data = $this->model->dbGetData();
		$this->load->view('coke', $data);
	}  


}
?>   