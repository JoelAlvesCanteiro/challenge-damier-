<?php

function home_action()
{
	include '../views/home.php' ;
}

function damier_action($nb){
	begin_damier($nb);
	include '../views/damier.php' ;
}