<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * FacebookOutboundMarketingMessageContent
 */
final class FacebookOutboundMarketingMessageContent extends \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookOutboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'campaignId' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $campaignId {
        set {
            $this->assigning('campaignId', $value);
            $this->campaignId = $value;
        }
    }
    public \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookOutboundMarketingMessageAllowedContent $content;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaignId' => is_string($value) ? $this->campaignId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
