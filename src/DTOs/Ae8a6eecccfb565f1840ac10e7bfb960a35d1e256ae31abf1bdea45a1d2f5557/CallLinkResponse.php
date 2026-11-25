<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557;

/**
 * CallLinkResponse
 */
final class CallLinkResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Identifier of the created call link. To open a call link, an ID will be concatenated to the URL: https://call-link.com/.
     */
    public string $id;
    /**
     * A URL to initiate the call.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
