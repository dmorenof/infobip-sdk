<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * QueryBillingUsageApiRequest
 *
 *
 * Contains filter criteria, aggregation dimensions, and query options for the billing usage report.
 *
 */
final class QueryBillingUsageApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'filterBy',
    ];

    protected const array VALIDATION = [
        'aggregateBy' => [
            'uniqueItems' => true,
        ],
    ];

    /**
     *
     * An array of strings that defines the properties used for data aggregation. Each item in the array represents an
     * aggregation parameter, with a corresponding column in the response showing values for the chosen aggregate.
     *
     * If neither `ACCOUNT_NAME` nor `ACCOUNT_KEY` is specified, `ACCOUNT_NAME` is prepended to the response columns automatically.
     * If neither `CATEGORY_NAME` nor `CATEGORY_CODE` is specified, `CATEGORY_CODE` is prepended to the response columns automatically.
     *
     * Available aggregation dimensions:
     *
     * **Time:**
     * * `DAY` - Day-level aggregation
     * * `MONTH` - Month-level aggregation
     *
     * **CPaaSX Context:**
     * * `APPLICATION_ID` - CPaaSX application identifier
     * * `ENTITY_ID` - CPaaSX entity identifier
     *
     * **Account:**
     * * `ACCOUNT_NAME` - Account display name
     * * `ACCOUNT_KEY` - Account identifier
     * * `USER_NAME` - User who initiated traffic
     *
     * **Service:**
     * * `CATEGORY_NAME` - Channel/service display name
     * * `CATEGORY_CODE` - Channel/service code
     * * `SUBCATEGORY_NAME` - Service variant name
     * * `SUBCATEGORY_CODE` - Service variant code
     * * `DIRECTION` - Inbound/Outbound
     * * `TRAFFIC_TYPE` - Channel-specific classification
     *
     * **Sender:**
     * * `SENDER` - Sender ID/number/domain
     * * `SENDER_TYPE` - VLN, shortcode, alphanumeric
     *
     * **Geography:**
     * * `NETWORK_NAME` - Mobile operator name
     * * `NORM_NET_CODE` - MCC+MNC code
     * * `COUNTRY_NAME` - Destination country
     * * `COUNTRY_CODE` - ISO 3166-1 alpha-2 code
     * * `COUNTRY_PREFIX` - International dialing code
     *
     * **Campaign:**
     * * `CAMPAIGN_ID` - Campaign identifier
     * * `CAMPAIGN_REFERENCE` - External campaign reference
     * * `TEMPLATE_ID` - WhatsApp template ID
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryBillingUsageApiRequest\AggregateByCollection $aggregateBy {
        set {
            $this->assigning('aggregateBy', $value);
            $this->aggregateBy = $value;
        }
    }
    public \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageDataFilter $filterBy;
    public \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageQueryOptions $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'filterBy' => $value instanceof \stdClass ? $this->filterBy = new \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageDataFilter($value) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageQueryOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
