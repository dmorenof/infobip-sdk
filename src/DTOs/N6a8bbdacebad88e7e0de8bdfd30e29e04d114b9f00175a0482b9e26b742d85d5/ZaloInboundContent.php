<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ZaloInboundContent
 *
 * Message content.
 */
class ZaloInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundAudioContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundAudioContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundBusinessCardContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundBusinessCardContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundFileContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundFileContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundFollowContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundFollowContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundGifContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundGifContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundImageContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundImageContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundLinkContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundLinkContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundLocationContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundLocationContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundResponseButtonContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundResponseButtonContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundStickerContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundStickerContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundTextContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundTextContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundUnfollowContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundUnfollowContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundUnknownContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundUnknownContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundUserFeedbackContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundUserFeedbackContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundUserSubmitInfoContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundUserSubmitInfoContent',
    '6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5.ZaloInboundVideoContent' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundVideoContent',
    'AUDIO' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundAudioContent',
    'BUSINESS_CARD' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundBusinessCardContent',
    'FILE' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundFileContent',
    'FOLLOW' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundFollowContent',
    'GIF' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundGifContent',
    'IMAGE' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundImageContent',
    'LINK' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundLinkContent',
    'LOCATION' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundLocationContent',
    'RESPONSE_BUTTON' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundResponseButtonContent',
    'STICKER' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundStickerContent',
    'TEXT' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundTextContent',
    'UNFOLLOW' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundUnfollowContent',
    'UNKNOWN' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundUnknownContent',
    'USER_FEEDBACK' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundUserFeedbackContent',
    'USER_SUBMIT_INFO' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundUserSubmitInfoContent',
    'VIDEO' => 'InfobipSDK\\DTOs\\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\\ZaloInboundVideoContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloInboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloInboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
