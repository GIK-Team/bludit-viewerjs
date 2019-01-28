<?php

class pluginViewerjs extends Plugin {

	public function form()
	{
		global $Language;

		$html  = '<div>';
		$html .= '<p>Your content must have a parent element with id #page_content!</p><p>All pictures must be without links, the script finds all < img > in the parent element with id #page_content.</p>';
		$html .= '</div>';

		return $html;
	}

	public function siteHead(){

		$html  = '<link href="'.HTML_PATH_PLUGINS.'viewerjs/css/viewer.css" rel="stylesheet">';
		return $html;

    }

 	public function siteBodyEnd()
 	{

 		$html  = PHP_EOL.'<script src="'.HTML_PATH_PLUGINS.'viewerjs/js/viewer.js"></script>'.PHP_EOL;
 		return $html;
	}

}
