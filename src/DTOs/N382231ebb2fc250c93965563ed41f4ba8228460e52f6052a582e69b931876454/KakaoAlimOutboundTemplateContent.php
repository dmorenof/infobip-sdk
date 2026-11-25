<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

/**
 * KakaoAlimOutboundTemplateContent
 *
 * Template message content.
 */
final class KakaoAlimOutboundTemplateContent extends \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\KakaoAlimOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'buttons' => [
        'minItems' => 0,
        'maxItems' => 5,
    ],
    'templateCode' => [
        'minLength' => 0,
        'maxLength' => 30,
    ],
    'text' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 50,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * List of buttons attached to the message.
     */
    public \InfobipSDK\Collections\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\KakaoAlimOutboundTemplateContent\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    /**
     * Key associated with a group.
     */
    public string $groupKey;
    /**
     * Template code registered in KakaoTalk channel.
     */
    public string $templateCode {
        set {
            $this->assigning('templateCode', $value);
            $this->templateCode = $value;
        }
    }
    /**
     * Message text content.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
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
            'groupKey' => is_string($value) ? $this->groupKey = $value : parent::assignMember($name, $value),
            'templateCode' => is_string($value) ? $this->templateCode = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
