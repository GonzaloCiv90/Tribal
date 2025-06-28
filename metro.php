<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Meta Tags Adicionales -->
    <meta name="author" content="Tribal">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Spanish">
    <meta name="geo.region" content="AR-X">
    <meta name="geo.placename" content="Córdoba">
    <meta name="geo.position" content="-31.4167;-64.1833">
    <link rel="icon" type="image/jpg" sizes="16x16" href="assets/Tribal_Perfil.jpg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para íconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bruno+Ace+SC&display=swap" rel="stylesheet">
    <title>Metronomicon – Rituales de Tiempo y Eco</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- ADD: JSZip library CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.0/jszip.min.js"></script>

    <!-- ADD: PWA manifest (minimal for browser install, but required by Play Store build tools) -->
    <link rel="manifest" href="/manifest.json">

    <!-- ADD: Theme color for Android status bar -->
    <meta name="theme-color" content="#4B0082">

    <!-- ADD: Enable fullscreen on Android & iOS -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- ADD: Primary app icon for Android launcher (192x192) -->
    <link rel="icon" sizes="192x192" href="/icons/icon-192x192.png">
    <link rel="apple-touch-icon" href="/icons/icon-192x192.png">

    <!-- ADD: Splash screens for portrait & landscape -->
    <meta name="apple-touch-startup-image"
        href="/splash/android-splash-portrait.png"
        media="(orientation: portrait)">
    <meta name="apple-touch-startup-image"
        href="/splash/android-splash-landscape.png"
        media="(orientation: landscape)">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">

    <style id="app-style">
        body {
            font-family: 'Bebas Neue', serif;
            background-image: url("assets/fondonew.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #0f9002;
            background-blend-mode: overlay;
        }

        header {
            background-image: url("assets/fondonew.jpg") right bottom no-repeat;
            color: #0f9002;
        }

        .pulse {
            animation: pulse-animation 0.5s infinite;
        }

        @keyframes pulse-animation {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.2);
                opacity: 0.7;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .inactive {
            animation: none;
        }

        .loading {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .btn {
            transition: all 0.2s ease;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.8);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(46, 185, 115, 0.6);
            background-color: #2ecc71;
            /* bright green accent */
            color: #0b0b0b;
        }

        .btn:active {
            transform: translateY(1px);
        }

        .song-item {
            transition: all 0.2s ease;
        }

        .song-item:hover {
            background-color: #1f1f1f;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.7);
        }

        /* Estilos responsivos */
        @media (max-width: 748px) {
            body {
                padding: 1rem;
            }

            header {
                text-align: center;
            }

            h1 {
                font-size: 2rem !important;
            }

            /* Form responsivo */
            #add-song-form {
                flex-direction: column;
                gap: 1rem;
            }

            #song-bpm {
                width: 100% !important;
            }

            /* Elementos de canción responsivos */
            .song-item {
                padding: 1rem;
            }

            .song-item .flex {
                flex-direction: column;
                gap: 1rem;
            }

            /* Botones responsivos */
            .song-item .flex .btn {
                width: 100%;
                margin-bottom: 0.5rem;
                padding: 0.75rem;
            }

            /* Form de edición responsivo */
            .edit-song-form {
                flex-direction: column;
                gap: 1rem;
            }

            .edit-song-form input,
            .edit-song-form button {
                width: 100%;
            }

            .edit-song-bpm {
                width: 100% !important;
            }

            /* Ajuste de espaciado */
            .mb-8 {
                margin-bottom: 1rem;
            }

            .p-4 {
                padding: 1rem;
            }

            /* Ajustes para botones en el header */
            header button {
                width: 100%;
                margin-top: 1rem;
            }

            /* Ajustes para los indicadores y textos */
            .song-name {
                font-size: 1.2rem;
                margin-bottom: 0.5rem;
            }

            .song-bpm {
                font-size: 1rem;
            }

            .pulse-indicator {
                margin-right: 0.5rem;
            }

            /* Grupo de botones */
            .flex.gap-2 {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 0.5rem;
            }

            /* Empty state responsivo */
            #empty-state {
                padding: 2rem 1rem;
            }

            #empty-state i {
                font-size: 3rem;
            }

            #empty-state p {
                font-size: 1rem;
            }
        }

        /* Estilos para el nuevo header */
        nav {
            backdrop-filter: blur(8px);
            background-image: url(assets/tribalportada.jpg);
        }

        .bg-custom-green {
            background-color: #0f9002;
        }

        /* Ajustes responsivos */
        @media (max-width: 748px) {
            nav .btn {
                font-size: 0.9rem;
                padding: 0.5rem 1rem;
            }
        }
    </style>
