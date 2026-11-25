<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be917819c3f3f7072f44fe3d7909e7b833fe4857710e7f5ab585df108ef1ed5b;

/**
 * ApplicationTransferPropagationOptions
 *
 * Options that should be propagated while transferring the call.
 */
final class ApplicationTransferPropagationOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\Be917819c3f3f7072f44fe3d7909e7b833fe4857710e7f5ab585df108ef1ed5b\RecordingTransferOptions $recordingTransferOptions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recordingTransferOptions' => $value instanceof \stdClass ? $this->recordingTransferOptions = new \InfobipSDK\DTOs\Be917819c3f3f7072f44fe3d7909e7b833fe4857710e7f5ab585df108ef1ed5b\RecordingTransferOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
