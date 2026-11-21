<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>ForceTrack | Máquinas</title>

    <link rel="stylesheet"
          href="/ForceTrack/CSS/style.css?v=20">

    <link rel="stylesheet"
          href="/ForceTrack/CSS/maquinas.css?v=20">

    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body>


<!-- =========================
     MENU LATERAL
========================= -->

<aside class="sidebar">

    <div class="brand">

        <img
            src="/ForceTrack/IMG/logo.png"
            class="brand-logo"
            alt="ForceTrack"
        >

        <div>

            <div class="brand-name">
                FORCETRACK
            </div>

            <span class="brand-subtitle">
                TRAÇÃO • DADOS • DESEMPENHO
            </span>

        </div>

    </div>


    <div class="nav-title">
        PLATAFORMA
    </div>


    <nav class="nav">

        <a href="/ForceTrack/index.php">

            <i
                data-lucide="home"
                class="nav-icon">
            </i>

            Início

        </a>


        <a href="/ForceTrack/maquinas.php"
           class="active">

            <i
                data-lucide="tractor"
                class="nav-icon">
            </i>

            Máquinas

        </a>


        <a href="/ForceTrack/monitoramento.php">

            <i
                data-lucide="activity"
                class="nav-icon">
            </i>

            Monitoramento

        </a>


        <a href="/ForceTrack/historico.php">

            <i
                data-lucide="chart-no-axes-combined"
                class="nav-icon">
            </i>

            Histórico

        </a>


        <a href="/ForceTrack/anomalias.php">

            <i
                data-lucide="triangle-alert"
                class="nav-icon">
            </i>

            Anomalias

        </a>


        <a href="/ForceTrack/sobre.php">

            <i
                data-lucide="info"
                class="nav-icon">
            </i>

            Sobre

        </a>

    </nav>


    <div class="system-box">

        <span class="system-title">
            CATÁLOGO
        </span>

        <div class="system-line">

            <span>
                MODELOS
            </span>

            <span class="system-state">
                10 MÁQUINAS
            </span>

        </div>


        <div class="system-line">

            <span>
                CATEGORIAS
            </span>

            <span class="system-state">
                3 PORTES
            </span>

        </div>

    </div>

</aside>



<!-- =========================
     CONTEÚDO
========================= -->

<main class="main maquinas-main">


    <!-- HERO -->

    <section class="maquinas-hero">

        <span class="maquinas-kicker">
            FORCETRACK MACHINE LIBRARY
        </span>

        <h1>
            Escolha sua máquina.
        </h1>

        <p>
            Selecione o trator utilizado na operação para
            visualizar suas características técnicas e
            preparar o monitoramento de força de tração.
        </p>

    </section>



    <!-- FILTROS -->

    <section class="filtro-maquinas">

        <button
            class="filtro-btn active"
            data-filter="todos">

            Todos

            <span>
                10
            </span>

        </button>


        <button
            class="filtro-btn"
            data-filter="pequeno">

            Pequeno porte

            <span>
                3
            </span>

        </button>


        <button
            class="filtro-btn"
            data-filter="medio">

            Médio porte

            <span>
                3
            </span>

        </button>


        <button
            class="filtro-btn"
            data-filter="grande">

            Grande porte

            <span>
                4
            </span>

        </button>

    </section>



    <!-- =========================
         CATÁLOGO
    ========================= -->

    <section class="catalogo-maquinas">


        <!-- JOHN DEERE 5075E -->

        <article
            class="trator-card"
            data-porte="pequeno">

            <div class="trator-topo">

                <span class="trator-marca">
                    JOHN DEERE
                </span>

                <span class="porte-tag">
                    PEQUENO
                </span>

            </div>


            <div class="trator-imagem">

                <img
                    src="/ForceTrack/IMG/tratores/john-deere-5075e.avif"
                    alt="John Deere 5075E">

            </div>


            <div class="trator-info">

                <h2>
                    5075E
                </h2>

                <p class="trator-descricao">
                    Versátil, conectado e voltado
                    para operações agrícolas leves
                    e médias.
                </p>


                <div class="trator-specs">

                    <div>
                        <strong>
                            75
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            POTÊNCIA
                        </small>
                    </div>


                    <div>
                        <strong>
                            3
                        </strong>

                        <span>
                            cil.
                        </span>

                        <small>
                            MOTOR
                        </small>
                    </div>


                    <div>
                        <strong>
                            42
                        </strong>

                        <span>
                            L/min
                        </span>

                        <small>
                            HIDRÁULICO
                        </small>
                    </div>

                </div>


                <a
    class="selecionar-trator"
    href="/ForceTrack/trator.php?id=john-deere-5075e">

    Explorar modelo

    <i data-lucide="arrow-up-right"></i>

