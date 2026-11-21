<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        ForceTrack | Anomalias
    </title>

    <link
        rel="stylesheet"
        href="/ForceTrack/CSS/anomalias.css?v=100"
    >

    <script src="https://unpkg.com/lucide@latest"></script>

</head>


<body>


<!-- =====================================================
     HEADER
===================================================== -->

<header class="page-header">


    <a
        href="/ForceTrack/"
        class="page-brand"
    >

        <img
            src="/ForceTrack/IMG/logo.png"
            alt="ForceTrack"
        >

        <strong>
            FORCETRACK
        </strong>

    </a>


    <nav class="page-nav">

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
            href="/ForceTrack/anomalias.php"
            class="active"
        >
            Anomalias
        </a>

    </nav>


    <a
        href="/ForceTrack/monitoramento.php"
        class="header-action"
    >

        Voltar ao monitoramento

        <i data-lucide="arrow-up-right"></i>

    </a>


</header>



<main>


<!-- =====================================================
     INTRODUÇÃO
===================================================== -->

<section class="anomaly-intro">


    <span class="section-label">
        ANOMALIAS
    </span>


    <div class="intro-grid">


        <h1>

            Eventos que
            merecem atenção.

        </h1>


        <div class="intro-text">

            <p>

                O ForceTrack identifica alterações elevadas
                na força de tração em relação ao comportamento
                recente da operação.

            </p>


            <p>

                Esses eventos indicam que ocorreu uma
                variação importante, mas não determinam
                automaticamente sua causa.

            </p>

        </div>


    </div>


</section>



<!-- =====================================================
     RESUMO
===================================================== -->

<section class="anomaly-summary">


    <article class="summary-main">


        <span>
            EVENTOS IDENTIFICADOS
        </span>


        <strong id="totalAnomalias">
            0
        </strong>


        <small>
            na janela atual de leituras
        </small>


    </article>



    <article>


        <span>
            MAIOR EVENTO
        </span>


        <strong id="maiorAnomalia">
            0.00 N
        </strong>


        <small>
            maior força classificada como anomalia
        </small>


    </article>



    <article>


        <span>
            ÚLTIMO EVENTO
        </span>


        <strong id="ultimaAnomalia">
            Nenhum
        </strong>


        <small id="ultimaAnomaliaData">
            sem registro
        </small>


    </article>


</section>



<!-- =====================================================
     CONTEXTO ATUAL
===================================================== -->

<section class="operation-context">


    <div>


        <span>
            MÁQUINA
        </span>


        <strong id="anomalyMachine">
            Nenhuma máquina selecionada
        </strong>


    </div>


    <div>


        <span>
            IMPLEMENTO
        </span>


        <strong id="anomalyImplement">
            Não configurado
        </strong>


    </div>


    <div>


        <span>
            OPERAÇÃO
        </span>


        <strong id="anomalyOperation">
            Sem parâmetros informados
        </strong>


    </div>


    <a href="/ForceTrack/operacao.php">

        Alterar operação

        <i data-lucide="arrow-right"></i>

    </a>


</section>



<!-- =====================================================
     LISTA DE EVENTOS
===================================================== -->

<section class="events-section">


    <div class="events-heading">


        <div>

            <span class="section-label">
                REGISTROS
            </span>


            <h2>
                Eventos detectados.
            </h2>

        </div>


        <div class="database-status">


            <span id="apiIndicator"></span>


            <div>

                <small>
                    BASE DE DADOS
                </small>

                <strong id="apiText">
                    Carregando
                </strong>

            </div>


        </div>


    </div>



    <div
        class="events-container"
        id="anomaliasLista"
    >


        <div class="loading-events">

            Carregando eventos...

        </div>


    </div>


</section>



<!-- =====================================================
     COMO INTERPRETAR
===================================================== -->

<section class="interpretation-section">


    <div class="interpretation-heading">


        <span class="section-label">
            INTERPRETAÇÃO
        </span>


        <h2>

            O que pode provocar
            uma variação de força?

        </h2>


        <p>

            Uma alteração brusca na tração pode estar
            associada a diferentes condições. Por isso,
            o ForceTrack registra o evento para análise
            em conjunto com o contexto da operação.

        </p>


    </div>



    <div class="possible-causes">


        <article>


            <span>
                01
            </span>


            <h3>
                Resistência do terreno
            </h3>


            <p>

                Mudanças nas condições do solo podem
                aumentar temporariamente a resistência
                encontrada pelo implemento.

            </p>


        </article>



        <article>


            <span>
                02
            </span>


            <h3>
                Implemento
            </h3>


            <p>

                Uma regulagem inadequada ou aumento
                momentâneo da resistência do implemento
                pode elevar a força necessária.

            </p>


        </article>



        <article>


            <span>
                03
            </span>


            <h3>
                Obstáculo
            </h3>


            <p>

                Pedras, raízes ou outros obstáculos
                podem provocar um pico durante
                a operação.

            </p>


        </article>



        <article>


            <span>
                04
            </span>


            <h3>
                Condição operacional
            </h3>


            <p>

                Velocidade, profundidade e configuração
                do conjunto também influenciam
                a demanda de tração.

            </p>


        </article>


    </div>


</section>



<!-- =====================================================
     EXPLICAÇÃO DO ALGORITMO
===================================================== -->

<section class="algorithm-section">


    <div class="algorithm-title">


        <span>
            ANÁLISE DE VARIAÇÃO
        </span>


        <h2>
            Como o ForceTrack identifica um evento.
        </h2>


    </div>



    <div class="algorithm-example">


        <div class="example-normal">


            <span>
                COMPORTAMENTO ESTÁVEL
            </span>


            <div class="numbers">

                <strong>10</strong>
                <strong>10</strong>
                <strong>11</strong>
                <strong>11</strong>
                <strong>10</strong>

            </div>


            <small>
                Leituras próximas entre si
            </small>


        </div>



        <div class="algorithm-arrow">

            <i data-lucide="arrow-right"></i>

        </div>



        <div class="example-alert">


            <span>
                VARIAÇÃO REPENTINA
            </span>


            <div class="numbers">

                <strong>10</strong>
                <strong>10</strong>
                <strong class="alert-number">
                    50
                </strong>

            </div>


            <small>
                Evento registrado para análise
            </small>


        </div>


    </div>



    <p class="algorithm-note">

        O algoritmo atual é uma versão inicial para
        demonstração do projeto. O valor é comparado com
        leituras anteriores para identificar aumentos
        muito acima do comportamento recente.

    </p>


</section>



<!-- =====================================================
     CTA HISTÓRICO
===================================================== -->

<section class="history-link-section">


    <div>


        <span class="section-label">
            HISTÓRICO
        </span>


        <h2>
            Veja o evento dentro da sequência de leituras.
        </h2>


    </div>


    <a href="/ForceTrack/historico.php">

        Abrir histórico completo

        <i data-lucide="arrow-right"></i>

    </a>


</section>


</main>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="page-footer">


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
        Análise de variações na força de tração
    </span>


    <span>
        © 2026
    </span>


</footer>



<script src="/ForceTrack/JS/anomalias.js?v=100"></script>


<script>
    lucide.createIcons();
</script>


</body>

</html>