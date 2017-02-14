<?php

namespace AppBundle\Entity;

/**
 * Messages
 */
class Messages
{
    /**
     * @var string
     */
    private $auteur;

    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Messages
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Messages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