</a>

            </div>

        </article>



        <!-- MASSEY 4707 -->

        <article
            class="trator-card"
            data-porte="pequeno">

            <div class="trator-topo">

                <span class="trator-marca">
                    MASSEY FERGUSON
                </span>

                <span class="porte-tag">
                    PEQUENO
                </span>

            </div>


            <div class="trator-imagem">

                <img
                    src="/ForceTrack/IMG/tratores/massey-ferguson-mf4707.webp"
                    alt="Massey Ferguson MF 4707">

            </div>


            <div class="trator-info">

                <h2>
                    MF 4707
                </h2>

                <p class="trator-descricao">
                    Motor eletrônico e bom equilíbrio
                    entre força, eficiência e versatilidade.
                </p>


                <div class="trator-specs">

                    <div>
                        <strong>
                            79
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            POTÊNCIA
                        </small>
                    </div>


                    <div>
                        <strong>
                            312
                        </strong>

                        <span>
                            Nm
                        </span>

                        <small>
                            TORQUE
                        </small>
                    </div>


                    <div>
                        <strong>
                            3.000
                        </strong>

                        <span>
                            kgf
                        </span>

                        <small>
                            LEVANTE
                        </small>
                    </div>

                </div>


                <a
    class="selecionar-trator"
    href="/ForceTrack/trator.php?id=massey-mf4707">

    Explorar modelo

    <i data-lucide="arrow-up-right"></i>

</a>

            </div>

        </article>



        <!-- NEW HOLLAND TL5.80 -->

        <article
            class="trator-card"
            data-porte="pequeno">

            <div class="trator-topo">

                <span class="trator-marca">
                    NEW HOLLAND
                </span>

                <span class="porte-tag">
                    PEQUENO
                </span>

            </div>


            <div class="trator-imagem">

                <img
                    src="/ForceTrack/IMG/tratores/new-holland-tl580.png"
                    alt="New Holland TL5.80">

            </div>


            <div class="trator-info">

                <h2>
                    TL5.80
                </h2>

                <p class="trator-descricao">
                    Quatro cilindros e boa capacidade
                    hidráulica para operações variadas.
                </p>


                <div class="trator-specs">

                    <div>
                        <strong>
                            80
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            POTÊNCIA
                        </small>
                    </div>


                    <div>
                        <strong>
                            300
                        </strong>

                        <span>
                            Nm
                        </span>

                        <small>
                            TORQUE
                        </small>
                    </div>


                    <div>
                        <strong>
                            3.600
                        </strong>

                        <span>
                            kgf
                        </span>

                        <small>
                            LEVANTE
                        </small>
                    </div>

                </div>


                <a
    class="selecionar-trator"
    href="/ForceTrack/trator.php?id=new-holland-tl580">

    Explorar modelo

    <i data-lucide="arrow-up-right"></i>

</a>

            </div>

        </article>



        <!-- TL5.90 -->

        <article
            class="trator-card"
            data-porte="medio">

            <div class="trator-topo">

                <span class="trator-marca">
                    NEW HOLLAND
                </span>

                <span class="porte-tag">
                    MÉDIO
                </span>

            </div>


            <div class="trator-imagem">

                <img
                    src="/ForceTrack/IMG/tratores/new-holland-tl5-medio.jpg"
                    alt="New Holland TL5.90">

            </div>


            <div class="trator-info">

                <h2>
                    TL5.90
                </h2>

                <p class="trator-descricao">
                    Evolução da linha TL5 para operações
                    que exigem maior força de arrasto.
                </p>


                <div class="trator-specs">

                    <div>
                        <strong>
                            90
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            POTÊNCIA
                        </small>
                    </div>


                    <div>
                        <strong>
                            330
                        </strong>

                        <span>
                            Nm
                        </span>

                        <small>
                            TORQUE
                        </small>
                    </div>


                    <div>
                        <strong>
                            4
                        </strong>

                        <span>
                            cil.
                        </span>

                        <small>
                            MOTOR
                        </small>
                    </div>

                </div>


                <a
    class="selecionar-trator"
    href="/ForceTrack/trator.php?id=new-holland-tl590">

    Explorar modelo

    <i data-lucide="arrow-up-right"></i>

