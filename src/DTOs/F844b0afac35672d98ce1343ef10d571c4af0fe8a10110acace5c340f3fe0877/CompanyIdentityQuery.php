<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F844b0afac35672d98ce1343ef10d571c4af0fe8a10110acace5c340f3fe0877;

/**
 * CompanyIdentityQuery
 */
final class CompanyIdentityQuery extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Company domain
     */
    public string $domain;
    /**
     * Company external ID
     */
    public string $externalId;
    /**
     * Company ID
     */
    public string $id;
    /**
     * Company name
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
