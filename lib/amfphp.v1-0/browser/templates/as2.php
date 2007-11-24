<?php
class as2
{
	function as2()
	{
		$this->description = "AS2 stub code";
		$this->author = "Patrick Mineault";
		$this->priority = 100;
	}
	
	function format($info)
	{
		ob_start();
		include(dirname(__FILE__)."/as2.tpl");
		return ob_get_clean();
	}
}