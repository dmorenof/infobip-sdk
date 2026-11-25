<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * ActionResult
 *
 * Action results from the Things scenario, when provided.
 */
final class ActionResult extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Action result data.
     */
    public string $data;
    /**
     * Action result type.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
