<h2>Id do Contrato</h2>
<br>
<form action="aluno" method="post" id='form2'></form>
<form action="estagio" method="post" id='form3'></form>

<form action="action_page.php">
    <div class="form-group row"><!-- divs aluno e estagio-->
        <div class="col-sm-9 col-xs-9"><!--div aluno -->
            <label >aluno</label>
            <input data-toggle="tooltip" title="aluno!" class="btn btn-primary form-control" name="Perfil aluno" value="Icaro george lanzarini pimentel" value="submit" type="submit" form="form2">            
        </div><!--div aluno -->   
        <div class="col-sm-3 col-xs-3"><!--div estagio -->
            <label >estagio</label>
            <input data-toggle="tooltip" title="estagio!" class="btn btn-primary form-control" name="Perfil estagio" value="52345324" value="submit" type="submit" form="form3">            
        </div><!--div estagio --> 
    </div><!-- divs aluno e estagio-->

<div class="container-fluid row"> <!--PRIMEIRA LINHA DE COMBLIST -->
        <div class="styled-select col-sm-4" >   
            <select required="required" id="turndur" name="Status de contrato" data-toggle="tooltip" title="Status atual do contrato!">  
            <option value="">Status</option>
            <option value="Ativo" >Ativo</option> 
            <option value="Desativo">Desativo</option>
            </select>
        </div>
        <div class="styled-select  col-sm-4  ">
            <select required="required" id="turndur" name="renovação"data-toggle="tooltip" title="renovação!">
            <option value="">renovação</option>
            <option value="Restrita">Sim</option>
            <option value="Aberta">Não</option>
            </select>
        </div>
        <div class="col-sm-3 col-xs-6"  ><!--div periodo -->
            <label >Periodo de inicio:</label>
            <input data-toggle="tooltip" title="periodo de inicio do estagio!" type="text" class="form-control" name="periodo de inicio" value="1º (01/2016)" readonly>
        </div><!--div periodo -->
    </div> <!--PRIMEIRA LINHA DE COMBLIST -->

</form>