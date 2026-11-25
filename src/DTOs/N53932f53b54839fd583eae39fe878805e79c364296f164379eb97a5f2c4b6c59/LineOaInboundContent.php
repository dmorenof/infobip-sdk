<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaInboundContent
 *
 * Message content.
 */
class LineOaInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundAccountLinkEventContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundAccountLinkEventContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundAudioContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundAudioContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundBeaconEventContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundBeaconEventContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundFileContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundFileContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundFollowEventContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundFollowEventContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundImageContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundImageContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundJoinEventContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundJoinEventContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundLeaveEventContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundLeaveEventContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundLocationContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundLocationContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundMemberJoinEventContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundMemberJoinEventContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundMemberLeaveEventContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundMemberLeaveEventContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundPostbackEventContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundPostbackEventContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundStickerContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundStickerContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundTextContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundTextContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundThingsEventContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundThingsEventContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundUnFollowEventContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundUnFollowEventContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundUnsendEventContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundUnsendEventContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaInboundVideoContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundVideoContent',
        'ACCOUNT_LINK' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundAccountLinkEventContent',
        'AUDIO' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundAudioContent',
        'BEACON' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundBeaconEventContent',
        'FILE' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundFileContent',
        'FOLLOW' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundFollowEventContent',
        'IMAGE' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundImageContent',
        'JOIN' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundJoinEventContent',
        'LEAVE' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundLeaveEventContent',
        'LOCATION' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundLocationContent',
        'MEMBER_JOIN' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundMemberJoinEventContent',
        'MEMBER_LEAVE' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundMemberLeaveEventContent',
        'POSTBACK' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundPostbackEventContent',
        'STICKER' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundStickerContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundTextContent',
        'THINGS' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundThingsEventContent',
        'UNFOLLOW' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundUnFollowEventContent',
        'UNSEND' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundUnsendEventContent',
        'VIDEO' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaInboundVideoContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
