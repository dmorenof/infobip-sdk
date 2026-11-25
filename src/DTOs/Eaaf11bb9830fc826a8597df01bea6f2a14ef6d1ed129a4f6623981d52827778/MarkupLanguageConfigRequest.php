<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778;

/**
 * MarkupLanguageConfigRequest
 *
 * Markup language configuration request object.
 */
final class MarkupLanguageConfigRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'httpMethod',
    'markupUrl',
    'name',
];

    protected const array VALIDATION = [
    'httpMethod' => [
        'minLength' => 0,
        'maxLength' => 10,
    ],
    'markupUrl' => [
        'minLength' => 1,
    ],
    'name' => [
        'minLength' => 1,
    ],
];

    /**
     * URL where error notifications will be sent.
     */
    public string $errorUrl;
    /**
     * HTTP method for callbacks (e.g., POST, GET).
     */
    public string $httpMethod {
        set {
            $this->assigning('httpMethod', $value);
            $this->httpMethod = $value;
        }
    }
    /**
     * URL where markup script is hosted.
     */
    public string $markupUrl {
        set {
            $this->assigning('markupUrl', $value);
            $this->markupUrl = $value;
        }
    }
    /**
     * Configuration name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * URL where notifications will be sent.
     */
    public string $notifyUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errorUrl' => is_string($value) ? $this->errorUrl = $value : parent::assignMember($name, $value),
            'httpMethod' => is_string($value) ? $this->httpMethod = $value : parent::assignMember($name, $value),
            'markupUrl' => is_string($value) ? $this->markupUrl = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
