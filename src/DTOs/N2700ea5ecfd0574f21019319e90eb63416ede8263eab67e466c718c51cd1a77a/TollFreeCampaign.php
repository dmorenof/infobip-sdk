<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * TollFreeCampaign
 */
final class TollFreeCampaign extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Campaign
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'additionalInformation' => [
            'minLength' => 0,
            'maxLength' => 500,
        ],
        'customerCareEmail' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'exampleMessage' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
        'name' => [
            'minLength' => 1,
            'maxLength' => 30,
            'pattern' => '[A-Za-z0-9_ ]*',
        ],
        'numberKeys' => [
            'minItems' => 1,
            'maxItems' => 25,
            'uniqueItems' => true,
        ],
        'numberPreviews' => [
            'uniqueItems' => true,
        ],
        'numbers' => [
            'uniqueItems' => true,
        ],
        'optInImageURLs' => [
            'uniqueItems' => true,
        ],
        'privacyPolicyUrl' => [
            'pattern' => '',
        ],
        'programSummary' => [
            'minLength' => 0,
            'maxLength' => 500,
        ],
        'referenceId' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'termsAndConditionsUrl' => [
            'pattern' => '',
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'createdDate',
        'id',
        'lastModifiedDate',
        'numberPreviews',
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'numbers',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Free-form field for any extra details relevant to the campaign—such as custom use cases or compliance clarification.
     */
    public string $additionalInformation {
        set {
            $this->assigning('additionalInformation', $value);
            $this->additionalInformation = $value;
        }
    }
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\AppealData $appealData;
    /**
     * The ID of the brand to use with the campaign.
     * Documentation: #platform-connectivity/number-registration/create-brand
     * Format: uuid
     */
    public string $brandId;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandPreview $brandPreview;
    /**
     * Campaign Verify token for POLITICAL campaigns.
     */
    public string $campaignVerifyToken;
    /**
     * The email address the user may contact to get customer care.  Must be a well formed email address that does not include a '=' character.
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
    public string $exampleMessage {
        set {
            $this->assigning('exampleMessage', $value);
            $this->exampleMessage = $value;
        }
    }
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeMessageVolume $messageVolume;
    /**
     * The numberKey(s) of the numbers to use with the campaign. Campaign must have at least one TFN number associated before it can be submitted for review. Alternatively, you can use the 'numbers' property to specify the numbers directly, but note that 'numberKeys' property takes precedence if both are specified.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberKeysCollection $numberKeys {
        set {
            $this->assigning('numberKeys', $value);
            $this->numberKeys = $value;
        }
    }
    /**
     * The number(s) to use with the campaign. This property is read-only and ignored in POST/PUT calls.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberPreviewsCollection $numberPreviews {
        set {
            $this->assigning('numberPreviews', $value);
            $this->numberPreviews = $value;
        }
    }
    /**
     * US TFN numbers to use with the campaign. Campaign must have at least one TFN number associated before it can be submitted for review. You may only use numbers that are associated with your account inside the Infobip platform. Numbers must be provided in international format including the country prefix, e.g. 18881234567. This property can be used instead of 'numberKeys' to specify the campaign numbers; it is not returned in the API response.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $numbers {
        set {
            $this->assigning('numbers', $value);
            $this->numbers = $value;
        }
    }
    /**
     * List of URLs linking to screenshots that show how end-users opt in to receive messages.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeCampaign\ImageURLsCollection $optInImageURLs {
        set {
            $this->assigning('optInImageURLs', $value);
            $this->optInImageURLs = $value;
        }
    }
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\OptIns $optIns;
    /**
     * Public URL to the privacy policy that outlines how user data is collected, stored, and used.
     */
    public string $privacyPolicyUrl {
        set {
            $this->assigning('privacyPolicyUrl', $value);
            $this->privacyPolicyUrl = $value;
        }
    }
    /**
     * A brief description of the purpose of the campaign.
     */
    public string $programSummary {
        set {
            $this->assigning('programSummary', $value);
            $this->programSummary = $value;
        }
    }
    /**
     * URL where the terms and conditions of the campaign are located.
     */
    public string $termsAndConditionsUrl {
        set {
            $this->assigning('termsAndConditionsUrl', $value);
            $this->termsAndConditionsUrl = $value;
        }
    }
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUseCase $useCase;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additionalInformation' => is_string($value) ? $this->additionalInformation = $value : parent::assignMember($name, $value),
            'appealData' => $value instanceof \stdClass ? $this->appealData = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\AppealData($value) : parent::assignMember($name, $value),
            'brandId' => is_string($value) ? $this->brandId = $value : parent::assignMember($name, $value),
            'brandPreview' => $value instanceof \stdClass ? $this->brandPreview = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandPreview($value) : parent::assignMember($name, $value),
            'campaignVerifyToken' => is_string($value) ? $this->campaignVerifyToken = $value : parent::assignMember($name, $value),
            'customerCareEmail' => is_string($value) ? $this->customerCareEmail = $value : parent::assignMember($name, $value),
            'exampleMessage' => is_string($value) ? $this->exampleMessage = $value : parent::assignMember($name, $value),
            'messageVolume' => is_string($value) ? $this->messageVolume = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeMessageVolume::from($value) : parent::assignMember($name, $value),
            'numberKeys' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->numberKeys = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberKeysCollection($value) : parent::assignMember($name, $value),
            'numberPreviews' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->numberPreviews = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberPreviewsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPreview::class)) : parent::assignMember($name, $value),
            'numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->numbers = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'optInImageURLs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->optInImageURLs = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeCampaign\ImageURLsCollection($value) : parent::assignMember($name, $value),
            'optIns' => $value instanceof \stdClass ? $this->optIns = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\OptIns($value) : parent::assignMember($name, $value),
            'privacyPolicyUrl' => is_string($value) ? $this->privacyPolicyUrl = $value : parent::assignMember($name, $value),
            'programSummary' => is_string($value) ? $this->programSummary = $value : parent::assignMember($name, $value),
            'termsAndConditionsUrl' => is_string($value) ? $this->termsAndConditionsUrl = $value : parent::assignMember($name, $value),
            'useCase' => is_string($value) ? $this->useCase = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUseCase::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
