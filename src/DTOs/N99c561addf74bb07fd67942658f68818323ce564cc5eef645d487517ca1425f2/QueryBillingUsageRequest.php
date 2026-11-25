<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * QueryBillingUsageRequest
 */
final class QueryBillingUsageRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'callbackUrl',
        'request',
    ];

    /**
     *
     * Target URL to receive the query processing results. For schema details, see:
     * [Receive billing usage result](#platform/billing-usage-api/receive-billing-usage-result).
     *
     */
    public string $callbackUrl;
    public \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryBillingUsageApiRequest $request;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackUrl' => is_string($value) ? $this->callbackUrl = $value : parent::assignMember($name, $value),
            'request' => $value instanceof \stdClass ? $this->request = new \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryBillingUsageApiRequest($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
