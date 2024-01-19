<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderAccepted extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $pdfUrl;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order,$pdfUrl)
    {
        //
        $this->order = $order;
        $this->pdfUrl = $pdfUrl;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.accepted')
                    ->subject('Order Accepted')
                    ->with([
                        'order' => $this->order,
                        'pdfUrl' => $this->pdfUrl,
                    ]);
    }
}
