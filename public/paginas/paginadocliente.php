        <!-- Begin page content -->
        
       
        
    <div class="container-fluid">
        <div class="well-lg">
      <div class="page-header">
          <h1 class="text-center">Projeto de Estudo fase 2 - PHP 00</h1>
          <h3 class="text-success text-center">Pagina do cliente</h3>
      </div>
      
                <?php
                
                if (isset($_GET)) {
                    
                     $codigo = array_keys($_GET);
                     
                     foreach ($codigo as $key => $value) {
        $valor = $value - 1;
        
           
                            
                    ?>
                    
        
               
        
                    <form class="form-horizontal" role="form">
                        
                     <div class="row">
                         <div class="col-md-6">
                           
                             <p> Dados Pessoais:</p>
                             
                            <div class="form-group">
    <label for="inputNome" class="col-sm-2 control-label">ID:</label>
    <div class="col-sm-10">
        <input type="number" value="<?php echo $pessoa[$valor]->getID();?>" class="form-control" placeholder="Ex: Fulano">
                    </div>
  </div>
                        
                        
          <div class="form-group">
    <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
    <div class="col-sm-10">
        <input type="text" value="<?php echo $pessoa[$valor]->getNome();?>" class="form-control" placeholder="Ex: Fulano">
                    </div>
  </div>
          
           <div class="form-group">
    <label for="inputSobrenome" class="col-sm-2 control-label">Sobrenome:</label>
    <div class="col-sm-10">
        <input type="text" value="<?php echo $pessoa[$valor]->getSobrenome();?>" class="form-control" placeholder="Ex: da Silva ">
    </div>
  </div>
          
           <div class="form-group">
    <label for="inputCpf" class="col-sm-2 control-label">CPF:</label>
    <div class="col-sm-10">
        <input type="text" value="<?php echo $pessoa[$valor]->getCPF();?>" class="form-control" placeholder="Ex: 000 000 000 00 ">
    </div>
  </div>
          
                   
          
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" value="<?php echo $pessoa[$valor]->getEmail();?>" class="form-control" id="inputEmail3" placeholder="Ex.fulano@email.com">
    </div>
  </div>
 
 
          
          <div class="form-group">
    <label for="inputTelefone" class="col-sm-2 control-label">Telefone:</label>
    <div class="col-sm-10">
        <input type="tel" value="<?php echo $pessoa[$valor]->getTelefone();?>" class="form-control" placeholder="Ex: 000 000 000 00 ">
    </div>
  </div>
          
          <div class="form-group">
    <label for="inputRua" class="col-sm-2 control-label">Rua:</label>
    <div class="col-sm-10">
        <input type="text" value="<?php echo $pessoa[$valor]->getRua();?>" class="form-control" placeholder="Ex: Rua tal tal tal ">
    </div>
  </div>
          <div class="form-group">
    <label for="inputNumero" class="col-sm-2 control-label">Numero:</label>
    <div class="col-sm-10">
        <input type="number" value="<?php echo $pessoa[$valor]->getNumero();?>" class="form-control" placeholder="Ex: 1314 ">
    </div>
  </div>
          <div class="form-group">
    <label for="inputBairro" class="col-sm-2 control-label">Bairro:</label>
    <div class="col-sm-10">
        <input type="text" value="<?php echo $pessoa[$valor]->getBairro();?>"  class="form-control" placeholder="Ex: Jardim Camburi ">
    </div>
  </div>
          <div class="form-group">
    <label for="inputCidade" class="col-sm-2 control-label">Cidade:</label>
    <div class="col-sm-10">
        <input type="text" value="<?php echo $pessoa[$valor]->getCidade();?>" class="form-control" placeholder="Ex: Vitoria ">
    </div>
  </div>
          <div class="form-group">
    <label for="inputEstado" class="col-sm-2 control-label">Estado:</label>
    <div class="col-sm-10">
        <input type="text" value="<?php echo $pessoa[$valor]->getUF();?>"class="form-control" placeholder="Ex: Espirito Santo ">
    </div>
  </div>
                             
                             
                             
                         </div>
                         <div class="col-md-6">
                                    <p> Endereço para cobrança:</p>
                                    
                                                                        
                             
                             <div class="form-group">
    <label for="inputNome" class="col-sm-2 control-label">Contato:</label>
    <div class="col-sm-10">
        <input type="number" value="<?php echo $pessoa[$valor]->getTelContato();?>" class="form-control" placeholder="Ex: 27 3333 3333">
                    </div>
  </div>
                        
                        
          <div class="form-group">
    <label for="inputNome" class="col-sm-2 control-label">Rua: </label>
    <div class="col-sm-10">
        <input type="text" value="<?php echo $pessoa[$valor]->getCobrRua();?>" class="form-control" placeholder="Ex: Rua Tal">
                    </div>
  </div>
          
           <div class="form-group">
    <label for="inputSobrenome" class="col-sm-2 control-label">Numero:</label>
    <div class="col-sm-10">
        <input type="number" value="<?php echo $pessoa[$valor]->getCobrNumero();?>" class="form-control" placeholder="Ex: 33">
    </div>
  </div>
          
           <div class="form-group">
    <label for="inputCpf" class="col-sm-2 control-label">Complemento:</label>
    <div class="col-sm-10">
        <input type="text" value="<?php echo $pessoa[$valor]->getCobrComplemento();?>" class="form-control" placeholder="Ex: apto tal ">
    </div>
  </div>
          
                   
          
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Bairro:</label>
    <div class="col-sm-10">
      <input type="text" value="<?php echo $pessoa[$valor]->getCobrBairro();?>" class="form-control" id="inputEmail3" placeholder="Ex. Jardim Camburi">
    </div>
  </div>
 
 
          
          <div class="form-group">
    <label for="inputTelefone" class="col-sm-2 control-label">Cep:</label>
    <div class="col-sm-10">
        <input type="number" value="<?php echo $pessoa[$valor]->getCobrCep();?>" class="form-control" placeholder="Ex: 29140690 ">
    </div>
  </div>
          
          <div class="form-group">
    <label for="inputRua" class="col-sm-2 control-label">Municipio:</label>
    <div class="col-sm-10">
        <input type="text" value="<?php echo $pessoa[$valor]->getCobrMunicipio();?>" class="form-control" placeholder="Ex: Vitoria">
    </div>
  </div>
          <div class="form-group">
    <label for="inputNumero" class="col-sm-2 control-label">Estado:</label>
    <div class="col-sm-10">
        <input type="number" value="<?php echo $pessoa[$valor]->getCobrUf();?>" class="form-control" placeholder="Ex: ES ">
    </div>
  </div>
          
          
          
                             
                         </div>
</div>                        
          
                        
          
          
          
          
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
       <a href="home" class="btn btn-primary btn-lg active" role="button">OK! Desejo Voltar</a>
    </div>
  </div>
</form>        
                    
                    
                 <?php   
                                 
                                   
                }  }  
                
                
                ?>
               
        </div>
             </div>
    
    
