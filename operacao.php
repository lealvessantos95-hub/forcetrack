<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        ForceTrack | Configurar Operação
    </title>

    <link
        rel="stylesheet"
        href="/ForceTrack/CSS/style.css?v=40"
    >

    <link
        rel="stylesheet"
        href="/ForceTrack/CSS/operacao.css?v=40"
    >

    <script
        src="https://unpkg.com/lucide@latest">
    </script>

</head>


<body class="pagina-operacao">


<!-- =====================================================
     HEADER
===================================================== -->

<header class="operacao-header">


    <a
        href="/ForceTrack/index.php"
        class="operacao-brand"
    >

        <img
            src="/ForceTrack/IMG/logo.png"
            alt="ForceTrack"
        >

        <div>

            <strong>
                FORCETRACK
            </strong>

            <span>
                OPERATION CONFIGURATION
            </span>

        </div>

    </a>



    <div class="etapas-topo">

        <div class="etapa concluida">

            <span>
                01
            </span>

            Máquina

        </div>


        <div class="etapa-linha"></div>


        <div class="etapa ativa">

            <span>
                02
            </span>

            Operação

        </div>


        <div class="etapa-linha"></div>


        <div class="etapa">

            <span>
                03
            </span>

            Monitoramento

        </div>

    </div>



    <a
        href="/ForceTrack/maquinas.php"
        class="trocar-maquina"
    >

        <i data-lucide="arrow-left"></i>

        Trocar máquina

    </a>


</header>



<main class="operacao-main">


<!-- =====================================================
     APRESENTAÇÃO
===================================================== -->

<section class="operacao-intro">


    <span class="operacao-kicker">

        CONFIGURAÇÃO OPERACIONAL

    </span>


    <h1>

        Prepare sua
        <span>operação.</span>

    </h1>


    <p>

        Informe o implemento e algumas características
        da operação para que o ForceTrack tenha contexto
        durante a análise da força de tração.

    </p>


</section>



<!-- =====================================================
     MÁQUINA ATIVA
===================================================== -->

<section class="maquina-ativa">


    <div class="maquina-ativa-label">

        <span class="dot-status"></span>

        MÁQUINA SELECIONADA

    </div>


    <div class="maquina-ativa-conteudo">


        <div>

            <span class="label-tecnico">
                TRATOR ATIVO
            </span>

            <h2 id="nomeTrator">

                Carregando máquina...

            </h2>

        </div>


        <div class="maquina-potencia">

            <span>
                POTÊNCIA
            </span>

            <strong id="potenciaTrator">

                ---

            </strong>

        </div>


        <a
            href="/ForceTrack/maquinas.php"
            class="alterar-modelo"
        >

            Alterar modelo

            <i data-lucide="arrow-up-right"></i>

        </a>


    </div>


</section>



<!-- =====================================================
     PASSO 1 - IMPLEMENTO
===================================================== -->

<section class="config-section">


    <div class="config-heading">


        <div class="numero-secao">

            01

        </div>


        <div>

            <span>
                IMPLEMENTO
            </span>

            <h2>
                O que está sendo tracionado?
            </h2>

            <p>

                Selecione o implemento conectado
                ao trator durante a operação.

            </p>

        </div>


    </div>



    <div class="implementos-grid">


        <!-- PLANTADEIRA -->

        <button
            class="implemento-card"
            data-implemento="Plantadeira"
            data-tipo="plantadeira"
        >

            <div class="implemento-icon">

                <i data-lucide="sprout"></i>

            </div>


            <span class="implemento-code">
                IMP-01
            </span>


            <h3>
                Plantadeira
            </h3>


            <p>

                Operações de semeadura
                com diferentes números de linhas.

            </p>


            <div class="check-indicador">

                <i data-lucide="check"></i>

            </div>

        </button>



        <!-- ARADO -->

        <button
            class="implemento-card"
            data-implemento="Arado"
            data-tipo="arado"
        >

            <div class="implemento-icon">

                <i data-lucide="move-down"></i>

            </div>


            <span class="implemento-code">
                IMP-02
            </span>


            <h3>
                Arado
            </h3>


            <p>

                Preparo e revolvimento
                mais profundo do solo.

            </p>


            <div class="check-indicador">

                <i data-lucide="check"></i>

            </div>

        </button>



        <!-- GRADE -->

        <button
            class="implemento-card"
            data-implemento="Grade"
            data-tipo="grade"
        >

            <div class="implemento-icon">

                <i data-lucide="circle-dot"></i>

            </div>


            <span class="implemento-code">
                IMP-03
            </span>


            <h3>
                Grade
            </h3>


            <p>

                Preparo superficial
                e destorroamento do terreno.

            </p>


            <div class="check-indicador">

                <i data-lucide="check"></i>

            </div>

        </button>



        <!-- SUBSOLADOR -->

        <button
            class="implemento-card"
            data-implemento="Subsolador"
            data-tipo="subsolador"
        >

            <div class="implemento-icon">

                <i data-lucide="arrow-down-to-line"></i>

            </div>


            <span class="implemento-code">
                IMP-04
            </span>


            <h3>
                Subsolador
            </h3>


            <p>

                Operação profunda com
                elevada demanda de tração.

            </p>


            <div class="check-indicador">

                <i data-lucide="check"></i>

            </div>

        </button>



        <!-- OUTRO -->

        <button
            class="implemento-card"
            data-implemento="Outro"
            data-tipo="outro"
        >

            <div class="implemento-icon">

                <i data-lucide="plus"></i>

            </div>


            <span class="implemento-code">
                IMP-05
            </span>


            <h3>
                Outro
            </h3>


            <p>

                Utilize outro tipo de
                implemento agrícola.

            </p>


            <div class="check-indicador">

                <i data-lucide="check"></i>

            </div>

        </button>


    </div>


