<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * EmailGroupDestination
 *
 * An array of destination objects for where messages are being sent. A valid destination is required.
 *
 *  Note: Maximum number of recipients is 1000 overall including `to`, `cc` and `bcc` field.
 */
final class EmailGroupDestination extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'to',
];

    /**
     * List of BCC recipient email addresses.
     */
    public \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailGroupDestination\BccCollection $bcc;
    /**
     * List of CC recipient email addresses.
     */
    public \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailGroupDestination\BccCollection $cc;
    /**
     * When this option is set to `true`, all recipients in the `to` field will be able to see the entire list of
     * recipients who received the email, and the response will include a single `messageId`.
     * If the option is set to `false` , each recipient will only see their own email address, and the response will provide a unique `messageId`
     * for each individual recipient.
     */
    public bool $preserveRecipients;
    /**
     * Email address to which recipients of the email can reply.
     */
    public string $replyTo;
    /**
     * List of TO recipient email addresses.
     */
    public \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailGroupDestination\BccCollection $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bcc' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->bcc = new \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailGroupDestination\BccCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailToDestination::class)) : parent::assignMember($name, $value),
            'cc' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->cc = new \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailGroupDestination\BccCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailToDestination::class)) : parent::assignMember($name, $value),
            'preserveRecipients' => is_bool($value) ? $this->preserveRecipients = $value : parent::assignMember($name, $value),
            'replyTo' => is_string($value) ? $this->replyTo = $value : parent::assignMember($name, $value),
            'to' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->to = new \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailGroupDestination\BccCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailToDestination::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
