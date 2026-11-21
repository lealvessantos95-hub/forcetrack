const ctx =
    document.getElementById("graficoForca");


const grafico =
    new Chart(ctx, {

        type: "line",

        data: {

            labels: [],

            datasets: [{

                label:
                    "Força de Tração",

                data: [],

                borderColor:
                    "#a3e635",

                backgroundColor:
                    "rgba(163,230,53,0.08)",

                borderWidth: 2,

                pointRadius: 2,

                pointHoverRadius: 5,

                pointBackgroundColor:
                    "#a3e635",

                tension: 0.35,

                fill: true

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
                        "#151d18",

                    borderColor:
                        "#314437",

                    borderWidth: 1,

                    titleColor:
                        "#f1f5f2",

                    bodyColor:
                        "#a3e635"

                }

            },


            scales: {

                y: {

                    beginAtZero: true,

                    grid: {

                        color:
                            "rgba(130,144,135,0.08)"

                    },

                    border: {

                        color:
                            "rgba(130,144,135,0.15)"

                    },

                    ticks: {

                        color:
                            "#66736a",

                        font: {

                            family:
                                "Consolas",

                            size: 10

                        }

                    }

                },


                x: {

                    grid: {

                        color:
                            "rgba(130,144,135,0.05)"

                    },

                    border: {

                        color:
                            "rgba(130,144,135,0.15)"

                    },

                    ticks: {

                        color:
                            "#66736a",

                        font: {

                            family:
                                "Consolas",

                            size: 10

                        }

                    }

                }

            }

        }

    });



function atualizarGrafico() {

    fetch("/ForceTrack/API/listar.php")

        .then(resposta =>
            resposta.json()
        )

        .then(dados => {


            grafico.data.labels =
                dados.map(
                    leitura =>
                    "#" + leitura.id
                );


            grafico.data
                .datasets[0]
                .data =
                dados.map(
                    leitura =>
                    Number(leitura.forca)
                );


            grafico.update();

        })


        .catch(erro => {

            console.error(
                "Erro no gráfico:",
                erro
            );

        });

}


atualizarGrafico();


setInterval(
    atualizarGrafico,
    1000
);