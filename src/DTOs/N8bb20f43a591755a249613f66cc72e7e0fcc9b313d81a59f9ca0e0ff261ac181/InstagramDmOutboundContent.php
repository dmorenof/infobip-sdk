<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

/**
 * InstagramDmOutboundContent
 *
 * Message content.
 */
class InstagramDmOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmOutboundCarouselContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmOutboundCarouselContent',
        '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmOutboundImageContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmOutboundImageContent',
        '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmOutboundRichCardContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmOutboundRichCardContent',
        '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmOutboundTextContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmOutboundTextContent',
        'CAROUSEL' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmOutboundCarouselContent',
        'IMAGE' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmOutboundImageContent',
        'RICH_CARD' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmOutboundRichCardContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmOutboundTextContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmOutboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmOutboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
