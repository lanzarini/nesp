<h2>Id do Usuario</h2>
<br>
<form action="homebot.php" method="post" id='form1'></form>
<form action="action_page.php">
    <div class="form-group row"><!-- divs usuario e tipo-->
        <div class="col-sm-9 col-xs-12"><!--div usuario -->
            <label >Usuario</label>
            <input data-toggle="tooltip" title="Usuario!" class="btn btn-primary form-control" name="Perfil usuario" value="Icaro george lanzarini pimentel" value="submit" type="submit" form="form1">            

        </div><!--div usuario -->   
        <div class="styled-select col-sm-3 col-xs-12" > <!-- div tipo-->  
            <select required="required" id="turndur" name="Area" data-toggle="tooltip" title="Tipo do usuario!">  
            <option value="">Tipo</option>
            <option value="Aluno" >Aluno</option>
            <option value="Supervisor" >Supervisor</option> 
            <option value="Administrador">Administrador</option>
            </select>
        </div><!-- div tipo-->
    </div><!-- divs usuario e tipo-->
    <div class="form-group row"><!-- div atributos aluno-->
        <div  class="col-sm-6 col-xs-6" ><!-- div formatura-->
            <label >Formatura:</label>
            <input data-toggle="tooltip" title="Formatura prevista!" type="month" class="form-control" name="bday">
        </div><!-- div formatura-->
        <div class="styled-select col-sm-6 col-xs-6"><!--div curso -->
            <select required="required" id="turndur" name="Curso" data-toggle="tooltip" title="Curso matriculado!">  
            <option value="">Curso</option>
            <option value="sistemas" >Sistemas</option>
            <option value="" >Busca do banco</option> 
            </select>
        </div><!--div curso -->
    </div> <!-- div atributos aluno-->
    <div class="form-group row"><!-- div atributos supervisor-->
        <div class="col-sm-6 col-xs-4"><!--div masp -->
            <label >Masp</label>
            <input data-toggle="tooltip" title="Masp!" type="text" class="form-control" name="masp do usuario" value="5678654">
        </div><!--div masp -->  
        <div class="styled-select col-sm-6 col-xs-8"><!--div setor -->
            <select required="required" id="turndur" name="Setor" data-toggle="tooltip" title="Setor alocado!">  
            <option value="">Setor</option>
            <option value="dtidesenvolvimento" >dti desenvolvimento</option>
            <option value="" >Busca do banco</option> 
            </select>
        </div><!--div setor -->
    </div><!-- div atributos supervisor-->
    <div class="form-group row">
        <div class="col-sm-4 col-xs-4"><!--div rg -->
            <label >Identidade</label>
            <input data-toggle="tooltip" title="RG!" type="text" class="form-control" name="rg" value="mg-17.576.189">
        </div><!--div rg -->
        <div class="col-sm-4 col-xs-4"><!--div cpf -->
            <label >cpf</label>
            <input data-toggle="tooltip" title="cpf!" type="text" class="form-control" name="cpf" value="117.513.116">
        </div><!--div cpf -->
        <div class="col-sm-4 col-xs-4"><!--div nasc -->
            <label >Nascimento</label>
            <input data-toggle="tooltip" title="data de nascimento!" type="date" class="form-control" name="cpf" value="08/10/1992">
        </div><!--div nasc -->
    
    </div>
    <div class="form-group row">
        <div class="col-xs-9"><!--div rua -->
            <label >Rua</label>
            <input data-toggle="tooltip" title="Rua!" type="text" class="form-control" name="rua" value="alameda dos anjos">
        </div><!--div rg -->
        <div class="col-xs-3"><!--div numero -->
            <label >numero</label>
            <input data-toggle="tooltip" title="numero!" type="text" class="form-control" name="numero" value="117">
        </div><!--div cpf --> 
    </div>
    <div class="form-group row">
        <div class="col-sm-4 col-xs-8"><!--div bairro -->
            <label >Bairro</label>
            <input data-toggle="tooltip" title="Bairro!" type="text" class="form-control" name="bairro" value="alameda dos anjos">
        </div><!--div bairro -->
        <div class="col-sm-2 col-xs-4"><!--div cep -->
            <label >CEP</label>
            <input data-toggle="tooltip" title="CEP!" type="text" class="form-control" name="cep" value="39400-000">
        </div><!--div cep -->
        <div class="styled-select col-sm-4 col-xs-8"><!--div cidade -->
            <select required="required" id="turndur" name="cidade" data-toggle="tooltip" title="cidade!">  
            <option value="">cidade</option>
            <option value="moc" >montes claros</option>
            <option value="pir" >pirapora</option> 
            </select>
        </div><!--div cidade --> 
         <div class="styled-select col-sm-2 col-xs-4"><!--div estado -->
            <select required="required" id="turndur" name="estado" data-toggle="tooltip" title="estado!">  
            <option value="">estado</option>
            <option value="mg" >mg</option> 
            <option value="df" >df</option> 
            </select>
        </div><!--div estado -->      
    </div>
    <div class="form-group row col-sm-6"><!--div email -->
        
            <label >email</label>
            <input data-toggle="tooltip" title="email!" type="text" class="form-control" name="email" value="exemplo@email.com">
        
    </div><!--div email -->
    <div class="form-group row "><!--div fones -->
        <div class="col-sm-3 col-xs-6"  ><!--div fixo -->
            <label >fixo</label>
            <input data-toggle="tooltip" title="fixo!" type="text" class="form-control" name="fixo" value="3333-3333">
        </div><!--div fixo -->
        <div class="col-sm-3 col-xs-6 " ><!--div movel -->
            <label >movel</label>
            <input data-toggle="tooltip" titlefixo="movel!" type="text" class="form-control" name="movel" value="9999-9999">
        </div><!--div movel -->
    </div><!--div fones -->
        <div class="form-group"> <!--div do curriculo -->
        <label for="comment">Curriculo do usuario:</label>
        <textarea data-toggle="tooltip" title="curriculo!" class="form-control "  id="ativo" name="elm4" rows="1"    ><p>Curriculo do usuario<p></textarea>
    </div> <!--div do curriculo -->
    <label>Tempo de estagio: 6 meses</label>
    <br>
    <input type="submit" value="Enviar alteração" class="btn btn-primary disabled">
    <br><br>
</form>