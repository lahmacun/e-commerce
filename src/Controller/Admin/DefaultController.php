<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 * @package App\Controller\Admin
 * @Route("/admin", name="admin_default_")
 */
class DefaultController extends AbstractController {
	/**
	 * @Route("/", name="index")
	 */
	public function index() {
		return $this->render('admin/index.html.twig');
	}
}