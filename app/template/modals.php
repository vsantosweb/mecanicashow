<?php defined('BASE_PATH') OR exit('Acesso Negado!'); ?>
<!-- Modal  Del -->
<div class="modal slide" id="del" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Excluir Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="del_m" class="modal-body">
       <h4 class="text-center">Deseja remover este item?</h4>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
      <button onclick="__TASK.validate_task(true)"type="button" class="btn btn-danger btn-act">Excluir</button>
    </div>
  </div>
</div>
</div>

<!-- Modal Alter -->
<div class="modal slide" id="alter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $this->title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="alter_m" class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
        <button onclick="__TASK.validate_task(true)"type="button" class="btn btn-danger btn-act">Alterar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal add -->
<div class="modal slide" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $this->title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="add_m" class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
        <button onclick="__TASK.validate_task(true)"type="button" class="btn btn-danger btn-act">Continuar ></button>
      </div>
    </div>
  </div>
</div>

<!-- Modal search -->
<div class="modal slide" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $this->title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="search_m" class="modal-body">
        <form id="search_form">
          <div class="form-group col-md-12">
            <label for="inputAddress">Placa do Veículo</label>
            <input type="text" class="form-control text-uppercase" placeholder="PLACA" name="cli_placa" value="ELF0278" required>
          </div>

        </div>
        <div class="modal-footer">
          <a href="#" onclick="__TASK('add', null, this, 'cliente', 'add')" href="#" class="btn dropdown-item btn-out-sample-primary" data-toggle="modal">Cadastro</a>
          <button onclick="budget.checkout(this.form);" type="button" id="budget_check" class="btn btn-sample-primary">Continuar ></button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal orçamento -->
<div class="modal slide" id="orcamento_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $this->title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="orcamento_m" class="modal-body">

      </div>
      <div class="modal-footer">
        <a  href="#" class="btn btn-out-sample-primary" aria-hidden="true" data-dismiss="modal">Cancelar</a>
        <button onclick="budget.send();" type="button" id="budget_check" class="btn btn-sample-primary">Continuar ></button>
      </div>
    </div>
  </div>
</div>