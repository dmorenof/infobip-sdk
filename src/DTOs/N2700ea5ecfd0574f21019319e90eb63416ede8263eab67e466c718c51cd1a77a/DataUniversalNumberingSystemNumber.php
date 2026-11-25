<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * DataUniversalNumberingSystemNumber
 */
final class DataUniversalNumberingSystemNumber extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BusinessIdentifier
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'id' => [
            'minLength' => 9,
            'maxLength' => 9,
            'pattern' => '\\d{9}',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;
}