</head>

<body class="min-h-screen bg-gray-900 text-white p-4 md:p-6">
    <!-- Nuevo header de navegación -->
    <nav class="bg-gray-800 fixed top-0 left-0 right-0 z-50 shadow-lg">
        <div class="max-w-4xl mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <a href="index.php"
                        class="btn px-4 py-2 bg-custom-green text-white rounded hover:bg-green-700 transition duration-200 flex items-center">
                        Home
                    </a>
                    <!-- Redes sociales -->
                    <a href="https://www.facebook.com/TribalHeavy/" class="text-white hover:text-green-400 ms-2"
                        target="_blank" title="Facebook">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/tribalmetal/?hl=es-la" class="text-white hover:text-green-400 ms-2"
                        target="_blank" title="Instagram">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="https://www.tiktok.com/@tribal.heavy.metal" class="text-white hover:text-green-400 ms-2"
                        target="_blank" title="TikTok">
                        <i class="fab fa-tiktok fa-lg"></i>
                    </a>
                    <a href="https://open.spotify.com/intl-es/artist/00qFLRSlYmbf1SteMtPMr0?si=dbyne4AMQrqec-LScknBxA"
                        class="text-white hover:text-green-400 ms-2" target="_blank" title="Spotify">
                        <i class="fab fa-spotify fa-lg"></i>
                    </a>
                    <a href="https://www.youtube.com/@tribalheavymetal8647/videos"
                        class="text-white hover:text-green-400 ms-2" target="_blank" title="YouTube">
                        <i class="fab fa-youtube fa-lg"></i>
                    </a>
                    <a href="https://tribalmetal.bandcamp.com/" class="text-white hover:text-green-400 ms-2"
                        target="_blank" title="Bandcamp">
                        <i class="fab fa-bandcamp fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Agregar padding-top para compensar el header fijo -->
    <div class="pt-20">
        <div class="max-w-4xl mx-auto">
            <!-- Header with Download button -->
            <header class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-4 sm:mb-8">
                <div class="text-center sm:text-left">
                    <h1 class="text-3xl font-bold text-emerald-300 inline">Metronomicon</h1>
                    <p class="text-gray-400">Invocaciones rítmicas para el más allá</p>
                </div>
                <button id="download-app-btn"
                    class="mt-4 sm:mt-0 btn px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600 transition duration-200 flex items-center justify-center">
                    <i class="fas fa-download mr-2"></i>Descargar App
                </button>

            </header>

            <!-- Add Song Form -->
            <div class="bg-gray-800 rounded-lg p-3 sm:p-4 mb-4 sm:mb-6 shadow-lg">
                <form id="add-song-form" class="flex flex-col sm:flex-row gap-3">
                    <input type="text" id="song-name" placeholder="Nombre de la canción" required
                        class="flex-grow px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:border-indigo-500">
                    <input type="number" id="song-bpm" placeholder="BPM" min="20" max="300" required
                        class="w-20 px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:border-indigo-500">
                    <button type="submit"
                        class="btn px-6 py-2 bg-indigo-600 text-white rounded font-semibold hover:bg-indigo-700 transition duration-200">
                        <i class="fas fa-plus mr-2"></i>Agregar
                    </button>
                </form>
            </div>

            <!-- Songs List -->
            <div id="songs-container" class="space-y-3">
                <!-- Songs will be added here dynamically -->
            </div>

            <!-- Empty state -->
            <div id="empty-state" class="text-center py-16 text-gray-500">
                <i class="fas fa-drum text-5xl mb-4"></i>
                <p class="text-xl">No hay canciones todavía.</p>
                <p class="text-sm mt-2">Agrega tu primera canción usando el formulario de arriba.</p>
            </div>
        </div>
    </div>

    <!-- Templates -->
    <template id="song-item-template">
        <div class="song-item bg-gray-800 rounded-lg p-3 sm:p-4 shadow-lg">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div class="flex-grow">
                    <div class="flex items-center gap-2">
                        <div class="pulse-indicator w-4 h-4 rounded-full bg-indigo-500 inactive"></div>
                        <h3 class="song-name text-xl"></h3>
                    </div>
                    <div class="song-bpm text-gray-400"></div>
                </div>
                <div class="flex gap-2">
                    <button class="play-btn btn px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition duration-200">
                        <i class="fas fa-play mr-1"></i> Play
                    </button>
                    <button class="stop-btn btn px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition duration-200">
                        <i class="fas fa-stop mr-1"></i> Stop
                    </button>
                    <button class="edit-btn btn px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700 transition duration-200">
                        <i class="fas fa-edit mr-1"></i> Editar
                    </button>
                    <button class="delete-btn btn px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition duration-200">
                        <i class="fas fa-trash mr-1"></i> Eliminar
                    </button>
                </div>
            </div>
        </div>
    </template>

    <template id="edit-form-template">
        <form class="edit-song-form flex flex-col sm:flex-row gap-3 mt-3">
            <input type="text" class="edit-song-name flex-grow px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:border-indigo-500">
            <input type="number" class="edit-song-bpm w-20 px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:border-indigo-500" min="20" max="300">
            <button type="submit" class="btn px-6 py-2 bg-green-600 text-white rounded font-semibold hover:bg-green-700 transition duration-200">
                <i class="fas fa-save mr-2"></i>Guardar
            </button>
            <button type="button" class="cancel-edit-btn btn px-6 py-2 bg-gray-600 text-white rounded font-semibold hover:bg-gray-700 transition duration-200">
                <i class="fas fa-times mr-2"></i>Cancelar
            </button>
        </form>
    </template>

    <script id="app-script">
        document.addEventListener('DOMContentLoaded', () => {
            // Download button handler
            document.getElementById('download-app-btn')
                .addEventListener('click', async () => {
                    const zip = new JSZip();
                    // Gather files (for demo, we're zipping the current HTML source)
                    const html = `<!DOCTYPE html>\n` + document.documentElement.outerHTML;
                    // In a real app, you might load external CSS/JS or insert them here
                    zip.file('index.html', html);
                    // Optionally add CSS and JS separately:
                    // zip.file('style.css', document.getElementById('app-style').innerText);
                    // zip.file('app.js', document.getElementById('app-script').innerText);

                    const content = await zip.generateAsync({
                        type: 'blob'
                    });
                    const link = document.createElement('a');
                    link.href = URL.createObjectURL(content);
                    link.download = 'metrobeat-app.zip';
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                });

            // DOM elements
            const addSongForm = document.getElementById('add-song-form');
            const songNameInput = document.getElementById('song-name');
            const songBpmInput = document.getElementById('song-bpm');
            const songsContainer = document.getElementById('songs-container');
            const emptyState = document.getElementById('empty-state');
            const songItemTemplate = document.getElementById('song-item-template');
            const editFormTemplate = document.getElementById('edit-form-template');

            // State
            let songs = [];
            let activeMetronome = null;
            let audioContext = null;
            let interval = null;

            // Initialize
            loadSongs();
            updateSongsList();

            // Event listeners
            addSongForm.addEventListener('submit', handleAddSong);

            // Functions
            function loadSongs() {
                const savedSongs = localStorage.getItem('metrobeat-songs');
                if (savedSongs) {
                    songs = JSON.parse(savedSongs);
                }
            }

            function saveSongs() {
                localStorage.setItem('metrobeat-songs', JSON.stringify(songs));
            }

            function updateSongsList() {
                songsContainer.innerHTML = '';

                if (songs.length === 0) {
                    emptyState.classList.remove('hidden');
                } else {
                    emptyState.classList.add('hidden');

                    songs.forEach((song, index) => {
                        const songElement = createSongElement(song, index);
                        songsContainer.appendChild(songElement);
                    });
                }
            }

            function createSongElement(song, index) {
                const songClone = songItemTemplate.content.cloneNode(true);
                const songItem = songClone.querySelector('.song-item');

                songItem.dataset.index = index;
                songItem.querySelector('.song-name').textContent = song.name;
                songItem.querySelector('.song-bpm').textContent = `${song.bpm} BPM`;

                const pulseIndicator = songItem.querySelector('.pulse-indicator');
                if (activeMetronome === index) {
                    pulseIndicator.classList.remove('inactive');
                    pulseIndicator.classList.add('pulse');
                }

                // Add event listeners
                songItem.querySelector('.play-btn')
                    .addEventListener('click', () => toggleMetronome(index));
                songItem.querySelector('.stop-btn')
                    .addEventListener('click', () => stopMetronomeButton());
                songItem.querySelector('.edit-btn')
                    .addEventListener('click', () => startEditSong(song, index, songItem));
                songItem.querySelector('.delete-btn')
                    .addEventListener('click', () => deleteSong(index));

                return songItem;
            }

            function handleAddSong(e) {
                e.preventDefault();

                const name = songNameInput.value.trim();
                const bpm = parseInt(songBpmInput.value);

                if (name && bpm && bpm >= 20 && bpm <= 300) {
                    const newSong = {
                        name,
                        bpm
                    };
                    songs.push(newSong);
                    saveSongs();
                    updateSongsList();

                    // Reset form
                    songNameInput.value = '';
                    songBpmInput.value = '';
                    songNameInput.focus();
                }
            }

            function toggleMetronome(index) {
                // If already running on this item, just stop
                if (activeMetronome === index) {
                    stopMetronome();
                    updateSongsList();
                    return;
                }
                // Otherwise stop any other, then start this one
                if (activeMetronome !== null) {
                    stopMetronome();
                }
                startMetronome(index);
            }

            function startMetronome(index) {
                activeMetronome = index;
                const song = songs[index];

                if (!audioContext) {
                    audioContext = new(window.AudioContext || window.webkitAudioContext)();
                }

                const bpm = song.bpm;
                const intervalMs = (60 / bpm) * 1000;

                // Update UI
                updateSongsList();

                // Start the metronome
                interval = setInterval(() => {
                    playTickSound();

                    // Make the indicator pulse
                    const activeSongItem = document.querySelector(`.song-item[data-index="${index}"]`);
                    if (activeSongItem) {
                        const indicator = activeSongItem.querySelector('.pulse-indicator');
                        indicator.classList.remove('pulse');
                        void indicator.offsetWidth; // Force reflow
                        indicator.classList.add('pulse');
                    }
                }, intervalMs);
            }

            function stopMetronome() {
                if (interval) {
                    clearInterval(interval);
                    interval = null;
                }
                activeMetronome = null;
            }

            function playTickSound() {
                if (!audioContext) return;

                const oscillator = audioContext.createOscillator();
                const gainNode = audioContext.createGain();

                oscillator.connect(gainNode);
                gainNode.connect(audioContext.destination);

                oscillator.type = 'sine';
                oscillator.frequency.value = 800;
                gainNode.gain.value = 0.5;

                const now = audioContext.currentTime;
                oscillator.start(now);
                oscillator.stop(now + 0.05);

                // Quick fade out
                gainNode.gain.exponentialRampToValueAtTime(0.001, now + 0.05);
            }

            function startEditSong(song, index, songItem) {
                // Clone the edit form template
                const editFormClone = editFormTemplate.content.cloneNode(true);
                const editForm = editFormClone.querySelector('.edit-song-form');

                // Fill in current values
                editForm.querySelector('.edit-song-name').value = song.name;
                editForm.querySelector('.edit-song-bpm').value = song.bpm;

                // Add event listeners
                editForm.addEventListener('submit', (e) => {
                    e.preventDefault();
                    saveEditedSong(index, editForm);
                });

                editForm.querySelector('.cancel-edit-btn').addEventListener('click', () => {
                    songItem.removeChild(editForm);
                });

                // Add the form to the song item
                songItem.appendChild(editForm);

                // Focus on the name input
                editForm.querySelector('.edit-song-name').focus();
            }

            function saveEditedSong(index, editForm) {
                const name = editForm.querySelector('.edit-song-name').value.trim();
                const bpm = parseInt(editForm.querySelector('.edit-song-bpm').value);

                if (name && bpm && bpm >= 20 && bpm <= 300) {
                    songs[index] = {
                        name,
                        bpm
                    };
                    saveSongs();
                    updateSongsList();
                }
            }

            function deleteSong(index) {
                // If this song's metronome is running, stop it
                if (activeMetronome === index) {
                    stopMetronome();
                }

                // Remove the song and update
                songs.splice(index, 1);
                saveSongs();
                updateSongsList();
            }

            // New: stop via the Stop button
            function stopMetronomeButton() {
                if (activeMetronome !== null) {
                    stopMetronome();
                    updateSongsList();
                }
            }
        });
    </script>
</body>

</html>