<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * DialogCreatedProperties
 *
 * Properties of the event that provide created `Dialog` object.
 */
final class DialogCreatedProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Base URL of API which you should invoke for all actions related to the dialog.
     */
    public string $apiBaseUrl;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Dialog $dialog;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiBaseUrl' => is_string($value) ? $this->apiBaseUrl = $value : parent::assignMember($name, $value),
            'dialog' => $value instanceof \stdClass ? $this->dialog = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Dialog($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
