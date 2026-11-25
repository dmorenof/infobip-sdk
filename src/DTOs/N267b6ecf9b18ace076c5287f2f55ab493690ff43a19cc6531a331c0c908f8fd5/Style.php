<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * Style
 *
 * Style of each block of a bubble.
 */
final class Style extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\BlockStyle $body;
    public \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\BlockStyle $footer;
    public \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\BlockStyle $header;
    public \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\BlockStyle $hero;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => $value instanceof \stdClass ? $this->body = new \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\BlockStyle($value) : parent::assignMember($name, $value),
            'footer' => $value instanceof \stdClass ? $this->footer = new \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\BlockStyle($value) : parent::assignMember($name, $value),
            'header' => $value instanceof \stdClass ? $this->header = new \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\BlockStyle($value) : parent::assignMember($name, $value),
            'hero' => $value instanceof \stdClass ? $this->hero = new \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\BlockStyle($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
