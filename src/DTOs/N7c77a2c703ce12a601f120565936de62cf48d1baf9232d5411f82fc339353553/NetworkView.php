<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * NetworkView
 *
 * Network data.
 */
final class NetworkView extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Norm net code uniquely identifying the specific mobile network operator.
     * Example: "310260"
     */
    public string $mccNnc;
    /**
     * Network name.
     * Example: "Some network"
     */
    public string $networkName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mccNnc' => is_string($value) ? $this->mccNnc = $value : parent::assignMember($name, $value),
            'networkName' => is_string($value) ? $this->networkName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
