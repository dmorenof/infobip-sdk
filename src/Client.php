<?php

declare(strict_types=1);

namespace InfobipSDK;

class Client extends \Dmorenof\SdkRuntime\ApiClient
{
    protected const array SECURITY_SCHEMES = [
        'APIKeyHeader' => [
            'type' => 'apiKey',
            'scheme' => null,
            'location' => 'header',
            'parameterName' => 'Authorization',
        ],
        'Basic' => [
            'type' => 'http',
            'scheme' => 'basic',
            'location' => null,
            'parameterName' => null,
        ],
        'IBSSOTokenHeader' => [
            'type' => 'apiKey',
            'scheme' => null,
            'location' => 'header',
            'parameterName' => 'Authorization',
        ],
        'OAuth2' => [
            'type' => 'oauth2',
            'scheme' => null,
            'location' => null,
            'parameterName' => null,
        ],
    ];

    private static ?self $currentConnection = null;

    /** Replace the current connection using a snapshot of the configuration. */
    public static function configure(Configuration $configuration): void
    {
        self::$currentConnection = self::connect($configuration);
    }

    public static function current(): self
    {
        return self::$currentConnection ?? throw new \LogicException(
            'Configure the SDK with Client::configure(Configuration) first.',
        );
    }
}
