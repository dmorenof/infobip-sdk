<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0;

/**
 * EmailTemplate
 */
final class EmailTemplate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'html',
        'id',
        'isHtmlEditable',
    ];

    /**
     * List of attachments.
     * Example: [{"id":"7BE07D39-C7DA-4ED4-9F45-33BDB8643AA1","contentType":"application/pdf","filename":"attachment.pdf","size":1024,"url":"/email/1/templates/1000000000000000001/attachments/7BE07D39-C7DA-4ED4-9F45-33BDB8643AA1/download"}]
     */
    public \InfobipSDK\Collections\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate\AttachmentsCollection $attachments;
    /**
     * Date and time when the email template was created. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Email address with optional sender name.
     * Example: "John Doe <john.doe&#64;example.com"
     */
    public string $from;
    /**
     * HTML content of the email template.
     * Example: "<html><head></head><body><h2>Welcome to Infobip</h2></body></html>"
     */
    public string $html;
    /**
     * Unique identifier of the email template.
     * Example: 1000000000000000001
     * Format: int64
     */
    public int $id;
    /**
     * URL of the image preview.
     * Example: "/email/1/templates/1000000000000000001/preview.png"
     */
    public string $imagePreviewUrl;
    /**
     * Flag indicating if the HTML content is editable.
     * Example: true
     */
    public bool $isHtmlEditable;
    /**
     * Unique identifier of the landing page.
     * Example: "1_2345"
     */
    public string $landingPageId;
    /**
     * Name of the email template.
     * Example: "Welcome email"
     */
    public string $name;
    /**
     * Preheader of the email template.
     * Example: "Welcome to Infobip"
     */
    public string $preheader;
    /**
     * Email address to which recipients of the email can reply.
     * Example: "support&#64;example.com"
     */
    public string $replyTo;
    /**
     * Subject of the email template.
     * Example: "Welcome to Infobip"
     */
    public string $subject;
    /**
     * Date and time when the email template was last updated. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attachments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->attachments = new \InfobipSDK\Collections\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplate\AttachmentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\Attachment::class)) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'html' => is_string($value) ? $this->html = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'imagePreviewUrl' => is_string($value) ? $this->imagePreviewUrl = $value : parent::assignMember($name, $value),
            'isHtmlEditable' => is_bool($value) ? $this->isHtmlEditable = $value : parent::assignMember($name, $value),
            'landingPageId' => is_string($value) ? $this->landingPageId = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'preheader' => is_string($value) ? $this->preheader = $value : parent::assignMember($name, $value),
            'replyTo' => is_string($value) ? $this->replyTo = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
