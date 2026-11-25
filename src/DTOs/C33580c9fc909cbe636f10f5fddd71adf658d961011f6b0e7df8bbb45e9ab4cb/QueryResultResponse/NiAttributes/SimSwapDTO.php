<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C33580c9fc909cbe636f10f5fddd71adf658d961011f6b0e7df8bbb45e9ab4cb\QueryResultResponse\NiAttributes;

/**
 * Object representing SIM swap occurrence.
 */
final class SimSwapDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4503c9be2d8553d1e8648e283b9ba9017ae14f51177b500d7b5df7dc4842e4d2\ErrorInfoResponse $error;
    /**
     * Addition time information about SIM swap occurrence.
     */
    public \InfobipSDK\DTOs\C33580c9fc909cbe636f10f5fddd71adf658d961011f6b0e7df8bbb45e9ab4cb\QueryResultResponse\NiAttributes\SimSwap\NetworkInfoDTO $networkInfo;
    /**
     * Information if SIM swap has occurred or not.
     */
    public bool $simSwapOccurred;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N4503c9be2d8553d1e8648e283b9ba9017ae14f51177b500d7b5df7dc4842e4d2\ErrorInfoResponse($value) : parent::assignMember($name, $value),
            'simSwapOccurred' => is_bool($value) ? $this->simSwapOccurred = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
