<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        ForceTrack | Histórico
    </title>

    <link
        rel="stylesheet"
        href="/ForceTrack/CSS/historico.css?v=100"
    >

    <script src="https://unpkg.com/lucide@latest"></script>

</head>


<body>


<!-- HEADER -->

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

        <a
            href="/ForceTrack/historico.php"
            class="active"
        >
            Histórico
        </a>

        <a href="/ForceTrack/anomalias.php">
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


<!-- INTRO -->

<section class="history-intro">

    <span class="section-label">
        HISTÓRICO
    </span>


    <div class="intro-grid">

        <h1>
            Medições registradas.
        </h1>


        <p>

            Consulte as leituras armazenadas pelo ForceTrack
            e acompanhe o comportamento da força de tração
            ao longo da operação.

        </p>

    </div>

</section>



<!-- RESUMO -->

<section class="history-summary">


    <article>

        <span>
            LEITURAS
        </span>

        <strong id="totalLeituras">
            0
        </strong>

        <small>
            registros carregados
        </small>

    </article>


    <article>

        <span>
            FORÇA MÉDIA
        </span>

        <strong id="mediaLeituras">
            0.00 N
        </strong>

        <small>
            média da janela atual
        </small>

    </article>


    <article>

        <span>
            MAIOR LEITURA
        </span>

        <strong id="maiorLeitura">
            0.00 N
        </strong>

        <small>
            pico registrado
        </small>

    </article>


    <article>

        <span>
            ANOMALIAS
        </span>

        <strong id="totalAnomalias">
            0
        </strong>

        <small>
            eventos identificados
        </small>

    </article>


</section>



<!-- OPERAÇÃO -->

<section class="operation-reference">


    <div>

        <span>
            OPERAÇÃO ATUAL
        </span>

        <strong id="historyMachine">
            Nenhuma máquina selecionada
        </strong>

    </div>


    <div>

        <span>
            IMPLEMENTO
        </span>

        <strong id="historyImplement">
            Não configurado
        </strong>

    </div>


    <a href="/ForceTrack/operacao.php">

        Alterar operação

        <i data-lucide="arrow-right"></i>

    </a>


</section>



<!-- TABELA -->

<section class="history-data">


    <div class="history-heading">

        <div>

            <span class="section-label">
                REGISTROS
            </span>

            <h2>
                Todas as leituras.
            </h2>

        </div>


        <div class="history-status">

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



    <div class="table-wrapper">

        <table>

            <thead>

                <tr>

                    <th>
                        ID
                    </th>

                    <th>
                        DATA
                    </th>

                    <th>
                        HORÁRIO
                    </th>

                    <th>
                        FORÇA
                    </th>

                    <th>
                        STATUS
                    </th>

                </tr>

            </thead>


            <tbody id="historicoTabela">

                <tr>

                    <td
                        colspan="5"
                        class="loading-row"
                    >

                        Carregando leituras...

                    </td>

                </tr>

            </tbody>

        </table>

    </div>


</section>



<!-- EXPLICAÇÃO -->

<section class="history-note">


    <div>

        <span class="section-label">
            SOBRE OS DADOS
        </span>


        <h2>
            Um registro de cada medição.
        </h2>

    </div>


    <p>

        Cada leitura recebida pela plataforma é armazenada
        junto com seu horário e classificação. Uma leitura
        marcada como anomalia representa uma variação elevada
        identificada pelo algoritmo e não determina, sozinha,
        a causa do aumento da força.

    </p>


</section>


</main>



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
        Histórico de força de tração
    </span>


    <span>
        © 2026
    </span>


</footer>



<script src="/ForceTrack/JS/historico.js?v=100"></script>

<script>
    lucide.createIcons();
</script>


</body>

</html>