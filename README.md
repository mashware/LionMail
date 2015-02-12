# ZenMail
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mashware/ZenMail/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mashware/ZenMail/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/mashware/ZenMail/badges/build.png?b=master)](https://scrutinizer-ci.com/g/mashware/ZenMail/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/mashware/ZenMail/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/mashware/ZenMail/?branch=master)
[![Build Status](https://travis-ci.org/mashware/ZenMail.svg)](https://travis-ci.org/mashware/ZenMail)
- Instalación
Implementar interface a tu clase usuario `ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenUserInterface`
- Configuración
En config.yml:
```yml
    parameters:
        #Si usas otro sistema de correo aquí deberas cambiar por el que te diga ese bundle.
        zen_mailer_adapter: zen_swift_mailer_adapter
```
- Eventos
    Servicios:
    Para los eventos pre y post send debes crear un listener pare ello
    ```php
       
        use ZenMail\ZenCoreBundle\Event\ZenPreSendMailEvent;
        use ZenMail\ZenCoreBundle\Event\ZenPostSendMailEvent;

        class ZenMail {

            /**
             * @param ZenPreSendMailEvent $zenPreSendMailEvent
             */
            public function onZenPreSendMail(ZenPreSendMailEvent $zenPreSendMailEvent)
            {
                /*
                * Your code for this event
                */
            }

            /**
             * @param ZenPostSendMailEvent $zenPostSendMailEvent
             */
            public function onZenPostSendMail(ZenPostSendMailEvent $zenPostSendMailEvent){
                 /*
                 * Your code for this event
                 */
            }
        }
    ```
    ```yml
        zen_mail.send:
            class: AppBundle\EventListener\ZenMail
            tags:
               - { name: kernel.event_listener, event: zen.pre.send.mail, method: onZenPreSendMail }
               - { name: kernel.event_listener, event: zen.post.send.mail, method: onZenPostSendMail }
    ```
- Adapters
Si vas a crear un adapter deberás crear dos:
    - Mailer: En este se adapta el envio de Zen Mail con el tuyo, para eso tienes implementar 'ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMailerInterface'
    - Message: En este se adapta el mensaje que se enviará con el de Zen Mail, para ello tienes que implementar 'ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessageInterface'

