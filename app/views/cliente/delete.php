<div class="base-home">
    <h1 class="titulo"><span class="cor">Excluir</span> cadastro</h1>
    <div class="base-formulario">	
   
            <label>Nome</label>
            <input name="txt_nome" value="<?php echo $equipamento->nome ?>" type="text" placeholder="Insira umm nome">
            <label>Email</label>
            <input name="txt_email" value="<?php echo $equipamento->email ?>" type="text" placeholder="Insira um email">
            <label>Telefone</label>
            <input name="txt_fone" value="<?php echo $equipamento->fone ?>" type="text" placeholder="Insira seu telefone">
            	
            <a href="<?php echo URL_BASE . "cliente/delete/" .$equipamento->id_cliente."/S" ?>"class="btn">Excluir</a>
            <input type="reset" name="Reset" id="button" value="Cancelar" class="btn limpar">
     
    </div>	
</div>	