</a>

            </div>

        </article>



        <!-- TL5.100 -->

        <article
            class="trator-card"
            data-porte="medio">

            <div class="trator-topo">

                <span class="trator-marca">
                    NEW HOLLAND
                </span>

                <span class="porte-tag">
                    MÉDIO
                </span>

            </div>


            <div class="trator-imagem">

                <img
                    src="/ForceTrack/IMG/tratores/new-holland-tl5-medio.jpg"
                    alt="New Holland TL5.100">

            </div>


            <div class="trator-info">

                <h2>
                    TL5.100
                </h2>

                <p class="trator-descricao">
                    Maior torque e potência dentro
                    da configuração intermediária
                    da linha TL5.
                </p>


                <div class="trator-specs">

                    <div>
                        <strong>
                            101
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            POTÊNCIA
                        </small>
                    </div>


                    <div>
                        <strong>
                            380
                        </strong>

                        <span>
                            Nm
                        </span>

                        <small>
                            TORQUE
                        </small>
                    </div>


                    <div>
                        <strong>
                            4
                        </strong>

                        <span>
                            cil.
                        </span>

                        <small>
                            MOTOR
                        </small>
                    </div>

                </div>

                <a
    class="selecionar-trator"
    href="/ForceTrack/trator.php?id=new-holland-tl5100">

    Explorar modelo

    <i data-lucide="arrow-up-right"></i>

</a>

            </div>

        </article>



        <!-- MF 7719 -->

        <article
            class="trator-card"
            data-porte="medio">

            <div class="trator-topo">

                <span class="trator-marca">
                    MASSEY FERGUSON
                </span>

                <span class="porte-tag">
                    MÉDIO PESADO
                </span>

            </div>


            <div class="trator-imagem">

                <img
                    src="/ForceTrack/IMG/tratores/massey-ferguson-mf7719.jpg"
                    alt="Massey Ferguson MF 7719 Dyna-6">

            </div>


            <div class="trator-info">

                <h2>
                    MF 7719 Dyna-6
                </h2>

                <p class="trator-descricao">
                    Alta potência com transmissão
                    Powershift e hidráulico de alto fluxo.
                </p>


                <div class="trator-specs">

                    <div>
                        <strong>
                            195
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            POTÊNCIA
                        </small>
                    </div>


                    <div>
                        <strong>
                            24x24
                        </strong>

                        <small>
                            TRANSMISSÃO
                        </small>
                    </div>


                    <div>
                        <strong>
                            150
                        </strong>

                        <span>
                            L/min
                        </span>

                        <small>
                            HIDRÁULICO
                        </small>
                    </div>

                </div>

                <a
    class="selecionar-trator"
    href="/ForceTrack/trator.php?id=massey-mf7719">
    Explorar modelo

    <i data-lucide="arrow-up-right"></i>

</a>

            </div>

        </article>



        <!-- VALTRA BH 194 -->

        <article
            class="trator-card"
            data-porte="grande">

            <div class="trator-topo">

                <span class="trator-marca">
                    VALTRA
                </span>

                <span class="porte-tag">
                    GRANDE
                </span>

            </div>


            <div class="trator-imagem">

                <img
                    src="/ForceTrack/IMG/tratores/valtra-bh.png"
                    alt="Valtra BH 194">

            </div>


            <div class="trator-info">

                <h2>
                    BH 194
                </h2>

                <p class="trator-descricao">
                    Construção robusta para operações
                    severas e implementos pesados.
                </p>


                <div class="trator-specs">

                    <div>
                        <strong>
                            195
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            POTÊNCIA
                        </small>
                    </div>


                    <div>
                        <strong>
                            6
                        </strong>

                        <span>
                            cil.
                        </span>

                        <small>
                            MOTOR
                        </small>
                    </div>


                    <div>
                        <strong>
                            8.000
                        </strong>

                        <span>
                            kgf
                        </span>

                        <small>
                            LEVANTE
                        </small>
                    </div>

                </div>

                <a
    class="selecionar-trator"
    href="/ForceTrack/trator.php?id=valtra-bh194">

    Explorar modelo

    <i data-lucide="arrow-up-right"></i>

