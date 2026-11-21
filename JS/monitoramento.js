/* =========================================================
   DADOS DOS TRATORES
========================================================= */

const tratores = {

    "john-deere-5075e":
        "/ForceTrack/IMG/tratores/john-deere-5075e.jpg",

    "massey-mf4707":
        "/ForceTrack/IMG/tratores/massey-ferguson-mf4707.jpg",

    "new-holland-tl580":
        "/ForceTrack/IMG/tratores/new-holland-tl580.png",

    "new-holland-tl590":
        "/ForceTrack/IMG/tratores/new-holland-tl5-medio.jpg",

    "new-holland-tl5100":
        "/ForceTrack/IMG/tratores/new-holland-tl5-medio.jpg",

    "massey-mf7719":
        "/ForceTrack/IMG/tratores/massey-ferguson-mf7719.jpg",

    "valtra-bh194":
        "/ForceTrack/IMG/tratores/valtra-bh.png",

    "valtra-bh224":
        "/ForceTrack/IMG/tratores/valtra-bh.png",

    "case-magnum400":
        "/ForceTrack/IMG/tratores/case-ih-magnum-400.png",

    "new-holland-t9700":
        "/ForceTrack/IMG/tratores/new-holland-t9700.png"

};


/* =========================================================
   LOCAL STORAGE
========================================================= */

const tratorId =
    localStorage.getItem(
        "forcetrack_trator_id"
    );

const tratorModelo =
    localStorage.getItem(
        "forcetrack_trator_modelo"
    );

const tratorPotencia =
    localStorage.getItem(
        "forcetrack_trator_potencia"
    );

const implemento =
    localStorage.getItem(
        "forcetrack_implemento"
    );

const velocidade =
    localStorage.getItem(
        "forcetrack_velocidade"
    );

const profundidade =
    localStorage.getItem(
        "forcetrack_profundidade"
    );

const solo =
    localStorage.getItem(
        "forcetrack_solo"
    );

const linhas =
    localStorage.getItem(
        "forcetrack_linhas"
    );


if (!tratorModelo) {

    window.location.href =
        "/ForceTrack/maquinas.php";

}


if (!implemento) {

    window.location.href =
        "/ForceTrack/operacao.php";

}


/* =========================================================
   DADOS DA OPERAÇÃO
========================================================= */

document.getElementById(
    "tratorAtivo"
).textContent =
    tratorModelo;


document.getElementById(
    "contextTrator"
).textContent =
    tratorModelo;


document.getElementById(
    "potenciaAtiva"
).textContent =
    tratorPotencia || "---";


document.getElementById(
    "implementoAtivo"
).textContent =
    implemento;


document.getElementById(
    "contextImplemento"
).textContent =
    implemento;


if (
    tratorId &&
    tratores[tratorId]
) {

    document.getElementById(
        "imagemTrator"
    ).src =
        tratores[tratorId];

}


/* VELOCIDADE */

const velocidadeTexto =
    velocidade
        ? velocidade + " km/h"
        : "Não informada";


document.getElementById(
    "velocidadeAtiva"
).textContent =
    velocidadeTexto;


document.getElementById(
    "contextVelocidade"
).textContent =
    velocidadeTexto;


/* PROFUNDIDADE */

const profundidadeTexto =
    profundidade
        ? profundidade + " cm"
        : "Não informada";


document.getElementById(
    "profundidadeAtiva"
).textContent =
    profundidadeTexto;


document.getElementById(
    "contextProfundidade"
).textContent =
    profundidadeTexto;


/* SOLO */

const nomesSolo = {

    seco: "Seco",

    umido: "Úmido",

    intermediario:
        "Intermediário"

};


const soloTexto =
    solo
        ? (
            nomesSolo[solo]
            || solo
        )
        : "Não informado";


document.getElementById(
    "soloAtivo"
).textContent =
    soloTexto;


document.getElementById(
    "contextSolo"
).textContent =
    soloTexto;


/* LINHAS */

document.getElementById(
    "contextLinhas"
).textContent =
    linhas
        ? linhas + " linhas"
        : "Não aplicável";


/* =========================================================
   GRÁFICO
========================================================= */

const graficoContexto =
    document
        .getElementById(
            "graficoMonitoramento"
        )
        .getContext("2d");


const grafico =
    new Chart(
        graficoContexto,
        {

            type: "line",

            data: {

                labels: [],

                datasets: [{

                    data: [],

                    borderColor:
                        "#174c2c",

                    borderWidth: 2,

                    pointRadius: 2,

                    pointHoverRadius: 5,

                    pointBackgroundColor:
                        "#174c2c",

                    tension: 0.32,

                    fill: false

                }]

            },


            options: {

                responsive: true,

                maintainAspectRatio: false,

                animation: false,


                interaction: {

                    intersect: false,

                    mode: "index"

                },


                plugins: {

                    legend: {
                        display: false
                    },


                    tooltip: {

                        backgroundColor:
                            "#111111",

                        titleColor:
                            "#ffffff",

                        bodyColor:
                            "#ffffff",

                        padding: 12,

                        callbacks: {

                            label(context) {

                                return (
                                    "Força: "
                                    +
                                    Number(
                                        context.raw
                                    ).toFixed(2)
                                    +
                                    " N"
                                );

                            }

                        }

                    }

                },


                scales: {

                    x: {

                        grid: {

                            display: false

                        },

                        border: {

                            color:
                                "#d6d6d1"

                        },

                        ticks: {

                            color:
                                "#8a8a85",

                            maxTicksLimit: 10,

                            font: {

                                size: 9

                            }

                        }

                    },


                    y: {

                        beginAtZero: true,

                        grid: {

                            color:
                                "#ededE9"

                        },

                        border: {

                            display: false

                        },

                        ticks: {

                            color:
                                "#8a8a85",

                            callback(value) {

                                return (
                                    value + " N"
                                );

                            },

                            font: {

                                size: 9

                            }

                        }

                    }

                }

            }

        }
    );


