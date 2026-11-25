<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd;

/**
 * DialogPropagationOptions
 */
final class DialogPropagationOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Flag indicating if the parent call should be terminated when the child call ends.
     */
    public bool $childCallHangup;
    /**
     * Flag indicating if a child call's ringing should be propagated to the parent call. The parent call must be `INBOUND`. Cannot be `true` when `ringbackGeneration` is enabled.
     */
    public bool $childCallRinging;
    public \InfobipSDK\DTOs\F9f4d06aa76c139ea87428e14c99b11f79a0ab9b330e26afc80d0c5a5ff1acbb\RingbackGeneration $ringbackGeneration;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'childCallHangup' => is_bool($value) ? $this->childCallHangup = $value : parent::assignMember($name, $value),
            'childCallRinging' => is_bool($value) ? $this->childCallRinging = $value : parent::assignMember($name, $value),
            'ringbackGeneration' => $value instanceof \stdClass ? $this->ringbackGeneration = new \InfobipSDK\DTOs\F9f4d06aa76c139ea87428e14c99b11f79a0ab9b330e26afc80d0c5a5ff1acbb\RingbackGeneration($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
