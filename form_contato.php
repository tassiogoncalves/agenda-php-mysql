<div class="row">

  <form class="form-horizontal" name="agenda" action="dao/cad_contato.php" method="post" >
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome" autofocus required>
    </div>
    <div class="form-group">
      <label>E-mail</label>
      <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com.br" required>
    </div>
    <div class="form-group">
      <label>Telefone</label>
      <input type="tel" class="form-control" name="telefone" pattern="\([0-9]{2}\) [0-9]{4}-[0-9]{4}$" placeholder="(00) 0000-0000">
    </div>
    <div class="form-group">
      <label>Celular</label>
      <input type="tel" class="form-control" name="celular" pattern="\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}$" placeholder="(00) 00000-0000" required>
    </div>
    
    <div class="form-group">
      <label>Data de Nascimento</label>
      <input type="date" name="datanascimento">
    </div>
    <div class="form-group">
      <label>Endereço</label>
      <input type="text" class="form-control" name="rua" placeholder="Rua" autofocus>
    </div>
    <div class="form-group">
      <input type="number" class="form-control" name="numero" placeholder="Numero">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="bairro" placeholder="Bairro" autofocus>
    </div>
    <div class="form-group">
      <input type="text" list="cidade" name="cidade" autocomplete="on" placeholder="Cidade">
      <datalist id="cidade">
        <option value="Aracaju">
          <option value="Delmiro">
            <option value="Maceió">
              <option value="Pariconha">
                <option value="Petrolândia">
                </datalist>  
              </div>
              <div class="form-group">
                <input type="text" list="estado" name="estado" autocomplete="on" placeholder="Estado">
                <datalist id="estado">
                  <option value="Alagoas">
                    <option value="Bahia">
                      <option value="Pernambuco">
                        <option value="Sergipe">
                        </datalist>  
                      </div>

                      <div class="form-group">
                        <label>Site</label>
                        <input type="url" class="form-control" name="site" placeholder="Site com http://">
                      </div>
                      <div class="form-group">
                        <label>Observações</label>
                        <textarea type="textarea" class="form-control" name="observacao" placeholder="Observações"rows="3"></textarea>
                      </div>
                      
                      
                      
                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                      <button type="reset" class="btn btn-primary">Limpar</button>

                    </form>
                  </div>