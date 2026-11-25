<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * AggregateDataRequest
 */
final class AggregateDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'aggregateBy',
        'filterBy',
        'metrics',
    ];

    protected const array VALIDATION = [
        'aggregateBy' => [
            'uniqueItems' => true,
        ],
        'metrics' => [
            'minItems' => 1,
            'uniqueItems' => true,
        ],
    ];

    /**
     *
     * An array of strings that defines the properties used for data aggregation. Each item in the array represents an aggregation parameter, with a corresponding column in the response showing values for the chosen aggregate.
     * `CHANNEL_CODE` is always included in results for metric accuracy, even if not specified in aggregateBy. For further details,
     * refer to our [documentation](https://www.infobip.com/docs/reporting/metrics-api#aggregate-by).
     *
     * Available aggregates:
     * * `ACCOUNT_KEY` - groups the results by account key, displaying account-specific values.
     * * `HOUR` - groups the results by hour, showing corresponding hourly timestamp values.
     * * `DAY` - groups the results by day, showing corresponding day values.
     * * `WEEK_SATURDAY_START` - groups the results by week, starting on Saturday, with corresponding timestamp values.
     * * `WEEK_SUNDAY_START` - groups the results by week, starting on Sunday, with corresponding timestamp values.
     * * `WEEK_MONDAY_START` - groups the results by week, starting on Monday, with corresponding timestamp values.
     * * `MONTH` - groups the results by month, showing monthly values.
     * * `QUARTER` - groups the results by quarter, showing quarterly values.
     * * `YEAR` - groups the results by year, displaying annual values.
     * * `TIME_TO_DELIVER` - groups the results by message delivery time, showing time-to-deliver period descriptions.
     * * `TIME_TO_ANSWER` - groups the results by call answer time, showing time-to-answer period descriptions.
     * * `TIME_TO_CLICK_FROM_SEEN` - groups the results by the time (in seconds) between a message being seen and a URL being clicked, showing calculated values.
     * * `TIME_TO_CLICK_FROM_DELIVERED` - groups the results by the time (in seconds) between message delivery and a URL being clicked, showing calculated values.
     * * `TIME_TO_SEEN_FROM_DELIVERED` - groups the results by the time (in seconds) between message delivery and the message being seen, showing calculated values.
     * * `TIME_TO_OPEN_FROM_DELIVERED` - groups the results by the time (in seconds) between message delivery and the message being opened, showing calculated values.
     * * `CHANNEL_CODE` - groups the results by channel, showing corresponding channel code values.
     * * `CHANNEL_NAME` - groups the results by channel name, showing corresponding channel name values.
     * * `CAPABILITY` - groups the results by capability, showing corresponding capability code values.
     * * `DIRECTION` - groups the results by traffic direction, showing whether it was OUTBOUND (sent to a client) or INBOUND (received from a client).
     * * `TRAFFIC_TYPE` - groups the results by traffic type, showing specific traffic type values.
     * * `INTERACTION_TYPE` - groups the results by interaction type, showing corresponding interaction type values.
     * * `SENDER` - groups the results by sender, showing sender-specific values.
     * * `SENDER_TYPE` - groups the results by type of sender, showing sender type values.
     * * `SENDER_DOMAIN` - groups the results by sender domain, showing domain-specific values.
     * * `RECIPIENT_DOMAIN` - groups the results by recipient domain, showing domain-specific values.
     * * `URL` - groups the results by initial URL in a message, showing URL-specific values.
     * * `COMMUNICATION` - groups the results by communication ID, showing the unique ID associated with each message.
     * * `CAMPAIGN_REFERENCE` - groups the results by campaign reference ID, showing associated campaign reference values.
     * * `NETWORK_ID` - groups the results by network, showing network ID values.
     * * `NETWORK_NAME` - groups the results by network name, showing the name associated with each network ID.
     * * `COUNTRY_ID` - groups the results by country, showing country ID values.
     * * `COUNTRY_NAME` - groups the results by country name, showing the name associated with each country.
     * * `APPLICATION_ID` - groups the results by application, showing corresponding application ID values.
     * * `ENTITY_ID` - groups the results by entity, showing corresponding entity ID values.
     * * `STATUS_GROUP` - groups response results by status group, showing corresponding status group values.
     * * `STATUS` - groups response results by status name, showing corresponding status values.
     * * `ERROR_GROUP` - groups response results by error group, showing corresponding error group values.
     * * `ERROR_CODE` - groups response results by error code, showing corresponding error code values.
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataRequest\AggregateByCollection $aggregateBy {
        set {
            $this->assigning('aggregateBy', $value);
            $this->aggregateBy = $value;
        }
    }
    public \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter $filterBy;
    /**
     *
     * The metrics parameter accepts an array of non-empty strings that specify the metrics to retrieve. Each column in the response will contain values corresponding to the selected metric type.
     *
     * For detailed information on the metrics available through the API, including specific details, limitations, and channel applicability, please refer to our comprehensive
     * [documentation](https://www.infobip.com/docs/reporting/metrics-api#metrics) on available metrics.
     *
     * Available metrics:
     * * `TOTAL_TRAFFIC_COUNT` - Total number of messages or message segments sent to and received from customers (inbound and outbound).
     * * `TOTAL_ACCEPTED_TRAFFIC_COUNT` - The total number of accepted Email messages sent to your customers (outbound).
     * * `TOTAL_SMS_MESSAGES_COUNT` - Total number of SMS messages sent to and received from customers (inbound and outbound). Messages split into multiple segments due to length are counted as a single distinct message.
     * * `INTERACTION_COUNT` - Number of distinct messaging interactions. Combined with the `TRAFFIC_TYPE` dimension, it helps analyze specific messaging traffic by breaking down interactions into different WhatsApp or RCS categories, such as conversations or sessions.
     * * `TOTAL_SENT_TRAFFIC_COUNT` - Total number of messages submitted for delivery (outbound).
     * * `DELIVERED_TRAFFIC_COUNT` - Total number of messages delivered to a recipient.
     * * `TRAFFIC_DELIVERY_RATE` - Percentage of messages successfully delivered to recipients. Calculated using the formula: Total delivered / (Total sent - Total rejected) for all channels except Email, where it is calculated as Total delivered / Total sent.
     * * `TRAFFIC_DELIVERED_IN_5_SEC_RATE` - Percentage of messages delivered within a 5-second timeframe.
     * * `TOTAL_RECEIVED_TRAFFIC_COUNT` - Total number of messages received from customers (inbound).
     * * `RECEIVED_TO_SENT_TRAFFIC_RATIO` - Ratio of received (inbound) to sent (outbound) messages that were not rejected.
     * * `FAILED_TRAFFIC_COUNT` - Total number of sent (outbound) messages that were not delivered to recipients.
     * * `TOTAL_BOUNCE_COUNT` - Total number of emails not delivered, including soft (temporary) and hard (permanent) bounces.
     * * `TOTAL_BOUNCE_RATE` - Percentage of emails that were not delivered, calculated by summing soft and hard bounces and dividing by the total sent.
     * * `TOTAL_DROPPED_COUNT` - Submitted emails that were dropped before delivery due to factors such as unsubscribes, bounced addresses, spam marking, or sender errors.
     * * `TOTAL_DROPPED_RATE` - Percentage of dropped emails, calculated by dividing the number of dropped emails by the accepted emails.
     * * `TOTAL_SUPPRESSED_COUNT` - Number of emails not sent due to a bounce or recipient actions like spam marking.
     * * `SOFT_BOUNCE_COUNT` - Number of emails temporarily undeliverable due to reasons like full inboxes, temporary domain unavailability, or lack of recipient opt-in.
     * * `SOFT_BOUNCE_RATE` - Percentage of temporarily undeliverable emails, calculated by dividing soft bounces by total sent.
     * * `HARD_BOUNCE_COUNT` - Number of emails permanently undeliverable to specific recipients.
     * * `HARD_BOUNCE_RATE` - Percentage of permanently undeliverable emails, calculated by dividing hard bounces by total sent.
     * * `SEEN_OPENED_TRAFFIC_COUNT` - Total number of messages seen or opened. Recipients can turn off their read receipts, resulting in a lower seen count.
     * * `SEEN_OPENED_TRAFFIC_RATE` - Percentage of messages seen or opened by unique recipients. Recipients can turn off their read receipts, resulting in a lower seen rate.
     * * `VIEWED_TOTAL_COUNT` - Number of email opens per recipient, including multiple opens by the same user.
     * * `VIEWED_TOTAL_RATE` - Percentage of recipients who opened an email campaign.
     * * `UNIQUE_CLICKS_COUNT` - Number of unique recipients who clicked any link in a message, counted only once per recipient regardless of multiple clicks.
     * * `UNIQUE_CLICK_THROUGH_RATE` - Percentage of unique recipients who clicked a link compared to total messages delivered, counting each recipient only once.
     * * `UNIQUE_URL_CLICK_COUNT` - Number of unique URLs clicked in a single message.
     * * `CLICK_TO_OPEN_RATE` - Percentage of unique clicks divided by unique opens or views, counting each recipient only once.
     * * `TOTAL_CLICKS_COUNT` - Total clicks on all URLs in a message, including multiple clicks on the same link. For example, if a message contains 3 links and each is clicked twice, the total clicks count is 6.
     * * `TOTAL_CLICK_RATE` - Percentage of recipients who clicked any link, calculated as the total clicks across all URLs divided by the total delivered messages. For example, if 200 SMS messages are sent and there are 400 total clicks, the `TOTAL_CLICK_RATE` is 200%.
     * * `UNSUBSCRIBED_USER_COUNT` - Number of recipients who unsubscribed (opted out) from further communications from the sender.
     * * `UNSUBSCRIBED_USER_RATE` - Percentage of recipients who unsubscribed (opted out) from further communications from the sender.
     * * `EMAIL_COMPLAINTS_COUNT` - Number of emails reported as spam by recipients.
     * * `EMAIL_COMPLAINTS_RATE` - Percentage of emails reported as spam by recipients.
     * * `TOTAL_CALL_COUNT` - Total number of calls sent to your customers (outbound) and calls received from your customers (inbound).
     * * `TOTAL_ATTEMPTED_CALL_COUNT` - Total number of calls initiated for delivery (outbound).
     * * `TOTAL_SEIZED_CALL_COUNT` - Total number of calls that have successfully reached the recipient's device and started ringing, regardless of whether they were ultimately answered or not.
     * * `TOTAL_ANSWERED_CALL_COUNT` - Total number of calls that were successfully answered, including both inbound calls (initiated by the customer) and outbound calls (initiated by the business).
     * * `TOTAL_RECEIVED_CALL_COUNT` - Total number of calls you received from customers (inbound).
     * * `AMD_PROCESSED_CALL_COUNT` - The number of calls that used Automated machine detection.
     * * `ANSWERED_BY_PERSON_CALL_COUNT` - Number of calls initiated by the business that were successfully answered by a person (human).
     * * `ANSWERED_BY_VOICE_DETECTION_CALL_COUNT` - Number of calls initiated by the business that were successfully answered by a voice detection system (e.g., voicemail, automated system).
     * * `NOT_ANSWERED_CALL_COUNT` - Total number of outbound calls that were not answered by the recipient.
     * * `BUSY_CALL_COUNT` - Total number of outbound calls that received a busy signal or were rejected due to the recipient's line being busy.
     * * `CANCELED_CALL_COUNT` - Total number of outbound calls that were canceled at the origination end before they could have been successfully routed to the end user.
     * * `FAILED_CALL_COUNT` - Total number of calls that were not successfully delivered for various reasons, including being declined or rejected by the user, rejected by the operator, or due to the end user's unavailability to receive the call at the time of the attempt.
     * * `ANSWER_SEIZURE_RATIO` - The percentage of successfully answered calls out of the total number of call attempts that resulted in a seizure (i.e., a call attempt that resulted in a ring-back tone).
     * * `ANSWER_RATE` - The percentage of calls that are successfully answered by the called party out of the total number of calls that were attempted.
     * * `BUSY_RATE` - The percentage of calls that receive a busy signal out of the total number of attempted calls.
     * * `HUNG_UP_COUNT` - The total number of call or session terminations, including those initiated by users after successful interactions and those caused by system errors.
     * * `NORMAL_HUNG_UP_COUNT` - The number of regular call or session terminations initiated by users after successful interactions.
     * * `ERROR_HUNG_UP_COUNT` - The number of call or session terminations caused by encountered errors within the system.
     * * `TOTAL_CALL_DURATION` - The cumulative duration of all calls made to and received from customers (inbound and outbound).
     *
     * For more detailed information and examples, please visit:
     * - [Metrics and Filters](https://www.infobip.com/docs/reporting/metrics-api#metrics)
     * - [Constraints](https://www.infobip.com/docs/reporting/metrics-api#time-granulation-constraints)
     *
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataRequest\MetricsCollection $metrics {
        set {
            $this->assigning('metrics', $value);
            $this->metrics = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'filterBy' => $value instanceof \stdClass ? $this->filterBy = new \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataFilter($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
