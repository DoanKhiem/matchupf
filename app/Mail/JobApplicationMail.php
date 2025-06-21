<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $applicationData;
    public $job;

    /**
     * Create a new message instance.
     */
    public function __construct($applicationData, $job)
    {
        $this->applicationData = $applicationData;
        $this->job = $job;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Job Application: ' . $this->job->title,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.job-application',
            with: [
                'applicationData' => $this->applicationData,
                'job' => $this->job,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];
        
        if (isset($this->applicationData['cv']) && $this->applicationData['cv']) {
            $attachments[] = Attachment::fromPath($this->applicationData['cv']->getRealPath())
                ->as($this->applicationData['cv']->getClientOriginalName())
                ->withMime($this->applicationData['cv']->getMimeType());
        }
        
        return $attachments;
    }
} 