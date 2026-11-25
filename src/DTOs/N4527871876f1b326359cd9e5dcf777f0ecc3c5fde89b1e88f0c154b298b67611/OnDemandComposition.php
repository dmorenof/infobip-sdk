<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * OnDemandComposition
 *
 * Composition request.
 */
final class OnDemandComposition extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether to delete individual files for the call recordings after composition. If set to 'true' then files from the call recordings will be deleted after composition. Otherwise, files from the call recordings will be available, alongside with composed file.
     */
    public bool $deleteCallRecordings;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MultiChannel $multiChannel;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deleteCallRecordings' => is_bool($value) ? $this->deleteCallRecordings = $value : parent::assignMember($name, $value),
            'multiChannel' => $value instanceof \stdClass ? $this->multiChannel = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MultiChannel($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
