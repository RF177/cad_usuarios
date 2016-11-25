app.controller('UsuarioController', UsuarioController);

UsuarioController.$inject = ['$scope', 'UsuarioService', '$location'];

function UsuarioController($scope, usuarioService, $location) {

  var uc = this;

  uc.usuarios = [];
  uc.usuario = {};

  uc.salvar = function() {
    if (uc.usuario.id) {
      usuarioService.atualizar(uc.usuario).then(function(response) {
        alert("Usuário atualizado com sucesso!");
        usuarioService.consultarPorId(uc.usuario.id).then(function(response) {
          uc.usuario = response.data;
        });
      }).catch(function(response) {
        alert("Erro ao atualizar usuário!");
      });
    } else {
      usuarioService.salvar(uc.usuario).then(function(response) {
        uc.usuario = response.data;
        alert("Usuário salvo com sucesso!");
      }).catch(function(response) {
        alert("Erro ao salvar usuário!");
      });
    }
  }

  uc.remover = function() {
    usuarioService.remover(uc.usuario).then(function(response) {
      uc.usuario = {};
      alert("Usuário removido com sucesso!");
    }).catch(function(response) {
      alert("Erro ao remover usuário!");
    });
  }

  uc.consultarTodos = function() {
    uc.usuarios = [];
    usuarioService.consultarTodos().then(function(response) {
      uc.usuarios = response.data;
    }).catch(function(response) {
      console.log("Erro ao buscar usuários.");
      uc.usuarios = [];
    });
  }

  uc.editar = function(usuarioEditar) {
    uc.usuario = usuarioEditar;    
    $('#myModal').modal('hide');
  }

  uc.novo = function() {
    uc.usuario = {};
  }

};
