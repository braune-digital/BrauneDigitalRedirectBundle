<?php

namespace BrauneDigital\RedirectBundle\Entity;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;

class RedirectManager
{

	/**
	 * @var EntityManager
	 */
	protected $em;

	/**
	 * @param EntityManager $container
	 */
	public function __construct(EntityManager $em) {
		$this->em = $em;
	}

	/**
	 * @param string $oldPath
	 * @param string $redirectPath
	 * @param integer $statusCode
	 * @param boolean $flush
	 */
	public function create($oldPath, $redirectPath, $statusCode = 302, $flush = true) {

		if (!$this
			->em
			->getRepository('BrauneDigitalRedirectBundle:Redirect')
			->findOneBy(array('oldPath' => $oldPath))
		) {
			$redirect = new Redirect();
			$redirect->setOldPath($oldPath);
			$redirect->setRedirectPath($redirectPath);
			$redirect->setStatusCode($statusCode);
			$this->em->persist($redirect);

			if($flush) {
				$this->em->flush();
			}
		}
	}
}