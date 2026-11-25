<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * ComponentStyle
 */
final class ComponentStyle extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\BlockComponentStyle $body;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\BlockComponentStyle $footer;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\BlockComponentStyle $header;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\BlockComponentStyle $hero;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => $value instanceof \stdClass ? $this->body = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\BlockComponentStyle($value) : parent::assignMember($name, $value),
            'footer' => $value instanceof \stdClass ? $this->footer = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\BlockComponentStyle($value) : parent::assignMember($name, $value),
            'header' => $value instanceof \stdClass ? $this->header = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\BlockComponentStyle($value) : parent::assignMember($name, $value),
            'hero' => $value instanceof \stdClass ? $this->hero = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\BlockComponentStyle($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
