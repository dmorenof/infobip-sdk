<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * CampaignInfoReviewRequest
 *
 * Request to submit a new campaign for AI compliance review
 */
class CampaignInfoReviewRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'brandName',
    'brandSupportEmail',
    'brandWebsite',
    'customerCareEmail',
    'messageExamples',
    'programDescription',
    'reviewType',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'reviewType';
    public const array DISCRIMINATOR_MAPPING = [
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.TenDlcAiReviewRequest' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TenDlcAiReviewRequest',
    'TEN_DIGIT_LONG_CODE' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TenDlcAiReviewRequest',
];

    protected const array VALIDATION = [
    'brandName' => [
        'minLength' => 1,
    ],
    'brandSupportEmail' => [
        'minLength' => 1,
    ],
    'brandWebsite' => [
        'minLength' => 1,
    ],
    'customerCareEmail' => [
        'minLength' => 1,
    ],
    'messageExamples' => [
        'minItems' => 1,
    ],
    'programDescription' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Brand name
     */
    public string $brandName {
        set {
            $this->assigning('brandName', $value);
            $this->brandName = $value;
        }
    }
    /**
     * Brand support email
     */
    public string $brandSupportEmail {
        set {
            $this->assigning('brandSupportEmail', $value);
            $this->brandSupportEmail = $value;
        }
    }
    /**
     * Brand website URL
     */
    public string $brandWebsite {
        set {
            $this->assigning('brandWebsite', $value);
            $this->brandWebsite = $value;
        }
    }
    /**
     * The email address the user may contact to get customer care.
     */
    public string $customerCareEmail {
        set {
            $this->assigning('customerCareEmail', $value);
            $this->customerCareEmail = $value;
        }
    }
    /**
     * The example message(s) a user may receive from this campaign. Each example message must be at least 20 characters long.
     */
    public \InfobipSDK\Collections\StringCollection $messageExamples {
        set {
            $this->assigning('messageExamples', $value);
            $this->messageExamples = $value;
        }
    }
    /**
     * Privacy policy URL
     */
    public string $privacyPolicyUrl;
    /**
     * A brief description of the purpose of the campaign.
     */
    public string $programDescription {
        set {
            $this->assigning('programDescription', $value);
            $this->programDescription = $value;
        }
    }
    /**
     * Type of review submission
     */
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignInfoReviewRequest\ReviewTypeEnum $reviewType;
    /**
     * URL where the terms and conditions of the campaign are located.
     */
    public string $termsAndConditionsUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandName' => is_string($value) ? $this->brandName = $value : parent::assignMember($name, $value),
            'brandSupportEmail' => is_string($value) ? $this->brandSupportEmail = $value : parent::assignMember($name, $value),
            'brandWebsite' => is_string($value) ? $this->brandWebsite = $value : parent::assignMember($name, $value),
            'customerCareEmail' => is_string($value) ? $this->customerCareEmail = $value : parent::assignMember($name, $value),
            'messageExamples' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->messageExamples = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'privacyPolicyUrl' => is_string($value) ? $this->privacyPolicyUrl = $value : parent::assignMember($name, $value),
            'programDescription' => is_string($value) ? $this->programDescription = $value : parent::assignMember($name, $value),
            'reviewType' => is_string($value) ? $this->reviewType = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignInfoReviewRequest\ReviewTypeEnum::from($value) : parent::assignMember($name, $value),
            'termsAndConditionsUrl' => is_string($value) ? $this->termsAndConditionsUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
