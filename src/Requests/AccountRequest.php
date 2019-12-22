<?php
namespace NickNickIO\Digitalocean\Requests;


use NickNickIO\Digitalocean\Interfaces\AccountInterface;

class AccountRequest extends Request implements AccountInterface
{

    /**
     * Get the account information.
     * @return array
     */
    public function get()
    {
        $data = $this->connection->get('/account');
        return $this->load(['account' => $data], 'Account', 'account');
    }

}