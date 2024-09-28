<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
    <link rel="stylesheet" href="index.css">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(78, 120, 145), rgb(7, 45, 63));
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
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

        .inputBox {
            position: relative;
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
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
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

        #data_nasc {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
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
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(18, 40, 66), rgb(121, 123, 124));
        }

        #back-button {
            background-color: dodgerblue;
            border: none;
            padding: 10px;
            color: white;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            display: block;
            text-align: center;
            margin-top: 15px;
            width: 20%;
            
        }

        #back-button:hover {
            background-color: rgb(18, 40, 66);
        }
    </style>

</head>

<body>
    <div class="box">
        <form action="/company/clientes/cadastro" method="POST">
            <fieldset>
                <legend class="legend"><b>Cadastre um Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label class="labelInput" for="nome">Nome do Cliente</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label class="labelInput" for="email">Email</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label class="labelInput" for="telefone">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <br>

                <label for="data_nasc"> <b>Data de Nascimento:</b></label>
                <input type="date" name="data_nasc" id="data_nasc" required>

                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label class="labelInput" for="cidade">Cidade:</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label class="labelInput" for="estado">Estado:</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label class="labelInput" for="endereco">Endereço:</label>
                </div>
                <br>
                <br>
                <button type="submit" name="submit" id="submit">Cadastrar</button>
            </fieldset>
        </form>
        
        <a href="/company/empresas/listar" id="back-button">Voltar</a>
    </div>
</body>

</html>
