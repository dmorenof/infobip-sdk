<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * PlaceholderMasking
 *
 * Options to full or partially mask placeholders.
 */
final class PlaceholderMasking extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    protected const array VALIDATION = [
    'visibleChars' => [
        'format' => 'int32',
    ],
];

    /**
     * Optional delimiter character (e.g., `&#64;`, `/`). When specified, masking applies only to the part of the placeholder before or after the delimiter, depending on the `side` value. If this is set, the `visibleChars` field is ignored.
     */
    public string $delimiter;
    /**
     * The character used to replace the masked placeholders, e.g., `*`, `+`.
     */
    public string $maskChar;
    /**
     * The placeholder name that needs to be masked.
     * Example: "ph1"
     */
    public string $name;
    /**
     * The side from which characters should be hidden. Options are `L` (left) or `R` (right).
     */
    public string $side;
    /**
     * A list of characters that should not be masked, even if they fall within the masked region. For example, if we want to mask `(385)-9134849` into `(***)-********`, we should include the characters `(`,`)` and `-` in this list to preserve the formatting. In this case, only digits will be masked while parentheses and dashes remain visible.
     */
    public \InfobipSDK\Collections\StringCollection $skipChars;
    /**
     * The number of characters to leave visible. Ignored if a delimiter is specified. Defaults to 0 (i.e., all characters hidden) if not specified.
     * Format: int32
     */
    public int $visibleChars {
        set {
            $this->assigning('visibleChars', $value);
            $this->visibleChars = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'delimiter' => is_string($value) ? $this->delimiter = $value : parent::assignMember($name, $value),
            'maskChar' => is_string($value) ? $this->maskChar = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'side' => is_string($value) ? $this->side = $value : parent::assignMember($name, $value),
            'skipChars' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->skipChars = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'visibleChars' => is_int($value) ? $this->visibleChars = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
