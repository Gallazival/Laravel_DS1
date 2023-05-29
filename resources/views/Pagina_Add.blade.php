<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona dados</title>
</head>
<body>
    <p>Adiciona Dados</p>
    <a href={{ url("/") }}>Home</a>
    <div class=adi>
        <form action="./adicionarCartucho.php" method="post" class="form-container" enctype="multipart/form-data">
            <?php if ($erro == 1) {
                                echo '<p class="alert alert-danger">Título, Sistema ou Ano vazio </p> ';
                            } ?>   
            <ul>
                    <li>
                        <label for="nome">Título do Jogo</label>
                        <textarea onkeyup="ajusta_texto(this)" name="nome" value="<?php echo $nome; ?>"><?php echo $nome; ?></textarea>
                        <span>Coloque o Título do Cartucho</span>
                    </li>
                    <li>
                        <label for="sistema">Sistema</label>
                        <textarea onkeyup="ajusta_texto(this)" name="sistema" value="<?php echo $sistema; ?>"><?php echo $sistema; ?></textarea>
                        <span>Coloque o Sistema do Jogo</span>
                    </li>
                    <li>
                        <label for="ano">Ano de lançamento</label>
                        <textarea onkeyup="ajusta_texto(this)" name="ano" value="<?php echo $ano; ?>"><?php echo $ano; ?></textarea>
                        <span>Coloque o ano de lançamento do cartucho</span>
                    </li>
                    <li>
                        <label for="imagem">Tela</label>
                        <input type="file" name="imagem">
                        <span>Escolha o arquivo de imagem apenas permitidos (png, jpeg, jpg)</span>
                    </li>
                    <li>
                        <button type="submit" class="btn btn-primary" name="enviarcartucho">Enviar</button>
                    </li>
                </ul>
            </form>

    </div>
    <a href={{ url("/modifica") }}>Modificar dados</a>
</body>
</html>