<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * WebFormSubmissionApiRequest
 * Example: {"from":"from.testmail&#64;email.test","subject":"Test Subject","cc":["cc1&#64;email.test","cc2&#64;email.test"],"content":"Example text file.","attachmentIds":["dd68c1ec-1997-4e90-add6-b36dfd2b80a3"]}
 */
final class WebFormSubmissionApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
        'from',
    ];

    protected const array VALIDATION = [
        'content' => [
            'minLength' => 1,
        ],
        'from' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Web form submission attachment Ids.
     */
    public \InfobipSDK\Collections\StringCollection $attachmentIds;
    /**
     * List of web form submission carbon copy recipients.
     */
    public \InfobipSDK\Collections\StringCollection $cc;
    /**
     * Web form submission body content.
     */
    public string $content {
        set {
            $this->assigning('content', $value);
            $this->content = $value;
        }
    }
    /**
     * Sender of the submission.
     */
    public string $from {
        set {
            $this->assigning('from', $value);
            $this->from = $value;
        }
    }
    /**
     * Submission subject.
     */
    public string $subject;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attachmentIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->attachmentIds = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'cc' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->cc = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
