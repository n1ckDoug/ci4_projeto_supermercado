const dataDoEvento = new Date("Oct 3, 2024 18:30:00");
const timeStampDoEvento = dataDoEvento.getTime();

const contaAsHoras = setInterval(function () {
    const dataAtual = new Date();
    const timeStampAtual = dataAtual.getTime();

    const distanciaEvento = timeStampDoEvento - timeStampAtual;

    const diaEmMs = 1000 * 60 * 60 * 24;
    const horaEmMs = 1000 * 60 * 60;
    const minutosEmMs = 1000 * 60;
    const segundosEmMs = 1000;

    const diasAteOEvento = Math.floor(distanciaEvento / diaEmMs);
    const horasAteOEvento = Math.floor((distanciaEvento % diaEmMs) / horaEmMs);
    const minutosAteOEvento = Math.floor((distanciaEvento % horaEmMs) / minutosEmMs);
    const segundosAteOEvento = Math.floor((distanciaEvento % minutosEmMs) / segundosEmMs);

    document.querySelector('#contador_dia').innerHTML = `<strong>${diasAteOEvento}</strong> Dias`;
    document.querySelector('#contador_horas').innerHTML = `<strong>${horasAteOEvento}</strong> Horas`;
    document.querySelector('#contador_minutos').innerHTML = `<strong>${minutosAteOEvento}</strong> Minutos`;
    document.querySelector('#contador_segundos').innerHTML = `<strong>${segundosAteOEvento}</strong> Segundos`;

    if (distanciaEvento < 0) {
        clearInterval(contaAsHoras);
        document.querySelector('#contador').innerHTML = `A oferta chegou ao fim!`;
        document.querySelector('#contador').classList.add('bg-contador');
    }
}, 1000);