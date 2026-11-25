<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * Voucher
 *
 * Voucher component.
 */
final class Voucher extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'condition',
        'endDate',
        'name',
        'startDate',
        'voucherCode',
    ];

    protected const array VALIDATION = [
        'condition' => [
            'minLength' => 1,
            'maxLength' => 40,
        ],
        'endDate' => [
            'minLength' => 0,
            'maxLength' => 30,
        ],
        'name' => [
            'minLength' => 1,
            'maxLength' => 30,
        ],
        'startDate' => [
            'minLength' => 0,
            'maxLength' => 30,
        ],
        'voucherCode' => [
            'minLength' => 1,
            'maxLength' => 25,
        ],
    ];

    /**
     * Voucher usage condition.
     */
    public string $condition {
        set {
            $this->assigning('condition', $value);
            $this->condition = $value;
        }
    }
    /**
     * Voucher validity end date. Accepts Infobip ISO datetime or Zalo formats: dd/MM/yyyy, dd/MM/yyyy HH, dd/MM/yyyy HH:mm, dd/MM/yyyy HH:mm:ss.
     */
    public string $endDate {
        set {
            $this->assigning('endDate', $value);
            $this->endDate = $value;
        }
    }
    /**
     * Voucher name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Voucher validity start date. Accepts Infobip ISO datetime or Zalo formats: dd/MM/yyyy, dd/MM/yyyy HH, dd/MM/yyyy HH:mm, dd/MM/yyyy HH:mm:ss.
     */
    public string $startDate {
        set {
            $this->assigning('startDate', $value);
            $this->startDate = $value;
        }
    }
    /**
     * Voucher redemption code.
     */
    public string $voucherCode {
        set {
            $this->assigning('voucherCode', $value);
            $this->voucherCode = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'condition' => is_string($value) ? $this->condition = $value : parent::assignMember($name, $value),
            'endDate' => is_string($value) ? $this->endDate = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'startDate' => is_string($value) ? $this->startDate = $value : parent::assignMember($name, $value),
            'voucherCode' => is_string($value) ? $this->voucherCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
