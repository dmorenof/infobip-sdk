<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * KeywordOptIn
 *
 * The type of opt in that requires a user to type in a keyword.
 */
final class KeywordOptIn extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'callToAction' => [
            'minLength' => 20,
            'maxLength' => 1024,
        ],
    ];

    /**
     *     The message sent to the user to tell them how to subscribe. Must include:
     *     • Product description
     *     • Message frequency disclosure
     *     • Complete terms and conditions OR link to complete terms and conditions
     *     • Privacy policy OR link to privacy policy
     *     • STOP keyword
     *     • The "Message and data rates may apply" disclosure
     *
     */
    public string $callToAction {
        set {
            $this->assigning('callToAction', $value);
            $this->callToAction = $value;
        }
    }
    /**
     * The keyword(s) the user will text to subscribe. Keyword(s) must include only uppercase letters and numbers.
     */
    public \InfobipSDK\Collections\StringCollection $keywords;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callToAction' => is_string($value) ? $this->callToAction = $value : parent::assignMember($name, $value),
            'keywords' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->keywords = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
