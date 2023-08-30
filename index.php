<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800;900&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Poppins:wght@400;800;900&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f9;
        }

        .conteudo-principal {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        .lado-A-form {
            margin-top: 35px;
            width: 45%;
        }

        .lado-A-form-texto {
            font-size: 23px;
        }

        h2 {
            font-size: 40px;
        }

        .lado-B-img {
            width: 43%;
        }

        .cards {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card {
            background-color: #88b0ec0c;
            
        }

        .fundo-box2 {
            position: absolute;
            margin: 81px 0px 0px;
            width: 627px;
            height: 520px;
            background-color: rgb(255, 255, 255);
            border-radius: 250% 0% 0% 0%;
            box-shadow: 2px 2px 20px 2px rgba(0, 0, 0, 0.61);
        }

        button{
            margin: 15px 0px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style=" box-shadow: 2px 2px 20px 2px rgba(128, 128, 128, 0.61);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="margin-left: 34px;">Agenda<i class="bi bi-calendar-plus"></i>Saude</a>
        </div>
    </nav>
    <div class="conteudo-principal">
        <div class="lado-A-form">
            <div class="lado-A-form-texto">
                <h2><b>Cuide da sua saude sem sair de casa!</b></h2>
                <p>Faça o agendamento para poder fazer sua consulta online.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <h5 class="card-header" style="color: #0d6efd;">Agendamento Online</h5>
                    <div class="card-body">
                        <p class="card-text">Formulário para agendar consulta online.</p>
                        <a href="/agendacrud/form.php" class="btn btn-primary">Agendar</a>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header" style="color: #0d6efd;">Consultar Agendamento</h5>
                    <div class="card-body">
                        <form action="consulta_script.php" method="GET"> <!-- Alterado action e método -->
                            <p>Certifique-se de que digitou seu e-mail corretamente!</p>
                            <input type="email" class="form-control" id="exampleFormControlInput1" type="search" name="email" placeholder="nome@exemplo.com">
                            <button type="submit" class="btn btn-primary">Consultar</button>
                        </form> <!-- Tag de fechamento do formulário adicionada -->
                    </div>

                </div>
            </div>
        </div>
        <div class="lado-B-img">
            <!--<div class="fundo-box2"></div>-->
            <img src="img-pessoas.jpeg" style="margin-top: 30px; margin-left: 10%; width:70%; border-radius: 10px; position: relative;">

        </div>
    </div>
</body>

</html>