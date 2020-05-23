<?php

namespace Artistas\PagSeguro\Enum;

class TransactionStatus
{
    /**
     * Aguardando pagamento
     */
    const WAITING = 1;

    /**
     * Em análise
     */
    const ANALYZING = 2;

    /**
     * Paga
     */
    const PAID = 3;

    /**
     * Disponível
     */
    const AVAILABLE = 4;

    /**
     * Em disputa
     */
    const DISPUTE = 5;

    /**
     * Devolvida
     */
    const RETURNED = 6;

    /**
     * Cancelada
     */
    const CANCELED = 7;

    /**
     * Debitado
     */
    const DEBITED = 8;

    /**
     * Retenção temporária
     */
    const RETAINED = 9;

    /**
     * Unrecognized
     */
    const UNRECOGNIZED = null;
}