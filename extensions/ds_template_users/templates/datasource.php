<?php
	
	require_once EXTENSIONS . '/ds_template_users/lib/usersdatasource.php';
	
	class DataSource%s extends UsersDataSource {
		public function about() {
			return array(
				'name'			=> %s,
				'author'		=> array(
					'name'			=> %s,
					'website'		=> %s,
					'email'			=> %s
				),
				'version'		=> %s,
				'release-date'	=> %s
			);	
		}
		
		public function allowEditorToParse() {
			return true;
		}
		
		public function canRedirectOnEmpty() {
			return %s;
		}
		
		public function getFilters() {
			return %s;
		}
		
		public function getIncludedElements() {
			return %s;
		}
		
		public function getLimit() {
			return %s;
		}
		
		public function getOutputParams() {
			return %s;
		}
		
		public function getRequiredURLParam() {
			return %s;
		}
		
		public function getRootElement() {
			return %s;
		}
		
		public function getSortField() {
			return %s;
		}
		
		public function getSortOrder() {
			return %s;
		}
		
		public function getStartPage() {
			return %s;
		}
	}
	
?>
