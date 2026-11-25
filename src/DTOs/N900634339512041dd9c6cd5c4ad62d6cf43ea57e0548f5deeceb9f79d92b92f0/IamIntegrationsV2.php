<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * IamIntegrationsV2
 *
 * Integrations.
 */
final class IamIntegrationsV2 extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\IamSalesforceV2 $salesforce;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'salesforce' => $value instanceof \stdClass ? $this->salesforce = new \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\IamSalesforceV2($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
