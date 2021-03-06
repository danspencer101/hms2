<?php

namespace App\Mail\Membership;

use HMS\Entities\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use HMS\Repositories\MetaRepository;
use Illuminate\Queue\SerializesModels;
use HMS\Repositories\Members\BoxRepository;
use Illuminate\Contracts\Queue\ShouldQueue;
use HMS\Repositories\Banking\BankRepository;

class MembershipRevoked extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * @var string
     */
    public $accountNo;

    /**
     * @var string
     */
    public $sortCode;

    /**
     * @var string
     */
    public $fullname;

    /**
     * @var string
     */
    public $paymentRef;

    /**
     * @var int
     */
    public $boxCount;

    /**
     * @var int
     */
    public $snackspaceBalance;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param MetaRepository $metaRepository
     * @param BankRepository $bankRepository
     * @param BoxRepository $boxRepository
     */
    public function __construct(
        User $user,
        MetaRepository $metaRepository,
        BankRepository $bankRepository,
        BoxRepository $boxRepository
    ) {
        $bank = $bankRepository->find($metaRepository->get('so_bank_id'));
        $this->accountNo = $bank->getAccountNumber();
        $this->sortCode = $bank->getSortCode();
        $this->fullname = $user->getFullname();
        $this->paymentRef = $user->getAccount()->getPaymentRef();
        $this->boxCount = $boxRepository->countInUseByUser($user);
        $this->snackspaceBalance = $user->getProfile()->getBalance();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nottingham Hackspace: Your Membership Has Been Revoked.')
                    ->markdown('emails.membership.membershipRevoked');
    }
}
