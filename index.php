<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="ForceTrack - Monitoramento inteligente de força de tração agrícola."
    >

    <title>
        ForceTrack | Monitoramento de Tração
    </title>

    <link
    rel="stylesheet"
    href="/ForceTrack/CSS/home.css?v=101"
>

    <script src="https://unpkg.com/lucide@latest"></script>

</head>


<body>


<!-- =====================================================
     HEADER
===================================================== -->

<header class="site-header">

    <a
        href="/ForceTrack/"
        class="brand"
    >

        <img
            src="/ForceTrack/IMG/logo.png"
            alt="ForceTrack"
        >

        <strong>
            FORCETRACK
        </strong>

    </a>


    <nav class="main-nav">

        <a href="#maquinas">
            Máquinas
        </a>

        <a href="#tecnologia">
            Tecnologia
        </a>

        <a href="#como-funciona">
            Como funciona
        </a>

        <a href="/ForceTrack/sobre.php">
            Projeto
        </a>

    </nav>


    <div class="header-actions">

        <a
            href="/ForceTrack/monitoramento.php"
            class="header-monitor"
        >
            Monitoramento
        </a>


        <a
            href="/ForceTrack/maquinas.php"
            class="header-button"
        >

            Escolher máquina

            <i data-lucide="arrow-up-right"></i>

        </a>

    </div>

</header>



<main>


<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">


    <div class="hero-copy">


        <span class="eyebrow">
            MONITORAMENTO DE TRAÇÃO AGRÍCOLA
        </span>


        <h1>

            Força que vira
            <span>informação.</span>

        </h1>


        <p>

            Um sistema desenvolvido para acompanhar
            a força de tração durante operações agrícolas,
            transformar medições em dados e facilitar
            a análise do comportamento da máquina.

        </p>


        <div class="hero-actions">

            <a
                href="/ForceTrack/maquinas.php"
                class="button-primary"
            >

                Escolher máquina

                <i data-lucide="arrow-right"></i>

            </a>


            <a
                href="#tecnologia"
                class="button-link"
            >

                Conhecer o ForceTrack

                <i data-lucide="arrow-down"></i>

            </a>

        </div>


    </div>



    <div class="hero-visual">


        <div class="hero-model-info">

            <span>
                DESTAQUE
            </span>

            <strong>
                New Holland T9.700
            </strong>

            <small>
                620 cv • Chassi articulado
            </small>

        </div>


        <img
            src="/ForceTrack/IMG/tratores/new-holland-t9700.PNG"
            alt="New Holland T9.700"
        >


        <span class="hero-number">
            620
        </span>


    </div>


    <div class="hero-bottom">

        <span>
            FORCETRACK
        </span>

        <span>
            TRAÇÃO • DADOS • DESEMPENHO
        </span>

        <span>
            2026
        </span>

    </div>


</section>



<!-- =====================================================
     MÁQUINA ATUAL
===================================================== -->

<section
    class="current-machine"
    id="currentMachine"
>


    <div class="current-image">

        <img
            id="currentMachineImage"
            src=""
            alt="Máquina selecionada"
        >

    </div>



    <div class="current-content">


        <span class="section-label">
            SUA OPERAÇÃO
        </span>


        <small>
            MÁQUINA ATUALMENTE SELECIONADA
        </small>


        <h2 id="currentMachineName">
            ---
        </h2>


        <div class="current-specs">


            <div>

                <span>
                    POTÊNCIA
                </span>

                <strong id="currentMachinePower">
                    ---
                </strong>

            </div>


            <div>

                <span>
                    CATEGORIA
                </span>

                <strong id="currentMachineCategory">
                    ---
                </strong>

            </div>


            <div>

                <span>
                    IMPLEMENTO
                </span>

                <strong id="currentMachineImplement">
                    Não configurado
                </strong>

            </div>


        </div>



        <div class="current-actions">


            <a
                id="continueOperation"
                href="/ForceTrack/operacao.php"
                class="dark-button"
            >

                Configurar operação

                <i data-lucide="arrow-right"></i>

            </a>


            <a
                href="/ForceTrack/maquinas.php"
                class="text-button"
            >

                Trocar máquina

            </a>


        </div>


    </div>


</section>



<!-- =====================================================
     INTRODUÇÃO
