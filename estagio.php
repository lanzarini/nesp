<h2>Id do Estagio</h2>
<br>
<form action="setor" method="post" id='form2'></form>
<form action="unidade" method="post" id='form3'></form>
<form action="supervisor" method="post" id='form4'></form>

<form action="action_page.php">
    <div class="container-fluid row"> <!--PRIMEIRA LINHA DE COMBLIST -->
        <div class="styled-select col-sm-4" >   
            <select required="required" id="turndur" name="Status" data-toggle="tooltip" title="Status atual do estagio!">  
            <option value="">Status</option>
            <option value="Ativo" >Ativo</option> 
            <option value="Desativo">Desativo</option>
            <option value="Em chamada">Em chamada</option>
            <option value="Fase de incrição">Fase de incrição</option>
            <option value="Requer aprovação">Requer aprovação</option>
            </select>
        </div>
        <div class="styled-select  col-sm-4  ">
            <select required="required" id="turndur" name="Tipo de vaga"data-toggle="tooltip" title="Tipo da vaga!">
            <option value="">Tipo de vaga</option>
            <option value="Restrita">Restrita</option>
            <option value="Aberta">Aberta</option>
            </select>
        </div>
        <div class="styled-select col-sm-4" >   
            <select required="required" id="turndur" name="Area" data-toggle="tooltip" title="Area de atuação do estagio!">  
            <option value="">Area</option>
            <option value="Geral" >Geral</option>
            <option value="Saude" >Saude</option> 
            <option value="Tecnologia">Tecnologia</option>
            </select>
        </div>
    </div> <!--PRIMEIRA LINHA DE COMBLIST -->
    <br><br>
    <div class="form-group row"><!-- divs orientador e supervisor-->
        <div class="col-xs-6 "><!--div orientador -->
            <label >Orientador</label>
            <input data-toggle="tooltip" title="Orientador!" type="text" class="form-control" name="orientador" value="Icaro george lanzarini pimentel" readonly>
        </div><!--div orientador -->
        <div class="col-xs-6 "><!--div supervisor -->
            <label >Supervisor</label>
            <input data-toggle="tooltip" title="Perfil Supervisor!" class="btn btn-primary form-control" name="supervisor" value="Icaro george lanzarini pimentel" value="submit" type="submit" form="form4">
        </div> <!--div supervisor -->
    </div> <!-- divs orientador e supervisor-->
    <br><br>
    <div class="row"> <!-- divs unidade e setor-->
        <div class="col-xs-3 "> <!--div unidade -->
            <label >Unidade:</label>
            <input data-toggle="tooltip" title="Pag Unidade!" class="btn btn-primary form-control" name="unidade" value="CCH" value="submit" type="submit" form="form3">
        </div><!--div unidade -->
        <div class="col-xs-9 " ><!--div setor -->
            <label >Setor:</label>
            <input data-toggle="tooltip" title="Pag setor!" class="btn btn-primary form-control" name="setor" value="Diretoria letras" value="submit" type="submit" form="form2">
        </div> <!--div setor -->
    </div> <!-- divs unidade e setor-->
    <br><br>

    <div class="form-group row"  ><!--Segunda LINHA DE COMBLIST -->
        <div  class="col-sm-3 col-xs-6" > <!-- div horario entrada-->
            <label >Entrada:</label>
            <input data-toggle="tooltip" title="Horario de entrada!" type="time" class="form-control" name="bday" readonly>
        </div><!-- div horario entrada-->
        <div  class="col-sm-3 col-xs-6" ><!-- div horario saida-->
            <label >Saida:</label>
            <input data-toggle="tooltip" title="Horario de saida!" type="time" class="form-control" name="bday">
        </div><!-- div horario saida-->
        <div class="styled-select col-sm-3 col-xs-6 " > <!-- div turno-->
            <select data-toggle="tooltip" id="turndur" title="Turno do estagio!" required="required" name="Turno">
            <option value="">Turno</option>
            <option value="Matutino">Matutino</option>
            <option value="Vespertino">Vespertino</option>
            <option value="Noturno">Noturno</option>
            <option value="Diurno">Diurno</option>
            </select>
        </div><!-- div turno-->
        <div class="styled-select col-sm-3 col-xs-6 "  > <!--div duração do estagio -->
            <select data-toggle="tooltip" title="Duração!" required="required" name="Duração" id="turndur" disabled><!--desabilitado, n pode alterar -->
            <option value="">Duração</option>
            <option value="6meses" selected>6 meses</option><!--selecionado, opçao buscada do bd-->
            <option value="1ano">1 ano</option>
            <option value="2ano">2 anos</option>
            </select>
        </div><!--div duração do estagio -->
    </div> <!--Segunda LINHA DE COMBLIST -->
    <br>
    <div class="form-group"> <!--div da area de descrição -->
        <label for="comment">Descrição do estagio:</label>
        <textarea data-toggle="tooltip" title="Descrição!" class="form-control mceNonEditable"  Data Type = "HTML Editor" rows="1" id="desativo" readonly ><p style="text-align: center;">Curriculo do usuario</p><br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br><br><br></textarea>
    </div> <!--div da area de descrição -->
    <br>
    <input type="submit" value="Alterar perfil de usuario" class="btn btn-primary disabled">
    <br><br>
</form>