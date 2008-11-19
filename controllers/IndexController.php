<?php 
class SiteNotes_IndexController extends Omeka_Controller_Action {	
	
	public function init()
	{
		
	}
	
	public function indexAction() 
	{		
		
	}
	
	public function editAction() 
	{
		$site_notes_content = $_POST['site_notes_content'];
		if(!empty($site_notes_content)) { 
			set_option('site_notes_content', $_POST['site_notes_content']);	
			$this->redirect->gotoUrl('site-notes');
            
		}
	}
	
}
?>
