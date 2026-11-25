<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f;

/**
 * WorkingHoursApiResponse
 * Example: {"id":"07ad4193-4354-488c-b45f-293dfa4c90fb","timezone":"Etc/UTC","message":"We're out of office, come back another time, thank you!","workWeek":{"MONDAY":{"startTime":0,"endTime":1440,"enabled":true},"TUESDAY":{"startTime":0,"endTime":1440,"enabled":true},"WEDNESDAY":{"startTime":0,"endTime":1440,"enabled":true},"THURSDAY":{"startTime":0,"endTime":1440,"enabled":true},"FRIDAY":{"startTime":0,"endTime":1440,"enabled":true},"SATURDAY":{"startTime":0,"endTime":1440,"enabled":true},"SUNDAY":{"startTime":0,"endTime":1440,"enabled":true}},"name":"My Working Hours","enabled":true,"isDefault":true,"closeConversations":false,"holidays":[{"id":"aae9b06f-a323-4c9c-b807-7a9e4e015405","workingHoursId":"07ad4193-4354-488c-b45f-293dfa4c90fb","name":"New Year's Day","startDate":"2021-01-01","endDate":"2021-01-01","enabled":true},{"id":"6bfb9b10-caec-4f53-85a9-b87da6afa88f","workingHoursId":"07ad4193-4354-488c-b45f-293dfa4c90fb","name":"My Holiday","startDate":"2021-06-09","endDate":"2021-06-09","enabled":false}]}
 */
final class WorkingHoursApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'message',
    'name',
    'timezone',
];

    protected const array VALIDATION = [
    'holidays' => [
        'uniqueItems' => true,
    ],
    'workWeek' => [
        'jsonSchema' => '{"enum":["FRIDAY","MONDAY","SATURDAY","SUNDAY","THURSDAY","TUESDAY","WEDNESDAY"]}',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'id',
];

    /**
     * Close conversation created outside of working hours toggle.
     */
    public bool $closeConversations;
    /**
     * Working hours enable/disable toggle.
     */
    public bool $enabled;
    /**
     * List of working hours holidays.
     */
    public \InfobipSDK\Collections\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiRequest\HolidaysCollection $holidays {
        set {
            $this->assigning('holidays', $value);
            $this->holidays = $value;
        }
    }
    /**
     * Working hours Id.
     */
    public string $id;
    /**
     * Default working hours.
     */
    public bool $isDefault;
    /**
     * Message to be sent as an auto-reply message to the customer.
     */
    public string $message;
    /**
     * Working hours name.
     */
    public string $name;
    public bool $sendAwayMessageEveryOOWHPeriod;
    /**
     * Timezone in which working hours apply.
     * `TZ database name` from [IANA time zone database](https://en.wikipedia.org/wiki/List_of_tz_database_time_zones)
     */
    public string $timezone;
    /**
     * List of working hours work days.
     * It must contain all days of the week with 3 parameters each: `startTime`, `endTime` and `enabled`.
     */
    public \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiResponse\WorkWeekDTO $workWeek {
        set {
            $this->assigning('workWeek', $value);
            $this->workWeek = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'closeConversations' => is_bool($value) ? $this->closeConversations = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'holidays' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->holidays = new \InfobipSDK\Collections\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\WorkingHoursApiRequest\HolidaysCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\HolidaysApiModel::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'isDefault' => is_bool($value) ? $this->isDefault = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'sendAwayMessageEveryOOWHPeriod' => is_bool($value) ? $this->sendAwayMessageEveryOOWHPeriod = $value : parent::assignMember($name, $value),
            'timezone' => is_string($value) ? $this->timezone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