</a>

            </div>

        </article>



        <!-- VALTRA BH 224 -->

        <article
            class="trator-card"
            data-porte="grande">

            <div class="trator-topo">

                <span class="trator-marca">
                    VALTRA
                </span>

                <span class="porte-tag">
                    GRANDE
                </span>

            </div>


            <div class="trator-imagem">

                <img
                    src="/ForceTrack/IMG/tratores/valtra-bh.png"
                    alt="Valtra BH 224">

            </div>


            <div class="trator-info">

                <h2>
                    BH 224
                </h2>

                <p class="trator-descricao">
                    Elevada robustez e estabilidade
                    em trabalhos de alta exigência.
                </p>


                <div class="trator-specs">

                    <div>
                        <strong>
                            220
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            POTÊNCIA
                        </small>
                    </div>


                    <div>
                        <strong>
                            6
                        </strong>

                        <span>
                            cil.
                        </span>

                        <small>
                            MOTOR
                        </small>
                    </div>


                    <div>
                        <strong>
                            8.000
                        </strong>

                        <span>
                            kgf
                        </span>

                        <small>
                            LEVANTE
                        </small>
                    </div>

                </div>


                <a
    class="selecionar-trator"
    href="/ForceTrack/ trator.php?id=valtra-bh224">


    Explorar modelo

    <i data-lucide="arrow-up-right"></i>

</a>

            </div>

        </article>



        <!-- CASE IH -->

        <article
            class="trator-card"
            data-porte="grande">

            <div class="trator-topo">

                <span class="trator-marca">
                    CASE IH
                </span>

                <span class="porte-tag">
                    ALTA POTÊNCIA
                </span>

            </div>


            <div class="trator-imagem">

                <img
                    src="/ForceTrack/IMG/tratores/case_ih_magnum_380.WEBP"
                    alt="Case IH Magnum AFS Connect 400">

            </div>


            <div class="trator-info">

                <h2>
                    Magnum 400
                </h2>

                <p class="trator-descricao">
                    Alta potência, agricultura de precisão
                    e telemetria AFS Connect.
                </p>


                <div class="trator-specs">

                    <div>
                        <strong>
                            396
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            POTÊNCIA
                        </small>
                    </div>


                    <div>
                        <strong>
                            430+
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            GERENCIADA
                        </small>
                    </div>


                    <div>
                        <strong>
                            21x5
                        </strong>

                        <small>
                            POWERSHIFT
                        </small>
                    </div>

                </div>


                <a
    class="selecionar-trator"
    href="/ForceTrack/trator.php?id=case-magnum400">
    Explorar modelo

    <i data-lucide="arrow-up-right"></i>

</a>
            </div>

        </article>



        <!-- NEW HOLLAND T9 -->

        <article
            class="trator-card destaque"
            data-porte="grande">

            <div class="trator-topo">

                <span class="trator-marca">
                    NEW HOLLAND
                </span>

                <span class="porte-tag premium">
                    ALTA POTÊNCIA
                </span>

            </div>


            <div class="trator-imagem">

                <img
                    src="/ForceTrack/IMG/tratores/new-holland-t9700.png"
                    alt="New Holland T9.700">

            </div>


            <div class="trator-info">

                <h2>
                    T9.700
                </h2>

                <p class="trator-descricao">
                    Trator articulado desenvolvido para
                    operações agrícolas de altíssima demanda.
                </p>


                <div class="trator-specs">

                    <div>
                        <strong>
                            620
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            POTÊNCIA
                        </small>
                    </div>


                    <div>
                        <strong>
                            682
                        </strong>

                        <span>
                            cv
                        </span>

                        <small>
                            PICO
                        </small>
                    </div>


                    <div>
                        <strong>
                            16x2
                        </strong>

                        <small>
                            POWERSHIFT
                        </small>
                    </div>

                </div>


                <a
    class="selecionar-trator"
    href="/ForceTrack/trator.php?id=new-holland-t9700">
    Explorar modelo

    <i data-lucide="arrow-up-right"></i>

