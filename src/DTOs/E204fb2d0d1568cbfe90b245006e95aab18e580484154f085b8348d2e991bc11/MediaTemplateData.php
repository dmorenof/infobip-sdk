<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * MediaTemplateData
 *
 * Media template definitions
 */
final class MediaTemplateData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'buttons',
];

    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\MediaTemplateBodyContent $body;
    /**
     * Media template buttons
     */
    public \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\MediaTemplateData\ButtonsCollection $buttons;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\MediaTemplateHeaderContent $header;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => $value instanceof \stdClass ? $this->body = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\MediaTemplateBodyContent($value) : parent::assignMember($name, $value),
            'buttons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->buttons = new \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\MediaTemplateData\ButtonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\MediaTemplateButtonContent::class)) : parent::assignMember($name, $value),
            'header' => $value instanceof \stdClass ? $this->header = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\MediaTemplateHeaderContent($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
