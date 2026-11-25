<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * IamSalesforceV2
 *
 * Salesforce integration.
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
