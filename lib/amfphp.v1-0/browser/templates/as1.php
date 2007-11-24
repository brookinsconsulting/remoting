<?php
class as1
{
	function as1()
	{
		$this->description = "AS1 stub code";
		$this->author = "Alessandro Crugnola";
		$this->priority = 50;
	}
	
	function format($info)
	{
		ob_start();
		include(dirname(__FILE__)."/as1.tpl");
		return ob_get_clean();
	}
}