</a>

            </div>

        </article>


    </section>



    <!-- MÁQUINA SELECIONADA -->

    <section
        class="maquina-selecionada"
        id="maquinaSelecionada">

        <div>

            <span>
                MÁQUINA ATIVA
            </span>

            <strong id="modeloSelecionado">
                Nenhuma máquina selecionada
            </strong>

        </div>


        <button id="continuarMonitoramento">

            Configurar operação

            <i data-lucide="arrow-up-right"></i>

        </button>

    </section>


</main>



<script>

lucide.createIcons();


/* ===============================
   FILTRO POR PORTE
================================ */

const botoesFiltro =
    document.querySelectorAll(".filtro-btn");

const tratores =
    document.querySelectorAll(".trator-card");


botoesFiltro.forEach(botao => {

    botao.addEventListener("click", () => {

        botoesFiltro.forEach(b =>
            b.classList.remove("active")
        );

        botao.classList.add("active");


        const filtro =
            botao.dataset.filter;


        tratores.forEach(trator => {

            if (
                filtro === "todos" ||
                trator.dataset.porte === filtro
            ) {

                trator.style.display = "flex";

            }

            else {

                trator.style.display = "none";

            }

        });

    });

});

/* ==========================================
   FILTRO RECEBIDO PELA URL
========================================== */

const parametrosURL =
    new URLSearchParams(
        window.location.search
    );


const porteURL =
    parametrosURL.get("porte");


if (
    porteURL &&
    ["pequeno", "medio", "grande"]
        .includes(porteURL)
) {

    const botaoCorrespondente =
        document.querySelector(
            `.filtro-btn[data-filter="${porteURL}"]`
        );


    if (botaoCorrespondente) {

        /* remove seleção atual */

        botoesFiltro.forEach(botao => {

            botao.classList.remove(
                "active"
            );

        });


        /* ativa o filtro correto */

        botaoCorrespondente
            .classList
            .add("active");


        /* mostra somente o porte */

        tratores.forEach(trator => {

            if (
                trator.dataset.porte
                === porteURL
            ) {

                trator.style.display =
                    "flex";

            }

            else {

                trator.style.display =
                    "none";

            }

        });


        /* desce suavemente para o catálogo */

        setTimeout(() => {

            document
                .querySelector(
                    ".filtro-maquinas"
                )
                .scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });

        }, 200);

    }

}


/* ===============================
   SELEÇÃO DA MÁQUINA
================================ */

const botoesSelecionar =
    document.querySelectorAll(
        ".selecionar-trator"
    );


const modeloSelecionado =
    document.getElementById(
        "modeloSelecionado"
    );


botoesSelecionar.forEach(botao => {

    botao.addEventListener("click", () => {

        const id =
            botao.dataset.id;

        const modelo =
            botao.dataset.modelo;


        localStorage.setItem(
            "forcetrack_trator_id",
            id
        );


        localStorage.setItem(
            "forcetrack_trator_modelo",
            modelo
        );


        modeloSelecionado.textContent =
            modelo;


        document
            .getElementById(
                "maquinaSelecionada"
            )
            .classList.add("ativo");


        document
            .getElementById(
                "maquinaSelecionada"
            )
            .scrollIntoView({
                behavior: "smooth",
                block: "center"
            });

    });

});


const salvo =
    localStorage.getItem(
        "forcetrack_trator_modelo"
    );


if (salvo) {

    modeloSelecionado.textContent =
        salvo;

    document
        .getElementById(
            "maquinaSelecionada"
        )
        .classList.add("ativo");

}


document
    .getElementById(
        "continuarMonitoramento"
    )
    .addEventListener("click", () => {

        alert(
            "Na próxima etapa vamos configurar o implemento e a operação."
        );

    });

</script>


</body>
</html>