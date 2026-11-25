<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * BillingUsageDataFilter
 *
 *
 * A JSON object specifying criteria to filter the results. Each field in the object represents a different filter
 * criterion to enable detailed and complex filtering.
 *
 */
final class BillingUsageDataFilter extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dateInterval',
    ];

    protected const array VALIDATION = [
        'accountKeys' => [
            'uniqueItems' => true,
        ],
        'campaignIds' => [
            'uniqueItems' => true,
        ],
        'campaignReferenceIds' => [
            'uniqueItems' => true,
        ],
        'categories' => [
            'uniqueItems' => true,
            'jsonSchema' => '{"enum":["AGENTOS","AI","APPLE_MB","CARRIER_LOOKUP","EMAIL","EMAIL_VALIDATION","KAKAO","LIVE_CHAT","MMS","MMS_OPERATOR_FEE","MOBILE_PUSH","NUMBER_LOOKUP","OPEN_CHANNEL","RCS","RCS_OPERATOR_FEE","SMS","SMS_OPERATOR_FEE","VIBER","VOICE_VIDEO","WHATSAPP"]}',
        ],
        'countryCodes' => [
            'uniqueItems' => true,
        ],
        'directions' => [
            'uniqueItems' => true,
        ],
        'platforms' => [
            'uniqueItems' => true,
        ],
        'senderTypes' => [
            'uniqueItems' => true,
        ],
        'senders' => [
            'uniqueItems' => true,
        ],
        'subCategories' => [
            'uniqueItems' => true,
            'jsonSchema' => '{"enum":["AUDIO_STREAMING","CONFERENCING","FLASH","KAKAO_A","KAKAO_B","KAKAO_S","MISSED_CALL","NEURAL_TEXT_TO_SPEECH","PHONE","RECORDING_STORAGE","SPEECH_CAPTURE","SPEECH_TRANSCRIPTION","VIBER_BC","VIBER_BM","VIBER_BOTS","VIDEO_COMPOSITION","VOICE_AMD","VOICE_RECORDING","WEBRTC","WHATSAPP_BC"]}',
        ],
        'templateIds' => [
            'uniqueItems' => true,
        ],
        'trafficTypes' => [
            'uniqueItems' => true,
        ],
    ];

    /**
     *
     * Specifies a list of unique account keys (identifiers).
     *
     * If not provided, data for all accounts in the customer hierarchy will be included.
     *
     * To retrieve all available account keys, refer to the
     * [Account list endpoint](https://www.infobip.com/docs/api/platform/account-management/get-all-accounts).
     *
     * Example: ["account_key_1","account_key_2"]
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $accountKeys {
        set {
            $this->assigning('accountKeys', $value);
            $this->accountKeys = $value;
        }
    }
    /**
     *
     * Campaign IDs, also known as communication IDs, associated with Broadcast or Moments/Flow campaigns.
     *
     * Use these values to filter billing data related to specific campaigns.
     *
     * For detailed information on the differences between Broadcast and Flow campaigns, refer to the
     * [Broadcast](https://www.infobip.com/docs/broadcast) and [Flow overview](https://www.infobip.com/docs/moments).
     *
     * Example: [12354646546,45534466546,754564654689]
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\CommunicationIdsCollection $campaignIds {
        set {
            $this->assigning('campaignIds', $value);
            $this->campaignIds = $value;
        }
    }
    /**
     *
     * Specifies the list of campaign reference IDs used for traffic sent over Infobip APIs.
     *
     * Use `campaignReferenceIds` to filter data related to specific campaigns.
     *
     * Example: ["summer-sale","bf2026"]
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $campaignReferenceIds {
        set {
            $this->assigning('campaignReferenceIds', $value);
            $this->campaignReferenceIds = $value;
        }
    }
    /**
     *
     * Channel or service categories to filter by.
     *
     * If not provided, all billing categories available to the authenticated account are included.
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageDataFilter\CategoriesCollection $categories {
        set {
            $this->assigning('categories', $value);
            $this->categories = $value;
        }
    }
    /**
     *
     * Specifies ISO 3166-1 alpha-2 country codes to filter billing data for specific countries.
     *
     * Example: ["US","DE","IN"]
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $countryCodes {
        set {
            $this->assigning('countryCodes', $value);
            $this->countryCodes = $value;
        }
    }
    public \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\DateInterval $dateInterval;
    /**
     *
     * Specifies the direction of traffic, indicating whether the message was sent to the user (OUTBOUND) or received from the user (INBOUND).
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\DirectionsCollection $directions {
        set {
            $this->assigning('directions', $value);
            $this->directions = $value;
        }
    }
    /**
     *
     * Specifies the platform object, which is a combination of an applicationId and entityId. These IDs uniquely identify
     * each application and entity configured on the Infobip platform.
     *
     * Use this object and its related parameters to filter data for a specific application and entity combination. Note that
     * these parameters should only be used if you leverage CPaaS X applications and entities to manage your traffic.
     *
     * For detailed information on applications and entities in the CPaaS X ecosystem, refer to the
     * [CPaaSX overview](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\PlatformsCollection $platforms {
        set {
            $this->assigning('platforms', $value);
            $this->platforms = $value;
        }
    }
    /**
     *
     * Specifies the types of senders. For a full list of values, refer to
     * [sender types](https://www.infobip.com/docs/reporting/metrics-reference/messaging-metrics-reference#sender-types).
     *
     * Example: ["ALPHANUMERIC","SHORT_CODE","VIRTUAL_LONG_NUMBER","DOMAIN"]
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $senderTypes {
        set {
            $this->assigning('senderTypes', $value);
            $this->senderTypes = $value;
        }
    }
    /**
     *
     * Specifies the sender IDs, which can be alphanumeric or numeric.
     *
     * Example: ["mySender","12345","15551234567","jane.smith&#64;somecompany.com"]
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $senders {
        set {
            $this->assigning('senders', $value);
            $this->senders = $value;
        }
    }
    /**
     *
     * Subcategories of categories (service variants). Applicable to Viber, Voice and Video and Kakao.
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageDataFilter\SubCategoriesCollection $subCategories {
        set {
            $this->assigning('subCategories', $value);
            $this->subCategories = $value;
        }
    }
    /**
     *
     * WhatsApp template IDs.
     *
     * Example: ["5653923468715475","5253923468715475"]
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $templateIds {
        set {
            $this->assigning('templateIds', $value);
            $this->templateIds = $value;
        }
    }
    /**
     *
     * Specifies the types of traffic. For a full list of values, refer to
     * [traffic types](https://www.infobip.com/docs/reporting/metrics-reference/billing-data-reference#traffic-types-by-channel).
     *
     * Example: ["UTILITY","MARKETING"]
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $trafficTypes {
        set {
            $this->assigning('trafficTypes', $value);
            $this->trafficTypes = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accountKeys' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->accountKeys = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'campaignIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->campaignIds = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\CommunicationIdsCollection($value) : parent::assignMember($name, $value),
            'campaignReferenceIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->campaignReferenceIds = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'countryCodes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->countryCodes = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'dateInterval' => $value instanceof \stdClass ? $this->dateInterval = new \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\DateInterval($value) : parent::assignMember($name, $value),
            'platforms' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->platforms = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\PlatformsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\Platform::class)) : parent::assignMember($name, $value),
            'senderTypes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->senderTypes = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'senders' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->senders = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'templateIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->templateIds = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'trafficTypes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->trafficTypes = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
