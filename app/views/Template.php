
<html>
    <head>
        <meta charset="utf-8">
        <title>Estudo MVC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "assets/css/style.css" ?>">
    </head>

    <body>
        <div class="conteudo">	
            <div class="base-central">	
                
                <?php include "Cabecalho.php"?>;       
                <?php $this->load($view, $viewData)?>;
                <?php include "Rodape.php"?>;

        	
        </div>		
    </body>
</html>