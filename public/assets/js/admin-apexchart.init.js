

//=========================================//
/*/*         Apexcharts for admin          */
//=========================================//
$(document).ready(function () {
    $.ajax({
        url: '/get-chart-data',
        method: 'GET',
        success: function (res) {
            // Render Bar Chart
            const options1 = {
                series: [
                    { name: 'Approved', data: res.approved },
                    { name: 'Pending', data: res.pending },
                    { name: 'Rejected', data: res.rejected }
                ],
                chart: {
                    type: 'bar',
                    height: 350,
                    toolbar: { show: false },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '40%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: { enabled: false },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                colors: ['#396cf0', '#53c797', '#f1b561'],
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                },
                yaxis: {
                    title: {
                        text: 'Appointments',
                        style: {
                            colors: ['#8492a6'],
                            fontSize: '13px',
                            fontFamily: 'Inter, sans-serif',
                            fontWeight: 500,
                        },
                    },
                },
                fill: { opacity: 1 },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + " Appointments";
                        }
                    }
                }
            };

            var chart1 = new ApexCharts(document.querySelector("#dashboard"), options1);
            chart1.render();

            // Render Radial Chart Dynamically
            const totalAppointments = res.totals.approved + res.totals.pending + res.totals.rejected;

            const options2 = {
                chart: {
                    height: 350,
                    type: 'radialBar',
                    dropShadow: {
                        enabled: true,
                        top: 10,
                        left: 0,
                        bottom: 0,
                        right: 0,
                        blur: 2,
                        color: '#45404a2e',
                        opacity: 0.35
                    },
                },
                colors: ['#396cf0', '#53c797', '#f1b561'],
                plotOptions: {
                    radialBar: {
                        track: {
                            background: '#b9c1d4',
                            opacity: 0.5,
                        },
                        dataLabels: {
                            name: { fontSize: '22px' },
                            value: { fontSize: '16px', color: '#8997bd' },
                            total: {
                                show: true,
                                label: 'Total',
                                color: '#8997bd',
                                formatter: function () {
                                    return totalAppointments;
                                }
                            }
                        }
                    }
                },
                series: [
                    res.totals.approved,
                    res.totals.pending,
                    res.totals.rejected
                ],
                labels: ['Approved', 'Pending', 'Rejected'],
            };

            var chart2 = new ApexCharts(document.querySelector("#department"), options2);
            chart2.render();
        },
        error: function () {
            alert('Failed to load chart data');
        }
    });
});
