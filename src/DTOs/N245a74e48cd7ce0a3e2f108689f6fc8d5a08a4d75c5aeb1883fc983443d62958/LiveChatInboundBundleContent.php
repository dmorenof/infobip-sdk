<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatInboundBundleContent
 */
final class LiveChatInboundBundleContent extends \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'outboundMessages' => [
        'minItems' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundContent $inboundMessage;
    /**
     * Welcome messages displayed to the end user.
     */
    public \InfobipSDK\Collections\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundBundleContent\OutboundMessagesCollection $outboundMessages {
        set {
            $this->assigning('outboundMessages', $value);
            $this->outboundMessages = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'outboundMessages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->outboundMessages = new \InfobipSDK\Collections\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundBundleContent\OutboundMessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundTimestampedContent::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
