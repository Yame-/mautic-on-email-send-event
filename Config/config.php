<?php

return array(
    'name'        => 'Yame Mail Webhook',
    'description' => 'Enables sent email webhook',
    'version'     => '1.0',
    'author'      => 'Mautic',


    'services'    => array(
        'events' => array(
            'mautic.cloudstorage.remoteassetbrowse.subscriber' => array(
                'class' => 'MauticPlugin\YameWebhookBundle\EventListener\OnSendMailSubscriber'
            )
        )
    )

);