</section>



<!-- =====================================================
     PASSO 2 - CONFIGURAÇÃO
===================================================== -->

<section
    class="config-section configuracao-operacao"
    id="configuracaoOperacao"
>


    <div class="config-heading">


        <div class="numero-secao">

            02

        </div>


        <div>

            <span>
                PARÂMETROS
            </span>

            <h2>
                Condições da operação
            </h2>

            <p>

                Estes dados ajudam a contextualizar
                as leituras obtidas pelo dinamômetro.

            </p>

        </div>


    </div>



    <div class="parametros-grid">


        <!-- VELOCIDADE -->

        <div class="campo-operacao">

            <label for="velocidade">

                VELOCIDADE DE OPERAÇÃO

            </label>


            <div class="input-unidade">

                <input
                    type="number"
                    id="velocidade"
                    placeholder="Ex: 5"
                    step="0.1"
                    min="0"
                >

                <span>
                    km/h
                </span>

            </div>


            <small>

                Opcional por enquanto

            </small>

        </div>



        <!-- PROFUNDIDADE -->

        <div class="campo-operacao">

            <label for="profundidade">

                PROFUNDIDADE

            </label>


            <div class="input-unidade">

                <input
                    type="number"
                    id="profundidade"
                    placeholder="Ex: 10"
                    step="0.1"
                    min="0"
                >

                <span>
                    cm
                </span>

            </div>


            <small>

                Quando aplicável

            </small>

        </div>



        <!-- SOLO -->

        <div class="campo-operacao">

            <label for="solo">

                CONDIÇÃO DO SOLO

            </label>


            <select id="solo">

                <option value="">
                    Não informado
                </option>

                <option value="seco">
                    Seco
                </option>

                <option value="umido">
                    Úmido
                </option>

                <option value="intermediario">
                    Intermediário
                </option>

            </select>


            <small>

                Informação operacional

            </small>

        </div>



        <!-- LINHAS -->

        <div
            class="campo-operacao campo-linhas"
            id="campoLinhas"
        >

            <label for="linhas">

                NÚMERO DE LINHAS

            </label>


            <div class="input-unidade">

                <input
                    type="number"
                    id="linhas"
                    placeholder="Ex: 5"
                    min="1"
                >

                <span>
                    linhas
                </span>

            </div>


            <small>

                Exibido para plantadeiras

            </small>

        </div>


    </div>


</section>



<!-- =====================================================
     PASSO 3 - RESUMO
===================================================== -->

<section class="resumo-operacao">


    <div class="resumo-copy">


        <span>
            03 / RESUMO
        </span>


        <h2>
            Pronto para monitorar.
        </h2>


        <p>

            Confira a configuração antes de seguir
            para o painel de força de tração.

        </p>


    </div>



    <div class="resumo-painel">


        <div class="resumo-item">

            <span>
                MÁQUINA
            </span>

            <strong id="resumoTrator">
                ---
            </strong>

        </div>


        <div class="resumo-item">

            <span>
                IMPLEMENTO
            </span>

            <strong id="resumoImplemento">
                Não selecionado
            </strong>

        </div>


        <div class="resumo-item">

            <span>
                OPERAÇÃO
            </span>

            <strong id="resumoOperacao">
                Aguardando configuração
            </strong>

        </div>


        <div class="resumo-item">

            <span>
                SENSOR
            </span>

            <strong class="sensor-offline">

                <span></span>

                OFFLINE

            </strong>

        </div>


    </div>



    <button
        class="iniciar-monitoramento"
        id="iniciarMonitoramento"
        disabled
    >

        <span>

            INICIAR MONITORAMENTO

        </span>


        <i data-lucide="arrow-right"></i>

    </button>


