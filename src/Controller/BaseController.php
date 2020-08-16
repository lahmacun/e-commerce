<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends AbstractController {
	protected function renderTemplate(string $view, array $parameters = [], Response $response = null): Response {
		$view = 'default_theme/' . $view;
		return $this->render($view, $parameters, $response);
	}
}