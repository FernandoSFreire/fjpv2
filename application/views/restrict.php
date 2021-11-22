<style>
.btn-primary {
    color: black;
    background-color: white;
    border-color: white;
}
</style>
<section style="min-height: calc(100vh - 83px)" class="light-bg">
    <div class="container">
        <!--área restrita-->
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                <div class="section-title">
                    <h2>ÁREA RESTRITA</h2>
                </div>
            </div>
        </div>
        <!--logoff-->
        <div class="row">
            <div class="col-lg-offset-5 col-lg-2 text-center">
                <div class="form-group">
                    <a class="btn btn-link"><i class="fa fa-user"></i></a>
                    <a class="btn btn-link" href="restrict/logoff"><i class="fa fa-sign-out"></i></a>
                </div>
            </div>
        </div>

        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_hospitais" role="tab" data-toggle="tab">Hospitais</a></li>
                <li><a href="#tab_diretoria" role="tab" data-toggle="tab">Diretoria</a></li>
                <li><a href="#tab_users" role="tab" data-toggle="tab">Login</a></li>
            </ul>
            <div class="tab-content">
                <!--hospitais-->    
                <div id="tab_hospitais" class="tab-pane active">
                    <div class="container-fluid">
                        <h2 class="text-center"><strong>Gerenciar Hospitais</strong></h2>
                        <a id="btn_add_hospitais" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Hospital</i></a>
                        <table id="dt_hospitais" class="table table-striped table-bordered">
                            <thead>
                                <tr class="tableheader">
                                    <th>Nome</th>
                                    <th>Imagem</th>
                                    <th>Cooperados</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--diretoria-->
                <div id="tab_diretoria" class="tab-pane">    
                    <div class="container-fluid">
                        <h2 class="text-center"><strong>Gerenciar Membros</strong></h2>
                        <a id="btn_add_membro" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Membro</i></a>
                        <table id="dt_membro" class="table table-striped table-bordered">
                            <thead>
                                <tr class="tableheader">
                                    <th>Nome</th>
                                    <th>Foto</th>
                                    <th>Função</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--contato-->
                <div id="tab_users" class="tab-pane">    
                    <div class="container-fluid">
                        <h2 class="text-center"><strong>Gerenciar Login</strong></h2>
                        <a id="btn_add_user" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Usuário</i></a>
                        <table id="dt_users" class="table table-striped table-bordered">
                            <thead>
                                <tr class="tableheader">
                                    <th>Login</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--modal hospitais-->
<div class="modal_hospitais" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">Hospitais</h4>
            </div>
            <div class="modal-body">
                <form id="form_hospitais">
                    <input name="hospital_id" hidden>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input id="hospital_name" name="hospital_name" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Imagem</label>
                        <div class="col-lg-10">
                            <input type="file" accept="image/*" id="hospital_image" name="hospital_image" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Cooperados</label>
                        <div class="col-lg-10">
                            <input id="hospital_cooperados" name="hospital_cooperados" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_hospitais" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--modal diretoria-->
<div class="modal_membros" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">Diretoria</h4>
            </div>
            <div class="modal-body">
                <form id="form_diretoria">
                    <input name="member_id" hidden>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input id="member_name" name="member_name" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Foto</label>
                        <div class="col-lg-10">
                            <input type="file" accept="image/*" id="member_photo" name="member_photo" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Função</label>
                        <div class="col-lg-10">
                            <input id="member_function" name="member_function" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_member" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--modal usuarios-->
<div class="modal_user" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">Usuários</h4>
            </div>
            <div class="modal-body">
                <form id="form_users">
                    <input name="user_id" hidden>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Login</label>
                        <div class="col-lg-10">
                            <input id="user_login" name="user_login" class="form-control" maxlength="30">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input id="user_full_name" name="user_full_name" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                        <input id="user_email" name="user_email" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Confirmar Email</label>
                        <div class="col-lg-10">
                        <input id="user_email_confirm" name="user_email_confirm" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Senha</label>
                        <div class="col-lg-10">
                        <input type="password" id="user_password" name="user_password" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Confirmar Senha</label>
                        <div class="col-lg-10">
                        <input type="password" id="user_password_confirm" name="user_password_confirm" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_user" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
