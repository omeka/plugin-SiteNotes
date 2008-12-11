<?php 
class SiteNotes_IndexController extends Omeka_Controller_Action 
{	
	public function indexAction() 
	{		
		
	}
	
	public function editAction() 
	{
		$siteNotesContent = $_POST['site_notes_content'];
		if (!empty($siteNotesContent)) { 
			set_option('site_notes_content', $siteNotesContent);	
			$this->redirect->gotoUrl('site-notes');  
		}
	}
}