<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * EmailMessageContent
 *
 * Message content.
 */
final class EmailMessageContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'subject' => [
            'minLength' => 1,
            'maxLength' => 1000,
        ],
    ];

    /**
     * The message's body in AMP HTML format. If you include `ampHtml`, you must also include `html`, which will be displayed if AMP is not supported. Keep in mind that not all email clients support AMP HTML. For guidance on configuring the Gmail client, please visit this link: https://developers.google.com/gmail/ampemail/ .
     */
    public string $ampHtml;
    /**
     * File attachments.
     */
    public \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailMessageContent\AttachmentsCollection $attachments;
    /**
     * General placeholders: `{"ph1": "Success"}` will replace the key `{{ph1}}` with the value Success throughout the email, including the `subject`, `text`, and HTML. If there are multiple recipients in the To field, this placeholder will use the same value for the key ph1 for all recipients.
     */
    public string $defaultPlaceholders;
    /**
     * Additional email headers for customization that can be provided in a form of JSON. Example: `headers={"X-CustomHeader": "Header value"}`.
     *
     * There are a few exceptions of headers which are not adjustable through this option: `To`, `Cc`, `Bcc`, `Subject`, `Content-Type`, `DKIM-Signature`, `Content-Transfer-Encoding`, `Return-Path`, `MIME-Version`
     */
    public string $headers;
    /**
     * The message's body in HTML format. If both `html` and `text` fields are included, the `text` field will be disregarded, and the message will be sent using the `html` content.
     */
    public string $html;
    /**
     * Allows for inserting an image file inside the HTML code of the email by using `cid:FILENAME` instead of providing an external link to the image.
     */
    public \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailMessageContent\ImagesCollection $inlineImages;
    /**
     * Personalize Opt-Out Landing Page by inserting placeholders. Insert placeholder or tag while designing landing page. Value should be defined as: `{"unsubscribe": "Unsubscribe"}`
     */
    public string $landingPagePlaceholders;
    /**
     * The Opt-Out Landing Page ID specifies the page to be displayed when an end user clicks the unsubscribe link. If the ID is not provided, the default opt-out landing page will be used. Create a landing page over Infobip web interface and use its ID, for example, `1_23456.`
     */
    public string $optoutLandingPageId;
    /**
     * Message subject.
     *
     * Note: This field is required if `templateId` is not present.
     */
    public string $subject {
        set {
            $this->assigning('subject', $value);
            $this->subject = $value;
        }
    }
    /**
     * The Template ID with predefined email content created through the Infobip web interface or API. When `templateId` is specified, the `html` and `text` fields will be disregarded.
     *
     * Note: `templateId` only supports the `Broadcast` value; `Content` and `Flow` templates are not supported.
     */
    public string $templateId;
    /**
     * Indicates the version of the template language to be used in the current message template. Use version 1 for the older template language and version 2 to access features of the new template language. If not specified, version 1 will be used by default.
     */
    public string $templateLanguageVersion;
    /**
     * Body of the message.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ampHtml' => is_string($value) ? $this->ampHtml = $value : parent::assignMember($name, $value),
            'attachments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->attachments = new \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailMessageContent\AttachmentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailMediaAttachment::class)) : parent::assignMember($name, $value),
            'defaultPlaceholders' => is_string($value) ? $this->defaultPlaceholders = $value : parent::assignMember($name, $value),
            'headers' => is_string($value) ? $this->headers = $value : parent::assignMember($name, $value),
            'html' => is_string($value) ? $this->html = $value : parent::assignMember($name, $value),
            'landingPagePlaceholders' => is_string($value) ? $this->landingPagePlaceholders = $value : parent::assignMember($name, $value),
            'optoutLandingPageId' => is_string($value) ? $this->optoutLandingPageId = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'templateId' => is_string($value) ? $this->templateId = $value : parent::assignMember($name, $value),
            'templateLanguageVersion' => is_string($value) ? $this->templateLanguageVersion = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
