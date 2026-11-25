<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

/**
 * InstagramDmInboundContent
 *
 * Message content.
 */
class InstagramDmInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundAudioContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundAudioContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundFileContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundFileContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundIgPostContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundIgPostContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundIgReelContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundIgReelContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundImageContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundImageContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundLocationCoordinatesContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundLocationCoordinatesContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundLocationUrlContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundLocationUrlContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundPostbackContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundPostbackContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundProductContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundProductContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundShareContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundShareContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundTextContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundTextContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundUnknownContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundUnknownContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundUrlContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundUrlContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InstagramDmInboundVideoContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundVideoContent',
    '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.MentionInstagramDmInboundStoryContent' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\MentionInstagramDmInboundStoryContent',
    'AUDIO' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundAudioContent',
    'FILE' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundFileContent',
    'IG_POST' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundIgPostContent',
    'IG_REEL' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundIgReelContent',
    'IMAGE' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundImageContent',
    'LOCATION' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundLocationCoordinatesContent',
    'LOCATION_URL' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundLocationUrlContent',
    'POSTBACK' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundPostbackContent',
    'PRODUCT' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundProductContent',
    'SHARE' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundShareContent',
    'STORY_MENTION' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\MentionInstagramDmInboundStoryContent',
    'TEXT' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundTextContent',
    'UNKNOWN' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundUnknownContent',
    'URL' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundUrlContent',
    'VIDEO' => 'InfobipSDK\\DTOs\\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\\InstagramDmInboundVideoContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmInboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmInboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
