<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - Easy Barber</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body{
            background-color: #0f0f0f;
            color: white;
        }

        .card-register{
            background-color: #171717;
            border: 1px solid #2a2a2a;
            border-radius: 16px;
        }

        .btn-gold{
            background-color: #d4a762;
            border: none;
            color: black;
            font-weight: bold;
        }

        .btn-gold:hover{
            background-color: #be9455;
        }

        .form-control{
            background-color: #111;
            border: 1px solid #2a2a2a;
            color: white;
        }

        .form-control:focus{
            background-color: #111;
            color: white;
            border-color: #d4a762;
            box-shadow: none;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card card-register p-4">

                <div class="text-center mb-4">

                    <h2 class="fw-bold">
                        <i class="bi bi-scissors"></i>
                        Easy Barber
                    </h2>

                    <p class="text-light-emphasis">
                        Criar nova conta
                    </p>

                </div>

                <form action="<?= base_url('usuarios/save') ?>" method="POST">

                    <div class="mb-3">
                        <label class="form-label">
                            Nome
                        </label>

                        <input
                            type="text"
                            name="usuarios_nome"
                            class="form-control"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            name="usuarios_email"
                            class="form-control"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            CPF
                        </label>

                        <input
                            type="text"
                            name="usuarios_cpf"
                            class="form-control"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Telefone
                        </label>

                        <input
                            type="text"
                            name="usuarios_fone"
                            class="form-control"
                        >
                    </div>

                    <div class="mb-4">
                        <label class="form-label">
                            Senha
                        </label>

                        <input
                            type="password"
                            name="usuarios_senha"
                            class="form-control"
                            required
                        >
                    </div>

                    <button type="submit" class="btn btn-gold w-100 py-2">
                        Criar Conta
                    </button>

                </form>

                <div class="text-center mt-4">

                    <span class="text-light-emphasis">
                        Já possui conta?
                    </span>

                    <a href="<?= base_url('login') ?>" class="text-warning">
                        Fazer Login
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
