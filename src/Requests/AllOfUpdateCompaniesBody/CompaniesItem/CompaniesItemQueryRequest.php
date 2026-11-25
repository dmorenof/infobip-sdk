<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfUpdateCompaniesBody\CompaniesItem;

final class CompaniesItemQueryRequest extends \Dmorenof\SdkRuntime\DTO
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
