<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * GetVoicesResponse
 */
final class GetVoicesResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Array of voices belonging to the specified language.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\GetVoicesResponse\VoicesCollection $voices;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'voices' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->voices = new \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\GetVoicesResponse\VoicesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SynthesisVoiceResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
