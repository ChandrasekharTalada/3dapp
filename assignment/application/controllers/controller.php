<?php
class Controller {

	public $load;
	public $model;
	
	
	function __construct($pageURI = null)
	{
		
		$this->load = new Load();
		$this->model = new Model();
		
		$this->$pageURI();
	}
    function home()
	{
		$this->load->view('index');

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
	
	function apiGetData()
	{
		$data = $this->model->dbGetData(); // This method should now use PDO

		if ($data === null || empty($data)) {
			throw new Exception('No data found');
		}

		$response = [
			'status_code_header' => 'HTTP/1.1 200 OK',
			'body' => json_encode($data)
		];

        header($response['status_code_header']);
        header('Content-Type: application/json');
        echo $response['body'];
	}  	

	function apiCocaCola()
	{
		$this->load->view('apicocacola');	
	}	
	
}
?>    