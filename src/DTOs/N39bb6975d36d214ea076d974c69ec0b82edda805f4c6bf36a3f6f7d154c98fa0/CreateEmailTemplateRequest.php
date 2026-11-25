<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0;

/**
 * CreateEmailTemplateRequest
 */
final class CreateEmailTemplateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'html',
];

    protected const array VALIDATION = [
    'html' => [
        'minLength' => 1,
    ],
    'preheader' => [
        'minLength' => 0,
        'maxLength' => 75,
    ],
    'subject' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
];

    /**
     * JSON string of attachments to be sent with the email template.
     * Example: "[{\"contentType\":\"application/pdf\",\"fileName\":\"attachment.pdf\",\"data\":\"base64encodeddata\"}]"
     */
    public string $attachments;
    /**
     * Email address with optional sender name.
     * Example: "Infobip <noreply&#64;example.com>"
     */
    public string $from;
    /**
     * HTML content of the email template.
     * Example: "<html><head></head><body><h2>Welcome to Infobip</h2></body></html>"
     */
    public string $html {
        set {
            $this->assigning('html', $value);
            $this->html = $value;
        }
    }
    /**
     * The identifier of an opt out landing late to be used and displayed when an end user clicks the unsubscribe link. Create a landing page in your Infobip account and use the ID number. For example, 1_23456. If not present, the default opt out landing page is used.
     * Example: "1_2345"
     */
    public string $landingPage;
    /**
     * Name of the email template.
     * Example: "Welcome email"
     */
    public string $name;
    /**
     * Preheader of the email template.
     * Example: "Welcome to Infobip"
     */
    public string $preheader {
        set {
            $this->assigning('preheader', $value);
            $this->preheader = $value;
        }
    }
    /**
     * Email address to which recipients of the email can reply.
     * Example: "support&#64;example.com"
     * Format: email
     */
    public string $replyTo;
    /**
     * Subject of the email template.
     * Example: "Welcome to Infobip"
     */
    public string $subject {
        set {
            $this->assigning('subject', $value);
            $this->subject = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attachments' => is_string($value) ? $this->attachments = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'html' => is_string($value) ? $this->html = $value : parent::assignMember($name, $value),
            'landingPage' => is_string($value) ? $this->landingPage = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'preheader' => is_string($value) ? $this->preheader = $value : parent::assignMember($name, $value),
            'replyTo' => is_string($value) ? $this->replyTo = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
