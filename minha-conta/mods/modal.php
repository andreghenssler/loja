<!-- Endereços -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Endereço</h5>
        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" id="c_endereco_meus">
          <input type="hidden"id="conexao2" value="<?php echo $_SESSION['idUsuario'] ?>" name="conexao2">
          <div class="form-group row">
            <div class="col-md-6">
              <label for="estado" class="col-form-label">Estado:</label>
              <select class="custom-select custom-select" id="estado" name="estado">
                <option>Escolha Estado</option>
                <?php echo list_select_estado($con); ?>
              </select>
            </div>
            <div class="col-md-6">
              <label for="cidades" class="col-form-label">Cidade:</label>
              <span class="carregando" style="display: none;">... carregando</span>
              <select class="custom-select custom-select" id="cidades" name="cidades"></select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="nome_endereco" class="form-label">Endereço:</label>
              <label for="nome_endereco" class="form-label">(Avenida, Rua, Estrada, Via, Rodovia)</label>
              <input type="text" id="nome_endereco" class="form-control" name="endereco_meus">
            </div>
            <div class="col-md-6">
              <label for="numero_casa" class="col-form-label">Número</label>
              <input type="text" id="numero_casa" class="form-control" name="numero_casa">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="complemento_endereco" class="form-label">Complemento</label>
              <input type="text" id="complemento_endereco" class="form-control" name="complemento_endereco">
            </div>
            <div class="col-md-6">
              <label for="bairro_endereco" class="form-label">Bairro</label>
              <input type="text" id="bairro_endereco" class="form-control" name="bairro_endereco">
            </div>
          </div>
          <div class="form-group row" style="margin-top:6px">
            <label>Tornal esta endereço Prinipal?</label>
            <div class="col-md-12 row">
              <div class="custom-control custom-radio custom-control-inline col-md-2">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="1" checked>
                <label class="custom-control-label" for="customRadioInline1">Sim</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline col-md-2">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value="2"> 
                <label class="custom-control-label" for="customRadioInline2">Não</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="submit" id="cadasttrEndereco" name="cadasttrEndereco" class="btn btn-outline-primary">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>