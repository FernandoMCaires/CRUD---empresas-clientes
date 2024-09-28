<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: linear-gradient(to right, rgb(78, 120, 145), rgb(7, 45, 63));
        }

        .form-edicao {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: dodgerblue;
            outline: none;
        }

        .btn-atualizar {
            width: 100%;
            background-color: dodgerblue;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-atualizar:hover {
            background-color: deepskyblue;
        }
    </style>
</head>

<body>
    <form method="POST" class="form-edicao">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo htmlspecialchars($clienteDados['nome']); ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($clienteDados['email']); ?>" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" id="telefone" value="<?php echo htmlspecialchars($clienteDados['telefone']); ?>" required>

        <label for="genero">Gênero:</label>
        <input type="text" name="genero" id="genero" value="<?php echo htmlspecialchars($clienteDados['genero']); ?>" required>

        <label for="data_nasc">Data de Nascimento:</label>
        <input type="date" name="data_nasc" id="data_nasc" value="<?php echo htmlspecialchars($clienteDados['data_nasc']); ?>" required>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" value="<?php echo htmlspecialchars($clienteDados['cidade']); ?>" required>

        <label for="estado">Estado:</label>
        <input type="text" name="estado" id="estado" value="<?php echo htmlspecialchars($clienteDados['estado']); ?>" required>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" value="<?php echo htmlspecialchars($clienteDados['endereco']); ?>" required>

        <button type="submit" class="btn-atualizar">Atualizar</button>
    </form>

</body>

</html>