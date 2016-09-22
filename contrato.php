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
        <div class="styled-select col-sm-4 col-xs-7" >   
            <select required="required" id="turndur" name="Status de contrato" data-toggle="tooltip" title="Status atual do contrato!">  
            <option value="">Status</option>
            <option value="Ativo" >Ativo</option> 
            <option value="Desativo">Desativo</option>
            </select>
        </div>
        <div class="styled-select  col-sm-4 col-xs-7 ">
            <select required="required" id="turndur" name="renovação"data-toggle="tooltip" title="renovação!">
            <option value="">renovação</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
            <option value="Prorrogado">Prorrogado</option>
            </select>
        </div>
        <div class="col-sm-3 col-xs-5"  ><!--div periodo -->
            <label >Periodo de inicio:</label>
            <input data-toggle="tooltip" title="periodo de inicio do estagio!" type="text" class="form-control" name="periodo de inicio" value="1º (01/2016)" readonly>
        </div><!--div periodo -->
</div> <!--PRIMEIRA LINHA DE COMBLIST -->
<br>
<div class="form-group row">
    <div class="col-sm-3 col-xs-6"><!--div rg -->
        <label >Inicio</label>
        <input data-toggle="tooltip" title="inicio do estagio!" type="date" class="form-control" name="inicio" value="">
    </div><!--div rg -->
    <div class="col-sm-3 col-xs-6"><!--div cpf -->
        <label >Termino</label>
        <input data-toggle="tooltip" title="termino do estagio!" type="date" class="form-control" name="termino" value="">
    </div><!--div cpf -->
    <div class="col-sm-3 col-xs-6"><!--div nasc -->
        <label >Relatorio</label>
        <input data-toggle="tooltip" title="Relatorio!" type="date" class="form-control" name="cpf" value="08/10/1992">
    </div>
     <div class="styled-select col-sm-3 col-xs-6">
        <select required="required" id="turndur" name="entrega relatorio"data-toggle="tooltip" title="Entrega do Relatorio!">
            <option value="">entrega do relatorio</option>
            <option value="Restrita">OK</option>
            <option value="Aberta">pendente</option>
            </select>
    </div><!--div nasc -->
</div>
<fieldset class="form-group"  disabled style="display:none;">
        <legend >Prorrogação do estagio</legend>
    <div class="col-sm-3 col-xs-6"><!--div rg -->
        <label >Inicio</label>
        <input data-toggle="tooltip" title="inicio do estagio!" type="date" class="form-control" name="inicio" value="">
    </div><!--div rg -->
    <div class="col-sm-3 col-xs-6"><!--div cpf -->
        <label >Termino</label>
        <input data-toggle="tooltip" title="termino do estagio!" type="date" class="form-control" name="termino" value="">
    </div><!--div cpf -->
    <div class="col-sm-3 col-xs-6"><!--div nasc -->
        <label >Relatorio</label>
        <input data-toggle="tooltip" title="Relatorio!" type="date" class="form-control" name="relatorio" value="" >
    </div>
     <div class="styled-select col-sm-3 col-xs-6">
        <select required="required" id="turndur" name="entrega relatorio"data-toggle="tooltip" title="Entrega do Relatorio!">
            <option value="">entrega do relatorio</option>
            <option value="Restrita">OK</option>
            <option value="Aberta">pendente</option>
            </select>
    </div><!--div nasc -->
</fieldset>

<fieldset class=" form-group" >
    <legend>1° recesso</legend>
    <div class="col-sm-3 col-xs-4"><!--div cpf -->
        <label>Dias</label>
        <input data-toggle="tooltip" title="Dias de recesso!" type="number" class="form-control" name="diasrecesso1" value="">
    </div><!--div cpf -->
    <div class="col-sm-5 col-xs-8 "><!--div nasc -->
        <label >Data</label>
        <input data-toggle="tooltip" title="data!" type="date" class="form-control" name="data1" value="08/10/1992">
    </div>
</fieldset>

<fieldset class=" form-group" disabled style="display:none;">
    <legend>2° recesso</legend>
    <div class="col-sm-3 col-xs-4"><!--div cpf -->
        <label>Dias</label>
        <input data-toggle="tooltip" title="Dias de recesso!" type="number" class="form-control" name="diasrecesso2" value="">
    </div><!--div cpf -->
    <div class="col-sm-5 col-xs-8 "><!--div nasc -->
        <label >Data</label>
        <input data-toggle="tooltip" title="data!" type="date" class="form-control" name="data2" value="08/10/1992">
    </div>
</fieldset>

<fieldset class=" form-group" disabled style="display:none;">
    <legend>3° recesso</legend>
    <div class="col-sm-3 col-xs-4"><!--div cpf -->
        <label>Dias</label>
        <input data-toggle="tooltip" title="Dias de recesso!" type="number" class="form-control" name="diasrecesso3" value="">
    </div><!--div cpf -->
    <div class="col-sm-5 col-xs-8 "><!--div nasc -->
        <label >Data</label>
        <input data-toggle="tooltip" title="data!" type="date" class="form-control" name="data3" value="08/10/1992">
    </div>
</fieldset>

<fieldset class=" form-group" >
    <legend>Periodos</legend>
    <div class="col-sm-3 col-xs-4"><!--div cpf -->
        <label>Dias</label>
        <input data-toggle="tooltip" title="Dias de recesso!" type="number" class="form-control" name="diasrecesso" value="">
    </div><!--div cpf -->
    <div class="col-sm-5 col-xs-8 "><!--div nasc -->
        <label >Data</label>
        <input data-toggle="tooltip" title="Relatorio!" type="month" class="form-control" name="data" value="08/10/1992">
    </div>
</fieldset>

<div class="container-fluid row"> <!--PRIMEIRA LINHA DE COMBLIST -->
        <div class="col-sm-4 col-xs-6"  ><!--div periodo -->
            <label >Desligamento:</label>
            <input data-toggle="tooltip" title="Data do desligamento!" type="date" class="form-control" name="datadesligamento" value="">
        </div><!--div periodo -->
        <div class="styled-select col-sm-3 col-xs-6" >   
            <select required="required" id="turndur" name="Status de contrato" data-toggle="tooltip" title="Status atual do contrato!">  
            <option value="">Motivo</option>
            <option value="Ativo" >prazo</option> 
            <option value="Desativo">formatura</option>
            </select>
        </div>
        <div class="col-sm-5 col-xs-12"  ><!--div periodo -->
            <label >Acerto:</label>
            <input data-toggle="tooltip" title="Data do desligamento!" type="text" class="form-control" name="datadesligamento" value="">
        </div><!--div periodo -->
</div> <!--PRIMEIRA LINHA DE COMBLIST -->
<br>
<div class="form-group"> <!--div do curriculo -->
        <label for="comment">Observação:</label>
        <textarea data-toggle="tooltip" title="curriculo!" class="form-control"  rows="5"    >fadsifiashdbfsd</textarea>
    </div> <!--div do curriculo -->
    
    <br>
    <input type="submit" value="Alterar" class="btn btn-primary disabled">
    <br><br>
</form>