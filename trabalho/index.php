<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Cansan</title>
    <link rel="stylesheet" href="cansan.css">
</head>
<body>
<div class="container_form">

            <center><h1>Cadastro de doadores</h1></center>
            <form class="form" action="processa-dados.php" method="POST" enctype="multipart/form-data">
                <br>
                <div class="P">
                    <label for="nome" class="form_label">Nome do doador :</label>
                    <input type="text" name="nome" class="fv" id="nome" placeholder="Nome" required>
                </div>
                <br>
                <div class="P">
                    <label for="cpf" class="form_label">CPF :</label>
                    <input type="text" name="cpf" class="fv" id="cpf" placeholder="seu CPF" required>
                </div>
                <br>
                <div class="P">
                    <label for="datanascimento" class="form_label">Data de nascimento : </label>
                    <input type="date" name="datanascimento" class="fv" id="datanascimento" placeholder="Data de Nascimento" required>
                </div>
                <br>
                <div class="P">
                        <label for="tiposexo" class="form_label">Sexo :</label>    
                            <input type="radio" name="sexo" id="Masculino"> Masculino
                            <input type="radio"name="sexo" id="Feminino"> Feminino
                </div>
                <br>
                <div class="P">
                    
                    <label for="tiposangue" class="form_label">Tipo sanguineo :</label>
                    <select name="tiposangue" class="dropdown" required>
                        
                        <option selected disabled class="Cche" value="" required>Opções</option>
                        <option value="A+" class="Cche">A+</option>
                        <option value="A-" class="Cche">A-</option>
                        <option value="B+" class="Cche">B+</option>                    
                        <option value="B-" class="Cche">B-</option>
                        <option value="O+" class="Cche">O+</option>
                        <option value="O-" class="Cche">O-</option>
                        <option value="AB+" class="Cche">AB+</option>
                        <option value="AB-" class="Cche">AB-</option>                   
                    
                    </select>
                </div>
                
                <br>

                <div class="P">
                    <label for="endereco" class="form_label" required>Endereço :</label>
                    <input type="text" name="endereco" class="fv" id="endereco" placeholder="endereco" required>
                </div>

                <br>

                <div class="P">

                <label for="tipodoenca" class="form_label" required>Assinale se sim para algum:</label>
                <input type="checkbox" name="doenca" value="febre" id="tipodoenca"> Febre
                <input type="checkbox" name="doenca" value="dores" id="tipodoenca"> Dores gerais
                <input type="checkbox" name="doenca" value="tonturas" id="tipodoenca"> Tonturas

                </div>

                <form name="form de up" action="processa-dados.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="arquivo" class="ac">Enviar arquivo</label>
            <input type="file" name="arquivo" id="arquivo">
        </div>

        <div>
            <label for="enviar" class="ac">Cadastrar</label>
            <input type="submit" name="enviar" id="enviar">
        </div>
        </form>

    </form>
                
</body>
</html>