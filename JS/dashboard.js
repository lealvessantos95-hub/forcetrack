function atualizarDashboard() {

    fetch("/ForceTrack/API/listar.php")

        .then(resposta => resposta.json())

        .then(dados => {

            if (dados.length === 0) {

                document.getElementById("forcaValor")
                    .textContent = "0.00";

                document.getElementById("status")
                    .innerHTML =
                    '<span class="dot gray"></span> SEM DADOS';

                return;
            }


            const ultima =
                dados[dados.length - 1];


            /* FORÇA */

            document.getElementById("forcaValor")
                .textContent =
                Number(ultima.forca).toFixed(2);



            /* HORÁRIO */

            const dataHora =
                ultima.data_hora;


            if (dataHora) {

                const partes =
                    dataHora.split(" ");

                document.getElementById("hora")
                    .textContent =
                    partes[1] || dataHora;

            }



            /* STATUS */

            const status =
                document.getElementById("status");


            if (Number(ultima.anomalia) === 1) {

                status.className =
                    "status-main alert";

                status.innerHTML =
                    '<span class="dot red"></span> ANOMALIA';

            }

            else {

                status.className =
                    "status-main normal";

                status.innerHTML =
                    '<span class="dot green"></span> NORMAL';

            }

        })


        .catch(erro => {

            console.error(
                "Erro no dashboard:",
                erro
            );

        });

}


atualizarDashboard();


setInterval(
    atualizarDashboard,
    1000
);