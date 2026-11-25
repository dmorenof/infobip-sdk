<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineQuickReplyItem
 *
 * Quick reply items shown below the message.
 */
final class LineQuickReplyItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'action',
];

    protected const array VALIDATION = [
    'imageUrl' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
];

    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineQuickReplyAction $action;
    /**
     * URL of an image displayed on the quick reply button. Must be HTTPS.
     * Example: "https://example.com/quick-reply.png"
     */
    public string $imageUrl {
        set {
            $this->assigning('imageUrl', $value);
            $this->imageUrl = $value;
        }
    }
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineQuickReplyItemType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => $value instanceof \stdClass ? $this->action = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineQuickReplyAction($value) : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineQuickReplyItemType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
