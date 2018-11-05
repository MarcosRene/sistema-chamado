<div class="base-home">
    <h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
    <div class="base-formulario">	
        <form action="<?php echo URL_BASE . "cliente/salvar" ?>" method="POST">
            <label>Nome</label>
            <input name="txt_nome" value="" type="text" placeholder="Insira um nome">
            <label>Sobrenome</label>
            <input name="txt_sobrenome" value="" type="text" placeholder="Insira um sobrenome">
            <label>Email</label>
            <input name="txt_email" value="" type="email" placeholder="Insira um email">
            <label>Login</label>
            <input name="txt_email" value="" type="email" placeholder="Insira um login">
            <label>Senha</label>
            <input name="txt_fone" value="" type="password" placeholder="Insira uma senha">
            	
            <input type="hidden" name="acao" value="Cadastrar">
            <input type="hidden" name="id" value="">
            <input type="submit" value="Cadastrar" class="btn">
            <input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
        </form>
    </div>	
</div>	