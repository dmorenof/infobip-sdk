<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * AggregateDataFilter
 *
 *
 * A JSON object specifying the criteria to filter the results. Each field in the object represents a different filter
 * criterion, enabling detailed and complex filtering.
 *
 */
final class AggregateDataFilter extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'channelCodes',
    'sentSince',
    'sentUntil',
];

    protected const array VALIDATION = [
    'accountKeys' => [
        'uniqueItems' => true,
    ],
    'campaignReferenceIds' => [
        'uniqueItems' => true,
    ],
    'capabilities' => [
        'uniqueItems' => true,
    ],
    'channelCodes' => [
        'uniqueItems' => true,
    ],
    'communicationIds' => [
        'uniqueItems' => true,
    ],
    'countryIds' => [
        'uniqueItems' => true,
    ],
    'directions' => [
        'uniqueItems' => true,
    ],
    'errorCodes' => [
        'uniqueItems' => true,
    ],
    'errorGroups' => [
        'uniqueItems' => true,
    ],
    'interactionTypes' => [
        'uniqueItems' => true,
    ],
    'networkIds' => [
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
    'statusGroups' => [
        'uniqueItems' => true,
    ],
    'statuses' => [
        'uniqueItems' => true,
    ],
    'timeToAnswer' => [
        'uniqueItems' => true,
    ],
    'timeToClickFromDelivered' => [
        'uniqueItems' => true,
    ],
    'timeToClickFromSeen' => [
        'uniqueItems' => true,
    ],
    'timeToDeliver' => [
        'uniqueItems' => true,
    ],
    'timeToOpenFromDelivered' => [
        'uniqueItems' => true,
    ],
    'timeToSeenFromDelivered' => [
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
     * If not provided, the metrics data for the requester's account will be used by default.
     *
     * Example:
     *
     * ```
     * "accountKeys": ["account_key_1", "account_key_2"]
     * ```
     *
     * To retrieve all available account keys, refer to the
     * [Account list endpoint](https://www.infobip.com/docs/api/platform/account-management/get-all-accounts).
     *
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $accountKeys {
        set {
            $this->assigning('accountKeys', $value);
            $this->accountKeys = $value;
        }
    }
    /**
     *
     * A unique identifier assigned to an application, use case, or environment within the Infobip CPaaS X ecosystem.
     *
     * Use this parameter to filter data for a specific application.
     *
     * To retrieve all available application IDs, refer to the
     * [Application list endpoint](https://www.infobip.com/docs/api/platform/application-entity/get-applications).
     *
     * Example:
     *
     * ```
     * "applicationId": "your_application_id"
     * ```
     *
     *
     * @deprecated
     */
    public string $applicationId;
    /**
     *
     * Specifies the list of campaign reference IDs used for traffic sent over Infobip APIs.
     *
     * Use `campaignReferenceIDs` to filter data related to specific campaigns.
     *
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $campaignReferenceIds {
        set {
            $this->assigning('campaignReferenceIds', $value);
            $this->campaignReferenceIds = $value;
        }
    }
    /**
     *
     * Specifies the function, technology, or flavor within the selected channelCodes, making it easier to identify similar
     * services across channels or services.
     *
     * Available capabilities and their codes:
     *
     * * `PHONE` – Phone
     * * `WEBRTC` – WebRTC
     * * `SIPTRUNK` – SIP Trunks
     * * `VIBER_BC` – Viber Business Calls
     * * `WHATSAPP_BC` – WhatsApp Business Calls
     * * `LINE_OA` – LINE Official Account
     * * `LINE_ON` – LINE Official Notifications
     * * `KAKAO_A` – Kakao Alim
     * * `KAKAO_B` – Kakao Brand Message
     * * `KAKAO_S` – Kakao Sangdam
     * * `ZALO_NS` – Zalo Notification Services
     * * `ZALO_F` – Zalo Follower
     * * `VIBER_BM` – Viber Business Messages
     * * `VIBER_BOTS` – Viber Bots
     * * `MESSENGER` – Messenger
     * * `INSTAGRAM_DM` – Instagram Direct Messaging
     *
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $capabilities {
        set {
            $this->assigning('capabilities', $value);
            $this->capabilities = $value;
        }
    }
    /**
     *
     * Specifies communication channels and/or services. This is a list of available channels/services and their codes:
     *
     * * `SMS` - SMS
     * * `EMAIL` - Email
     * * `FACEBOOK` - Facebook Messenger
     * * `INSTAGRAM` - Instagram Messaging
     * * `KAKAO` - Kakao
     * * `LINE` - Line
     * * `MMS` - MMS
     * * `RCS` - RCS
     * * `TELEGRAM` - Telegram
     * * `VIBER` - Viber
     * * `VOICE_VIDEO` - Voice and Video
     * * `WHATSAPP` - WhatsApp
     * * `ZALO` - Zalo
     * * `APPLE_MB` - Apple Messages for Business
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ChannelCodesCollection $channelCodes {
        set {
            $this->assigning('channelCodes', $value);
            $this->channelCodes = $value;
        }
    }
    /**
     *
     * Specifies the list of communication IDs associated with either a Broadcast or a Moments/Flow campaign.
     *
     * Use communication IDs to filter data related to specific campaigns.
     *
     * For detailed information on the differences between Broadcast and Flow campaigns, refer to the
     * [Broadcast](https://www.infobip.com/docs/broadcast) and [Flow overview](https://www.infobip.com/docs/moments).
     *
     * Example:
     *
     * ```
     * "communicationIds": [12354646546, 45534466546, 754564654689]
     * ```
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\CommunicationIdsCollection $communicationIds {
        set {
            $this->assigning('communicationIds', $value);
            $this->communicationIds = $value;
        }
    }
    /**
     *
     * List of country IDs.
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\CountryIdsCollection $countryIds {
        set {
            $this->assigning('countryIds', $value);
            $this->countryIds = $value;
        }
    }
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
     * A unique identifier assigned to an entity, such as a brand, customer, or other defined component, within the Infobip CPaaS X ecosystem.
     *
     * Use this parameter to filter data for a specific entity.
     *
     * To retrieve all available entity IDs, refer to the
     * [Entity list endpoint](https://www.infobip.com/docs/api/platform/application-entity/get-entities).
     *
     * Example:
     *
     * ```
     * "entityId": "your_entity_id"
     * ```
     *
     *
     * @deprecated
     */
    public string $entityId;
    /**
     *
     * Specifies the error codes.
     *
     * For the list of possible values, refer to
     * [error codes](https://www.infobip.com/docs/essentials/response-status-and-error-codes#general-error-codes).
     *
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $errorCodes {
        set {
            $this->assigning('errorCodes', $value);
            $this->errorCodes = $value;
        }
    }
    /**
     *
     * Specifies the general error code groups.
     *
     * For the list of possible values, refer to
     * [error codes groups](https://www.infobip.com/docs/essentials/response-status-and-error-codes#general-error-codes).
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ErrorGroupsCollection $errorGroups {
        set {
            $this->assigning('errorGroups', $value);
            $this->errorGroups = $value;
        }
    }
    /**
     *
     * Determines whether to include traffic data from sub-accounts (children accounts) along with the specified accounts in
     *  `accountKeys`.
     *
     * If set to true, the traffic data for the specified accounts and their sub-accounts is aggregated.
     *
     * If set to false, only the traffic data for the specified accounts in `accountKeys` is considered.
     *
     * This parameter is optional. If not provided, it defaults to false.
     *
     * Example:
     *
     * ```
     * "includeSubaccounts": true
     * ```
     *
     * Example: true
     */
    public bool $includeSubaccounts;
    /**
     *
     * Specifies the interaction types of traffic. For a full list of values, refer to
     * [interaction types](https://www.infobip.com/docs/reporting/metrics-reference/messaging-metrics-reference#interaction-types).
     *
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $interactionTypes {
        set {
            $this->assigning('interactionTypes', $value);
            $this->interactionTypes = $value;
        }
    }
    /**
     *
     * List of network IDs.
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\CountryIdsCollection $networkIds {
        set {
            $this->assigning('networkIds', $value);
            $this->networkIds = $value;
        }
    }
    /**
     *
     * Specifies the platform object, which is a combination of an applicationId and entityId. These IDs uniquely identify each application and entity configured on the Infobip platform.
     *
     * Use this object and its related parameters to filter data for a specific application and entity combination. Note that these parameters should only be used if you leverage CPaaS X applications and entities to manage your traffic.
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
     * Example:
     *
     * ```
     * "senderTypes": ["ALPHANUMERIC", "SHORT_CODE", "VIRTUAL_LONG_NUMBER", "DOMAIN"]
     * ```
     *
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
     * Example:
     *
     * ```
     * "senders": ["mySender", "12345", "15551234567", "jane.smith&#64;somecompany.com"]
     * ```
     *
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $senders {
        set {
            $this->assigning('senders', $value);
            $this->senders = $value;
        }
    }
    /**
     *
     * The start date-time for filtering sent traffic (inclusive).
     *
     * Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     *
     * Format: date-time
     */
    public string $sentSince;
    /**
     *
     * The end date-time for filtering sent traffic (exclusive).
     *
     * Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     *
     * Format: date-time
     */
    public string $sentUntil;
    /**
     *
     * Specifies the general status code groups.
     *
     * For the list of possible values, refer to
     * [general status codes](https://www.infobip.com/docs/essentials/response-status-and-error-codes#general-error-codes).
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\StatusGroupsCollection $statusGroups {
        set {
            $this->assigning('statusGroups', $value);
            $this->statusGroups = $value;
        }
    }
    /**
     *
     * Specifies the message status reason.
     *
     * For the list of possible values, refer to
     * [message status reasons](https://www.infobip.com/docs/essentials/response-status-and-error-codes).
     *
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $statuses {
        set {
            $this->assigning('statuses', $value);
            $this->statuses = $value;
        }
    }
    /**
     *
     * Represents the time it took for the call to be answered using time buckets.
     *
     * For example, you can filter only for calls answered within a second. The `from` bucket is inclusive, while the `to` bucket is exclusive.
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection $timeToAnswer {
        set {
            $this->assigning('timeToAnswer', $value);
            $this->timeToAnswer = $value;
        }
    }
    /**
     *
     * Represents the time within which a URL is clicked after the message is delivered using time buckets.
     *
     * For example, you can filter only for messages whose URLs were clicked within 1 second after delivery. The `from` bucket
     *  is inclusive, while the `to` bucket is exclusive.
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection $timeToClickFromDelivered {
        set {
            $this->assigning('timeToClickFromDelivered', $value);
            $this->timeToClickFromDelivered = $value;
        }
    }
    /**
     *
     * Represents the time within which a URL is clicked after the message is seen using time buckets.
     *
     * For example, you can filter only messages whose URLs were clicked within 1 second after they were seen. The `from`
     * bucket is inclusive, while the `to` bucket is exclusive.
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection $timeToClickFromSeen {
        set {
            $this->assigning('timeToClickFromSeen', $value);
            $this->timeToClickFromSeen = $value;
        }
    }
    /**
     *
     * Represents the time within which a message is delivered using time buckets.
     *
     * For example, you can filter only for messages delivered within a second. The `from` bucket is inclusive, while the `to` bucket is exclusive.
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection $timeToDeliver {
        set {
            $this->assigning('timeToDeliver', $value);
            $this->timeToDeliver = $value;
        }
    }
    /**
     *
     * Represents the time within which a message is opened after the message is delivered using time buckets.
     *
     * For example, you can filter only for messages opened within 1 second after they were delivered. The `from` bucket is inclusive, while the `to` bucket is exclusive.
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection $timeToOpenFromDelivered {
        set {
            $this->assigning('timeToOpenFromDelivered', $value);
            $this->timeToOpenFromDelivered = $value;
        }
    }
    /**
     *
     * Represents the time within which a message is seen after the message is delivered using time buckets.
     *
     * For example, you can filter only for messages seen within 1 second after they were delivered. The `from` bucket is
     * inclusive, while the `to` bucket is exclusive.
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection $timeToSeenFromDelivered {
        set {
            $this->assigning('timeToSeenFromDelivered', $value);
            $this->timeToSeenFromDelivered = $value;
        }
    }
    /**
     *
     * Specifies the types of traffic. For a full list of values, refer to
     * [traffic types](https://www.infobip.com/docs/reporting/metrics-reference/billing-data-reference#traffic-types-by-channel).
     *
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
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'campaignReferenceIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->campaignReferenceIds = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'capabilities' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->capabilities = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'communicationIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->communicationIds = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\CommunicationIdsCollection($value) : parent::assignMember($name, $value),
            'countryIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->countryIds = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\CountryIdsCollection($value) : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'errorCodes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->errorCodes = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'includeSubaccounts' => is_bool($value) ? $this->includeSubaccounts = $value : parent::assignMember($name, $value),
            'interactionTypes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->interactionTypes = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'networkIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->networkIds = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\CountryIdsCollection($value) : parent::assignMember($name, $value),
            'platforms' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->platforms = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\PlatformsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\Platform::class)) : parent::assignMember($name, $value),
            'senderTypes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->senderTypes = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'senders' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->senders = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'sentSince' => is_string($value) ? $this->sentSince = $value : parent::assignMember($name, $value),
            'sentUntil' => is_string($value) ? $this->sentUntil = $value : parent::assignMember($name, $value),
            'statuses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->statuses = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'timeToAnswer' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->timeToAnswer = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\TimeSpan::class)) : parent::assignMember($name, $value),
            'timeToClickFromDelivered' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->timeToClickFromDelivered = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\TimeSpan::class)) : parent::assignMember($name, $value),
            'timeToClickFromSeen' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->timeToClickFromSeen = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\TimeSpan::class)) : parent::assignMember($name, $value),
            'timeToDeliver' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->timeToDeliver = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\TimeSpan::class)) : parent::assignMember($name, $value),
            'timeToOpenFromDelivered' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->timeToOpenFromDelivered = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\TimeSpan::class)) : parent::assignMember($name, $value),
            'timeToSeenFromDelivered' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->timeToSeenFromDelivered = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter\ToAnswerCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\TimeSpan::class)) : parent::assignMember($name, $value),
            'trafficTypes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->trafficTypes = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
