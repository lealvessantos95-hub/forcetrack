<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        ForceTrack | Monitoramento
    </title>

    <link
        rel="stylesheet"
        href="/ForceTrack/CSS/monitoramento.css?v=100"
    >

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://unpkg.com/lucide@latest"></script>

</head>


<body>


<!-- =====================================================
     HEADER
===================================================== -->

<header class="monitor-header">


    <a
        href="/ForceTrack/"
        class="monitor-brand"
    >

        <img
            src="/ForceTrack/IMG/logo.png"
            alt="ForceTrack"
        >

        <strong>
            FORCETRACK
        </strong>

    </a>


    <nav class="monitor-nav">

        <a href="/ForceTrack/">
            Início
        </a>

        <a href="/ForceTrack/maquinas.php">
            Máquinas
        </a>

        <a
            href="/ForceTrack/monitoramento.php"
            class="active"
        >
            Monitoramento
        </a>

        <a href="/ForceTrack/historico.php">
            Histórico
        </a>

        <a href="/ForceTrack/anomalias.php">
            Anomalias
        </a>

    </nav>


    <a
        href="/ForceTrack/operacao.php"
        class="editar-operacao"
    >

        Editar operação

        <i data-lucide="sliders-horizontal"></i>

    </a>


</header>



<main>


<!-- =====================================================
     CABEÇALHO DA PÁGINA
===================================================== -->

<section class="monitor-intro">


    <div>


        <span class="section-label">
            MONITORAMENTO
        </span>


        <h1>
            Força de tração.
        </h1>


        <p>

            Acompanhe as medições recebidas pelo ForceTrack
            e o comportamento da operação selecionada.

        </p>


    </div>


    <div class="test-mode">

        <span class="test-dot"></span>

        <div>

            <strong>
                Modo de teste
            </strong>

            <small>
                Sensor ainda não conectado
            </small>

        </div>

    </div>


</section>



<!-- =====================================================
     MÁQUINA / OPERAÇÃO
===================================================== -->

<section class="operation-summary">


    <div class="operation-machine">


        <div class="machine-image-small">

            <img
                id="imagemTrator"
                src=""
                alt="Máquina selecionada"
            >

        </div>


        <div>

            <span>
                MÁQUINA ATIVA
            </span>

            <h2 id="tratorAtivo">
                ---
            </h2>

            <small id="potenciaAtiva">
                ---
            </small>

        </div>


    </div>



    <div class="operation-data">


        <div>

            <span>
                IMPLEMENTO
            </span>

            <strong id="implementoAtivo">
                ---
            </strong>

        </div>


        <div>

            <span>
                VELOCIDADE
            </span>

            <strong id="velocidadeAtiva">
                Não informada
            </strong>

        </div>


        <div>

            <span>
                PROFUNDIDADE
            </span>

            <strong id="profundidadeAtiva">
                Não informada
            </strong>

        </div>


        <div>

            <span>
                SOLO
            </span>

            <strong id="soloAtivo">
                Não informado
            </strong>

        </div>


    </div>


</section>



<!-- =====================================================
     FORÇA PRINCIPAL
===================================================== -->

<section class="force-section">


    <div class="force-main">


        <div class="force-heading">


            <div>

                <span>
                    LEITURA ATUAL
                </span>

                <h2>
                    Força de tração
                </h2>

            </div>


            <div
                class="force-status normal"
                id="statusOperacao"
            >

                <span></span>

                Normal

            </div>


        </div>



        <div class="force-value">


            <strong id="forcaAtual">
                0.00
            </strong>


            <span>
                N
            </span>


        </div>



        <div class="force-footer">


            <div>

                <span>
                    ÚLTIMA ATUALIZAÇÃO
                </span>

                <strong id="ultimaLeitura">
                    --:--:--
                </strong>

            </div>


            <div>

                <span>
                    ORIGEM DOS DADOS
                </span>

                <strong>
                    Banco ForceTrack
                </strong>

            </div>


        </div>


    </div>



    <div class="metrics">


        <article>

            <span>
                MÉDIA
            </span>

            <strong id="forcaMedia">
                0.00 N
            </strong>

            <small>
                Janela atual
            </small>

        </article>


        <article>

            <span>
                PICO
            </span>

            <strong id="forcaMaxima">
                0.00 N
            </strong>

            <small>
                Maior leitura
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
                Eventos encontrados
            </small>

        </article>


    </div>


</section>



<!-- =====================================================
     GRÁFICO
