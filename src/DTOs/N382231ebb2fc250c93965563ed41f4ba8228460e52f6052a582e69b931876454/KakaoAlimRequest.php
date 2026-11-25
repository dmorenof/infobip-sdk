<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

/**
 * KakaoAlimRequest
 */
final class KakaoAlimRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'messages',
];

    protected const array VALIDATION = [
    'messages' => [
        'minItems' => 1,
    ],
];

    /**
     * An array of message objects of a single message or multiple messages sent under one bulk ID.
     */
    public \InfobipSDK\Collections\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\KakaoAlimRequest\MessagesCollection $messages {
        set {
            $this->assigning('messages', $value);
            $this->messages = $value;
        }
    }
    public \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\KakaoAlimMessageRequestOptions $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\KakaoAlimRequest\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\KakaoAlimMessage::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\KakaoAlimMessageRequestOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
