<html lang="en" ng-app="app">

<head>

  <title>Cadastro de Usuários</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="../css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
  <script src="../js/lib/jquery/jquery.min.js"></script>
  <script src="../js/lib/bootstrap/bootstrap.min.js"></script>
  <script src="../js/lib/angular/angular.min.js"></script>
  <script src="../js/lib/angular/angular-route.min.js"></script>
  <script src="../js/src/app/app.js"></script>
  <script src="../js/src/services/usuario.service.js"></script>
  <script src="../js/src/controllers/usuario.controller.js"></script>

  <style>
    input.ng-invalid {
      border-left: 1px solid red;
    }
  </style>

</head>

  <body ng-controller="UsuarioController as uc" ng-init="uc.init()">

    <div class="container-fluid" ng-controller="UsuarioController as uc">

        <div class="page-header">
            <h3> Cadastro de Usuário </h3>
        </div>

        <form name="formUsuario" class="form-horizontal">

          <div class="row">

              <div class="col-md-2 padding-right-zero">
                  <label for="campoId" class="control-label">Identificador</label>
              </div>

              <div class="col-md-8">
                  <input id="campoId" type="text" class="form-control" placeholder="#" ng-model="uc.usuario.id" readonly/>
              </div>

          </div>

          </p>

          <div class="row">

              <div class="col-md-2 padding-right-zero align-right">
                  <label for="campoNome" class="control-label">Nome</label>
              </div>

              <div class="col-md-8">
                  <input id="campoNome" required type="text" class="form-control" placeholder="Nome do Usuário" ng-model="uc.usuario.nome" />
              </div>

          </div>

          </p>

          <div class="row">

              <div class="col-md-2 padding-right-zero align-right">
                  <label for="campoSobrenome" class="control-label">Sobrenome</label>
              </div>

              <div class="col-md-8">
                  <input id="campoSobrenome" required type="text" class="form-control" placeholder="Sobrenome do Usuário" ng-model="uc.usuario.sobrenome" />
              </div>

          </div>

          </p>

          <div class="row">

              <div class="col-md-2 padding-right-zero align-right">
                  <label for="campoSenha" class="control-label">Senha</label>
              </div>

              <div class="col-md-8">
                  <input id="campoSenha" required type="password" class="form-control" placeholder="Senha do Usuário" ng-model="uc.usuario.senha" />
              </div>

          </div>

          </p>

          <div class="row">

              <div class="col-md-2 padding-right-zero align-right">
                  <label for="campoRepetirSenha" class="control-label">Repetir Senha</label>
              </div>

              <div class="col-md-8">
                  <input id="campoRepetirSenha" required type="password" class="form-control" placeholder="Repetir Senha do Usuário" ng-model="uc.usuario.repetirSenha" />
              </div>

          </div>

          </p>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button ng-disabled="!uc.usuario.id" type="text" ng-click="uc.novo()" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo
              </button>
              <button ng-disabled="formUsuario.$invalid || uc.usuario.senha !== uc.usuario.repetirSenha || formUsuario.$pristine" type="text" ng-click="uc.salvar()" class="btn btn-success">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Salvar
              </button>
              <button ng-disabled="!uc.usuario.id" type="button" class="btn btn-danger" aria-label="Left Align" ng-click="uc.remover()">
                <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remover
              </button>
              <button ng-click="uc.consultarTodos()" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Listar Todos
              </button>
            </div>
          </div>

        </form>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Listagem de Usuários</h4>
                </div>
                <div class="modal-body">
                    <p>
                    <div id="busca" class="form-group">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="input-group">
                                  <div class="input-group-addon">Pesquisar</div>
                                  <input type="text" class="form-control" id="campoPesquisar" ng-model="filtroUsuarios" placeholder="Digite aqui seu parâmetro de pesquisa" />
                              </div>
                          </div>
                      </div>
                      </p>

                      <table class="table table-striped">

                          <thead>
                              <tr>
                                  <th>Identificador</th>
                                  <th>Nome</th>
                                  <th>Sobrenome</th>
                                  <th></th>
                              </tr>
                          </thead>

                          <tbody>

                              <tr ng-repeat="usuarioAtual in uc.usuarios | filter: filtroUsuarios">
                                  <td> {{usuarioAtual.id}} </td>
                                  <td> {{usuarioAtual.nome}} </td>
                                  <td> {{usuarioAtual.sobrenome}} </td>
                                  <td>
                                    <button type="button" class="btn btn-default" aria-label="Left Align" ng-click="uc.editar(usuarioAtual)" ng-model="editar" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                                      <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                  </td>
                              </tr>

                          </tbody>

                      </table>

                    </div>
                    </p>
                </div>
                <div class="modal-footer">
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>
  </body>

</html>
