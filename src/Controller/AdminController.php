<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class AdminController extends BaseController {
	/**
	 * @Route("/admin", name="admin_index")
	 */
	public function index() {
		return $this->renderTemplate('home/index.html.twig', ['controller_name' => 'Admin Controller']);
	}
}