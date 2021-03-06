<?php

	Class extension_jquery_date_picker extends Extension{
		
		public function getSubscribedDelegates() {
			return array(
				array(
					'page' => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'initializeAdmin'
				)
			);
		}
		
		public function initializeAdmin($context) {
			$page = Administration::instance()->Page;
			$assets_path = '/extensions/jquery_date_picker/assets/';
			
			# load jQuery and autocomplete JS
			$page->addScriptToHead(URL . $assets_path . 'jquery-ui-core-datepicker.js', 4430);
			$page->addScriptToHead(URL . $assets_path . 'initialise.js', 4431);
			
			# load autocomplete styles
			$page->addStylesheetToHead(URL . $assets_path . 'ui.core.css', 'screen', 110);
			$page->addStylesheetToHead(URL . $assets_path . 'ui.theme.css', 'screen', 111);
			$page->addStylesheetToHead(URL . $assets_path . 'ui.datepicker.css', 'screen', 112);
		}
	}
