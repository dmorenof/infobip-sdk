<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * WhatsAppData
 *
 * WhatsApp-specific data used if the message is sent through a WhatsApp channel.
 */
final class WhatsAppData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'latitude' => [
            'minimum' => -90,
            'maximum' => 90,
        ],
        'longitude' => [
            'minimum' => -180,
            'maximum' => 180,
        ],
        'templateName' => [
            'pattern' => '^[a-z0-9_]{1,512}$',
        ],
        'validityPeriod' => [
            'format' => 'int32',
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'address',
        'audioUrl',
        'fileUrl',
        'imageUrl',
        'language',
        'latitude',
        'locationName',
        'longitude',
        'previewUrl',
        'templateData',
        'templateName',
        'templateNamespace',
        'text',
        'validityPeriod',
        'videoUrl',
    ];

    /**
     * Address location. Optional value.
     */
    public string $address;
    /**
     * URL of the audio file sent in the WhatsApp message. Max 2048 characters. Supported audio types are AAC, AMR, MP3, OPUS. Maximum audio size is 16MB.
     */
    public string $audioUrl;
    public \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\WhatsAppData\ContactsCollection $contacts;
    /**
     * URL of the file sent in the WhatsApp message. Max 2048 characters. Supported file types are PDF, DOC(X), PPT(X), XLS(X). Maximum file size is 100MB.
     */
    public string $fileUrl;
    /**
     * URL of the image sent in the WhatsApp message. Max 2048 characters. Supported image types: JPG, JPEG, PNG. Maximum image size is 5MB.
     */
    public string $imageUrl;
    /**
     * The code of the language or locale to use. Needs to be exactly the code with which the template was registered.
     */
    public string $language;
    /**
     * Latitude of a coordinate. The value must be between -90 and 90.
     * Format: double
     */
    public float $latitude {
        set {
            $this->assigning('latitude', $value);
            $this->latitude = $value;
        }
    }
    /**
     * Name of the location. Optional value.
     */
    public string $locationName;
    /**
     * Longitude of a coordinate. The value must be between -180 and 180
     * Format: double
     */
    public float $longitude {
        set {
            $this->assigning('longitude', $value);
            $this->longitude = $value;
        }
    }
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\MediaTemplateData $mediaTemplateData;
    /**
     * `Options`: false (default), true <br/>Specifying previewUrl in the request is optional when not including a URL in your message. <br/>To include a URL preview, set previewUrl to true in the message body and make sure that URL begins with http:// or https:/
     */
    public bool $previewUrl;
    /**
     * Template parameters values ordered as registered in template
     */
    public \InfobipSDK\Collections\StringCollection $templateData;
    /**
     * Template name
     */
    public string $templateName {
        set {
            $this->assigning('templateName', $value);
            $this->templateName = $value;
        }
    }
    /**
     * Template namespace
     */
    public string $templateNamespace;
    /**
     * Text of the message that will be sent.
     */
    public string $text;
    /**
     * The message validity period. Unless specified differently in validityPeriodTimeUnit, it is expressed in minutes. When the period expires, the message will be automatically sent using the next OMNI step. Validity period longer than 48h is not supported (in this case, it will be automatically set to 48h). Additionally, period should be longer than 30 seconds.
     * Format: int32
     */
    public int $validityPeriod {
        set {
            $this->assigning('validityPeriod', $value);
            $this->validityPeriod = $value;
        }
    }
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit $validityPeriodTimeUnit;
    /**
     * URL of the video sent in the WhatsApp message. Max 2048 characters. Supported video types are MP4, 3GPP. Maximum video size is 16MB.
     */
    public string $videoUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'audioUrl' => is_string($value) ? $this->audioUrl = $value : parent::assignMember($name, $value),
            'contacts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contacts = new \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\WhatsAppData\ContactsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Contact::class)) : parent::assignMember($name, $value),
            'fileUrl' => is_string($value) ? $this->fileUrl = $value : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'locationName' => is_string($value) ? $this->locationName = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            'mediaTemplateData' => $value instanceof \stdClass ? $this->mediaTemplateData = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\MediaTemplateData($value) : parent::assignMember($name, $value),
            'previewUrl' => is_bool($value) ? $this->previewUrl = $value : parent::assignMember($name, $value),
            'templateData' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->templateData = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'templateName' => is_string($value) ? $this->templateName = $value : parent::assignMember($name, $value),
            'templateNamespace' => is_string($value) ? $this->templateNamespace = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            'validityPeriodTimeUnit' => is_string($value) ? $this->validityPeriodTimeUnit = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit::from($value) : parent::assignMember($name, $value),
            'videoUrl' => is_string($value) ? $this->videoUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
