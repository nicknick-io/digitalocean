<?php
namespace NickNickIO\Digitalocean\Resources;

class Balance extends Resource
{
    /**
     * Balance as of the generated_at time.
     * This value includes the account_balance and month_to_date_usage.
     * @var string
     */
    public $month_to_date_balance;

    /**
     * Current balance of the customer's most recent billing activity.
     * Does not reflect month_to_date_usage.
     * @var string
     */
    public $account_balance;

    /**
     * Amount used in the current billing period as of the generated_at time.
     * @var string
     */
    public $month_to_date_usage;

    /**
     * The time at which balances were most recently generated.
     * @var string
     */
    public $generated_at;
}
