<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * Organization
 *
 * Organization information.
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
     * Description name.
     */
    public string $department;
    /**
     * Title.
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
