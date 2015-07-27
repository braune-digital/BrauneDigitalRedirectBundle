<?php
namespace BrauneDigital\RedirectBundle\EventListener;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;

class RedirectListener extends ContainerAware
{

	/**
	 * @var EntityManager
	 */
	protected $em;

	/**
	 * @param EntityManager $em
	 */
	public function __construct(EntityManager $em) {
		$this->em = $em;
	}

	public function onKernelRequest(GetResponseEvent $event) {

		if (!$event->isMasterRequest()) {
			return;
		}
		/**$redirect = $this->em->getRepository('BrauneDigitalRedirectBundle:Redirect')->findOneBy(array(
			'oldPath' => $event->getRequest()->getPathInfo()
		));
		if ($redirect) {
			$event->setResponse(new RedirectResponse($redirect->getRedirectPath(), $redirect->getStatusCode()));
		}*/
		return;
	}

}