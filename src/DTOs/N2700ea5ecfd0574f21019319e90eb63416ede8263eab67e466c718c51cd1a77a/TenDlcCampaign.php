<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * TenDlcCampaign
 */
final class TenDlcCampaign extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Campaign
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    protected const array VALIDATION = [
    'confirmationMessage' => [
        'minLength' => 20,
        'maxLength' => 320,
    ],
    'customerCareEmail' => [
        'minLength' => 1,
        'maxLength' => 255,
    ],
    'customerCarePhone' => [
        'minLength' => 3,
        'maxLength' => 16,
        'pattern' => '\\+?[1-9]\\d{1,14}',
    ],
    'exampleMessages' => [
        'minItems' => 0,
        'maxItems' => 5,
    ],
    'helpMessage' => [
        'minLength' => 20,
        'maxLength' => 320,
    ],
    'messageTypes' => [
        'minItems' => 1,
        'uniqueItems' => true,
    ],
    'mmsSampleFiles' => [
        'minItems' => 0,
        'maxItems' => 5,
    ],
    'name' => [
        'minLength' => 1,
        'maxLength' => 30,
        'pattern' => '[A-Za-z0-9_ ]*',
    ],
    'numberKeys' => [
        'minItems' => 0,
        'maxItems' => 49,
        'uniqueItems' => true,
    ],
    'numberPreviews' => [
        'uniqueItems' => true,
    ],
    'numbers' => [
        'minItems' => 0,
        'maxItems' => 49,
        'uniqueItems' => true,
    ],
    'programSummary' => [
        'minLength' => 40,
        'maxLength' => 500,
    ],
    'referenceId' => [
        'minLength' => 0,
        'maxLength' => 50,
    ],
    'stopMessage' => [
        'minLength' => 20,
        'maxLength' => 320,
    ],
    'supportingDocuments' => [
        'minItems' => 0,
        'maxItems' => 5,
    ],
    'termsAndConditionsUrl' => [
        'minLength' => 11,
        'maxLength' => 255,
        'pattern' => '',
    ],
    'useCases' => [
        'uniqueItems' => true,
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'createdDate',
    'externalCampaignId',
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
     * Shows whether the campaign will include any age-gated content, as defined by Carrier and CTIA guidelines.
     */
    public bool $ageGated;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\AppealData $appealData;
    /**
     * The ID of the brand to use with the campaign.
     * Documentation: #platform-connectivity/number-registration/create-brand
     * Format: uuid
     */
    public string $brandId;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandPreview $brandPreview;
    /**
     * The message sent to the user after they have subscribed.
     */
    public string $confirmationMessage {
        set {
            $this->assigning('confirmationMessage', $value);
            $this->confirmationMessage = $value;
        }
    }
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
     * The phone number the user may call to get customer care.
     */
    public string $customerCarePhone {
        set {
            $this->assigning('customerCarePhone', $value);
            $this->customerCarePhone = $value;
        }
    }
    /**
     * Shows whether the campaign will include content related to direct lending or other loan arrangements.
     */
    public bool $directLending;
    /**
     * Shows whether the campaign will send embedded links of any kind. Public URL shorteners (bitly, tinyurl) are not accepted.
     */
    public bool $embeddedLink;
    /**
     * Shows whether any embedded phone numbers would be used in the campaign, except the required HELP information contact phone number.
     */
    public bool $embeddedPhone;
    /**
     * The example message(s) a user may receive from this campaign. Each example message must be at least 20 characters long.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TenDlcCampaign\ExampleMessagesCollection $exampleMessages {
        set {
            $this->assigning('exampleMessages', $value);
            $this->exampleMessages = $value;
        }
    }
    /**
     * The ID of the campaign as defined by The Campaign Registry.
     */
    public string $externalCampaignId;
    /**
     * The message sent to a user after they have asked for help.
     */
    public string $helpMessage {
        set {
            $this->assigning('helpMessage', $value);
            $this->helpMessage = $value;
        }
    }
    /**
     * Low volume campaigns are a lower cost campaign designed for low daily volume and non-time-sensitive messages. They are limited to 6 messages per minute on most carriers and no more than 5,000 messages per month on all carriers.
     */
    public bool $lowVolume;
    /**
     * The message type(s) this campaign will use to send messages.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TenDlcCampaign\MessageTypesCollection $messageTypes {
        set {
            $this->assigning('messageTypes', $value);
            $this->messageTypes = $value;
        }
    }
    /**
     * List of MMS sample files for the campaign. Each entry can be either a URL to an external file or a UUID of a previously uploaded document. Maximum 5 files allowed. Supported file types: .bmp, .dib, .gif, .jpeg, .jpg, .m2a, .m4a, .m4b, .m4p, .m4r, .m4v, .mp1, .mp2, .mp3, .mp4, .mpa, .oga, .ogg, .ogm, .ogv, .ogx, .png, .spx, .txt, .wav, .webm.
     */
    public \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection $mmsSampleFiles {
        set {
            $this->assigning('mmsSampleFiles', $value);
            $this->mmsSampleFiles = $value;
        }
    }
    /**
     * The numberKey(s) of the numbers to use with the campaign. Alternatively, you can use the 'numbers' property to specify the numbers directly, but note that 'numberKeys' property takes precedence if both are specified.
     * Documentation: #platform-&-connectivity/numbers
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberKeysCollection $numberKeys {
        set {
            $this->assigning('numberKeys', $value);
            $this->numberKeys = $value;
        }
    }
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPool $numberPool;
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
     * US 10DLC numbers to use with the campaign. You may only use numbers that are associated with your account inside the Infobip platform. Numbers must be provided in international format including the country prefix, e.g. 14232180111. This property can be used instead of 'numberKeys' to specify the campaign numbers; it is not returned in the API response.
     * Documentation: #platform-&-connectivity/numbers
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $numbers {
        set {
            $this->assigning('numbers', $value);
            $this->numbers = $value;
        }
    }
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\OptIns $optIns;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PolicyType $policy;
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
     * The message sent to a user after they have asked to stop receiving messages.
     */
    public string $stopMessage {
        set {
            $this->assigning('stopMessage', $value);
            $this->stopMessage = $value;
        }
    }
    /**
     * List of supporting documents for the campaign. Each entry can be either a URL to an external document or a UUID of a previously uploaded document. Maximum 5 documents allowed. Supported file types: .bmp, .dib, .docx, .htm, .html, .jpeg, .jpg, .odt, .pdf, .png, .raw, .rtf, .tif, .tiff, .txt, .xml.
     */
    public \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection $supportingDocuments {
        set {
            $this->assigning('supportingDocuments', $value);
            $this->supportingDocuments = $value;
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
    /**
     * The use cases for this campaign.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TenDlcCampaign\UseCasesCollection $useCases {
        set {
            $this->assigning('useCases', $value);
            $this->useCases = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ageGated' => is_bool($value) ? $this->ageGated = $value : parent::assignMember($name, $value),
            'appealData' => $value instanceof \stdClass ? $this->appealData = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\AppealData($value) : parent::assignMember($name, $value),
            'brandId' => is_string($value) ? $this->brandId = $value : parent::assignMember($name, $value),
            'brandPreview' => $value instanceof \stdClass ? $this->brandPreview = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandPreview($value) : parent::assignMember($name, $value),
            'confirmationMessage' => is_string($value) ? $this->confirmationMessage = $value : parent::assignMember($name, $value),
            'customerCareEmail' => is_string($value) ? $this->customerCareEmail = $value : parent::assignMember($name, $value),
            'customerCarePhone' => is_string($value) ? $this->customerCarePhone = $value : parent::assignMember($name, $value),
            'directLending' => is_bool($value) ? $this->directLending = $value : parent::assignMember($name, $value),
            'embeddedLink' => is_bool($value) ? $this->embeddedLink = $value : parent::assignMember($name, $value),
            'embeddedPhone' => is_bool($value) ? $this->embeddedPhone = $value : parent::assignMember($name, $value),
            'exampleMessages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->exampleMessages = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TenDlcCampaign\ExampleMessagesCollection($value) : parent::assignMember($name, $value),
            'externalCampaignId' => is_string($value) ? $this->externalCampaignId = $value : parent::assignMember($name, $value),
            'helpMessage' => is_string($value) ? $this->helpMessage = $value : parent::assignMember($name, $value),
            'lowVolume' => is_bool($value) ? $this->lowVolume = $value : parent::assignMember($name, $value),
            'mmsSampleFiles' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->mmsSampleFiles = new \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection($value) : parent::assignMember($name, $value),
            'numberKeys' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->numberKeys = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberKeysCollection($value) : parent::assignMember($name, $value),
            'numberPool' => $value instanceof \stdClass ? $this->numberPool = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPool($value) : parent::assignMember($name, $value),
            'numberPreviews' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->numberPreviews = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberPreviewsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPreview::class)) : parent::assignMember($name, $value),
            'numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->numbers = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'optIns' => $value instanceof \stdClass ? $this->optIns = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\OptIns($value) : parent::assignMember($name, $value),
            'policy' => is_string($value) ? $this->policy = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PolicyType::from($value) : parent::assignMember($name, $value),
            'programSummary' => is_string($value) ? $this->programSummary = $value : parent::assignMember($name, $value),
            'stopMessage' => is_string($value) ? $this->stopMessage = $value : parent::assignMember($name, $value),
            'supportingDocuments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->supportingDocuments = new \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection($value) : parent::assignMember($name, $value),
            'termsAndConditionsUrl' => is_string($value) ? $this->termsAndConditionsUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
