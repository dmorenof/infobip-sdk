<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * ShortCodeCampaignBuilderRequest
 *
 * Request to start building Short code campaign using AI assistant.
 */
final class ShortCodeCampaignBuilderRequest extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderRequest
{
    public const array REQUIRED_FIELDS = [
        'brandId',
        'campaignIntent',
        'campaignType',
        'contactEmail',
        'optInMethods',
    ];

    protected const array VALIDATION = [
        'campaignAttributes' => [
            'uniqueItems' => true,
        ],
        'campaignIntent' => [
            'minLength' => 1,
        ],
        'contactEmail' => [
            'minLength' => 1,
        ],
        'ctaMethods' => [
            'minItems' => 1,
            'uniqueItems' => true,
        ],
        'optInMethods' => [
            'minItems' => 1,
            'uniqueItems' => true,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Campaign attributes indicating special content characteristics.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ShortCodeCampaignBuilderRequest\CampaignAttributesCollection $campaignAttributes {
        set {
            $this->assigning('campaignAttributes', $value);
            $this->campaignAttributes = $value;
        }
    }
    /**
     * Campaign contact phone for use in call-to-action method
     */
    public string $contactPhone;
    /**
     * Call-to-action (CTA) methods indicating how the short code will be promoted to consumers (e.g. web, TV, radio, print).
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ShortCodeCampaignBuilderRequest\CtaMethodsCollection $ctaMethods {
        set {
            $this->assigning('ctaMethods', $value);
            $this->ctaMethods = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contactPhone' => is_string($value) ? $this->contactPhone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
