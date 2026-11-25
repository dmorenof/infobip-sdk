<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * TextAndImageFreeFormAddChannelButton
 *
 * Add channel button. This button allows users to add the channel to their KakaoTalk channel list. This button type is only available when targeting ALL_CONSENT (M) or NON_FRIENDS (N) audiences in free form messages.
 */
final class TextAndImageFreeFormAddChannelButton extends \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\TextAndImageFreeFormButton
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;
}
