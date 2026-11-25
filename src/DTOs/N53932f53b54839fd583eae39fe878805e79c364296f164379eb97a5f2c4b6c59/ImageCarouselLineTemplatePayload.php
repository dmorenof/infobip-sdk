<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * ImageCarouselLineTemplatePayload
 */
final class ImageCarouselLineTemplatePayload extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineTemplatePayload
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'columns' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Image carousel columns.
     */
    public \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ImageCarouselLineTemplatePayload\ColumnsCollection $columns {
        set {
            $this->assigning('columns', $value);
            $this->columns = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'columns' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->columns = new \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ImageCarouselLineTemplatePayload\ColumnsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ImageCarouselColumn::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
