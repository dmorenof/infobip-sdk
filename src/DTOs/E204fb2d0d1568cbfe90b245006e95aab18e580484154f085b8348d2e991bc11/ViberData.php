<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * ViberData
 *
 * Viber-specific data used if the message is sent through a Viber channel. Must be one of: text, image, file, text with button or text with image and button.
 */
final class ViberData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'buttonText' => [
        'minLength' => 0,
        'maxLength' => 30,
    ],
    'buttonURL' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
    'fileName' => [
        'minLength' => 0,
        'maxLength' => 25,
    ],
    'fileUrl' => [
        'pattern' => '^(https?)://.*$',
    ],
    'imageURL' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
    'trackingData' => [
        'minLength' => 0,
        'maxLength' => 100,
    ],
    'validityPeriod' => [
        'format' => 'int32',
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'buttonText',
    'buttonURL',
    'fileName',
    'fileType',
    'fileUrl',
    'forcePrimaryDevice',
    'imageURL',
    'isPromotional',
    'text',
    'trackingData',
    'validityPeriod',
];

    /**
     * Viber button label. Max 30 characters.
     */
    public string $buttonText {
        set {
            $this->assigning('buttonText', $value);
            $this->buttonText = $value;
        }
    }
    /**
     * Viber Button Call To Action. Should contain URL or telephone number to call. Format for telephone number is tel:.
     */
    public string $buttonURL {
        set {
            $this->assigning('buttonURL', $value);
            $this->buttonURL = $value;
        }
    }
    /**
     * File name of the file sent in the Viber message.
     */
    public string $fileName {
        set {
            $this->assigning('fileName', $value);
            $this->fileName = $value;
        }
    }
    /**
     * File type (extension) of the file sent in the Viber message. Has to be one of: doc, docx, rtf, dot, dotx, odt ,odf, fodt, txt, info, pdf, xps, pdax, eps, xls, xlsx, ods, fods, csv, xlsm, xltx
     */
    public string $fileType;
    /**
     * URL of the file sent in the Viber message. For example: http://example.com/document.docx
     */
    public string $fileUrl {
        set {
            $this->assigning('fileUrl', $value);
            $this->fileUrl = $value;
        }
    }
    /**
     * Defines if Text message will be sent only to the users primary device (smartphone).
     */
    public bool $forcePrimaryDevice;
    /**
     * URL of the image sent in the Viber message.
     */
    public string $imageURL {
        set {
            $this->assigning('imageURL', $value);
            $this->imageURL = $value;
        }
    }
    /**
     * Indicates if content is of promotional character.
     */
    public bool $isPromotional;
    /**
     * Text of the message that will be sent.
     */
    public string $text;
    /**
     * Viber tracking data. Enables tracking messages, sent tracking_data value will be passed back with user's reply
     */
    public string $trackingData {
        set {
            $this->assigning('trackingData', $value);
            $this->trackingData = $value;
        }
    }
    /**
     * The message validity period. Unless specified differently in validityPeriodTimeUnit, it is expressed in minutes. When the period expires, the message will be automatically sent using the next OMNI step. Validity period longer than 14 days is not supported. Additionally, period should be longer than 35 seconds.
     * Format: int32
     */
    public int $validityPeriod {
        set {
            $this->assigning('validityPeriod', $value);
            $this->validityPeriod = $value;
        }
    }
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit $validityPeriodTimeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttonText' => is_string($value) ? $this->buttonText = $value : parent::assignMember($name, $value),
            'buttonURL' => is_string($value) ? $this->buttonURL = $value : parent::assignMember($name, $value),
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            'fileType' => is_string($value) ? $this->fileType = $value : parent::assignMember($name, $value),
            'fileUrl' => is_string($value) ? $this->fileUrl = $value : parent::assignMember($name, $value),
            'forcePrimaryDevice' => is_bool($value) ? $this->forcePrimaryDevice = $value : parent::assignMember($name, $value),
            'imageURL' => is_string($value) ? $this->imageURL = $value : parent::assignMember($name, $value),
            'isPromotional' => is_bool($value) ? $this->isPromotional = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'trackingData' => is_string($value) ? $this->trackingData = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            'validityPeriodTimeUnit' => is_string($value) ? $this->validityPeriodTimeUnit = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
