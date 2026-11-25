<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * Meta
 */
final class Meta extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * JWT token for credential authorization signed by Infobip.
     * Example: "eyJhbGciOiJIUzI1NiI..."
     */
    public string $credential_authorization_jwt;
    /**
     * Array containing the Google-defined TS.43 credential type identifier that corresponds to the CAMARA scope from the request
     */
    public \InfobipSDK\Collections\StringCollection $vct_values;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'credential_authorization_jwt' => is_string($value) ? $this->credential_authorization_jwt = $value : parent::assignMember($name, $value),
            'vct_values' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->vct_values = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
