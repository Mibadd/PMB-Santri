<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;

class CustomVerifyEmail extends VerifyEmail
{
    use Queueable;

    /**
     * Get the mail representation of the notification.
     *
     * @param  object  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->subject('Verifikasi Alamat Email Anda')
            ->line('Akun Anda telah berhasil dibuat. Silakan klik tombol di bawah ini untuk memverifikasi alamat email Anda.')
            ->action('Verifikasi Alamat Email', $verificationUrl)
            ->line('Setelah verifikasi berhasil, Anda bisa login melalui link di bawah ini:')
            ->line(route('login'))
            ->line('Jika Anda tidak membuat akun ini, abaikan email ini.');
    }
}