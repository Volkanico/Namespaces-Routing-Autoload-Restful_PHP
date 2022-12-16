<?php 
namespace controller;
use model\Camiseta;
use view\View;

require_once ('./autoload.php');

class camisetaController{
	public $page_title;
	public $view;

	public function __construct() {
		$this->view = 'list_camiseta';
		$this->page_title = '';
		$this->camisetaObj = new Camiseta();
	}

	// List all camisetes
	public function list(){
		$this->view = 'list_camiseta';
		$this->page_title = 'Llistat de camisetes';
		$dataToView = $this->camisetaObj->getCamisetes();
		$a = new View();
		$a->render('list_camiseta.php',$dataToView);
	}

	// Load camiseta for edit
	public function edit($id = null){
		$this->page_title = 'Editar camiseta';
		$this->view = 'edit_camiseta';
		// Id can from get param or method param
		if(isset($_GET["id"])) $id = $_GET["id"];
		$dataToView = $this->camisetaObj->getCamisetaById($id);
		$a = new View();
		$a->render('edit_camiseta.php',$dataToView);
		
	}

	// Create or update camiseta 
	public function save(){
		$this->view = 'edit_camiseta';
		$this->page_title = 'Guardar camiseta';
		$id = $this->camisetaObj->save($_POST);
		$result = $this->camisetaObj->getCamisetaById($id);
		$_GET["response"] = true;
		$dataToView = $result;
		$a = new View();
		$a->render('edit_camiseta.php',$dataToView);
		return $result;
	}

	// Confirm to delete
	public function confirmDelete(){
		$this->page_title = 'Eliminar camiseta';
		$this->view = 'confirm_delete_camiseta';
		if(isset($_GET["id"])) $id = $_GET["id"];
		$dataToView = $this->camisetaObj->getCamisetaById($id);
		$a = new View();
		$a->render('confirm_delete_camiseta.php',$dataToView);
	}

	// Delete 
	public function delete(){
		$this->page_title = 'Listado de camiseta';
		$this->view = 'delete_camiseta';
		if(isset($_GET["id"])) $id = $_GET["id"];
		
		$dataToView = $this->camisetaObj->deleteCamisetaById($id);
		$a = new View();
		$a->render('delete_camiseta.php',$dataToView);
	}
}
?>