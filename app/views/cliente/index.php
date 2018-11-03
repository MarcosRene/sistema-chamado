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
                    <?php foreach ($clientes as $equipamento){?>
                    <tr class="cor1">
                         <td><?php echo $equipamento->id_cliente ?></td>
                        <td><?php echo $equipamento->nome ?></td>
                        <td><?php echo $equipamento->email ?></td>
                        <td><?php echo $equipamento->fone ?></td>
                        <td><?php echo $equipamento->ativo ?></td>
                        <td align="center">
                            <a href="<?php echo URL_BASE . "cliente/edite/" . $equipamento->id_cliente  ?>"class="btn">Editar</a>
                        </td>
                        <td align="center">
                            <a href="<?php echo URL_BASE . "cliente/delete/" . $equipamento->id_cliente  ?>" class="btn">excluir</a>
                        </td>
                    </tr>	
                   <?php } ?>							  
                </tbody>
            </table>
        </div>					
    </div>
</div>