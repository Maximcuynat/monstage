<?php

include_once '../Model/Person.php';

class ManagerPilot extends Person
{
	function researchPilot($name)
	{
		$this->getBdd();
		return $this->selectPilot($name);
	}
}

?>