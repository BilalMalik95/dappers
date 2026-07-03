<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsletterSubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $subscriberEmail;

    public function __construct(string $subscriberEmail)
    {
        $this->subscriberEmail = $subscriberEmail;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'DapperSolutions | New Newsletter Subscriber',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.newsletter-subscription',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
