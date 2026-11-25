<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\Communication\Resource1\Flows\ByCampaignId;

final class Participants extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'email' => 'email',
            'externalId' => 'externalId',
            'phone' => 'phone',
        ],
        'header' => [],
    ];

    public ?string $email;
    public ?string $externalId;
    public ?string $phone;
}