/* =========================================================
   BUSCAR DADOS
========================================================= */

function atualizarMonitoramento() {


    fetch(
        "/ForceTrack/API/listar.php"
    )

        .then(resposta => {


            if (!resposta.ok) {

                throw new Error(
                    "Erro na API"
                );

            }


            return resposta.json();

        })


        .then(dados => {


            sistemaOnline();


            if (!dados.length) {

                return;

            }


            const ultima =
                dados[
                    dados.length - 1
                ];


            const valores =
                dados.map(
                    leitura =>
                        Number(
                            leitura.forca
                        )
                );


            const atual =
                Number(
                    ultima.forca
                );


            const media =
                valores.reduce(
                    (total, valor) =>
                        total + valor,
                    0
                )
                /
                valores.length;


            const maxima =
                Math.max(
                    ...valores
                );


            const anomalias =
                dados.filter(
                    leitura =>
                        Number(
                            leitura.anomalia
                        ) === 1
                );


            document.getElementById(
                "forcaAtual"
            ).textContent =
                atual.toFixed(2);


            document.getElementById(
                "forcaMedia"
            ).textContent =
                media.toFixed(2)
                + " N";


            document.getElementById(
                "forcaMaxima"
            ).textContent =
                maxima.toFixed(2)
                + " N";


            document.getElementById(
                "totalAnomalias"
            ).textContent =
                anomalias.length;


            if (ultima.data_hora) {

                const partes =
                    ultima.data_hora
                        .split(" ");


                document.getElementById(
                    "ultimaLeitura"
                ).textContent =
                    partes[1]
                    || ultima.data_hora;

            }


            atualizarStatus(
                Number(
                    ultima.anomalia
                )
            );


            atualizarGrafico(
                dados
            );


            atualizarEventos(
                anomalias
            );

        })


        .catch(erro => {


            console.error(
                erro
            );


            sistemaOffline();

        });

}


/* =========================================================
   STATUS
========================================================= */

function atualizarStatus(
    anomalia
) {


    const status =
        document.getElementById(
            "statusOperacao"
        );


    if (anomalia === 1) {

        status.className =
            "force-status alert";


        status.innerHTML =
            "<span></span>Anomalia";

    }

    else {

        status.className =
            "force-status normal";


        status.innerHTML =
            "<span></span>Normal";

    }

}


/* =========================================================
   GRÁFICO
========================================================= */

function atualizarGrafico(
    dados
) {


    grafico.data.labels =
        dados.map(
            leitura => {


                if (
                    leitura.data_hora
                ) {

                    const partes =
                        leitura
                            .data_hora
                            .split(" ");


                    return (
                        partes[1]
                        || leitura.id
                    );

                }


                return leitura.id;

            }
        );


    grafico.data
        .datasets[0]
        .data =
        dados.map(
            leitura =>
                Number(
                    leitura.forca
                )
        );


    grafico.update();

}


/* =========================================================
   EVENTOS
========================================================= */

function atualizarEventos(
    anomalias
) {


    const lista =
        document.getElementById(
            "listaEventos"
        );


    if (!anomalias.length) {

        lista.innerHTML = `

            <div class="empty-event">

                Nenhuma anomalia registrada
                nas leituras atuais.

            </div>

        `;

        return;

    }


    const recentes =
        [...anomalias]
            .reverse()
            .slice(0, 4);


    lista.innerHTML =
        recentes.map(
            evento => {


                let data = "";

                let horario = "---";


                if (
                    evento.data_hora
                ) {

                    const partes =
                        evento
                            .data_hora
                            .split(" ");


                    data =
                        partes[0] || "";


                    horario =
                        partes[1] || "---";

                }


                return `

                    <div class="event-row">


                        <span class="event-id">

                            #${String(
                                evento.id
                            ).padStart(
                                4,
                                "0"
                            )}

                        </span>


                        <div class="event-description">

                            <strong>
                                Variação de força
                            </strong>

                            <span>

                                Alteração elevada
                                em relação às leituras
                                anteriores

                                ${
                                    data
                                    ? " • " + data
                                    : ""
                                }

                            </span>

                        </div>


                        <strong class="event-force">

                            ${Number(
                                evento.forca
                            ).toFixed(2)}
                            N

                        </strong>


                        <span class="event-time">

                            ${horario}

                        </span>


                    </div>

                `;

            }
        )
        .join("");

}


/* =========================================================
   API STATUS
========================================================= */

function sistemaOnline() {


    document.getElementById(
        "apiStatus"
    ).textContent =
        "Online";


    document.getElementById(
        "databaseStatus"
    ).textContent =
        "Online";


    document.getElementById(
        "apiDot"
    ).className =
        "system-dot online";


    document.getElementById(
        "databaseDot"
    ).className =
        "system-dot online";

}


function sistemaOffline() {


    document.getElementById(
        "apiStatus"
    ).textContent =
        "Offline";


    document.getElementById(
        "databaseStatus"
    ).textContent =
        "Offline";


    document.getElementById(
        "apiDot"
    ).className =
        "system-dot offline";


    document.getElementById(
        "databaseDot"
    ).className =
        "system-dot offline";

}


/* =========================================================
   INICIAR
========================================================= */

atualizarMonitoramento();


setInterval(
    atualizarMonitoramento,
    1000
);