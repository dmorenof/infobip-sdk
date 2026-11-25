<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\Communication\Resource1\Flows\ByCampaignId;

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

    public const bool OPERATION_BODY = true;

    public ?string $email;
    public ?string $externalId;
    public ?string $phone;
    public ?\InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\FlowPersonRequest $body;
}