===================================================== -->

<section class="chart-section">


    <div class="chart-heading">


        <div>

            <span class="section-label">
                COMPORTAMENTO
            </span>

            <h2>
                Tração ao longo do tempo
            </h2>

            <p>

                As últimas leituras registradas são
                apresentadas em ordem cronológica.

            </p>

        </div>


        <div class="system-status">


            <div>

                <span
                    class="system-dot"
                    id="apiDot">
                </span>

                <small>
                    API
                </small>

                <strong id="apiStatus">
                    Verificando
                </strong>

            </div>


            <div>

                <span
                    class="system-dot"
                    id="databaseDot">
                </span>

                <small>
                    Banco
                </small>

                <strong id="databaseStatus">
                    Verificando
                </strong>

            </div>


        </div>


    </div>



    <div class="chart-container">

        <canvas id="graficoMonitoramento"></canvas>

    </div>


</section>



<!-- =====================================================
     CONTEXTO DA OPERAÇÃO
===================================================== -->

<section class="details-section">


    <div class="details-heading">

        <span class="section-label">
            OPERAÇÃO
        </span>

        <h2>
            Contexto da medição.
        </h2>

    </div>



    <div class="details-grid">


        <div>

            <span>
                TRATOR
            </span>

            <strong id="contextTrator">
                ---
            </strong>

        </div>


        <div>

            <span>
                IMPLEMENTO
            </span>

            <strong id="contextImplemento">
                ---
            </strong>

        </div>


        <div>

            <span>
                LINHAS
            </span>

            <strong id="contextLinhas">
                Não aplicável
            </strong>

        </div>


        <div>

            <span>
                VELOCIDADE
            </span>

            <strong id="contextVelocidade">
                Não informada
            </strong>

        </div>


        <div>

            <span>
                PROFUNDIDADE
            </span>

            <strong id="contextProfundidade">
                Não informada
            </strong>

        </div>


        <div>

            <span>
                CONDIÇÃO DO SOLO
            </span>

            <strong id="contextSolo">
                Não informada
            </strong>

        </div>


    </div>


    <a
        href="/ForceTrack/operacao.php"
        class="details-link"
    >

        Alterar configuração da operação

        <i data-lucide="arrow-right"></i>

    </a>


</section>



<!-- =====================================================
     HARDWARE
===================================================== -->

<section class="hardware-section">


    <div>


        <span class="section-label">
            HARDWARE
        </span>


        <h2>
            Sensor ainda não conectado.
        </h2>


        <p>

            O site está utilizando as leituras registradas
            manualmente no banco de dados. Quando o hardware
            do dinamômetro estiver montado, esta etapa será
            alimentada automaticamente pela placa e pelo HX711.

        </p>


    </div>



    <div class="hardware-flow">


        <div>

            <span>
                01
            </span>

            <strong>
                Célula de carga
            </strong>

            <small>
                Aguarda instalação
            </small>

        </div>


        <i data-lucide="arrow-right"></i>


        <div>

            <span>
                02
            </span>

            <strong>
                HX711
            </strong>

            <small>
                Aguarda instalação
            </small>

        </div>


        <i data-lucide="arrow-right"></i>


        <div>

            <span>
                03
            </span>

            <strong>
                Microcontrolador
            </strong>

            <small>
                Aguarda conexão
            </small>

        </div>


        <i data-lucide="arrow-right"></i>


        <div class="active-flow">

            <span>
                04
            </span>

            <strong>
                ForceTrack
            </strong>

            <small>
                Plataforma ativa
            </small>

        </div>


    </div>


</section>



<!-- =====================================================
     EVENTOS
===================================================== -->

<section class="events-section">


    <div class="events-heading">


        <div>

            <span class="section-label">
                ANOMALIAS
            </span>

            <h2>
                Eventos recentes.
            </h2>

        </div>


        <a href="/ForceTrack/anomalias.php">

            Ver todas

            <i data-lucide="arrow-right"></i>

        </a>


    </div>



    <div
        class="events-list"
        id="listaEventos"
    >

        <div class="empty-event">

            Nenhuma anomalia registrada
            nas leituras atuais.

        </div>

    </div>


</section>



</main>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="monitor-footer">


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
        Monitoramento inteligente de força de tração
    </span>


    <span>
        © 2026
    </span>


</footer>



<script
    src="/ForceTrack/JS/monitoramento.js?v=100">
</script>


<script>
    lucide.createIcons();
</script>


</body>

</html>