<?php

	namespace X\App\Views;

	use \X\Sys\View;
	
	class vUsers extends View{

		function __construct($dataView,$dataTable=null){
            parent::__construct($dataView,$dataTable);
			echo $this->render('tusers.php');
		}

	}