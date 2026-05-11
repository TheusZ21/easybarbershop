<?php require_once('Config/Helpers.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Barber</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body{
            background-color: #0f0f0f;
            color: white;
        }

        .navbar{
            background-color: #111;
        }

        .hero{
            min-height: 90vh;
            display: flex;
            align-items: center;
            background: linear-gradient(
                rgba(0,0,0,0.7),
                rgba(0,0,0,0.7)
            ),
            url('https://images.unsplash.com/photo-1621605815971-fbc98d665033?q=80&w=1600&auto=format&fit=crop') center/cover;
        }

        .hero h1{
            font-size: 4rem;
            font-weight: bold;
        }

        .btn-gold{
            background-color: #d4a762;
            color: black;
            font-weight: bold;
            border: none;
        }

        .btn-gold:hover{
            background-color: #be9455;
        }

        .card-service{
            background-color: #1b1b1b;
            border: 1px solid #2a2a2a;
            transition: .3s;
        }

        .card-service:hover{
            transform: translateY(-5px);
        }

        .section-title{
            font-weight: bold;
            margin-bottom: 40px;
        }

        footer{
            background-color: #111;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark py-3">
    <div class="container">

        <a class="navbar-brand fw-bold" href="<?php echo base_url(); ?>">
            <i class="bi bi-scissors"></i> Easy Barber
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="#servicos">Serviços</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contato">Contato</a>
                </li>

                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                    <a href="<?php echo base_url('login'); ?>" class="btn btn-gold px-4">
                        Entrar
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<section class="hero">
    <div class="container">

        <div class="row">
            <div class="col-lg-7">

                <h1>
                    Seu estilo começa aqui.
                </h1>

                <p class="lead mt-4">
                    Agende seu horário online, escolha seu barbeiro
                    e tenha uma experiência moderna sem filas.
                </p>

                <div class="mt-4 d-flex gap-3 flex-wrap">

                    <a href="<?php echo base_url('usuarios/new'); ?>" class="btn btn-gold btn-lg px-4">
                        Criar Conta
                    </a>

                    <a href="<?php echo base_url('login'); ?>" class="btn btn-outline-light btn-lg px-4">
                        Fazer Login
                    </a>

                </div>

            </div>
        </div>

    </div>
</section>

<section class="py-5" id="servicos">

    <div class="container">

        <h2 class="text-center section-title">
            Nossos Serviços
        </h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card card-service p-4 h-100">

                    <i class="bi bi-scissors fs-1 mb-3 text-warning"></i>

                    <h4>Corte</h4>

                    <p class="text-light-emphasis">
                        Cortes modernos e clássicos feitos com precisão.
                    </p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-service p-4 h-100">

                    <i class="bi bi-stars fs-1 mb-3 text-warning"></i>

                    <h4>Barba</h4>

                    <p class="text-light-emphasis">
                        Acabamento profissional para valorizar seu visual.
                    </p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-service p-4 h-100">

                    <i class="bi bi-calendar-check fs-1 mb-3 text-warning"></i>

                    <h4>Agendamento Online</h4>

                    <p class="text-light-emphasis">
                        Escolha horários sem precisar esperar em filas.
                    </p>

                </div>
            </div>

        </div>

    </div>

</section>

<section class="py-5 bg-dark" id="sobre">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <img
                    src="https://images.unsplash.com/photo-1585747860715-2ba37e788b70?q=80&w=1200&auto=format&fit=crop"
                    class="img-fluid rounded"
                    alt=""
                >

            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">

                <h2 class="fw-bold mb-4">
                    Sobre a Easy Barber
                </h2>

                <p class="text-light-emphasis">
                    A Easy Barber foi criada para trazer praticidade,
                    estilo e tecnologia para sua experiência na barbearia.
                </p>

                <p class="text-light-emphasis">
                    Agende seu horário online, escolha o barbeiro ideal
                    e acompanhe tudo diretamente pelo sistema.
                </p>

            </div>

        </div>

    </div>

</section>

<section class="py-5" id="contato">

    <div class="container text-center">

        <h2 class="section-title">
            Contato
        </h2>

        <p class="mb-2">
            <i class="bi bi-geo-alt"></i>
            Santa Isabel - GO
        </p>

        <p class="mb-2">
            <i class="bi bi-whatsapp"></i>
            (62) 99999-9999
        </p>

        <p>
            <i class="bi bi-instagram"></i>
            @easybarber
        </p>

    </div>

</section>

<footer class="py-4 text-center">

    <div class="container">

        <p class="mb-0 text-light-emphasis">
            © <?php echo date('Y'); ?> Easy Barber - Todos os direitos reservados.
        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>