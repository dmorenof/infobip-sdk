<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6;

/**
 * WebhookPayload
 */
final class WebhookPayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'attachment',
        'attachmentInfo',
        'dkimCheck',
        'envelope',
        'from',
        'html',
        'id',
        'senderIp',
        'spfCheck',
        'subject',
        'text',
        'to',
    ];

    protected const array VALIDATION = [
        'attachment' => [
            'minItems' => 0,
            'maxItems' => 999,
        ],
    ];

    /**
     * Attachments are received as variables named attachment1, attachment2, attachment3, etc. Each variable contains one part of the attachment in a byte array. The variable names are based on the “attachmentInfo” part of the inbound email.
     */
    public \InfobipSDK\Collections\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\WebhookPayload\AttachmentCollection $attachment {
        set {
            $this->assigning('attachment', $value);
            $this->attachment = $value;
        }
    }
    /**
     * Information about any attachments of the inbound email.
     */
    public \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\WebhookPayload\AttachmentInfoDTO $attachmentInfo;
    public \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\DKIMCheck $dkimCheck;
    public \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\Envelope $envelope;
    /**
     * The sender name and sender address from which the inbound email was sent.
     */
    public string $from;
    /**
     * The MIME html content of the inbound email.
     */
    public string $html;
    /**
     * The ID that uniquely identifies the inbound email.
     */
    public string $id;
    /**
     * The IP address from which the inbound email was sent.
     */
    public string $senderIp;
    /**
     * The result of a check of the SPF authentication record of the inbound email.
     */
    public string $spfCheck;
    /**
     * The subject of the inbound email.
     */
    public string $subject;
    /**
     * The MIME text content of the inbound email.
     */
    public string $text;
    /**
     * The reply-to address to which the inbound email was sent.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dkimCheck' => $value instanceof \stdClass ? $this->dkimCheck = new \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\DKIMCheck($value) : parent::assignMember($name, $value),
            'envelope' => $value instanceof \stdClass ? $this->envelope = new \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\Envelope($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'html' => is_string($value) ? $this->html = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'senderIp' => is_string($value) ? $this->senderIp = $value : parent::assignMember($name, $value),
            'spfCheck' => is_string($value) ? $this->spfCheck = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
