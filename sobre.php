<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        ForceTrack | Sobre o projeto
    </title>

    <link
        rel="stylesheet"
        href="/ForceTrack/CSS/sobre.css?v=200"
    >

    <script src="https://unpkg.com/lucide@latest"></script>

</head>


<body>


<!-- =====================================================
     HEADER
===================================================== -->

<header class="about-header">


    <a
        href="/ForceTrack/"
        class="about-brand"
    >

        <img
            src="/ForceTrack/IMG/logo.png"
            alt="ForceTrack"
        >

        <strong>
            FORCETRACK
        </strong>

    </a>


    <nav>

        <a href="/ForceTrack/">
            Início
        </a>

        <a href="/ForceTrack/maquinas.php">
            Máquinas
        </a>

        <a href="/ForceTrack/monitoramento.php">
            Monitoramento
        </a>

        <a href="/ForceTrack/historico.php">
            Histórico
        </a>

        <a
            href="/ForceTrack/sobre.php"
            class="active"
        >
            Projeto
        </a>

    </nav>


    <a
        href="/ForceTrack/maquinas.php"
        class="about-action"
    >

        Explorar máquinas

        <i data-lucide="arrow-up-right"></i>

    </a>


</header>



<main>


<!-- =====================================================
     HERO
===================================================== -->

<section class="about-hero">


    <div class="about-hero-copy">


        <span>
            O PROJETO
        </span>


        <h1>

            Medir.
            <br>
            Compreender.
            <br>
            <strong>Otimizar.</strong>

        </h1>


        <p>

            O ForceTrack é um projeto de monitoramento
            da força de tração em operações agrícolas,
            integrando sensores, conectividade e uma
            plataforma web para transformar esforço
            mecânico em informação.

        </p>


    </div>



    <div class="about-hero-image">


        <img
            src="/ForceTrack/IMG/tratores/new-holland-t9700.png"
            alt="Trator agrícola"
        >


    </div>


</section>



<!-- =====================================================
     PROPÓSITO
===================================================== -->

<section class="purpose">


    <span>
        01
    </span>


    <div>

        <small>
            PROPÓSITO
        </small>

        <h2>

            Entender o que acontece
            entre o trator e o implemento.

        </h2>

    </div>


    <p>

        Durante uma operação agrícola, diferentes fatores
        podem alterar a resistência encontrada pelo conjunto.
        O ForceTrack registra a força de tração para que essas
        mudanças possam ser visualizadas e analisadas ao longo
        do tempo.

    </p>


</section>



<!-- =====================================================
     SISTEMA
===================================================== -->

<section class="system-section">


    <div class="system-heading">


        <span>
            02 / SISTEMA
        </span>


        <h2>
            Do esforço físico ao dado digital.
        </h2>


    </div>



    <div class="system-flow">


        <article>

            <span>
                01
            </span>

            <strong>
                Trator + implemento
            </strong>

            <p>

                A operação gera a força
                que será monitorada.

            </p>

        </article>


        <div class="connector"></div>


        <article>

            <span>
                02
            </span>

            <strong>
                Célula de carga
            </strong>

            <p>

                O sensor responde ao esforço
                aplicado durante a tração.

            </p>

        </article>


        <div class="connector"></div>


        <article>

            <span>
                03
            </span>

            <strong>
                HX711
            </strong>

            <p>

                Amplifica e digitaliza
                o sinal do sensor.

            </p>

        </article>


        <div class="connector"></div>


        <article>

            <span>
                04
            </span>

            <strong>
                Microcontrolador
            </strong>

            <p>

                Processa e envia os dados
                pela rede Wi-Fi.

            </p>

        </article>


        <div class="connector"></div>


        <article class="system-active">

            <span>
                05
            </span>

            <strong>
                ForceTrack
            </strong>

            <p>

                Armazena e apresenta
                as informações.

            </p>

        </article>


    </div>


</section>



<!-- =====================================================
     PLATAFORMA
===================================================== -->

