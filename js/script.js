let loc = document.getElementById("location");
let tempIcon = document.getElementById("temp-icon");
let tempValue = document.getElementById("temp-value");
let iconFile;

window.addEventListener("load", () => {
    const api = 'https://api.openweathermap.org/data/2.5/weather?q=Aarhus,dk&appid=8140ea9a0c10c219faaefb2318a97a3c';
    fetch(api)
        .then((response) => {
            return response.json();
        })
        .then(data => {
            const {
                name
            } = data;
            const {
                feels_like
            } = data.main;
            const {
                id,
                main
            } = data.weather[0];
            loc.textContent = name;
            tempValue.textContent = Math.round(feels_like - 273);
            if (id < 250) {
                tempIcon.src = '.plugins_url("studentsurvivalguide/icons/storm.png").'
            } else if (id < 350) {
                tempIcon.src = '.plugins_url("studentsurvivalguide/icons/drizzle.png").'
            } else if (id < 550) {
                tempIcon.src = '.plugins_url("studentsurvivalguide/icons/rain.png").'
            } else if (id < 650) {
                tempIcon.src = '.plugins_url("studentsurvivalguide/icons/snow.png").'
            } else if (id === 800) {
                tempIcon.src = '.plugins_url("studentsurvivalguide/icons/clear.png").'
            } else if (id > 800) {
                tempIcon.src = '.plugins_url("studentsurvivalguide/icons/cloud.png").'
            }
            console.log(data);
        })
})
