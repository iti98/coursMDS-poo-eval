<?php

namespace Models;

class Payable
{
    private int $taxPerMil;

    public function label($toPay)
    {
        $toPay/=100;
        return `You have to pay: $toPay$`;
    }

    function cost($toPay)
    {
        return `You have to pay: $toPay cents`;
    }

    public function taxRatePerTenThousand($toPay)
    {
        $this->taxPerMil /= 1000;
        $taxesCosts = $toPay/$this->taxPerMil;
        return `(Taxes are $this->taxPerMil% = $taxesCosts$`;
    }
}
