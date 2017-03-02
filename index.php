<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require 'connect.php'; ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>KRONOS</title>
        <link href="assets/css/style.css" rel="stylesheet"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>

        <div class="body_all"> 
            <div class="cabecalho"> 
                <!--img class="img-fundo" src="assets/images/icone_1000x1000.png"-->
                <div class="cab-logo">
                    <img class="img-logo" src="assets/images/logo_1000x258.png" height="120px">
                </div>
                <div class="cab-login">
                    <form method="POST">
                        <input class="inp-email" type="email" name="email" placeholder="DIGITE SEU EMAIL" required>
                        <input class="inp-pass" type="password" name="passwd" placeholder="DIGITE SUA SENHA" required>
                        <input class="inp_subm" type="button" value="Logar" onclick="alert('Esta área está em construção!')">
                    </form>
                </div>
            </div>
            <div class="middle">
                <div class="mid-left"><br><br><br><br><br><br><br><br><center><h1>Pagina em Desenvolvimento</h1></center></div>
                <div class="mid-right">
                    <strong><div class="mid-rig-top">Links Úteis:</div>
                        <div class="mid-rig-links">
                            <?php
                            try {
                                $sqll = "SELECT tipo FROM tb_links_uteis GROUP BY tipo ORDER BY tipo";
                                $sqll = $pdo->query($sqll);
                                foreach ($sqll->fetchAll() as $value) {
                                    
                                    $tipo = $value['tipo']; //variavel tipo
                                    
                                    echo "<br><br><div class='btn-tit'>".$tipo."</div>";

                                    $sql = "SELECT * FROM tb_links_uteis WHERE ativo = 'S' and tipo = '$tipo'";
                                    $sql = $pdo->query($sql);
                                    
                                    if ($sql->rowCount() > 0) {
                                        foreach ($sql->fetchAll() as $key) {                                               
                                            echo "<div class='btn-links'>";
                                            echo '<strong><a href='.$key['link'].'>'.$key['descricao'].'</a></div>';
                                        }
                                    } else {
                                        echo "Não hà links disponiveis";
                                    }
                                }
                            } catch (PDOException $e) {
                                echo "falhou" . $e->getMessage();
                            }
                            ?><br><br>
                        </div>
                </div>
            </div>
            <footer class="footer">
               
                    <div class="footer-left"><center>left</center></div>
                    <div class="footer-meddle"><center>meddle</center></div>
                    <div class="footer-right"><center>right</center></div>
                    <div class="powered">Powered By: Bel. Rafael C. Dresch, Tecg.º Fernando Oliveira</div>

            </footer>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>

