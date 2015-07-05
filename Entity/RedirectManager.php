<?php

namespace BrauneDigital\RedirectBundle\Entity;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;

class RedirectManager
{

	/**
	 * @var Container
	 */
	protected $container;

	/**
	 * @param Container $container
	 */
	public function __construct(Container $container) {
		$this->container = $container;
	}

	/**
	 * @param string $oldPath
	 * @param string $redirectPath
	 * @param string $statusCode
	 */
	public function create($oldPath, $redirectPath, $statusCode, $manager) {

		$em = $this->container->get('doctrine')->getManager();
		if (!$em->getRepository('BrauneDigitalRedirectBundle:Redirect')->findOneBy(array('oldPath' => $oldPath))) {
			$redirect = new Redirect();
			$redirect->setOldPath($oldPath);
			$redirect->setRedirectPath($redirectPath);
			$redirect->setStatusCode($statusCode);
			$em->persist($redirect);
			$em->flush();
		}

	}

}

