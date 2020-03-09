
@extends('backend.layouts.master')

@section('title')
    thống kê đơn hàng
@endsection

@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <!-- Content Header -->
                <div class="container-fluid">
                    <div class="row">
                        <button id="prev_month" onclick="lastMonth()" type="button" class="btn btn-success"><i class="fa fa-caret-left" style="font-size: 20px"></i></button>
                        <p id="month" style="border: 1px solid grey; padding: 10px; margin: 0 10px"></p>
                        <button id="next_month" onclick="nextMonth()" type="button" class="btn btn-success"><i class="fa fa-caret-right" style="font-size: 20px"></i></button>
                    </div>
                    <div class="row mb-2">
                        <canvas id="myCharthihi"style="display: block;width: 1000px !important;height: 200px !important;"></canvas>

                    </div></div></div></div></div>
    <script>
        var currentDate = new Date()



            var currentMonth = currentDate.getMonth();
            var currentYear = currentDate.getFullYear();
            $('#month').text((currentMonth + 1) + '/'+ currentYear);
            var url = "{{url('/admin/statistics/chart')}}";
            var ctx = document.getElementById('myCharthihi').getContext('2d');

            createChart(currentMonth, currentYear);

            function createChart(month, year) {

                var dayInMonths = [];
                var numberOfDayInMonth = new Date(year, month, 0).getDate();   //get number of day in month

                for(var i=1; i <= numberOfDayInMonth; i++)
                {
                    dayInMonths.push(i);
                }


                $.get(url + '/' + (month + 1) + '/' + year, function(data) {
                    var totals = [];
                    for(var i=0; i < numberOfDayInMonth; i++){
                        totals.push(0);
                    }
                    if(data){
                        for(var i=1; i <= numberOfDayInMonth; i++)
                        {
                            data.map(item => {
                                let date = new Date(item['date']);
                                if(date.getDate() == i){
                                    totals[i-1]=item['cost'];
                                }
                            })

                        }
                    }
                    console.log(totals);

                    var chart = new Chart(ctx, {
                        // The type of chart we want to create

                        type: 'bar',
                        // The data for our dataset
                        data: {
                            labels: dayInMonths,
                            datasets: [{
                                label: 'Doanh thu tháng',
                                backgroundColor: 'rgb(255, 99, 132)',
                                borderColor: 'rgb(255, 99, 132)',
                                data: totals
                            }]
                        },
                        // Configuration options go here
                        options: {
                            responsive: false,
                            maintainAspectRatio: false,
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
                });
            }

            function nextMonth() {
                let newDate = new Date(currentDate.setMonth(currentDate.getMonth() + 1))
                let month = newDate.getMonth();
                let year = newDate.getFullYear();
                currentDate = newDate;
                $('#month').text((month + 1)+'/' + year);
                createChart(month, year);
            }

            function lastMonth() {
                let newDate = new Date(currentDate.setMonth(currentDate.getMonth() - 1))
                let month = newDate.getMonth();
                let year = newDate.getFullYear();
                currentDate = newDate;
                $('#month').text((month + 1)+'/' + year);
                createChart(month, year);
            }


    </script>
@endsection
