<div class="base-home">
    <h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
    <div class="base-formulario">	
        <form action="<?php echo URL_BASE . "cliente/salvar" ?>" method="POST">
            <label>Nome</label>
            <input name="txt_nome" value="<?php echo $usuario->nome ?>" type="text" placeholder="Insira umm nome">
            <label>Email</label>
            <input name="txt_email" value="<?php echo $usuario->email ?>" type="text" placeholder="Insira um email">
            <label>Telefone</label>
            <input name="txt_fone" value="<?php echo $usuario->fone ?>" type="text" placeholder="Insira seu telefone">
            	

            <input type="hidden" name="id_cliente" value="<?php echo $usuario->id_cliente ?>">
            <input type="submit" value="Cadastrar" class="btn">
            <input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
        </form>
    </div>	
</div>	