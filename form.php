<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800;900&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Poppins:wght@400;800;900&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
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

        .lado-AB {
            margin-top: 60px;
            width: 310px;
        }
    </style>
</head>

<body>
     <nav class="navbar navbar-expand-lg bg-body-tertiary"
        style=" box-shadow: 2px 2px 20px 2px rgba(128, 128, 128, 0.61);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="margin-left: 34px;">Agenda<i class="bi bi-calendar-plus"></i>Saude</a>
            <a href="/agendacrud/index.php">Voltar ao Início</a>
        </div>
    </nav>
    <div class="conteudo-principal">
        <div class="lado-AB">
            <form action="form_script.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDate1" class="form-label">Horário</label>
                    <input type="datetime-local" class="form-control" name="horario">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</body>

</html>