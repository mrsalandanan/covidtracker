<x-app-layout>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chart </title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <style>
        body {
            font-family: "Montserrat";
        }

        .title {
            color: var(--blue);
            text-align: center;
            font-size: 30px;
        }

        .country_options {
            margin-left: 50%;
            transform: translate(-50%);
            height: 35px;
            -webkit-appearance: none;
            border: 2px solid var(--blue);
        }
    </style>
    <body class="h-screen bg-gray-100">
    <div class="container px-4 mx-auto" >
        <div class="p-6 m-20 bg-white rounded shadow" >
            <p style="font-size: 30px;">COVID-19 Cases by Age Group</p>
            {!! $chart->container() !!}
        </div>

    </div>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <div class="container px-4 mx-auto" >
        <div class="p-6 m-20 bg-white rounded shadow" >
    <p class="title">Timeline of COVID-19 Cases in the Philippines</p>
    <div class="chart_div"></div>
    <select class="country_options" disabled></select>
        </div>
    </div>

    <script>
        const countrysSelectELement = document.querySelector(".country_options");
        let currentCountry;
        const chartDiv = document.querySelector(".chart_div");

        function displayChart(data) {
            const canvas = document.createElement('canvas');
            canvas.setAttribute("id", "myChart");
            chartDiv.appendChild(canvas);
            const dailyCases = data.map((day, index) => {
                if (index) return Math.abs(day.Confirmed - data[index - 1].Confirmed);
                else day.Confirmed;
            });

            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: data.map(day => day.Date),
                    datasets: [{
                        label: 'Daily Active Cases',
                        backgroundColor: '#00ff00',
                        borderColor: '#00ff00',
                        data: dailyCases,
                        borderWidth: 1,
                    }]
                },

                // Configuration options go here
                options: {}
            });

        }

        function getCovidData(country) {
            const endpoint = `https://api.covid19api.com/country/${country}`;
            fetch(endpoint).then(response => response.json())
                .then(data => {
                    chartDiv.innerHTML = "";
                    displayChart(data);
                })
                .catch(err => console.warn(err));

        }

        function getCountries() {
            const endpoint = "https://api.covid19api.com/country/philippines";
            fetch(endpoint).then(response => response.json())
                .then(countries => {
                    countries.forEach(country => {
                        const countryName = country.Country;
                        const option = document.createElement("option");
                        option.setAttribute("value", countryName);
                        option.innerHTML = countryName;
                        countrysSelectELement.appendChild(option);
                    });
                    currentCountry = countrysSelectELement.children[0].value;
                    getCovidData(currentCountry);
                })
                .catch(err => console.warn(err));
        }

        getCountries();

        countrysSelectELement.addEventListener("click", () => {
            const currentIndex = countrysSelectELement.selectedIndex;
            const countrySelected = countrysSelectELement.children[currentIndex].value;
            currentCountry = countrySelected;
            getCovidData(countrySelected);
        });
    </script>

    <div class="container px-4 mx-auto" >
        <div class="p-6 m-20 bg-white rounded shadow" >
            <p class="title">Timeline of COVID-19 Cases in the Philippines</p>
            <div class="chart_div"></div>
            <select class="country_options" disabled></select>
        </div>
    </div>

    <script src="{{ LarapexChart::cdn() }}"></script>
    {{ $chart->script() }}
    </body>
    </html>
</x-app-layout>

