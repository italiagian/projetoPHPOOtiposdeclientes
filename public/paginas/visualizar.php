       
<!-- Begin page content -->
    <div class="container-fluid">
        <div class="well-lg">
      <div class="page-header">
          <h1 class="text-center">Projeto de Estudo fase 2 - PHP 00</h1>
        <h3 class="text-success text-center">Lista de clientes cadastrados</h3>
      </div>
      
        <?php
                        if(isset($_POST['cres'])){
                            ksort($pessoa);
                        }elseif(isset($_POST['dec'])){
                            krsort($pessoa);
                        }else{
                            ksort($pessoa);
                        }
                        ?>
                        <form method="post">
                            <span class="glyphicon glyphicon-heart"></span>
                            <button class="btn btn-warning" type="submit" value="cres" name="cres">Ordem Crescente</button>
                            <button class="btn btn-warning " type="submit" value="dec" name="dec">Ordem Decrescente</button>
                        </form>
        
        
        <table class="table table-striped " cellspacing="0" width="100%">
            
              
  <thead   <tr>
      <th >ID</th>
      <th >NOME.</th>
      <th>SOBRENOME</th>
      <th>EMAIL</th>
      <th>CIDADE</th>
      <th>UF</th>
       <th>PF/PJ</th>
      <th>CLASSIFICACAO</th>
      
      
      <th>VISUALIZAR</th>
      
    </tr>
  </thead>
  <tbody>
       <?php
                                foreach ($pessoa as $key => $value) {
                                ?>
    <tr>
      <td><?php echo $value->getid(); ?></td>
      <td><?php echo $value->getnome(); ?></td>
      <td><?php echo $value->getsobrenome(); ?></td>
      <td><?php echo $value->getemail(); ?></td>
      <td><?php echo $value->getcidade(); ?></td>
      <td><?php echo $value->getUF(); ?></td>
      <td><?php echo $value->getPFouPJ(); ?></td>
      <td><?php echo $value->getGrau(); ?></td>
      <td><a href="visualizarCliente?<?php echo $value->getId();?>"><button class="btn btn-info " type="submit" 
                  name="visualizar" > Visualizar </button></a></td>
                </tr>
    
     <?php
     }  ?>
  </tbody>
</table>
        
                
    </div>
        </div>

    
