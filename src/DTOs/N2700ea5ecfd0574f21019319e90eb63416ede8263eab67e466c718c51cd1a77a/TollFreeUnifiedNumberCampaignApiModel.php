<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * TollFreeUnifiedNumberCampaignApiModel
 */
final class TollFreeUnifiedNumberCampaignApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'businessContactFirstName',
        'businessContactLastName',
        'businessWebsite',
        'exampleMessage',
        'legalEntityType',
        'legalName',
        'messageVolume',
        'name',
        'optInImageURLs',
        'optIns',
        'programSummary',
        'supportEmail',
        'supportPhone',
        'useCase',
    ];

    protected const array VALIDATION = [
        'additionalInformation' => [
            'minLength' => 0,
            'maxLength' => 500,
        ],
        'businessContactFirstName' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'businessContactLastName' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'businessDBA' => [
            'minLength' => 0,
            'maxLength' => 500,
        ],
        'businessName' => [
            'minLength' => 0,
            'maxLength' => 500,
        ],
        'businessWebsite' => [
            'minLength' => 0,
            'maxLength' => 500,
        ],
        'countryCode' => [
            'minLength' => 1,
            'maxLength' => 2,
        ],
        'customerCareEmail' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'exampleMessage' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
        'legalName' => [
            'minLength' => 1,
            'maxLength' => 255,
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
            'minItems' => 1,
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
        'supportEmail' => [
            'minLength' => 1,
        ],
        'supportPhone' => [
            'minLength' => 3,
            'maxLength' => 16,
            'pattern' => '\\+?[1-9]\\d{1,14}',
        ],
        'taxId' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'taxIdIssuingCountry' => [
            'minLength' => 1,
            'maxLength' => 2,
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
        'numberKeys',
        'numbers',
        'priorityId',
    ];

    /**
     * Free-form field for any extra details relevant to the campaign—such as custom use cases or compliance clarification.
     */
    public string $additionalInformation {
        set {
            $this->assigning('additionalInformation', $value);
            $this->additionalInformation = $value;
        }
    }
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Address $address;
    /**
     * CPaaS X property identifying an application, a use case or an environment on your system. It should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $applicationId;
    /**
     * First name of the primary contact person for the brand or business entity. Used for verification or compliance outreach.
     */
    public string $businessContactFirstName {
        set {
            $this->assigning('businessContactFirstName', $value);
            $this->businessContactFirstName = $value;
        }
    }
    /**
     * Last name of the primary contact person for the brand or business entity.
     */
    public string $businessContactLastName {
        set {
            $this->assigning('businessContactLastName', $value);
            $this->businessContactLastName = $value;
        }
    }
    /**
     * 'Doing Business As' name if different from the legal business name.
     */
    public string $businessDBA {
        set {
            $this->assigning('businessDBA', $value);
            $this->businessDBA = $value;
        }
    }
    /**
     * The customer defined name of brand or business entity.
     */
    public string $businessName {
        set {
            $this->assigning('businessName', $value);
            $this->businessName = $value;
        }
    }
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BusinessRegistrationType $businessRegistrationType;
    /**
     * The website for the brand or business entity.
     */
    public string $businessWebsite {
        set {
            $this->assigning('businessWebsite', $value);
            $this->businessWebsite = $value;
        }
    }
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignFeedback $campaignFeedback;
    /**
     * Campaign Verify token for POLITICAL campaigns.
     */
    public string $campaignVerifyToken;
    /**
     * The country where the brand is located.
     */
    public string $countryCode {
        set {
            $this->assigning('countryCode', $value);
            $this->countryCode = $value;
        }
    }
    /**
     * The date and time when the campaign was created.
     * Format: date-time
     */
    public string $createdDate;
    /**
     * The email address the user may contact to get customer care.  Must be a well formed email address that does not include a '=' character.
     * Format: email
     */
    public string $customerCareEmail {
        set {
            $this->assigning('customerCareEmail', $value);
            $this->customerCareEmail = $value;
        }
    }
    /**
     * CPaaS X property identifying an unique actor on your system. Should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $entityId;
    /**
     * The example message(s) a user may receive from this campaign. Each example message must be at least 20 characters long.
     */
    public string $exampleMessage {
        set {
            $this->assigning('exampleMessage', $value);
            $this->exampleMessage = $value;
        }
    }
    /**
     * The identifier for the campaign.
     * Format: uuid
     */
    public string $id;
    /**
     * The date and time when the campaign was last modified.
     * Format: date-time
     */
    public string $lastModifiedDate;
    /**
     * Legal entity type of the business.
     */
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUnifiedNumberCampaignApiModel\EntityTypeEnum $legalEntityType;
    /**
     * The legal name of the brand.
     */
    public string $legalName {
        set {
            $this->assigning('legalName', $value);
            $this->legalName = $value;
        }
    }
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeMessageVolume $messageVolume;
    /**
     * The name of the campaign.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The numberKey(s) of the numbers to use with the campaign. Campaign must have at least one TFN number associated before it can be submitted for review. Alternatively, you can use the 'numbers' property to specify the numbers directly, but note that 'numberKeys' property takes precedence if both are specified.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $numberKeys {
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
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PriorityInfo $priority;
    /**
     * Priority information used in latest campaign review.
     * Format: uuid
     */
    public string $priorityId;
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
     * Unique user defined ID for the campaign. While not required, it is recommended to supply a referenceId as the uniqueness constraint will help ensure a campaign is not accidentally created multiple times. Subsequent create requests with the same referenceId will be rejected with an error.
     */
    public string $referenceId {
        set {
            $this->assigning('referenceId', $value);
            $this->referenceId = $value;
        }
    }
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignStage $stage;
    /**
     * The business email address to contact about brand compliance issues. Must be a well formed email address that does not include a '=' character.
     */
    public string $supportEmail {
        set {
            $this->assigning('supportEmail', $value);
            $this->supportEmail = $value;
        }
    }
    /**
     * The business phone number to contact about brand compliance issues.
     */
    public string $supportPhone {
        set {
            $this->assigning('supportPhone', $value);
            $this->supportPhone = $value;
        }
    }
    /**
     * The tax identifier for the brand. Not required for sole proprietor brands.
     */
    public string $taxId {
        set {
            $this->assigning('taxId', $value);
            $this->taxId = $value;
        }
    }
    /**
     * The country where tax identifier is issued. If not specified, the value from countryCode will be used.
     */
    public string $taxIdIssuingCountry {
        set {
            $this->assigning('taxIdIssuingCountry', $value);
            $this->taxIdIssuingCountry = $value;
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
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUnifiedNumberCampaignApiModel\TypeEnum $type;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUseCase $useCase;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additionalInformation' => is_string($value) ? $this->additionalInformation = $value : parent::assignMember($name, $value),
            'address' => $value instanceof \stdClass ? $this->address = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Address($value) : parent::assignMember($name, $value),
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'businessContactFirstName' => is_string($value) ? $this->businessContactFirstName = $value : parent::assignMember($name, $value),
            'businessContactLastName' => is_string($value) ? $this->businessContactLastName = $value : parent::assignMember($name, $value),
            'businessDBA' => is_string($value) ? $this->businessDBA = $value : parent::assignMember($name, $value),
            'businessName' => is_string($value) ? $this->businessName = $value : parent::assignMember($name, $value),
            'businessRegistrationType' => is_string($value) ? $this->businessRegistrationType = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BusinessRegistrationType::from($value) : parent::assignMember($name, $value),
            'businessWebsite' => is_string($value) ? $this->businessWebsite = $value : parent::assignMember($name, $value),
            'campaignFeedback' => $value instanceof \stdClass ? $this->campaignFeedback = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignFeedback($value) : parent::assignMember($name, $value),
            'campaignVerifyToken' => is_string($value) ? $this->campaignVerifyToken = $value : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'createdDate' => is_string($value) ? $this->createdDate = $value : parent::assignMember($name, $value),
            'customerCareEmail' => is_string($value) ? $this->customerCareEmail = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'exampleMessage' => is_string($value) ? $this->exampleMessage = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastModifiedDate' => is_string($value) ? $this->lastModifiedDate = $value : parent::assignMember($name, $value),
            'legalEntityType' => is_string($value) ? $this->legalEntityType = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUnifiedNumberCampaignApiModel\EntityTypeEnum::from($value) : parent::assignMember($name, $value),
            'legalName' => is_string($value) ? $this->legalName = $value : parent::assignMember($name, $value),
            'messageVolume' => is_string($value) ? $this->messageVolume = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeMessageVolume::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'numberKeys' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->numberKeys = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'numberPreviews' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->numberPreviews = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberPreviewsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPreview::class)) : parent::assignMember($name, $value),
            'numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->numbers = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'optInImageURLs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->optInImageURLs = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeCampaign\ImageURLsCollection($value) : parent::assignMember($name, $value),
            'optIns' => $value instanceof \stdClass ? $this->optIns = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\OptIns($value) : parent::assignMember($name, $value),
            'priority' => $value instanceof \stdClass ? $this->priority = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PriorityInfo($value) : parent::assignMember($name, $value),
            'priorityId' => is_string($value) ? $this->priorityId = $value : parent::assignMember($name, $value),
            'privacyPolicyUrl' => is_string($value) ? $this->privacyPolicyUrl = $value : parent::assignMember($name, $value),
            'programSummary' => is_string($value) ? $this->programSummary = $value : parent::assignMember($name, $value),
            'referenceId' => is_string($value) ? $this->referenceId = $value : parent::assignMember($name, $value),
            'stage' => is_string($value) ? $this->stage = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignStage::from($value) : parent::assignMember($name, $value),
            'supportEmail' => is_string($value) ? $this->supportEmail = $value : parent::assignMember($name, $value),
            'supportPhone' => is_string($value) ? $this->supportPhone = $value : parent::assignMember($name, $value),
            'taxId' => is_string($value) ? $this->taxId = $value : parent::assignMember($name, $value),
            'taxIdIssuingCountry' => is_string($value) ? $this->taxIdIssuingCountry = $value : parent::assignMember($name, $value),
            'termsAndConditionsUrl' => is_string($value) ? $this->termsAndConditionsUrl = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUnifiedNumberCampaignApiModel\TypeEnum::from($value) : parent::assignMember($name, $value),
            'useCase' => is_string($value) ? $this->useCase = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeUseCase::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
