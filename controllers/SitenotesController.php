<?php 
class SitenotesController extends Omeka_Controller_Action {	
	public function indexAction() {		
		return $this->render('sitenotes/index.php');	
	}
	
	public function editAction() {
		if ($_POST) {
			$notes = $_POST['sitenotes_text'];
			set_option('sitenotes_text',$notes);
			$this->flashSuccess('Notes were successfully saved.');
		}
		else {
			$notes = get_option('sitenotes_text');
		}
		if(empty($notes)) {
			$notes = 'Go for it.';
		}	
		// Now render edit page
		return $this->render('sitenotes/edit.php',array('notes'=>$notes));
	}
}
?>
