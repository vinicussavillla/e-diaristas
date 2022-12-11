
    {{-- //diretiva
    // Token para falar que o form é da aplicação  --}}
    @csrf
    <style>

 input .password {
    border-radius: 0;
    padding: 5px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
}
    </style>
 <div class="card">
    <div class="card-body">

                <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="name">Nome do usuário</label>
                            <input value="{{ old ('name', $usuario->name ?? '') }}" type="input"
                             class="form-control @error('name') is-invalid @enderror" name="name"
                             id="name" maxlength="100"
                             placeholder="Digite o nome do usuário">
                             @error('name')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                       </div>
                   </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email do usuário</label>
                             <input value="{{ old ('email', $usuario->email ?? '') }}" type="email"
                             class="form-control @error('email') is-invalid @enderror" name="email"
                             id="email"  placeholder="Digite o email do usuário">
                             @error('email')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Senha</label>
                             <input value="{{ old ('password',  '') }}" type="password"
                             class="form-control @error('password') is-invalid @enderror" name="password"
                             id="password"  maxlength="50"
                             placeholder="Digite a senha do usuário">
                             @error('password')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                        </div>
                    </div>

                {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Senha</label>
                              <div class="input-group mb-3">
                                <input  value="{{ old ('password', '') }}" type="password"
                                class="form-control password @error('password') is-invalid @enderror"  name="password"
                                id="password1" maxlength="55" placeholder="Digite a senha do usuário">
                                   <div class="input-group-append">
                                    <span class="btn btn-outline-secondary" type="button" id="basic-addon2">
                                        <i id="close1"style="display:none;" class="fa fa-eye"></i>
                                        <i  id="open1" class="fa fa-eye-slash" id="pass"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>        --}}



              <div class="col-md-6">
                <div class="form-group">
                    <label for="password_confirmation">Confirmação da senha</label>
                      <div class="input-group mb-3" >
                        <input  value="{{ old ('password_confirmation', '') }}"  type="password"
                        class="form-control password @error('password_confirmation') is-invalid @enderror"  name="password_confirmation"
                        id="password_confirmation" maxlength="55" placeholder="Confirme a senha do usuário">
                           <div class="input-group-append">
                            <span class="btn btn-outline-secondary" type="button" id="basic-addon2">
                                <i id="close"style="display:none;" class="fa fa-eye"></i>
                                <i  id="open" class="fa fa-eye-slash" id="pass"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <button class=" btn btn-primary" type="submit"> Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
 $(document).ready(function(){
    $('#open').click(function(){
      $('#password_confirmation').attr("type","text");
      $(this).hide();
      $("#close").show();
    });
});

$(document).ready(function(){
    $('#close').click(function(){
      $('#password_confirmation').attr("type","password");
      $(this).hide();
      $("#open").show();
    });
});

</script>
