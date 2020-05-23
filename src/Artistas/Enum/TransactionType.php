<?php

namespace Artistas\PagSeguro\Enum;

class TransactionType
{
    /**
     * CHECKOUT
     */
    const CHECKOUT = 1;

    /**
     * TRANSFER
     */
    const TRANSFER = 2;

    /**
     * FUNDS ADDITION
     */
    const FUNDS_ADDITION = 3;

    /**
     * WITHDRAW
     */
    const WITHDRAW = 4;

    /**
     * CHARGING
     */
    const CHARGING = 5;

    /**
     * DONATION
     */
    const DONATION = 6;

    /**
     * BONUS
     */
    const BONUS = 7;

    /**
     * BONUS REPASS
     */
    const BONUS_REPASS = 8;

    /**
     * OPERATIONAL
     */
    const OPERATIONAL = 9;

    /**
     * POLITICAL DONATION
     */
    const POLITICAL_DONATION = 10;

    /**
     * PAYMENT PRE APPROVED
     */
    const PAYMENT_PRE_APPROVED = 11;

    /**
     * BONUS CAMPAIGN
     */
    const BONUS_CAMPAIGN = 12;

    /**
     * SECONDARY
     */
    const SECONDARY = 13;

    /**
     * VALIDATOR
     */
    const VALIDATOR = 14;

    /**
     * UNRECOGNIZED
     */
    const UNRECOGNIZED = null;
}