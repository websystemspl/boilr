<?php

namespace Boilr\App\EventSubscriber;

use Websystems\BoilrCore\Event\BootEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class TestSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            BootEvent::BEFORE => [
                ['onBootEventBefore', 20],
            ],
            BootEvent::AFTER => [
                ['onBootEventAfter', 20],
            ]
        ];
    }

    public function onBootEventBefore(BootEvent $bootEvent)
    {
        //dump('1');
    }

    public function onBootEventAfter(BootEvent $bootEvent)
    {
        //dump('2');
    }
}
