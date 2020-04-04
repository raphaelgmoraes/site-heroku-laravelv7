<form action="{{ route('send-mail') }}" name="contact-us" method="post" >
@csrf
<div class="row">
    <div class="col-md-12 form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome">
    </div>
    <div class="col-md-6 form-group">
        <input type="text" class="form-control" id="email" name="email" placeholder="Seu E-mail">
    </div>
    <div class="col-md-6 form-group">
        <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Seu Teçefone de contato">
    </div>
    <div class="col-md-12 form-group">
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Assunto ex: Criar meu site">
    </div>
    <div class="col-md-12 form-group">
        <textarea class="form-control" id="message" name="message" rows="6" placeholder="Sua menssagem ..."></textarea>
    </div>
    <div class="col-md-12 text-center">
        <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Enviar!</button>
    </div>
</div>
</form>