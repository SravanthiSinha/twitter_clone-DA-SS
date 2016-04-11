function weatherInfoRecieved(data) {
    document.getElementById('weatherButton').addEventListener('click', function () {
        var weather = document.getElementById("weather");
        weather.textContent = data.current_weather;
    });
}

var script = document.createElement('script');
script.src = 'https://holberton-weather-api.herokuapp.com/weather.js?jsonp_callback=weatherInfoRecieved'

document.getElementsByTagName('head')[0].appendChild(script);
// or document.head.appendChild(script) in modern browsers