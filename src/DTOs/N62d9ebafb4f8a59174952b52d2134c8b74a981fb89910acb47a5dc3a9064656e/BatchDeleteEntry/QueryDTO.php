<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N62d9ebafb4f8a59174952b52d2134c8b74a981fb89910acb47a5dc3a9064656e\BatchDeleteEntry;

final class QueryDTO extends \Dmorenof\SdkRuntime\DTO
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
