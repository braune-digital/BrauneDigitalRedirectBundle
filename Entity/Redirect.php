<?php

namespace BrauneDigital\RedirectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Redirect
{

    /**
     * @var integer
     */
    protected $id;

	/**
	 * @var
	 */
	protected $oldPath;

	/**
	 * @var
	 */
	protected $redirectPath;

	/**
	 * @var integer
	 */
	protected $statusCode = 302;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getOldPath()
	{
		return $this->oldPath;
	}

	/**
	 * @param mixed $oldPath
	 */
	public function setOldPath($oldPath)
	{
		$this->oldPath = $oldPath;
	}

	/**
	 * @return mixed
	 */
	public function getRedirectPath()
	{
		return $this->redirectPath;
	}

	/**
	 * @param mixed $redirectPath
	 */
	public function setRedirectPath($redirectPath)
	{
		$this->redirectPath = $redirectPath;
	}

	/**
	 * @return int
	 */
	public function getStatusCode()
	{
		return $this->statusCode;
	}

	/**
	 * @param int $statusCode
	 */
	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;
	}
}