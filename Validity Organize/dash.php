<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Validity Organize</title>
        <link rel="stylesheet" href="estilo.css" type="text/css">
    </head>
    <body>
        <div class="container1">
            <header>
                <img class="logo" src="logo.png" alt="logo">
                <h1>Validity Organize</h1>
                <span class="usuario">Usuário: <?php echo "nome";?></span>
            </header>
            
                          
            <nav class="menu">
                <ul>
                    <a href="dash.php?id=1"><li>Produtos</li></a>
                    <a href="dash.php?id=2"><li>Usuários</li></a>
                    <a href="dash.php?id=3"><li>Sobre</li></a>
                    <li><small>Versão 1.0</small></li>
                </ul>
                
            </nav>
            <main class="box">
                
                <?php
                if(isset($_GET['id'])){
                    if($_GET['id'] == 1){

                        produto();
                    } elseif($_GET['id'] == 2){
                        users();
                    } elseif($_GET['id'] == 3){
                        sobre();
                    }
                }
                function produto(){
                    echo '<h2>PRODUTOS</h2>';
                    include_once('produtos.php');
                    echo "<br><span class='status' name='status'>Status</span>";
                }
                
                function users(){
                    echo '<h2>USUÁRIOS</h2>';
                }
                
                function sobre(){
                   echo '<h2>SOBRE</h2>';
                   include_once('sobre.php');
                }
                ?>
                 
            </main>
            
        </div>
        
    </body>
</html>
