<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('css/wheather.css') }}">
        <div class="bg">

            <div class="container">
                <div class="current-info">

                    <div class="date-container">
                        <div class="time" id="time">
                            12:30 <span id="am-pm">PM</span>
                        </div>
                        <div class="date" id="date">
                            Lunes,24 may
                        </div>

                        <div class="others" id="current-weather-items">


                        </div>
                    </div>

                    <div class="place-container">
                        <div class="time-zone" id="time-zone">Asia/Kolkata</div>
                        <div id="country" class="country">IN</div>
                    </div>

                </div>

                <div class="future-forecast">
                    <div class="today" id="current-temp">
                        <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                        <div class="other">
                            <div class="day">Lunes</div>
                            <div class="temp">Nigth - 25.6&#176; C</div>
                            <div class="temp">Day - 35.6&#176; C</div>
                        </div>
                    </div>

                    <div class="weather-forecast" id="weather-forecast">
                        <div class="weather-forecast-item">
                            <div class="day">Martes</div>
                            <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                            <div class="temp">Nigth - 25.6&#176; C</div>
                            <div class="temp">Day - 35.6&#176; C</div>
                        </div>
                        <div class="weather-forecast-item">
                            <div class="day">Miercoles</div>
                            <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                            <div class="temp">Nigth - 25.6&#176; C</div>
                            <div class="temp">Day - 35.6&#176; C</div>
                        </div>
                        <div class="weather-forecast-item">
                            <div class="day">Jueves</div>
                            <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                            <div class="temp">Nigth - 25.6&#176; C</div>
                            <div class="temp">Day - 35.6&#176; C</div>
                        </div>
                        <div class="weather-forecast-item">
                            <div class="day">Viernes</div>
                            <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                            <div class="temp">Nigth - 25.6&#176; C</div>
                            <div class="temp">Day - 35.6&#176; C</div>
                        </div>
                        <div class="weather-forecast-item">
                            <div class="day">Sabado</div>
                            <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                            <div class="temp">Nigth - 25.6&#176; C</div>
                            <div class="temp">Day - 35.6&#176; C</div>
                        </div>
                        <div class="weather-forecast-item">
                            <div class="day">Domingo</div>
                            <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                            <div class="temp">Nigth - 25.6&#176; C</div>
                            <div class="temp">Day - 35.6&#176; C</div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </x-slot>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/wheather.js') }}"></script>
</x-app-layout>
