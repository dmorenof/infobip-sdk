<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * WebsocketEndpointConfigResponse
 */
final class WebsocketEndpointConfigResponse extends \InfobipSDK\DTOs\N655eaf80f7479f4a18447865649b33bdb754aaa97779726ffb72592cb1ac3ce5\MediaStreamConfigResponse
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Audio sampling rate.
     */
    public string $sampleRate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sampleRate' => is_string($value) ? $this->sampleRate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
