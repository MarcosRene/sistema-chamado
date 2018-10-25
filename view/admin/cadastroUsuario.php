
<div class="item9-1">Novo Usuario</div>

<p></p>

<div class="item9-2">
    <form method="POST" action="routes.php">
        <label>Nome</label>
        <input class="input" type="text" name="nome" required>
        <br><br>

        <label>Sobrenome</label>
        <input class="input" type="text" name="sobrenome" required>
        <br><br>

        <label>E-Mail</label>
        <input class="input" type="email" name="email" required>
        <br><br>
        
        <label>Tipo usuário</label>
        <select class="input" name="lista"size="4" >
            <option value="" ></option>
            <option value="comum" >Usuário comum</option>
            <option value="tecnico" >Técnico</option>
            <option value="admin" >Administrador</option>
        </select> <br><br>
      
        
        <label>Login</label>
        <input class="input" type="text" name="login" required>
        <br><br>

        <label>Senha</label>
        <input class="input" type="password" name="senha" required>
        <br><br>

        <input type="hidden" name="acao" value="cadastrarUsuario">
        <button type="submit" class="button">Cadastrar</button>
    </form>
</div>