<section class="platform-section">


    <div class="platform-copy">


        <span>
            03 / PLATAFORMA
        </span>


        <h2>

            Uma interface para
            acompanhar a operação.

        </h2>


        <p>

            A plataforma organiza informações do trator,
            implemento e contexto operacional junto às
            leituras enviadas pelo dinamômetro.

        </p>


        <a href="/ForceTrack/monitoramento.php">

            Abrir monitoramento

            <i data-lucide="arrow-right"></i>

        </a>


    </div>



    <div class="platform-preview">


        <div class="preview-top">

            <span>
                FORÇA DE TRAÇÃO
            </span>

            <small>
                Monitoramento
            </small>

        </div>


        <div class="preview-value">

            <strong>
                10.42
            </strong>

            <span>
                N
            </span>

        </div>


        <div class="preview-chart">


            <svg
                viewBox="0 0 600 180"
                preserveAspectRatio="none"
            >

                <polyline

                    points="
                    0,130
                    60,127
                    110,120
                    165,125
                    220,114
                    270,117
                    320,55
                    355,111
                    410,116
                    470,108
                    530,113
                    600,105
                    "

                />

            </svg>


        </div>


        <div class="preview-data">


            <div>

                <span>
                    MÉDIA
                </span>

                <strong>
                    10.21 N
                </strong>

            </div>


            <div>

                <span>
                    PICO
                </span>

                <strong>
                    17.80 N
                </strong>

            </div>


            <div>

                <span>
                    STATUS
                </span>

                <strong>
                    Normal
                </strong>

            </div>


        </div>


    </div>


</section>



<!-- =====================================================
     ANÁLISE
===================================================== -->

<section class="analysis-section">


    <div class="analysis-heading">


        <span>
            04 / ANÁLISE
        </span>


        <h2>
            Identificar mudanças,
            não adivinhar causas.
        </h2>


        <p>

            O ForceTrack pode indicar que ocorreu uma
            mudança importante na força de tração. A
            interpretação da causa deve considerar as
            condições reais da operação.

        </p>


    </div>



    <div class="analysis-grid">


        <article>

            <span>
                A
            </span>

            <h3>
                Comportamento estável
            </h3>

            <p>

                Valores próximos indicam que a demanda
                de tração permaneceu relativamente
                constante naquele período.

            </p>

        </article>



        <article>

            <span>
                B
            </span>

            <h3>
                Variação repentina
            </h3>

            <p>

                Um pico muito acima das leituras recentes
                pode ser registrado como possível anomalia.

            </p>

        </article>



        <article>

            <span>
                C
            </span>

            <h3>
                Análise contextual
            </h3>

            <p>

                Solo, implemento, profundidade, velocidade
                e obstáculos podem influenciar a força.

            </p>

        </article>


    </div>


</section>



<!-- =====================================================
     TECNOLOGIAS
===================================================== -->

<section class="technologies">


    <div>


        <span>
            05 / DESENVOLVIMENTO
        </span>


        <h2>
            Tecnologias utilizadas.
        </h2>


    </div>



    <div class="technology-grid">


        <article>

            <small>
                HARDWARE
            </small>

            <strong>
                Célula de carga
            </strong>

        </article>


        <article>

            <small>
                AQUISIÇÃO
            </small>

            <strong>
                HX711
            </strong>

        </article>


        <article>

            <small>
                CONTROLE
            </small>

            <strong>
                Microcontrolador Wi-Fi
            </strong>

        </article>


        <article>

            <small>
                BACK-END
            </small>

            <strong>
                PHP
            </strong>

        </article>


        <article>

            <small>
                BANCO DE DADOS
            </small>

            <strong>
                MySQL
            </strong>

        </article>


        <article>

            <small>
                INTERFACE
            </small>

            <strong>
                HTML • CSS • JavaScript
            </strong>

        </article>


    </div>


</section>



<!-- =====================================================
     FINAL
===================================================== -->

<section class="about-final">


    <span>
        FORCETRACK
    </span>


    <h2>

        Tração.
        Dados.
        Desempenho.

    </h2>


    <p>

        Um protótipo desenvolvido para explorar como
        dados de força podem contribuir para uma visão
        mais clara das operações agrícolas.

    </p>


    <a href="/ForceTrack/maquinas.php">

        Começar uma operação

        <i data-lucide="arrow-right"></i>

    </a>


</section>


</main>



<footer class="about-footer">


    <div>

        <img
            src="/ForceTrack/IMG/logo.png"
            alt="ForceTrack"
        >

        <strong>
            FORCETRACK
        </strong>

    </div>


    <span>
        Projeto de TCC
    </span>


    <span>
        © 2026
    </span>


</footer>



<script>
    lucide.createIcons();
</script>


</body>

</html>