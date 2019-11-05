<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Ficha de anamnese</h3>
                    </div>
                    <div class="modal-body" id="myWizard">

                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1"
                                aria-valuemin="1" aria-valuemax="4" style="width: 20%;">
                                Passo 1 de 4
                            </div>
                        </div>

                        <div class="navbar">
                            <div class="navbar-inner">
                                <ul class="nav nav-pills">
                                    <li class="active"><a href="#step1" data-toggle="tab" data-step="1">Passo 1</a></li>
                                    <li><a href="#step2" data-toggle="tab" data-step="2">Passo 2</a></li>
                                    <li><a href="#step3" data-toggle="tab" data-step="3">Passo 3</a></li>
                                    <li><a href="#step4" data-toggle="tab" data-step="4">Passo 4</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="step1">

                                <div class="well">
                                    <div class="form-group">
                                        <div>
                                            <label for="">Se faz uso de algum medicamento informe abaixo:</label>
                                            <p><input name="in_medicamento" placeholder="Digite aqui..."
                                                    class="form-control"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Se o paciente tiver algum problema de saúde informe
                                            abaixo:</label>
                                        <div>
                                            <p><input name="in_problema" placeholder="Digite aqui..."
                                                    class="form-control"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Se o paciente estiver em algum tratamento ou acompanhamento
                                            informe
                                            abaixo:</label>
                                        <div>
                                            <p><input name="in_acompanhamento" placeholder="Digite aqui..."
                                                    class="form-control"></p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Se o paciente tiver alergia a algum medicamento informe
                                            abaixo:</label>
                                        <div>
                                            <p><input name="in_alergia" placeholder="Digite aqui..."
                                                    class="form-control"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Se o paciente já teve hemorragia
                                            alguma vez ou
                                            foi internado alguma vez informe
                                            abaixo o motivo:</label>
                                        <div>
                                            <p><input name="in_hemorragia" placeholder="Digite aqui..."
                                                    class="form-control"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Se o paciente fuma ou já fumou
                                            alguma vez informe por quanto tempo:</label>
                                        <div>
                                            <p><input name="in_fumante" placeholder="Digite aqui..."
                                                    class="form-control"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">O paciente possui alguns hábitos como
                                            apertamento, bruxismo, morder objetos?</label>
                                        <div>
                                            <p><input name="in_habitos" placeholder="Digite aqui..."
                                                    class="form-control"></p>
                                        </div>
                                    </div>


                                </div>
                                <a class="btn btn-default next" href="#">Continue</a>
                            </div>
                            <div class="tab-pane fade" id="step2">
                                <div class="well">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea3">Como faz a higiene oral? Quantas vezes
                                            ao dia? Usa fio dental ou algum bochecho com flúor?(Responda na
                                            ordem)</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea3"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea3">Já foi ao dentista antes? Quando foi
                                            seu último tratamento?(Responda na ordem)</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea3"
                                            rows="5"></textarea>
                                    </div>
                                    <h3>Crianças</h3>
                                    <div class="form-group">
                                        <label for="">Quem faz a higieno bucal da criança?</label>
                                        <div>
                                            <p><input placeholder="Digite aqui..." oninput="this.className = ''"
                                                    class="form-control"></p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea3">Defina a alimentação básica da
                                            criança:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea3"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea3">Defina a alimentação básica da
                                            criança:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-2">Faz uso de chupeta ou mamadeira?</label>
                                        <div class="form-check form-check-inline">
                                            <div class="col-sm-1">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">

                                                <label class="form-check-label" for="inlineRadio1">Sim</label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="col-sm-1">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Não</label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <br>
                                <br>
                                <a class="btn btn-default next" style="margin-top:10px" href="#">Continue</a>
                            </div>
                            <div class="tab-pane fade" id="step3">
                                <div class="well">
                                    <p>Pressão Arterial</p>
                                    <p><input class="form-control col-md-2"></p>
                                    <br>
                                    <br>
                                    <p>
                                        <input type="text" class="form-control col-md-2" required="required" id="DataPA"
                                            name="dt_pa" data-inputmask="'mask': '99/99/9999'"
                                            placeholder="Data da registro">
                                    </p>
                                    <br>
                                    <br>
                                    <p>Batimentos por minuto</p>
                                    <p><input class="form-control col-md-2"></p>
                                    <br>
                                    <br>
                                    <p>
                                        <input type="text" class="form-control col-md-2" required="required" id="DataBPM"
                                            name="dt_bpm" data-inputmask="'mask': '99/99/9999'"
                                            placeholder="Data de registro">
                                    </p>
                                </div>
                                <a class="btn btn-default next" href="#">Continue</a>
                            </div>
                            <div class="tab-pane fade" id="step4">
                                <div class="well">
                                    <h2>Ficha finalizada!</h2>
                                </div>
                                <a class="btn btn-success first" href="#">Cadastrar</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        <button class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>