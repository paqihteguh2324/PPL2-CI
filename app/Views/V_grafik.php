<div class="align-item-end" align="right">
    <div class="btn btn-primary">
        <a href="/Mahasiswa">Kembali</a>
    </div>
</div>
<div class="trending">
    <h3>Chart Tinggi Badan</h3>
    <ul class="trending-post">
        <li>
            <canvas id="myChart"></canvas>
        </li>
    </ul>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    <?php
    $js_array_jtb = json_encode($jumlah_tinggi_badan);
    echo "var dataobj = " . $js_array_jtb . ";\n";
    ?>

    var labels = Object.keys(dataobj)
    var dataarray = Object.values(dataobj)

    console.log(labels);
    console.log(dataarray);
    const data = {
        labels: labels,
        datasets: [{
            label: 'Jumlah Tinggi Badan',
            backgroundColor: '#0000ff',
            borderColor: '#111',
            data: dataarray,
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    suggestedMax: 20,
                    beginAtZero: true,
                    ticks: {
                        maxTicksLimit: 4,
                    },
                    grid: {
                        drawBorder: false,
                    },
                },
            },
            datasets: {
                bar: {
                    barThickness: 30
                }
            }
        }
    };
</script>
<script>
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>