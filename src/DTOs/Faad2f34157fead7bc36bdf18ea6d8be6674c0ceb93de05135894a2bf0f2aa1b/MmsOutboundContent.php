<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * MmsOutboundContent
 *
 * Message content.
 */
final class MmsOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'messageSegments',
];

    protected const array VALIDATION = [
    'messageSegments' => [
        'minItems' => 1,
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 66,
    ],
];

    /**
     * Content of the message being sent.
     */
    public \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsOutboundContent\MessageSegmentsCollection $messageSegments {
        set {
            $this->assigning('messageSegments', $value);
            $this->messageSegments = $value;
        }
    }
    /**
     * Message title.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
