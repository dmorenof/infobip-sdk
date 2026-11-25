<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * Organization
 *
 * Company information.
 */
final class Organization extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'company',
    'department',
    'title',
];

    /**
     * Company name.
     */
    public string $company;
    /**
     * Department name.
     */
    public string $department;
    /**
     * Title value
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
