<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingConfirmationAdminMail extends Mailable
{
    use Queueable, SerializesModels;
    public $adminEmailData;
    /**
     * Create a new message instance.
     */
    public function __construct($adminEmailData)
    {
        $this->adminEmailData = $adminEmailData;//Data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Booking Confirmation Admin Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->view('emails.booking_confirmation_admin_email')
                    ->subject('Booking Confirmation Mail (Admin)')
                    ->with([
                        'booking_date' => $this->adminEmailData['booking_date'],
                        'booking_time' => $this->adminEmailData['booking_time'],
                        'first_name' => $this->adminEmailData['first_name'],
                        'last_name' => $this->adminEmailData['last_name'],
                        'phone' => $this->adminEmailData['phone'],
                    ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
