<?php

/**
 * Copyright (c) 2014 Mashware
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Alberto Vioque <mashware@gmail.com>
 */

namespace ZenMail\ZenCoreBundle\Adapter\Interfaces;

/**
 * Interface ZenMessageInterface
 * @package ZenMail\ZenCoreBundle\Adapter\Interfaces
 */
interface ZenMessageInterface
{

    /**
     * Set the from address of this message.
     *
     * You may pass an array of addresses if this message is from multiple people.
     *
     * If $name is passed and the first parameter is a string, this name will be
     * associated with the address.
     *
     * @param string $addresses
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setFrom($addresses, $name = null);

    /**
     * Get the from address of this message.
     *
     * @return mixed
     */
    public function getFrom();

    /**
     * Set the to addresses of this message.
     *
     * If multiple recipients will receive the message an array should be used.
     * Example: array('receiver@domain.org', 'other@domain.org' => 'A name')
     *
     * If $name is passed and the first parameter is a string, this name will be
     * associated with the address.
     *
     * @param mixed $addresses
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setTo($addresses, $name = null);

    /**
     * Get the To addresses of this message.
     *
     * @return array
     */
    public function getTo();

    /**
     * Set the Cc addresses of this message.
     *
     * If $name is passed and the first parameter is a string, this name will be
     * associated with the address.
     *
     * @param mixed $addresses
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setCc($addresses, $name = null);

    /**
     * Get the Cc address of this message.
     *
     * @return array
     */
    public function getCc();

    /**
     * Set the Bcc addresses of this message.
     *
     * If $name is passed and the first parameter is a string, this name will be
     * associated with the address.
     *
     * @param mixed $addresses
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setBcc($addresses, $name = null);

    /**
     * Get the Bcc addresses of this message.
     *
     * @return array
     */
    public function getBcc();

    /**
     * Set the subject of this message.
     *
     * @param string $subject
     * @return $this self Object
     */
    public function setSubject($subject);

    /**
     * Get the subject of this message.
     *
     * @return string
     */
    public function getSubject();

    /**
     * Set the body of this entity, either as a string, or as an instance of
     * {@link Swift_OutputByteStream}.
     *
     * @param mixed $body
     * @param string $contentType optional
     * @param string $charset optional
     *
     * @return $this self Object
     */
    public function setBody($body, $contentType = null, $charset = null);

    /**
     * Gets the body to the email (traducir)
     *
     * @return string
     */
    public function getBody();

    /**
     * Set the sender of this message.
     *
     * This does not override the From field, but it has a higher significance.
     *
     * @param string $address
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setSender($address, $name = null);

    /**
     * Get the sender of this message.
     *
     * @return string
     */
    public function getSender();

    /**
     * Set the reply-to address of this message.
     *
     * You may pass an array of addresses if replies will go to multiple people.
     *
     * If $name is passed and the first parameter is a string, this name will be
     * associated with the address.
     *
     * @param string $addresses
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setReplyTo($addresses, $name = null);

    /**
     * Get the body of this entity as a string.
     *
     * @return string
     */
    public function getReplyTo();

    /**
     * Set the date at which this message was created.
     *
     * @param \DateTime $date
     * @return $this self Object
     */
    public function setDate(\DateTime $date);

    /**
     * Get the date at which the message was sent getDate() (traducir)
     *
     * @return \DateTime
     */
    public function getDate();

    /**
     * Set the Content-type of this entity.
     *
     * @param string $type
     * @return $this self Object
     */
    public function setContentType($type);

    /**
     * Get the Content-type of this entity.
     *
     * @return string
     */
    public function getContentType();

    /**
     * Returns a string representation of this object.
     *
     * @see toString()
     *
     * @return string
     */
    public function __toString();
}