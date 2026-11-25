<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * DcqlUseCaseRequestDto
 */
final class DcqlUseCaseRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'carrierIds',
        'nonce',
    ];

    /**
     * Array of Android canonical carrier IDs.
     * Example: [123,456]
     */
    public \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonText\PaddingsCollection $carrierIds;
    /**
     * A single-use, client generated value. The client keeps it and uses it to correlate the eventual response. Infobip embeds this same value in the credential_authorization_jwt payload.
     *
     * Example: "2307e608-e619-4df5-a460-a99b4446f3f0"
     */
    public string $nonce;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'carrierIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->carrierIds = new \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonText\PaddingsCollection($value) : parent::assignMember($name, $value),
            'nonce' => is_string($value) ? $this->nonce = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
