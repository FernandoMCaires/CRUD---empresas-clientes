<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(78, 120, 145), rgb(7, 45, 63));
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            color: white;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
            width: 25%;
            text-align: center;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            width: auto;
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        h1 {
            font-size: 32px;
        }

        h2 {
            font-size: 22px;
            padding-bottom: 20px;
        }

        .inputBox {
            position: relative;
            margin-bottom: 20px;
            border: 1px solid;
            border-radius: 5px;

        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            padding: 8px 0;
        }

        .labelInput {
            position: absolute;
            top: 0;
            left: 0;
            pointer-events: none;
            transition: 0.5s;
            color: white;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        .inputUser:focus~.labelInput,
        .inputUser:invalid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: rgb(253, 253, 253);
        }

        #submit {
            background-image: linear-gradient(to right, rgb(67, 146, 241), rgb(221, 230, 235));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(18, 40, 66), rgb(121, 123, 124));
        }

        a {
            color: dodgerblue;
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="box">
        <form method="POST" action="/company/login">
            <h1>Seja bem-vindo!</h1>
            <h2>Já possui login?</h2>
            <div class="inputBox">
                <input type="email" name="email" class="inputUser" required>
                <label class="labelInput">Email</label>
            </div>
            <div class="inputBox">
                <input type="password" name="senha" class="inputUser" required>
                <label class="labelInput">Senha</label>
            </div>
            <button type="submit" id="submit">Login</button>

            <h3>Ainda não tem uma conta?</h3>
            <a href="/company/empresas/cadastrar">Clique aqui</a>
        </form>
    </div>

</body>

</html>