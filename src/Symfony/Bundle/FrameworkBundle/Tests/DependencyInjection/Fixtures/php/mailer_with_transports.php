<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $container) {
    $container->extension('framework', [
        'mailer' => [
            'transports' => [
                'transport1' => 'smtp://example1.com',
                'transport2' => 'smtp://example2.com',
            ],
            'envelope' => [
                'sender' => 'sender@example.org',
                'recipients' => ['redirected@example.org', 'redirected1@example.org'],
            ],
        ],
    ]);
};
