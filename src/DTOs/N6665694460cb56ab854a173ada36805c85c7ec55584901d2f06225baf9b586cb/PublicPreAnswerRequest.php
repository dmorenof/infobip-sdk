<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6665694460cb56ab854a173ada36805c85c7ec55584901d2f06225baf9b586cb;

/**
 * PublicPreAnswerRequest
 */
final class PublicPreAnswerRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Optional parameter to update a call's custom data.
     */
    public \InfobipSDK\DTOs\N6665694460cb56ab854a173ada36805c85c7ec55584901d2f06225baf9b586cb\PublicPreAnswerRequest\CustomDataMap $customData;
    /**
     * Indicates whether to play a ringing sound on the call after pre-answering it.
     */
    public bool $ringing;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ringing' => is_bool($value) ? $this->ringing = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
