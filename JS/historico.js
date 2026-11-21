const maquina =
    localStorage.getItem(
        "forcetrack_trator_modelo"
    );


const implemento =
    localStorage.getItem(
        "forcetrack_implemento"
    );


document
    .getElementById(
        "historyMachine"
    )
    .textContent =
    maquina || "Nenhuma máquina selecionada";


document
    .getElementById(
        "historyImplement"
    )
    .textContent =
    implemento || "Não configurado";



function carregarHistorico() {


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


            atualizarResumo(
                dados
            );


            montarTabela(
                dados
            );

        })


        .catch(erro => {


            console.error(
                erro
            );


            sistemaOffline();


            document
                .getElementById(
                    "historicoTabela"
                )
                .innerHTML = `

                    <tr>

                        <td
                            colspan="5"
                            class="loading-row"
                        >

                            Não foi possível
                            carregar as leituras.

                        </td>

                    </tr>

                `;

        });

}



function atualizarResumo(
    dados
) {


    document
        .getElementById(
            "totalLeituras"
        )
        .textContent =
        dados.length;


    if (!dados.length) {

        return;

    }


    const valores =
        dados.map(
            item =>
                Number(item.forca)
        );


    const media =
        valores.reduce(
            (soma, valor) =>
                soma + valor,
            0
        )
        /
        valores.length;


    const maior =
        Math.max(
            ...valores
        );


    const anomalias =
        dados.filter(
            item =>
                Number(
                    item.anomalia
                ) === 1
        );


    document
        .getElementById(
            "mediaLeituras"
        )
        .textContent =
        media.toFixed(2)
        + " N";


    document
        .getElementById(
            "maiorLeitura"
        )
        .textContent =
        maior.toFixed(2)
        + " N";


    document
        .getElementById(
            "totalAnomalias"
        )
        .textContent =
        anomalias.length;

}



function montarTabela(
    dados
) {


    const tabela =
        document.getElementById(
            "historicoTabela"
        );


    if (!dados.length) {

        tabela.innerHTML = `

            <tr>

                <td
                    colspan="5"
                    class="loading-row"
                >

                    Nenhuma leitura registrada.

                </td>

            </tr>

        `;


        return;

    }


    const leituras =
        [...dados]
            .reverse();


    tabela.innerHTML =
        leituras.map(
            leitura => {


                let data = "---";

                let hora = "---";


                if (
                    leitura.data_hora
                ) {

                    const partes =
                        leitura
                            .data_hora
                            .split(" ");


                    if (partes[0]) {

                        const dataPartes =
                            partes[0]
                                .split("-");


                        if (
                            dataPartes.length
                            === 3
                        ) {

                            data =
                                dataPartes[2]
                                + "/"
                                + dataPartes[1]
                                + "/"
                                + dataPartes[0];

                        }

                    }


                    hora =
                        partes[1]
                        || "---";

                }


                const anomalia =
                    Number(
                        leitura.anomalia
                    ) === 1;


                return `

                    <tr>

                        <td class="table-id">

                            #${String(
                                leitura.id
                            ).padStart(
                                4,
                                "0"
                            )}

                        </td>


                        <td>
                            ${data}
                        </td>


                        <td>
                            ${hora}
                        </td>


                        <td class="table-force">

                            ${Number(
                                leitura.forca
                            ).toFixed(2)}
                            N

                        </td>


                        <td>

                            <span class="
                                status-badge
                                ${
                                    anomalia
                                    ? "alert"
                                    : "normal"
                                }
                            ">

                                ${
                                    anomalia
                                    ? "Anomalia"
                                    : "Normal"
                                }

                            </span>

                        </td>

                    </tr>

                `;

            }
        )
        .join("");

}



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



carregarHistorico();


setInterval(
    carregarHistorico,
    3000
);