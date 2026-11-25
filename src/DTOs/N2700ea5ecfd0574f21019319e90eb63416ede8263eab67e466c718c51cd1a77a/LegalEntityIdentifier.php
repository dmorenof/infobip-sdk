<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * LegalEntityIdentifier
 */
final class LegalEntityIdentifier extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BusinessIdentifier
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'id' => [
        'minLength' => 20,
        'maxLength' => 20,
        'pattern' => '(\\d{4})(00)([A-Z0-9]{12})(\\d{2})',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

}
