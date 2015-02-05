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

namespace ZenMail\ZenCoreBundle;

/**
 * This class define all events thrown by all zen method
 */
class ZenCoreEvents
{

    /**
     * This event is thrown when an order must be created.
     *
     * event.name : zen.pre.send.mail
     * event.class : ZenPreSendMailEvent
     */
    const ZEN_PRE_SEND_MAIL = 'zen.pre.send.mail';

    /**
     * This event is thrown when an order must be created.
     *
     * event.name : zen.post.send.maild
     * event.class : ZenPostSendMailEvent
     */
    const ZEN_POST_SEND_MAIL = 'zen.post.send.mail';


}
