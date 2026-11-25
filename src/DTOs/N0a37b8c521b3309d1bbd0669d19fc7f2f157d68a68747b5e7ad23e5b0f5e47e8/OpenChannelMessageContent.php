<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8;

/**
 * OpenChannelMessageContent
 *
 * Content of the message.
 */
final class OpenChannelMessageContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'body',
];

    public \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageBody $body;

}
