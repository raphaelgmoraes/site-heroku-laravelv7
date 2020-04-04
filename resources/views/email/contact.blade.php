@component('mail::message')
# Olá, você recebeu um novo contato apartir do seu site

Nome: <b>{{ $reply_name }}</b>

E-mail: <b>{{ $reply_email }}</b>

Telefone: <b>{{ $phone_number }}</b>

Assunto: <b>{{ $subject }}</b>

@component('mail::panel')
	{{ $message }}
@endcomponent

Att,<br>
#{{env('MAIL_FROM_NAME')}}<br>
Contato: 	<strong>{{env('CLIENT_DATA_TELEPHONE')}}</strong><br>
Projetos:   <strong>{{env('CLIENT_DATA_LINK_GITHUB')}}</strong><br>
Portifólio: <strong>{{env('CLIENT_DATA_LINK_GITHUB')}}</strong><br>
@endcomponent
