<?php

namespace Models;

class Payable
{
    
    public function label($toPay)
    {
        $toPay/=100;
        return `You have to pay: $toPay$`;
    }

    function cost($toPay)
    {
        return `You have to pay: $toPay cents`;
    }

    public function taxRatePerTenThousand($toPay, $taxPerMil)
    {
        $taxPerMil /= 1000;
        $taxesCosts = $toPay/$taxPerMil;
        return `(Taxes are $taxPerMil% = $taxesCosts$`;
    }
}
