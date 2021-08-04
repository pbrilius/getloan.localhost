<?php

namespace Pbrilius\GetloanLocalhost\Entity;

/**
 * User
 */
class User
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var int
     */
    private $id;

    /**
    * @var Pbrilius\GetloanLocalhost\Entity\Loan
    */
    private $debit;

    /**
    * @var Pbrilius\GetloanLocalhost\Entity\Loan
    */
    private $credit;

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set hash.
     *
     * @param string $hash
     *
     * @return User
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Debit
     *
     * @return Pbrilius\GetloanLocalhost\Entity\Loan
     */
    public function getDebit()
    {
        return $this->debit;
    }

    /**
     * Set the value of Debit
     *
     * @param Pbrilius\GetloanLocalhost\Entity\Loan $debit
     *
     * @return self
     */
    public function setDebit(Pbrilius\GetloanLocalhost\Entity\Loan $debit)
    {
        $this->debit = $debit;

        return $this;
    }

    /**
     * Get the value of Credit
     *
     * @return Pbrilius\GetloanLocalhost\Entity\Loan
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set the value of Credit
     *
     * @param Pbrilius\GetloanLocalhost\Entity\Loan $credit
     *
     * @return self
     */
    public function setCredit(Pbrilius\GetloanLocalhost\Entity\Loan $credit)
    {
        $this->credit = $credit;

        return $this;
    }

}
