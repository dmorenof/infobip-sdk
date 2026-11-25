<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * SipHeader
 *
 * SIP headers. To meet the criteria, all of the provided headers must match.
 */
final class SipHeader extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'headerName',
];

    protected const array VALIDATION = [
    'headerName' => [
        'minLength' => 1,
        'pattern' => '^X-.*$',
    ],
];

    /**
     * SIP header name starting with `X-`. Example: `X-Identity`.
     */
    public string $headerName {
        set {
            $this->assigning('headerName', $value);
            $this->headerName = $value;
        }
    }
    /**
     * SIP header value or regular expression pattern representing the value. Examples: `john.doe`, `john(.+)`.
     */
    public string $headerValue;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'headerName' => is_string($value) ? $this->headerName = $value : parent::assignMember($name, $value),
            'headerValue' => is_string($value) ? $this->headerValue = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
