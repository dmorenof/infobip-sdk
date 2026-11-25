<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * CampaignBuilderRequest
 *
 * Request to start building campaign using AI assistant.
 */
class CampaignBuilderRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'brandId',
    'campaignIntent',
    'campaignType',
    'contactEmail',
    'optInMethods',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'campaignType';
    public const array DISCRIMINATOR_MAPPING = [
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.ShortCodeCampaignBuilderRequest' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\ShortCodeCampaignBuilderRequest',
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.TenDlcCampaignBuilderRequest' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TenDlcCampaignBuilderRequest',
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.TollFreeCampaignBuilderRequest' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TollFreeCampaignBuilderRequest',
    'SHORT_CODE' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\ShortCodeCampaignBuilderRequest',
    'TEN_DIGIT_LONG_CODE' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TenDlcCampaignBuilderRequest',
    'TOLL_FREE_NUMBER' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TollFreeCampaignBuilderRequest',
];

    protected const array VALIDATION = [
    'campaignIntent' => [
        'minLength' => 1,
    ],
    'contactEmail' => [
        'minLength' => 1,
    ],
    'optInMethods' => [
        'minItems' => 1,
        'uniqueItems' => true,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Brand ID.
     * Format: uuid
     */
    public string $brandId;
    /**
     * Description of the campaign's purpose and messaging use case. This is the primary input that drives the generated campaign configuration, so it should be specific enough to convey the type of messages being sent and target audience, but concise (1-2 sentences).
     */
    public string $campaignIntent {
        set {
            $this->assigning('campaignIntent', $value);
            $this->campaignIntent = $value;
        }
    }
    /**
     * Campaign type.
     */
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderRequest\CampaignTypeEnum $campaignType;
    /**
     * Campaign contact email.
     * Format: email
     */
    public string $contactEmail {
        set {
            $this->assigning('contactEmail', $value);
            $this->contactEmail = $value;
        }
    }
    /**
     * Campaign opt-in methods.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderRequest\InMethodsCollection $optInMethods {
        set {
            $this->assigning('optInMethods', $value);
            $this->optInMethods = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandId' => is_string($value) ? $this->brandId = $value : parent::assignMember($name, $value),
            'campaignIntent' => is_string($value) ? $this->campaignIntent = $value : parent::assignMember($name, $value),
            'campaignType' => is_string($value) ? $this->campaignType = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignBuilderRequest\CampaignTypeEnum::from($value) : parent::assignMember($name, $value),
            'contactEmail' => is_string($value) ? $this->contactEmail = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
