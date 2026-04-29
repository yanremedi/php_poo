<?php 

interface INotificador {
    public function enviar($destinatario, $mensagem);
}


class NotificadorEmail implements INotificador {
    public function enviar($destinatario, $mensagem) 
    {
        echo " Email enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}   

class NotificadorSMS implements INotificador {
    public function enviar($destinatario, $mensagem) 
    {
        echo " SMS enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

class NotificadorWhatsapp implements INotificador {
    public function enviar($destinatario, $mensagem) 
    {
        echo " WhatsApp enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

class SistemaNotificacao {
    private $notificador;

    public function __construct(INotificador $notificador) 
    {
        $this->notificador = $notificador;
    }

    public function enviarUsuario($destinatario, $mensagem) 
    {
        $this->notificador->enviar($destinatario, $mensagem);
    }
}

$sistemaEmail = new SistemaNotificacoes(new NotificadorEmail());
$sistemaSMS = new SistemaNotificacoes(new NotificadorSMS());
$sistemaWhatsapp = new SistemaNotificacoes(new NotificadorWhatsapp());

$sistemaEmail->notificarUsuario("joao@email.com", "Seu Pedido foi confirmado!");
$sistemaSMS->notificarUsuario("11999999999", "Seu Pedido foi confirmado!");
$sistemaWhatsapp->notificarUsuario("11999999999", "Seu Pedido foi confirmado!");