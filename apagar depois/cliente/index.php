<div class="base-home">
    <h1 class="titulo"><span class="cor">Lista de</span> contatos</h1>
    <div class="base-lista">
        <span class="qtde"><b><?php echo count($clientes) ?></b> clientes cadastrados</span>
        <div class="tabela">	
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th width="5%" align="left">Id</th>
                        <th width="25%" align="left">Nome</th>
                        <th width="25%" align="left">Email</th>
                        <th width="10%" align="left">Telefone</th>
                        <th width="10%" align="left">Ativo</th>
                        <th width="20%" colspan="2" align="center">Alterar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $usuario){?>
                    <tr class="cor1">
                         <td><?php echo $usuario->id_cliente ?></td>
                        <td><?php echo $usuario->nome ?></td>
                        <td><?php echo $usuario->email ?></td>
                        <td><?php echo $usuario->fone ?></td>
                        <td><?php echo $usuario->ativo ?></td>
                        <td align="center">
                            <a href="<?php echo URL_BASE . "cliente/edite/" . $usuario->id_cliente  ?>"class="btn">Editar</a>
                        </td>
                        <td align="center">
                            <a href="<?php echo URL_BASE . "cliente/delete/" . $usuario->id_cliente  ?>" class="btn">excluir</a>
                        </td>
                    </tr>	
                   <?php } ?>							  
                </tbody>
            </table>
        </div>					
    </div>
</div>