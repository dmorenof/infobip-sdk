<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * Payment
 *
 * Payment component with bank details.
 */
final class Payment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'accountName',
        'amount',
        'bankAccount',
        'bankCode',
        'note',
    ];

    protected const array VALIDATION = [
        'accountName' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'amount' => [
            'minLength' => 1,
        ],
        'bankAccount' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'bankCode' => [
            'minLength' => 1,
            'pattern' => '\\d{6}',
        ],
        'note' => [
            'minLength' => 0,
            'maxLength' => 90,
        ],
    ];

    /**
     * Account holder name.
     */
    public string $accountName {
        set {
            $this->assigning('accountName', $value);
            $this->accountName = $value;
        }
    }
    /**
     * Payment amount.
     */
    public string $amount {
        set {
            $this->assigning('amount', $value);
            $this->amount = $value;
        }
    }
    /**
     * Bank account number.
     */
    public string $bankAccount {
        set {
            $this->assigning('bankAccount', $value);
            $this->bankAccount = $value;
        }
    }
    /**
     * Bank code. Must be a Vietnamese BIN code.
     */
    public string $bankCode {
        set {
            $this->assigning('bankCode', $value);
            $this->bankCode = $value;
        }
    }
    /**
     * Payment note.
     */
    public string $note {
        set {
            $this->assigning('note', $value);
            $this->note = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accountName' => is_string($value) ? $this->accountName = $value : parent::assignMember($name, $value),
            'amount' => is_string($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'bankAccount' => is_string($value) ? $this->bankAccount = $value : parent::assignMember($name, $value),
            'bankCode' => is_string($value) ? $this->bankCode = $value : parent::assignMember($name, $value),
            'note' => is_string($value) ? $this->note = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
