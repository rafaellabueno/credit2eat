<?php

class Cadastro extends Config {  
	public function __construct()
	{
		$user = new Usuario();
	    $user->logar('usuario','senha');
	}     
}