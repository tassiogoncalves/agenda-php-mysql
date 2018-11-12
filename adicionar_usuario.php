<div class="row">
	<form class="form-horizontal" name="agenda" action="dao/cad_usuario.php" method="post" >
		<div class="form-group">
		 <label>Nome</label>
		  <input type="text" class="form-control" name="nome" placeholder="Nome" autofocus required>
		</div>
		<div class="form-group">
		  <label>login</label>
		   <input type="text" class="form-control" name="login" placeholder="login" autofocus required>
		</div>
		<div class="form-group">
		  <label>senha</label>
		   <input type="password" class="form-control" name="senha" placeholder="senha" autofocus required>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" name="email" placeholder="email" autofocus>
		</div>

		<div class="form-group">
			<input type="checkbox" id="acl" name="acl"/>
			<label for="acl">Administrador?</label>
		</div>
		
		<button type="submit" class="btn btn-primary">Cadastrar</button>
		<button type="reset" class="btn btn-primary">Limpar</button>
	</form>
</div>