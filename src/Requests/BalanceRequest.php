<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\BalanceInterface;

class BalanceRequest extends Request implements BalanceInterface
{

    /**
     * Get the balance information.
     * @return array
     */
    public function customer()
    {
        $data = $this->connection->get('/customers/my/balance');
        return $this->load(['balance' => $data], 'Balance', 'balance');
    }

}
