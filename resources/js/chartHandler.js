const { default: axios } = require("axios");

function randomColor() {
    let r = Math.floor(Math.random() * (235 - 52 + 1) + 52);
    let g = Math.floor(Math.random() * (235 - 52 + 1) + 52);
    let b = Math.floor(Math.random() * (235 - 52 + 1) + 52);

    return [`rgba(${r}, ${g}, ${b}, 0.2)`, `rgba(${r}, ${g}, ${b}, 1)`];
}

function makeChart() {
    const ctx = document.getElementById("myChart").getContext("2d");

    axios
        .get(location.href + "api/getchartdata")
        .then((data) => {
          let colors = new Array();
          data.data.forEach((e) => {
            colors.push(randomColor());
          })
          console.log(colors);
            const myChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: data.data.map((x) => {
                        return x.name;
                    }),
                    datasets: [
                        {
                            label: "Latest population data per county",
                            data: data.data.map((x) => {
                                return x.total;
                            }),
                            backgroundColor: colors.map((x) => {
                              return x[0];
                            }),
                            borderColor: colors.map((x) => {
                              return x[1];
                            }),
                            borderWidth: 1,
                        },
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        })
        .catch((err) => {
            console.error(err);
        });
}

makeChart();
