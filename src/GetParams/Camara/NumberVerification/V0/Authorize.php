<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Camara\NumberVerification\V0;

final class Authorize extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'clientId',
    'redirectUrl',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'clientId' => 'clientId',
        'login_hint' => 'login_hint',
        'redirectUrl' => 'redirectUrl',
        'state' => 'state',
    ],
    'header' => [],
];

    public string $clientId;
    public ?string $login_hint;
    public string $redirectUrl;
    public ?string $state;
}
