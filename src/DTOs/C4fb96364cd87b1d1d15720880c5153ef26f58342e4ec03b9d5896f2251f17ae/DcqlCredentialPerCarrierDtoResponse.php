<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * DcqlCredentialPerCarrierDtoResponse
 *
 * DCQL credential object per carrier.
 */
final class DcqlCredentialPerCarrierDtoResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Array of claim objects containing the optional hint used by Android to suggest the right SIM in dual-SIM devices.
     */
    public \InfobipSDK\Collections\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\DcqlCredentialPerCarrierDtoResponse\ClaimsCollection $claims;
    /**
     * Fixed value for the DCQL credential: `dc-authorization+sd-jwt`.
     * Example: "dc-authorization+sd-jwt"
     */
    public string $format;
    /**
     * Aggregator ID.
     * Example: "miapi.infobip.com"
     */
    public string $id;
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\Meta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'claims' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->claims = new \InfobipSDK\Collections\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\DcqlCredentialPerCarrierDtoResponse\ClaimsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\Claim::class)) : parent::assignMember($name, $value),
            'format' => is_string($value) ? $this->format = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\Meta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
