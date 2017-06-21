<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NodeController extends Controller
{
	//

	public $user;
	public $request;

	public function __construct(Request $r)
	{
		$user = $r->user();
		$request = $r;
	}

	public function listAllNodesWithinAService()
	{
		return dataFormatter($this->request->currentServiceModel->nodegroup()->nodes()->all());
	}

	public function showIndividualNode()
	{
		return dataFormatter($this->request->currentNodeModel);
	}
}
