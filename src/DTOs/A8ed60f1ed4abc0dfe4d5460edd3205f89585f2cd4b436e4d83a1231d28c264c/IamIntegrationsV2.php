<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A8ed60f1ed4abc0dfe4d5460edd3205f89585f2cd4b436e4d83a1231d28c264c;

/**
 * IamIntegrationsV2
 */
final class IamIntegrationsV2 extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Salesforce integration.
     */
    public \InfobipSDK\DTOs\A8ed60f1ed4abc0dfe4d5460edd3205f89585f2cd4b436e4d83a1231d28c264c\IamSalesforceV2 $salesforce;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'salesforce' => $value instanceof \stdClass ? $this->salesforce = new \InfobipSDK\DTOs\A8ed60f1ed4abc0dfe4d5460edd3205f89585f2cd4b436e4d83a1231d28c264c\IamSalesforceV2($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
