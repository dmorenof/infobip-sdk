<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * UrlContent
 *
 * Array of urls information.
 */
final class UrlContent extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\UrlType $type;
    /**
     * Contact's url.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\UrlType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
