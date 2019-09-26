<?php

namespace MichaelB\ShipStation\Endpoints;

use MichaelB\ShipStation\Models\Account;

class Accounts extends BaseEndpoint
{
    /**
     * @var string
     */
    protected $endpoint = '/accounts/';

    /**
     *  List all tags defined for this account
     *  @return \GuzzleHttp\Psr7\Response
     */
    public function listTags(){
        return $this->get('listtags');
    }

    /**
     * Register an account, this endpoint requires explicit whitelisting by ShipStation, meant only for direct partners of ShipStation
     * More Info: https://shipstation.docs.apiary.io/#reference/accounts/register-account/register-account
     *
     * @param Account $account
     * @return \GuzzleHttp\Psr7\Response
     */
    public function registerAccount(Account $account){
        return $this->post('registeraccount', ['form_params' => $account->toArray()]);
    }
}
