<?php

namespace Mautic\YameWebhookBundle\EventListener;

use Mautic\WebhookBundle\WebhookEvents;
use Mautic\WebhookBundle\Event\WebhookBuilderEvent;
use Mautic\CoreBundle\EventListener\CommonSubscriber;
//use Mautic\YameWebhookBundle\EventListener;

/**
 * Class WebhookSubscriber
 *
 * @package Mautic\YourBundle\EventListener
 */

class OnSendMailSubscriber extends CommonSubscriber
{
    /**
     * @return array
     */
    static public function getSubscribedEvents()
    {
        return array(
            YameWebhookBundle::ON_MAIL_SEND => array('onWebhookBuild', 0)
        );
    }

    /**
     * Add event triggers and actions
     *
     * @param WebhookBuilderEvent $event
     */
    public function onWebhookBuild(WebhookBuilderEvent $event)
    {
        // add checkbox to the webhook form for new leads
        $type  = array(
            'label'       => 'On mail send',
            'description' => 'mautic.bundlename.webhook.event.type.new_desc', // note: we don't currently use a description, but may in the future so we have supported it here
        );

        // add it to the list
        $event->addEvent(YameWebhookBundle::ON_MAIL_SEND, $type);

         // Note: you may create multiple arrays and call the $event->addEvent method multiple times
         // in this function to add several types all at once.
    }
}