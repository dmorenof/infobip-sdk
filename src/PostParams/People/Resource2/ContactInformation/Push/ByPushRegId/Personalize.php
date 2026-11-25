<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\People\Resource2\ContactInformation\Push\ByPushRegId;

final class Personalize extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'AppCode',
        'body',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'forceDepersonalize' => 'forceDepersonalize',
            'keepAsLead' => 'keepAsLead',
            'returnPush' => 'returnPush',
            'setDeviceAsPrimary' => 'setDeviceAsPrimary',
        ],
        'header' => [
            'AppCode' => 'AppCode',
        ],
    ];

    public const bool OPERATION_BODY = true;

    public string $AppCode;
    public ?bool $forceDepersonalize;
    public ?bool $keepAsLead;
    public ?bool $returnPush;
    public ?bool $setDeviceAsPrimary;
    public \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushUserPersonalizationRequest $body;
}
