<div class="pedido-atual row">
	<h4 class="title">Cadastros</h4>
	<div class="pesquisa"></div>
	<hr>
	
	<div class="pedidos-ultimos row">
		<div class="col-md-12 row">
			<div class="sajs">
				<div class="col-md-12 row jusk">
					<form method="POST" id="alter-cadastro" style="margin:5px" action="mods/altera.php">
						<div class="row col-md-12" ><h5>Dados de Login</h5></div>
						<div class="list row col-md-12" style="margin-left: 5.5px;">
							<div class="mb-3 row">
								<input type="hidden" name="randomentro"id="randomentro" value="<?php echo $_SESSION['password_user'] ?>" name="">
								<input type="hidden" name="conexao"id="conexao" value="<?php echo $_SESSION['idUsuario'] ?>" name="">
								<div>
									<label class="label form-label col-form-label"  for="alter_email">E-mail:</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" id="alter_email" name="alter_email" placeholder="exemplo@email.com" value="<?php echo $_SESSION['email'] ?>"  disabled="disabled">
								</div>
								<div class="col-md-2 row alteracao-dados-cadastro">
									<a shref="#" class="alter-email alter-email-1" >Alterar</a>
								</div>
							</div>
							<div class="mb-3 row">
								<div>
									<label class="label form-label col-form-label"  for="alter_senha">Senha:</label>
								</div>
								<div class="col-md-9">
									<input type="password" class="form-control" id="alter_senha" name="alter_senha" placeholder="*******" value="" autocomplete="cc-csc">
								</div>
							</div>
						</div>
						<div class="row col-md-12"><h5>Dados Pessoais</h5></div>
						<div class="list row col-md-12" style="margin-left: 5.5px;">
							<div class="mb-3 row">
								<div>
									<label class="label form-label col-form-label" for="nome_user_cadastro">Nome Completo</label>
								</div>
								<div class="col-md-9">
									<input type="" name="nome_user_cadastro" id="nome_user_cadastro" class="form-control" value="<?php echo $_SESSION['user']; ?>">
								</div>
							</div>
							<div class="mb-3 row">
								<div>
									<label class="label form-label col-form-label" for="nascimento_cadastro">Data Nascimento</label>
								</div>
								<div class="col-md-9">
									<input type="date" name="nascimento_cadastro" id="nascimento_cadastro" class="form-control" value="<?php echo $_SESSION['nascimento']; ?>" disabled>
								</div>
							</div>
							<div class="mb-3 row">
								<div>
									<label class="label form-label col-form-label" for="cpf_cadastro">CPF</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="nascimento_cadastro" id="cpf_cadastro" class="form-control disabled	" value="<?php echo substr($_SESSION['cpf'],0,3) ?>########" disabled>
								</div>
							</div>
							<div class="mb-3 row">
								<div>
									<label class="label form-label col-form-label" for="celular_cadastro">Celular <sup>1</sup></label><br>
									<label class="tentativa-atualizar" >caso a gente precise entrar em contato sobre seus pedidos</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="celular_cadastro" id="celular_cadastro" class="form-control" value="<?php echo $_SESSION['celular']; ?>">
								</div>
							</div>
							<div class="mb-3 row">
								<div>
									<label class="label form-label col-form-label" for="celular1_cadastro">Celular <sup>2</sup> </label><br>
									<label class="tentativa-atualizar" >caso a gente precise entrar em contato sobre seus pedidos</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="celular1_cadastro" id="celular1_cadastro" class="form-control" value="<?php echo $_SESSION['telefone']; ?>">
								</div>
							</div>
							<div class="mb-3 row" >
								<div class="col-md-5 row">
									<input type="submit" name="" class="col-md-12 btn btn-secondary" value="Salvar Alterações" id="alter_dados_envia">
								</div>
							</div>
						</div>
					</form >
				</div>

			</div>
		</div>
	</div>
	
</div>