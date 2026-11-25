<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be917819c3f3f7072f44fe3d7909e7b833fe4857710e7f5ab585df108ef1ed5b;

/**
 * RecordingTransferOptions
 *
 * Options that control how call recording should behave after the application transfer.
 */
final class RecordingTransferOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Continue recording on the transferred call.
     */
    public bool $continueCallRecording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'continueCallRecording' => is_bool($value) ? $this->continueCallRecording = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
