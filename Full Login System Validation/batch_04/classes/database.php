<?php
		
		class Database{
			protected $connection;

			function __construct(){
				$this->connection = new mysqli("localhost","root","","batch_04");
			}
		}
?>