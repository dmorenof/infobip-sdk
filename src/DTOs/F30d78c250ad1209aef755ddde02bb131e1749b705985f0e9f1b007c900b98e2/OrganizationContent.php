<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * OrganizationContent
 *
 * Contains information about contact's company.
 */
final class OrganizationContent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Company name.
     */
    public string $company;
    /**
     * Department name.
     */
    public string $department;
    /**
     * Title value.
     */
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'company' => is_string($value) ? $this->company = $value : parent::assignMember($name, $value),
            'department' => is_string($value) ? $this->department = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
