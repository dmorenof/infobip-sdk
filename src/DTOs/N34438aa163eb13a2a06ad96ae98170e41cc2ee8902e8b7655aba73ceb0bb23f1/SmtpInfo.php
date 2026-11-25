<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * SmtpInfo
 *
 * SMTP details for the sent email.
 */
final class SmtpInfo extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * SMTP server response for the sent email.
     */
    public string $response;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'response' => is_string($value) ? $this->response = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
