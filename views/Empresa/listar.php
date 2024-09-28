<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel da Empresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right, rgb(78, 120, 145), rgb(7, 45, 63));
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        h2 {
            color: #333;
            border-bottom: 2px solid dodgerblue;
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: rgba(255, 255, 255, 0.9);
        }

        th, td {
            padding: 10px;
            border: 1px solid dodgerblue;
            text-align: left;
        }

        th {
            background-color: dodgerblue;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .button-empresa {
            margin: 10px 0;
        }

        button {
            background-color: dodgerblue;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: 10px; /* Espaçamento entre os botões */
        }

        button:hover {
            background-color: deepskyblue;
        }

        .logout-button {
            background-color: rgb(255, 0, 0);
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .logout-button:hover {
            background-color: darkred;
        }

        .link-cadastrar {
            color: dodgerblue;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }

        .no-data {
            text-align: center;
            color: #777;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <form id="logout-form" action="/company/logout" method="POST" style="display: none;"></form>
    <a class="logout-button" type="submit" form="logout-form" onclick="confirmLogout()" >Logout</a>

    <h2>Dados da Empresa</h2>
    <table class="empresa-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($empresaDados): ?>
                <tr>
                    <td><?= $empresaDados['nome'] ?></td>
                    <td><?= $empresaDados['email'] ?></td>
                </tr>
            <?php else: ?>
                <tr>
                    <td colspan="2" class="no-data">Nenhuma empresa encontrada.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="button-empresa">
        <form action="/company/empresas/editar/<?= htmlspecialchars($empresaId); ?>" method="POST">
            <button type="submit">Editar Informações</button>
        </form>
    </div>

    <h2>Listagem de Clientes</h2>
    <a href="/company/clientes/cadastro" class="link-cadastrar">Quer cadastrar um cliente? Clique aqui!</a>

    <table class="clientes-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Gênero</th>
                <th>Data de Nascimento</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($clienteDados): ?>
                <?php foreach ($clienteDados as $cliente): ?>
                    <tr>
                        <td><?= $cliente['nome'] ?></td>
                        <td><?= $cliente['email'] ?></td>
                        <td><?= $cliente['telefone'] ?></td>
                        <td><?= $cliente['genero'] ?></td>
                        <td><?= $cliente['data_nasc'] ?></td>
                        <td><?= $cliente['cidade'] ?></td>
                        <td><?= $cliente['estado'] ?></td>
                        <td><?= $cliente['endereco'] ?></td>
                        <td>
                            <a href="/company/clientes/editar/<?= $cliente['id'] ?>" style="color: dodgerblue; text-decoration: none;">Editar</a>
                            <span style="margin: 0 10px;">|</span>
                            <a href="/company/clientes/excluir/<?= $cliente['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este cliente?');" style="color: red; text-decoration: none;">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9" class="no-data">Nenhum cliente encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<script>
   const confirmLogout = () => {
    if (confirm("Tem certeza que deseja sair?")){
        document.getElementById('logout-form').submit();
    }
   }
</script>
</body>
</html>
