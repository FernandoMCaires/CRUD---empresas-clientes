<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresa</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(78, 120, 145), rgb(7, 45, 63));
            margin: 0;
            padding: 20px;
            color: white;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: dodgerblue;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 1px solid white;
            background: none;
            outline: none;
            color: white;
            font-size: 15px;
            letter-spacing: 1px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-bottom: 2px solid dodgerblue;
        }

        button {
            background-image: linear-gradient(to right, rgb(67, 146, 241), rgb(221, 230, 235));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-image: linear-gradient(to right, rgb(18, 40, 66), rgb(121, 123, 124));
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: dodgerblue;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Empresa</h1>
        <form action="/company/empresas/cadastrar" method="POST">
            <div>
                <label for="nome">Nome da Empresa:</label>
                <input type="text" name="nome" id="nome" required />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required />
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required />
            </div>
            <button type="submit">Cadastrar</button>
        </form>
        <p class="login-link">Já tem uma conta? <a href="/company/login">Faça login</a></p>
    </div>
</body>
</html>
