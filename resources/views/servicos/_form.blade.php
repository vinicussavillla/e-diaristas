
    {{-- //diretiva
    // Token para falar que o form é da aplicação  --}}
    @csrf
    
 <div class="card">
    <div class="card-body">
       <fieldset> 
        <legend> <mark>Indentificação</mark></legend>
             <div class="row">
                <div class="col-md-4"> 
                    <div class="form-group">
                        <label for="nome">Nome</label>
                         <input value="{{ old ('nome', $servico->nome ?? '') }}" type="input" 
                         class="form-control @error('nome') is-invalid @enderror"
                         name="nome" id="nome" placeholder="Nome">
                         @error('nome')
                         <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                         @enderror
                    </div> 
                </div>  

                <div class="col-md-4"> 
                    <div class="form-group">
                        <label for="icone">Icone</label>
                        <select name="icone" id="icone" class="form-control @error('icone') is-invalid @enderror">
                            <option value="">Selecione o Ícone</option>
                            <option value="twf-cleaning-1"{{ old('icone',  $servico->icone ?? '' ) ==='twf-cleaning-1' ? 'selected': '' }}>Ícone 1</option>
                            <option value="twf-cleaning-2"{{ old('icone',  $servico->icone ?? '' ) ==='twf-cleaning-2' ? 'selected': '' }}>Ícone 2</option>
                            <option value="twf-cleaning-3"{{ old('icone',  $servico->icone ?? '' ) ==='twf-cleaning-3' ? 'selected': '' }}>Ícone 3</option>
                        </select>
                        @error('icone')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                    </div> 
                </div> 
                
                <div class="col-md-4"> 
                    <div class="form-group">
                        <label for="posicao">Posição na Plataforma</label>
                        <input value="{{ old ('posicao', $servico->posicao ?? '') }}" type="input"
                         class="form-control @error('posicao') is-invalid @enderror"   
                         name="posicao" data-mask="00" id="posicao" placeholder="Posição na Plataforma">
                        @error('posicao')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                    </div> 
                </div> 
            </div>

            <br>

            <legend> <mark>Globais</mark></legend>
                <div class="row">
                   <div class="col-md-4"> 
                       <div class="form-group">
                           <label for="valor_minimo">Valor Mínimo</label>
                            <input value="{{ old ('valor_minimo', $servico->valor_minimo ?? '') }}" 
                            type="input" class="form-control @error('valor_minimo') is-invalid @enderror" 
                            name="valor_minimo" data-mask="#.##0,00" data-mask-reverse="true" id="valor_minimo" 
                            placeholder="Valor mínimo do serviço" maxlength="7"> 
                            @error('valor_minimo')
                            <div class="invalid-feedback">
                               {{ $message }}
                            </div>
                            @enderror
                       </div> 
                   </div> 
                    <div class="col-md-4"> 
                        <div class="form-group">
                            <label for="quantidade_horas">Quantidade Mínima de horas</label>
                             <input type="input" value="{{ old ('quantidade_horas', $servico->quantidade_horas ?? '') }}"
                             class="form-control @error('quantidade_horas') is-invalid @enderror" name="quantidade_horas" 
                             id="quantidade_horas" data-mask="0" placeholder="Quantidade mínima de horas">
                             @error('quantidade_horas')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                        </div> 
                    </div> 

                    <div class="col-md-4"> 
                        <div class="form-group">
                            <label for="porcentagem">Porcentagem de Comissão</label>
                            <input value="{{ old ('porcentagem', $servico->porcentagem ?? '') }}"type="input" 
                             class="form-control @error('porcentagem') is-invalid @enderror" name="porcentagem" 
                             id="porcentagem" data-mask="00" placeholder="Porcentagem de comissão no serviço">
                             @error('porcentagem')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                        </div> 
                    </div> 
                </div> 
                <br> 

                <legend> <mark>Cômodos</mark></legend>
                <div class="row">
                   <div class="col-md-6"> 
                       <div class="form-group">
                           <label for="valor_quarto">Valor por Quarto</label>
                            <input value="{{ old ('valor_quarto', $servico->valor_quarto ?? '') }}" type="input" 
                             class="form-control @error('valor_quarto') is-invalid @enderror" name="valor_quarto" 
                             id="valor_quarto" data-mask="#.##0,00" data-mask-reverse="true" maxlength="7"
                             placeholder="Valor por quarto">
                             @error('valor_quarto')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                       </div> 
                   </div> 
                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="horas_quarto">Quantidade de horas por quarto</label>
                             <input value="{{ old ('horas_quarto', $servico->horas_quarto ?? '') }}" type="input" 
                             class="form-control @error('horas_quarto') is-invalid @enderror" name="horas_quarto" 
                             id="horas_quarto" data-mask="0" placeholder="Quantidade horas por quarto">
                             @error('horas_quarto')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                        </div> 
                    </div> 
                    

                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="valor_sala">Valor por sala</label>
                             <input value="{{ old ('valor_sala', $servico->valor_sala ?? '') }}" type="input" 
                             class="form-control @error('valor_sala') is-invalid @enderror" name="valor_sala" 
                             id="Valor_sala" data-mask="#.##0,00" data-mask-reverse="true" maxlength="7"
                             placeholder="Valor por sala">
                             @error('valor_sala')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                        </div> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="horas_sala">Quantidade de horas por sala </label>
                            <input value="{{ old ('horas_sala', $servico->horas_sala ?? '') }}"type="input" 
                            class="form-control @error('horas_sala') is-invalid @enderror" name="horas_sala" 
                            id="horas_sala" data-mask="0" placeholder="Quantidade por sala">
                            @error('horas_sala')
                            <div class="invalid-feedback">
                               {{ $message }}
                            </div>
                            @enderror
                        </div> 
                    </div> 

                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="">Valor por banheiro</label>
                             <input value="{{ old ('valor_banheiro', $servico->valor_banheiro ?? '') }}"type="input" 
                             class="form-control @error('valor_banheiro') is-invalid @enderror" name="valor_banheiro" 
                             id="valor_banheiro" data-mask="#.##0,00" data-mask-reverse="true" maxlength="7"
                             placeholder="Valor por banheiro">
                             @error('valor_banheiro')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                        </div> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="horas_banheiro">Quantidade de horas por banheiro </label>
                            <input value="{{ old ('horas_banheiro', $servico->horas_banheiro ?? '') }}" type="input" 
                            class="form-control @error('horas_banheiro') is-invalid @enderror" name="horas_banheiro" 
                            id="horas_banheiro" data-mask="0" placeholder="Quantidade horas por banheiro">
                            @error('horas_banheiro')
                            <div class="invalid-feedback">
                               {{ $message }}
                            </div>
                            @enderror
                        </div> 
                    </div> 

                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="valor_cozinha">Valor por cozinha</label>
                             <input value="{{ old ('valor_cozinha', $servico->valor_cozinha ?? '') }}"type="input" 
                             class="form-control @error('valor_cozinha') is-invalid @enderror" name="valor_cozinha" 
                             id="valor_cozinha" data-mask="#.##0,00" data-mask-reverse="true" maxlength="7"
                             placeholder="Valor por cozinha">
                             @error('valor_cozinha')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                        </div> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="horas_cozinha">Quantidade de horas por cozinha </label>
                            <input value="{{ old ('horas_cozinha', $servico->horas_cozinha ?? '') }}"type="input" 
                            class="form-control @error('horas_cozinha') is-invalid @enderror" name="horas_cozinha" 
                            id="horas_cozinha" data-mask="0" placeholder="Quantidade horas por cozinha">
                            @error('horas_cozinha')
                            <div class="invalid-feedback">
                               {{ $message }}
                            </div>
                            @enderror
                        </div> 
                    </div> 

                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="valor_quintal">Valor por quintal</label>
                             <input value="{{ old ('valor_quintal', $servico->valor_quintal ?? '') }}" type="input" 
                             class="form-control @error('valor_quintal') is-invalid @enderror" name="valor_quintal" 
                             id="valor_quintal" data-mask="#.##0,00" data-mask-reverse="true" maxlength="7"
                             placeholder="Valor por quintal">
                             @error('valor_quintal')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                        </div> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="horas_quintal">Quantidade de horas por quintal </label>
                            <input value="{{ old ('horas_quintal', $servico->horas_quintal ?? '') }}" type="input" 
                            class="form-control @error('horas_quintal') is-invalid @enderror" name="horas_quintal" 
                            id="horas_quintal" data-mask="0" placeholder="Quantidade por quintal">
                            @error('horas_quintal')
                            <div class="invalid-feedback">
                               {{ $message }}
                            </div>
                            @enderror
                        </div> 
                    </div> 

                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="valor_outros">Valor por outros tipos de cômodos</label>
                             <input type="input"value="{{ old ('valor_outros', $servico->valor_outros ?? '') }}" 
                             class="form-control @error('valor_outros') is-invalid @enderror" name="valor_outros" 
                             id="valor_outros" data-mask="#.##0,00" data-mask-reverse="true" maxlength="7"
                             placeholder="Valor por outros">
                             @error('valor_outros')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                             @enderror
                        </div> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="horas_outros">Quantidade de horas por outros tipos de cômodos </label>
                            <input value="{{ old ('horas_outros', $servico->horas_outros ?? '') }}" type="input" 
                            class="form-control @error('horas_outros') is-invalid @enderror" name="horas_outros" 
                            id="horas_outros" data-mask="0" placeholder="Quantidade de horas por outros">
                            @error('horas_outros')
                            <div class="invalid-feedback">
                               {{ $message }}
                            </div>
                            @enderror
                        </div> 
                    </div> 
               

                </fieldset> 

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

