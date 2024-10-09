<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right, rgb(78, 120, 145), rgb(7, 45, 63));
            margin: 0;
            padding: 20px;
        }

        .form-edit-empresa {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-edit-empresa label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-edit-empresa input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid dodgerblue;
            border-radius: 5px;
        }

        .password-container {
            display: flex;
            align-items: center;
        }

        .password-container button {
            background-color: dodgerblue;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .password-container button:hover {
            background-color: deepskyblue;
        }

        .button-editar {
            background-color: dodgerblue;
            color: white;
            border: none;
            padding: 15px 0;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .button-editar:hover {
            background-color: deepskyblue;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-voltar {
            background-color: crimson;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
            transition: background-color 0.3s;
        }

        .button-voltar:hover {
            background-color: darkred;
        }
    </style>
</head>

<body>

    <div class="form-edit-empresa">
        <form action="/company/empresas/editar/<?= htmlspecialchars($empresaDados['id']); ?>" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($empresaDados['nome']); ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($empresaDados['email']); ?>" required>

             <!--Comentei, pois ainda não há verificação de senha -->
            <!-- <label for="senha">Senha:</label>
            <div class="password-container">
                <input type="password" name="senha" id="senha" value="<?= htmlspecialchars($empresaDados['senha']); ?>" required>
            </div> -->

            <div class="button-container">
                <button type="submit" class="button-editar">Atualizar!</button>
            </div>
        </form>

        <a href="/company/empresas/listar" class="button-voltar">Voltar</a>

    </div>

</body>

</html>
