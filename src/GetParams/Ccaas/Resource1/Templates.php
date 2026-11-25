<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Resource1;

final class Templates extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'channel' => 'channel',
            'contentType' => 'contentType',
            'createdAfter' => 'createdAfter',
            'createdBefore' => 'createdBefore',
            'language' => 'language',
            'updatedAfter' => 'updatedAfter',
            'updatedBefore' => 'updatedBefore',
        ],
        'header' => [],
    ];

    public ?\InfobipSDK\Enums\Ccaas\Resource1\Templates\Get\Query\QueryChannelEnum $channel;
    public ?\InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ContentType $contentType;
    public ?string $createdAfter;
    public ?string $createdBefore;
    public ?\InfobipSDK\Enums\Ccaas\Resource1\Templates\Get\Query\QueryLanguageEnum $language;
    public ?string $updatedAfter;
    public ?string $updatedBefore;
}
