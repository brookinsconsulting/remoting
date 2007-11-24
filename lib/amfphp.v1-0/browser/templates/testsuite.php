<?php
class testsuite
{
	function testsuite()
	{
		$this->description = "Poor man's test suite";
		$this->author = "Patrick Mineault";
		$this->priority = 25;
	}
	
	function format($info)
	{
		ob_start();
		include(dirname(__FILE__)."/testsuite.tpl");
		return ob_get_clean();
	}
}