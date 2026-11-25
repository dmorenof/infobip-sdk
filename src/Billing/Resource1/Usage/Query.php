<?php

declare(strict_types=1);

namespace InfobipSDK\Billing\Resource1\Usage;

final class Query extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /billing/1/usage/query [operationId: query-billing-usage] */
    /**
     * Query billing usage data
     *
     * Start the process of aggregating billing-grade financial cost data for your Infobip traffic. The results are delivered once via POST to the `callbackURL` provided in the request. Make sure the URL is reachable before submitting. See [Receive billing usage result](#platform/billing-usage-api/receive-billing-usage-result) for the webhook payload structure.
     */
    public static function post(\InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryBillingUsageRequest $payload): \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Billing\Resource1\Usage\Query::class)->post($payload);
    }

}
