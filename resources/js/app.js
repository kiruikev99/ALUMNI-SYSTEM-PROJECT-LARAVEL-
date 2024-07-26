import './bootstrap';

import Alpine from 'alpinejs';
import NeatGradient from 'neat-gradient';

document.addEventListener('DOMContentLoaded', function() {
    const neatGradientConfig = {
        colors: [
            { color: "#cdb4db", enabled: true },
            { color: "#FFF8FB", enabled: true },
            { color: "#FF0053", enabled: true },
            { color: "#CBC7C4", enabled: true },
            { color: "#a2d2ff", enabled: false }
        ],
        speed: 4,
        horizontalPressure: 3,
        verticalPressure: 3,
        waveFrequencyX: 2,
        waveFrequencyY: 4,
        waveAmplitude: 5,
        shadows: 0,
        highlights: 2,
        colorBrightness: 1,
        colorSaturation: 3,
        wireframe: false,
        colorBlending: 5,
        backgroundColor: "#003FFF",
        backgroundAlpha: 1,
        resolution: 1
    };

    const canvas = document.createElement('canvas');
    document.body.appendChild(canvas);
    const gradient = new NeatGradient(canvas, neatGradientConfig);
    gradient.start();
});

window.Alpine = Alpine;

Alpine.start();
