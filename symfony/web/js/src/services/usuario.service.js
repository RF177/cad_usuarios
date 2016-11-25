app.service('UsuarioService', UsuarioService);

UsuarioService.$inject = ['$http'];

function UsuarioService($http) {

  var salvar = function(usuario) {
    return $http.post('/rest/usuarios',usuario);
  }

  var atualizar = function(usuario) {
    return $http.put('/rest/usuarios/'+usuario.id,usuario);
  }

  var remover = function(usuario) {
    return $http.delete('/rest/usuarios/'+usuario.id);
  }

  var consultarTodos = function() {
    return $http.get('/rest/usuarios');
  }

  var consultarPorId = function(id) {
    return $http.get('/rest/usuario/'+id)
  }

  return {salvar : salvar,
          atualizar : atualizar,
          remover : remover,
          consultarTodos : consultarTodos,
          consultarPorId : consultarPorId}

};
