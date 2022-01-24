<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        VerifyEmail::toMailUsing(function ($notifiable,$url){
            $message = [
                "name" => $notifiable->name,
                "description" => "Por favor clique no link abaixo para verificar seu e-mail.",
                "descriptionFooter" => "Se você não criou uma conta, nenhuma ação é requerida!",
                "link" => $url,
                "button" => "Confirmar E-mail"
            ];
            return (new MailMessage)->view('Mails.confirmationAndReset',['body' => $message]);
        });


        ResetPassword::toMailUsing(function($notifiable,$url){
            $name = explode(" ",$notifiable->name);
            $message = [
                "name" => $name[0],
                "description" => "Por favor clique no link abaixo para altera a sua senha.",
                "descriptionFooter" => "Se você não solicitou uma alteração de senha, nenhuma ação é requerida!",
                "link" => route("password.reset", $url),
                "button" => "Alterar Senhar"
            ];
            return (new MailMessage)->view('Mails.confirmationAndReset',['body' => $message]);

        });
    }
}
