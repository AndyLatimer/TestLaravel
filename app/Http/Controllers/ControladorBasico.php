<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ControladorBasico extends Controller
{
	function metodo()
	{
		$resultado= 5*5;
		return view('child', ['parametro' => $resultado]);
	}
}