===================================================== -->

<section class="intro-section">


    <span class="section-number">
        01
    </span>


    <div>

        <span class="section-label">
            FORCETRACK
        </span>


        <h2>

            Entenda melhor
            o esforço da sua operação.

        </h2>

    </div>


    <p>

        O ForceTrack foi pensado para integrar
        medição física e visualização digital.
        O dinamômetro mede a força entre trator
        e implemento enquanto a plataforma organiza
        e apresenta as informações da operação.

    </p>


</section>



<!-- =====================================================
     MÁQUINAS
===================================================== -->

<section
    class="machines-section"
    id="maquinas"
>


    <div class="section-heading">


        <div>

            <span class="section-label">
                MÁQUINAS
            </span>


            <h2>
                Escolha seu trator.
            </h2>

        </div>


        <p>

            Selecione uma categoria para navegar
            entre os modelos cadastrados no ForceTrack.

        </p>


    </div>



    <div class="machine-types">


        <!-- PEQUENO -->

        <a
            href="/ForceTrack/maquinas.php?porte=pequeno"
            class="machine-type"
        >

            <div class="machine-type-top">

                <span>
                    01
                </span>

                <i data-lucide="arrow-up-right"></i>

            </div>


            <div class="machine-image">

                <img
                    src="/ForceTrack/IMG/tratores/john-deere-5075.WEBP"
                    alt="John Deere 5075E"
                >

            </div>


            <div class="machine-info">

                <small>
                    75 — 80 CV
                </small>

                <h3>
                    Pequeno porte
                </h3>

                <p>

                    Máquinas compactas e versáteis
                    para operações de menor demanda.

                </p>

            </div>

        </a>



        <!-- MÉDIO -->

        <a
            href="/ForceTrack/maquinas.php?porte=medio"
            class="machine-type"
        >

            <div class="machine-type-top">

                <span>
                    02
                </span>

                <i data-lucide="arrow-up-right"></i>

            </div>


            <div class="machine-image">

                <img
                    src="/ForceTrack/IMG/tratores/massey-ferguson-mf7719.jpg"
                    alt="Massey Ferguson MF 7719"
                >

            </div>


            <div class="machine-info">

                <small>
                    90 — 195 CV
                </small>

                <h3>
                    Médio porte
                </h3>

                <p>

                    Maior capacidade para operações
                    intermediárias e implementos mais exigentes.

                </p>

            </div>

        </a>



        <!-- GRANDE -->

        <a
            href="/ForceTrack/maquinas.php?porte=grande"
            class="machine-type"
        >

            <div class="machine-type-top">

                <span>
                    03
                </span>

                <i data-lucide="arrow-up-right"></i>

            </div>


            <div class="machine-image">

                <img
                    src="/ForceTrack/IMG/tratores/case_ih_magnum_380.WEBP"
                    alt="Case IH Magnum 400"
                >

            </div>


            <div class="machine-info">

                <small>
                    195 — 620+ CV
                </small>

                <h3>
                    Grande porte
                </h3>

                <p>

                    Alta potência para grandes áreas,
                    implementos pesados e operações severas.

                </p>

            </div>

        </a>


    </div>



    <div class="machines-footer">

        <span>
            10 MODELOS DISPONÍVEIS
        </span>


        <a href="/ForceTrack/maquinas.php">

            Ver todos os modelos

            <i data-lucide="arrow-right"></i>

        </a>

    </div>


</section>



<!-- =====================================================
     TECNOLOGIA
===================================================== -->

<section
    class="technology-section"
    id="tecnologia"
>


    <div class="technology-title">


        <span>
            02 / TECNOLOGIA
        </span>


        <h2>

            Da força física
            para a tela.

        </h2>


        <p>

            Cada componente do sistema possui uma função
            específica na aquisição e transmissão dos dados.

        </p>


    </div>



    <div class="technology-list">


        <article>

            <span>
                01
            </span>

            <h3>
                Célula de carga
            </h3>

            <p>

                Detecta a força exercida durante
                a tração do implemento.

            </p>

        </article>



        <article>

            <span>
                02
            </span>

            <h3>
                HX711
            </h3>

            <p>

                Amplifica e converte o sinal elétrico
                produzido pela célula de carga.

            </p>

        </article>



        <article>

            <span>
                03
            </span>

            <h3>
                Microcontrolador
            </h3>

            <p>

                Processa os dados e realiza
                a comunicação com a plataforma.

            </p>

        </article>



        <article>

            <span>
                04
            </span>

            <h3>
                ForceTrack Web
            </h3>

            <p>

                Armazena, apresenta e organiza
                as medições da operação.

            </p>

        </article>


    </div>


