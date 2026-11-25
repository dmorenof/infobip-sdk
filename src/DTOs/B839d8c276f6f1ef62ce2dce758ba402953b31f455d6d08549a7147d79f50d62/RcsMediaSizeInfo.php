<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsMediaSizeInfo
 *
 * Media information associated with the file message.
 */
final class RcsMediaSizeInfo extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Total compressed size of all media assets in bytes. Compression is done by the provider.
     * Format: int64
     */
    public int $compressedSize;
    /**
     * Total size of all media assets in bytes.
     * Format: int64
     */
    public int $totalSize;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'compressedSize' => is_int($value) ? $this->compressedSize = $value : parent::assignMember($name, $value),
            'totalSize' => is_int($value) ? $this->totalSize = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
