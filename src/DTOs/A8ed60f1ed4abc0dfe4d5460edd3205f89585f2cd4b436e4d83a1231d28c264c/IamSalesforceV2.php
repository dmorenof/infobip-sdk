<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A8ed60f1ed4abc0dfe4d5460edd3205f89585f2cd4b436e4d83a1231d28c264c;

/**
 * IamSalesforceV2
 */
final class IamSalesforceV2 extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Salesforce contact id.
     */
    public string $contactId;
    /**
     * Salesforce lead id.
     */
    public string $leadId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contactId' => is_string($value) ? $this->contactId = $value : parent::assignMember($name, $value),
            'leadId' => is_string($value) ? $this->leadId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
