<div id="client_form" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">CLIENTES</h4>
            </div>
            <form name="clients" action="{{route('clients.store')}}" method="POST">
                <input type="hidden" name="client_id" id="client_id" value="" />
                @csrf
                <!-- Demonstração classe de erro mas optei por deixar pelo required por causa do tempo -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="modal-body">
                    <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Nome</label>
                                    <input type="text" name="name" id="name" class="form-control" 
                                           value="" required maxlength="100" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Data de Nascimento</label>
                                    <input type="text" name="birth_date" id="birth_date" class="form-control" 
                                           value="" data-mask="" data-inputmask="'mask': '99/99/9999'" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Gênero</label>
                                    <div class="mt-radio-inline">
                                        <label class="mt-radio">
                                            <input type="radio" name="sex" id="sex" value="M" required /> Masculino
                                            <span></span>
                                        </label>
                                        <label class="mt-radio">
                                            <input type="radio" name="sex" id="sex" value="F" required /> Feminino
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Cep</label>
                                    <input type="text" name="zip_code" id="zip_code" class="form-control" 
                                           value="" data-mask="" data-inputmask="'mask': '99999-999'" onblur="cliGetInformationZipCode()" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Endereço</label>
                                    <input type="text" name="address" id="address" class="form-control" 
                                           value="" maxlength="100" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Número</label>
                                    <input type="text" name="address_number" id="address_number" class="form-control" 
                                           value="" maxlength="100" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Complemento</label>
                                    <input type="text" name="address_complement" id="address_complement" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Bairro</label>
                                    <input type="text" name="district" id="district" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Cidade</label>
                                    <input type="text" name="city" id="city" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Estado</label>
                                    <input type="text" name="state" id="state" class="form-control" value="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Fechar</button>
                    <button type="submit" class="btn green">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>