<?php

namespace HMS\Repositories\Banking;

use HMS\Entities\Banking\Bank;

interface BankRepository
{
    /**
     * @param  $id
     * @return array
     */
    public function find($id);

    /**
     * save Bank to the DB.
     * @param  Bank $bank
     */
    public function save(Bank $bank);
}