</section>



<!-- =====================================================
     COMO FUNCIONA
===================================================== -->

<section
    class="workflow"
    id="como-funciona"
>


    <div class="workflow-heading">

        <span class="section-label">
            COMO FUNCIONA
        </span>


        <h2>
            Uma operação.
            Três etapas.
        </h2>

    </div>



    <div class="workflow-steps">


        <article>

            <span>
                01
            </span>

            <h3>
                Escolha a máquina
            </h3>

            <p>

                Selecione o modelo de trator
                utilizado durante o trabalho.

            </p>

        </article>



        <article>

            <span>
                02
            </span>

            <h3>
                Configure a operação
            </h3>

            <p>

                Informe o implemento e o contexto
                em que a máquina será utilizada.

            </p>

        </article>



        <article>

            <span>
                03
            </span>

            <h3>
                Acompanhe os dados
            </h3>

            <p>

                Visualize a força, o histórico
                e possíveis variações durante a operação.

            </p>

        </article>


    </div>


</section>



<!-- =====================================================
     CTA
===================================================== -->

<section class="final-section">


    <span>
        FORCETRACK
    </span>


    <h2>

        Escolha sua máquina
        e comece a operação.

    </h2>


    <a
        href="/ForceTrack/maquinas.php"
    >

        Explorar máquinas

        <i data-lucide="arrow-right"></i>

    </a>


</section>


</main>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="site-footer">


    <div class="footer-brand">

        <img
            src="/ForceTrack/IMG/logo.png"
            alt="ForceTrack"
        >

        <strong>
            FORCETRACK
        </strong>

    </div>



    <div class="footer-links">

        <a href="/ForceTrack/maquinas.php">
            Máquinas
        </a>

        <a href="/ForceTrack/monitoramento.php">
            Monitoramento
        </a>

        <a href="/ForceTrack/historico.php">
            Histórico
        </a>

        <a href="/ForceTrack/anomalias.php">
            Anomalias
        </a>

        <a href="/ForceTrack/sobre.php">
            Projeto
        </a>

    </div>



    <div class="footer-bottom">

        <span>
            © 2026 ForceTrack
        </span>

        <span>
            Projeto de TCC
        </span>

    </div>


</footer>



<script>


/* =====================================================
   MÁQUINA SALVA
===================================================== */

const maquinaNome =
    localStorage.getItem(
        "forcetrack_trator_modelo"
    );


const maquinaPotencia =
    localStorage.getItem(
        "forcetrack_trator_potencia"
    );


const maquinaImagem =
    localStorage.getItem(
        "forcetrack_trator_imagem"
    );


const maquinaPorte =
    localStorage.getItem(
        "forcetrack_trator_porte"
    );


const implemento =
    localStorage.getItem(
        "forcetrack_implemento"
    );



if (maquinaNome) {


    document
        .getElementById(
            "currentMachine"
        )
        .classList.add(
            "visible"
        );


    document
        .getElementById(
            "currentMachineName"
        )
        .textContent =
        maquinaNome;


    document
        .getElementById(
            "currentMachinePower"
        )
        .textContent =
        maquinaPotencia || "---";


    document
        .getElementById(
            "currentMachineCategory"
        )
        .textContent =
        maquinaPorte || "---";


    document
        .getElementById(
            "currentMachineImplement"
        )
        .textContent =
        implemento || "Não configurado";


    if (maquinaImagem) {

        document
            .getElementById(
                "currentMachineImage"
            )
            .src =
            maquinaImagem;

    }


    const continuar =
        document.getElementById(
            "continueOperation"
        );


    if (implemento) {

        continuar.href =
            "/ForceTrack/monitoramento.php";


        continuar.innerHTML = `

            Abrir monitoramento

            <i data-lucide="arrow-right"></i>

        `;

    }

}



lucide.createIcons();


</script>


</body>

</html>