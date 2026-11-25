<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * NcNotifyRequest
 */
final class NcNotifyRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'to',
];

    protected const array VALIDATION = [
    'to' => [
        'minItems' => 1,
    ],
];

    /**
     * Preferred lookup report content type. Can be `application/json` or `application/xml`.
     */
    public string $notifyContentType;
    /**
     * The URL on your call back server on which the lookup report will be sent.
     */
    public string $notifyUrl;
    /**
     * Array of phone numbers to look up. Numbers must be in international format (Example: `41793026727`). Numbers longer than 256 characters in the request will be clipped during processing. The clipped numbers will be included in the response, reports, and logs.
     */
    public \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'notifyContentType' => is_string($value) ? $this->notifyContentType = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'to' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->to = new \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
