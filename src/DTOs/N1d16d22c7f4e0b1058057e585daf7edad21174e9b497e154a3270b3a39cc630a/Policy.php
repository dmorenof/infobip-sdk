<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * Policy
 *
 * [Conversation SLA policy](https://www.infobip.com/docs/conversations/conversations-setup#service-level-agreement-sla) data.
 */
final class Policy extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * SLA policy ID. UUID v4.
     * Example: "policy-uuid-id"
     */
    public string $policyId;
    /**
     * SLA policy name.
     * Example: "Standard SLA Policy"
     */
    public string $policyName;
    /**
     * Severity ID. UUID v4.
     * Example: "severity-uuid-id"
     */
    public string $severityId;
    /**
     * Severity name.
     * Example: "High Priority"
     */
    public string $severityName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'policyId' => is_string($value) ? $this->policyId = $value : parent::assignMember($name, $value),
            'policyName' => is_string($value) ? $this->policyName = $value : parent::assignMember($name, $value),
            'severityId' => is_string($value) ? $this->severityId = $value : parent::assignMember($name, $value),
            'severityName' => is_string($value) ? $this->severityName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
