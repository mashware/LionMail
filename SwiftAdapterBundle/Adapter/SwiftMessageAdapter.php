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

namespace LionMail\SwiftAdapterBundle\Adapter\SwiftMailer;

use LionMail\LionCoreBundle\Adapter\Interfaces\LionMessage;

/**
 * Class SwiftMessageAdapter
 * @package LionMail\SwiftAdapterBundle\Adapter\SwiftMailer
 */
class SwiftMessageAdapter implements LionMessage {

    /**
     * @var \Swift_Message
     */
    private $swiftMessage;

    /**
     * @param \Swift_Message $swiftMessage
     */
    function __construct(\Swift_Message $swiftMessage) {
        $this->swiftMessage = $swiftMessage;
    }

    /**
     * Set the from address of this message.
     *
     * You may pass an array of addresses if this message is from multiple people.
     *
     * If $name is passed and the first parameter is a string, this name will be
     * associated with the address.
     *
     * @param string $addresses
     * @param string $name      optional
     *
     * @return $this self Object
     */
    public function setFrom($addresses, $name) {
        $this->swiftMessage->setFrom($addresses, $name);

        return $this;
    }

    /**
     * Gets the from to the email (traducir)
     *
     * @return array
     */
    public function getFrom() {
        return $this->swiftMessage->getFrom();
    }
    /**
     * Sets the to of the email (traducir)
     *
     * @param string $to
     * @return $this self Object
     */
    public function setTo($to) {


        return $this;
    }

    /**
     * Gets the to of the email (traducir)
     *
     * @return string
     */
    public function getTo() {

    }

    /**
     * Specifies the addresses of recipients who will be copied in on the message
     *
     * @param string $cc
     * @return $this self Object
     */
    public function setCc($cc) {


        return $this;
    }

    /**
     * Get the addresses of recipients who will be copied in on the message
     *
     * @return string
     */
    public function getCc() {

    }

    /**
     * Specifies the addresses of recipients who the message will be blind-copied to. Other recipients will not be aware of these copies.
     *
     * @param string $bcc
     * @return $this self Object
     */
    public function setBcc($bcc) {

        return $this;
    }

    /**
     * Gets the addresses of recipients who the message will be blind-copied to. Other recipients will not be aware of these copies.
     *
     * @return string
     */
    public function getBcc() {

    }

    /**
     * Specifies the subject line that is displayed in the recipients' mail client (traducir)
     *
     * @param string $subject
     * @return $this self Object
     */
    public function setSubject($subject) {


        return $this;
    }

    /**
     * Get the subject line that is displayed in the recipients' mail client (traducir)
     *
     * @return string
     */
    public function getSubject() {

    }

    /**
     * Sets the body to the email (traducir)
     *
     * @param string $body
     * @return $this self Object
     */
    public function setBody($body) {


        return $this;
    }

    /**
     * Gets the body to the email (traducir)
     *
     * @return string
     */
    public function getBody() {

    }

    /**
     * Specifies the address of the person who physically sent the message (higher precedence than From:)
     *
     * @param string $sender
     * @return $this self Object
     */
    public function setSender($sender) {


        return $this;
    }

    /**
     * Get the address of the person who physically sent the message (higher precedence than From:)
     *
     * @return string
     */
    public function getSender() {

    }

    /**
     * Reply-To Specifies the address where replies are sent to getReplyTo() (traducir)
     *
     * @param string $replyTo
     * @return $this self Object
     */
    public function setReplyTo($replyTo) {


        return $this;
    }

    /**
     * Gets the address where replies are sent to getReplyTo() (traducir)
     *
     * @return string
     */
    public function getReplyTo() {

    }

    /**
     * Date Specifies the date at which the message was sent getDate()
     *
     * @param \DateTime $date
     * @return $this self Object
     */
    public function setDate(\DateTime $date) {


        return $this;
    }

    /**
     * Get the date at which the message was sent getDate() (traducir)
     *
     * @return \DateTime
     */
    public function getDate() {
    }

    /**
     * Specifies the format of the message (usually text/plain or text/html)
     *
     * @param string $contentType
     * @return $this self Object
     */
    public function setContentType($contentType) {

        return $this;
    }

    /**
     * Get the format of the message (usually text/plain or text/html)
     *
     * @return string
     */
    public function getContentType() {
    }

    /**
     * All MIME entities (including a message) have a toString() method that you can call if you want to take a look at what is going to be sent. (traducir)
     *
     * @return string
     */
    public function __toString(){

    }

}