</section>



<footer class="operacao-footer">


    <span>
        FORCETRACK © 2026
    </span>


    <span>
        MACHINE → IMPLEMENT → TELEMETRY
    </span>


</footer>


</main>



<script>

lucide.createIcons();



/* =====================================================
   MÁQUINA SELECIONADA
===================================================== */

const nomeTrator =
    localStorage.getItem(
        "forcetrack_trator_modelo"
    );


const potenciaTrator =
    localStorage.getItem(
        "forcetrack_trator_potencia"
    );


if (!nomeTrator) {

    window.location.href =
        "/ForceTrack/maquinas.php";

}


document
    .getElementById("nomeTrator")
    .textContent =
    nomeTrator || "---";


document
    .getElementById("resumoTrator")
    .textContent =
    nomeTrator || "---";


document
    .getElementById("potenciaTrator")
    .textContent =
    potenciaTrator || "---";



/* =====================================================
   IMPLEMENTO
===================================================== */

const cardsImplemento =
    document.querySelectorAll(
        ".implemento-card"
    );


let implementoSelecionado = "";

let tipoImplemento = "";


cardsImplemento.forEach(card => {

    card.addEventListener(
        "click",
        () => {


            cardsImplemento.forEach(
                item =>
                item.classList.remove(
                    "selecionado"
                )
            );


            card.classList.add(
                "selecionado"
            );


            implementoSelecionado =
                card.dataset.implemento;


            tipoImplemento =
                card.dataset.tipo;


            document
                .getElementById(
                    "resumoImplemento"
                )
                .textContent =
                implementoSelecionado;


            /* LINHAS SÓ PARA PLANTADEIRA */

            const campoLinhas =
                document.getElementById(
                    "campoLinhas"
                );


            if (
                tipoImplemento
                === "plantadeira"
            ) {

                campoLinhas
                    .classList
                    .add("visivel");

            }

            else {

                campoLinhas
                    .classList
                    .remove("visivel");

                document
                    .getElementById(
                        "linhas"
                    )
                    .value = "";

            }


            atualizarResumo();

        }
    );

});



/* =====================================================
   PARÂMETROS
===================================================== */

const velocidade =
    document.getElementById(
        "velocidade"
    );


const profundidade =
    document.getElementById(
        "profundidade"
    );


const solo =
    document.getElementById(
        "solo"
    );


const linhas =
    document.getElementById(
        "linhas"
    );


[
    velocidade,
    profundidade,
    solo,
    linhas
]
.forEach(campo => {

    campo.addEventListener(
        "input",
        atualizarResumo
    );

    campo.addEventListener(
        "change",
        atualizarResumo
    );

});



function atualizarResumo() {


    let partes = [];


    if (velocidade.value) {

        partes.push(
            velocidade.value
            + " km/h"
        );

    }


    if (profundidade.value) {

        partes.push(
            profundidade.value
            + " cm"
        );

    }


    if (
        tipoImplemento
        === "plantadeira"
        &&
        linhas.value
    ) {

        partes.push(
            linhas.value
            + " linhas"
        );

    }


    if (solo.value) {

        const nomesSolo = {

            seco: "Solo seco",

            umido: "Solo úmido",

            intermediario:
                "Solo intermediário"

        };


        partes.push(
            nomesSolo[
                solo.value
            ]
        );

    }


    document
        .getElementById(
            "resumoOperacao"
        )
        .textContent =
        partes.length
            ? partes.join(" • ")
            : "Parâmetros não informados";


    document
        .getElementById(
            "iniciarMonitoramento"
        )
        .disabled =
        !implementoSelecionado;

}



/* =====================================================
   SALVAR CONFIGURAÇÃO
===================================================== */

document
    .getElementById(
        "iniciarMonitoramento"
    )
    .addEventListener(
        "click",
        () => {


            if (
                !implementoSelecionado
            ) {

                return;

            }


            localStorage.setItem(
                "forcetrack_implemento",
                implementoSelecionado
            );


            localStorage.setItem(
                "forcetrack_tipo_implemento",
                tipoImplemento
            );


            localStorage.setItem(
                "forcetrack_velocidade",
                velocidade.value
            );


            localStorage.setItem(
                "forcetrack_profundidade",
                profundidade.value
            );


            localStorage.setItem(
                "forcetrack_solo",
                solo.value
            );


            localStorage.setItem(
                "forcetrack_linhas",
                linhas.value
            );


            window.location.href =
                "/ForceTrack/monitoramento.php";

        }
    );

</script>


</body>

</html>