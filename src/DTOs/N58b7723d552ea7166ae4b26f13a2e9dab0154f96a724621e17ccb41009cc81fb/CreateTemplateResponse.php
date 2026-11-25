<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * CreateTemplateResponse
 */
final class CreateTemplateResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'templateCode',
];

    /**
     * Template code registered in system.
     */
    public string $templateCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'templateCode' => is_string($value) ? $this->templateCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
