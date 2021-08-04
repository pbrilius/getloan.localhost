<?php

namespace Pbrilius\GetloanLocalhost\Entity;

/**
 * Loan
 */
class Loan
{
    /**
     * @var string
     */
    private $sum;

    /**
     * @var \DateTime
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $payback;

    /**
     * @var string
     */
    private $interestrates;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Pbrilius\GetloanLocalhost\Entity\User
     */
    private $borrower;

    /**
     * @var \Pbrilius\GetloanLocalhost\Entity\User
     */
    private $lender;


    /**
     * Set sum.
     *
     * @param string $sum
     *
     * @return Loan
     */
    public function setSum($sum)
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * Get sum.
     *
     * @return string
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Loan
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set payback.
     *
     * @param \DateTime $payback
     *
     * @return Loan
     */
    public function setPayback($payback)
    {
        $this->payback = $payback;

        return $this;
    }

    /**
     * Get payback.
     *
     * @return \DateTime
     */
    public function getPayback()
    {
        return $this->payback;
    }

    /**
     * Set interestrates.
     *
     * @param string $interestrates
     *
     * @return Loan
     */
    public function setInterestrates($interestrates)
    {
        $this->interestrates = $interestrates;

        return $this;
    }

    /**
     * Get interestrates.
     *
     * @return string
     */
    public function getInterestrates()
    {
        return $this->interestrates;
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
     * Set borrower.
     *
     * @param \Pbrilius\GetloanLocalhost\Entity\User|null $borrower
     *
     * @return Loan
     */
    public function setBorrower(\Pbrilius\GetloanLocalhost\Entity\User $borrower = null)
    {
        $this->borrower = $borrower;

        return $this;
    }

    /**
     * Get borrower.
     *
     * @return \Pbrilius\GetloanLocalhost\Entity\User|null
     */
    public function getBorrower()
    {
        return $this->borrower;
    }

    /**
     * Set lender.
     *
     * @param \Pbrilius\GetloanLocalhost\Entity\User|null $lender
     *
     * @return Loan
     */
    public function setLender(\Pbrilius\GetloanLocalhost\Entity\User $lender = null)
    {
        $this->lender = $lender;

        return $this;
    }

    /**
     * Get lender.
     *
     * @return \Pbrilius\GetloanLocalhost\Entity\User|null
     */
    public function getLender()
    {
        return $this->lender;
    }
}
