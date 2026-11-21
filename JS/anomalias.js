/* =========================================================
   CONTEXTO DA OPERAÇÃO
========================================================= */

const maquina =
    localStorage.getItem(
        "forcetrack_trator_modelo"
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



document
    .getElementById(
        "anomalyMachine"
    )
    .textContent =
    maquina || "Nenhuma máquina selecionada";


document
    .getElementById(
        "anomalyImplement"
    )
    .textContent =
    implemento || "Não configurado";



/* =========================================================
   RESUMO DA OPERAÇÃO
========================================================= */

let partesOperacao = [];


if (velocidade) {

    partesOperacao.push(
        velocidade + " km/h"
    );

}


if (profundidade) {

    partesOperacao.push(
        profundidade + " cm"
    );

}


if (linhas) {

    partesOperacao.push(
        linhas + " linhas"
    );

}


if (solo) {

    const solos = {

        seco:
            "Solo seco",

        umido:
            "Solo úmido",

        intermediario:
            "Solo intermediário"

    };


    partesOperacao.push(
        solos[solo] || solo
    );

}


document
    .getElementById(
        "anomalyOperation"
    )
    .textContent =
    partesOperacao.length
        ? partesOperacao.join(" • ")
        : "Sem parâmetros informados";



/* =========================================================
   CARREGAR LEITURAS
========================================================= */

function carregarAnomalias() {


    fetch(
        "/ForceTrack/API/listar.php"
    )

        .then(resposta => {


            if (!resposta.ok) {

                throw new Error(
                    "Erro ao acessar API"
                );

            }


            return resposta.json();

        })


        .then(dados => {


            sistemaOnline();


            const anomalias =
                dados.filter(
                    leitura =>
                        Number(
                            leitura.anomalia
                        ) === 1
                );


            atualizarResumo(
                anomalias
            );


            montarEventos(
                anomalias
            );

        })


        .catch(erro => {


            console.error(
                erro
            );


            sistemaOffline();


            document
                .getElementById(
                    "anomaliasLista"
                )
                .innerHTML = `

                    <div class="no-events">

                        Não foi possível
                        carregar os eventos.

                    </div>

                `;

        });

}



/* =========================================================
   RESUMO
========================================================= */

function atualizarResumo(
    anomalias
) {


    document
        .getElementById(
            "totalAnomalias"
        )
        .textContent =
        anomalias.length;


    if (!anomalias.length) {


        document
            .getElementById(
                "maiorAnomalia"
            )
            .textContent =
            "0.00 N";


        document
            .getElementById(
                "ultimaAnomalia"
            )
            .textContent =
            "Nenhum";


        document
            .getElementById(
                "ultimaAnomaliaData"
            )
            .textContent =
            "sem registro";


        return;

    }


    const valores =
        anomalias.map(
            leitura =>
                Number(
                    leitura.forca
                )
        );


    const maior =
        Math.max(
            ...valores
        );


    document
        .getElementById(
            "maiorAnomalia"
        )
        .textContent =
        maior.toFixed(2)
        + " N";



    const ultima =
        anomalias[
            anomalias.length - 1
        ];


    document
        .getElementById(
            "ultimaAnomalia"
        )
        .textContent =
        Number(
            ultima.forca
        ).toFixed(2)
        + " N";


    if (
        ultima.data_hora
    ) {


        const partes =
            ultima
                .data_hora
                .split(" ");


        const dataFormatada =
            formatarData(
                partes[0]
            );


        const hora =
            partes[1]
            || "";


        document
            .getElementById(
                "ultimaAnomaliaData"
            )
            .textContent =
            dataFormatada
            +
            (
                hora
                ? " • " + hora
                : ""
            );

    }

}



/* =========================================================
   EVENTOS
========================================================= */

function montarEventos(
    anomalias
) {


    const lista =
        document.getElementById(
            "anomaliasLista"
        );


    if (!anomalias.length) {


        lista.innerHTML = `

            <div class="no-events">

                Nenhuma anomalia foi encontrada
                na janela atual de leituras.

            </div>

        `;


        return;

    }


    const eventos =
        [...anomalias]
            .reverse();


    lista.innerHTML =
        eventos.map(
            evento => {


                let data =
                    "---";


                let horario =
                    "---";


                if (
                    evento.data_hora
                ) {


                    const partes =
                        evento
                            .data_hora
                            .split(" ");


                    data =
                        formatarData(
                            partes[0]
                        );


                    horario =
                        partes[1]
                        || "---";

                }


                return `

                    <article
                        class="anomaly-event"
                    >


                        <span
                            class="anomaly-event-id"
                        >

                            #${String(
                                evento.id
                            ).padStart(
                                4,
                                "0"
                            )}

                        </span>



                        <div
                            class="anomaly-event-copy"
                        >


                            <span>
                                VARIAÇÃO DETECTADA
                            </span>


                            <h3>
                                Pico de força
                            </h3>


                            <p>

                                Esta leitura apresentou
                                uma variação elevada em
                                relação ao comportamento
                                recente registrado pelo
                                ForceTrack.

                            </p>


                        </div>



                        <div
                            class="anomaly-force"
                        >

                            <span>
                                FORÇA
                            </span>

                            <strong>

                                ${Number(
                                    evento.forca
                                ).toFixed(2)}
                                N

                            </strong>

                        </div>



                        <div
                            class="anomaly-time"
                        >

                            <span>
                                REGISTRADO EM
                            </span>

                            <strong>
                                ${horario}
                            </strong>

                            <small>
                                ${data}
                            </small>

                        </div>


                    </article>

                `;

            }
        )
        .join("");

}



/* =========================================================
   DATA
========================================================= */

function formatarData(
    dataBanco
) {


    if (!dataBanco) {

        return "---";

    }


    const partes =
        dataBanco.split("-");


    if (
        partes.length !== 3
    ) {

        return dataBanco;

    }


    return (
        partes[2]
        + "/"
        + partes[1]
        + "/"
        + partes[0]
    );

}



/* =========================================================
   STATUS
========================================================= */

function sistemaOnline() {


    document
        .getElementById(
            "apiIndicator"
        )
        .className =
        "online";


    document
        .getElementById(
            "apiText"
        )
        .textContent =
        "Online";

}



function sistemaOffline() {


    document
        .getElementById(
            "apiIndicator"
        )
        .className =
        "offline";


    document
        .getElementById(
            "apiText"
        )
        .textContent =
        "Offline";

}



/* =========================================================
   INICIAR
========================================================= */

carregarAnomalias();


setInterval(
    carregarAnomalias,
    3000
);