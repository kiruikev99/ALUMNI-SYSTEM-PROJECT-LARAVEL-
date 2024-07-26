<style>
    body{
        background-image: linear-gradient(#0F2027, #203A43, #2C5364);
        color: white;
        font-family:  Tahoma, Geneva, Verdana, sans-serif;
       
    }
    </style>


<x-app-web-layout>
    @role('alumni')
    <body>
        <div class="container mx-auto p-4 ml-10">
            <br><br>
            @foreach ($portfolios as $portfolio)
                <div class="flex w-full p-4 border rounded shadow-sm">
                    <div class="image">
                        @if ($portfolio->profile_picture)
                            <img src="{{ asset('storage/' . $portfolio->profile_picture) }}" alt="Profile Picture"
                                class="w-32 h-32 rounded-full">
                        @else
                            <p>No profile picture uploaded.</p>
                        @endif
                    </div>
                    <div class="name">
                        <h2 class="text-4xl pt-5 pl-2 font-semibold">{{ $portfolio->first_name }}
                            {{ $portfolio->last_name }}</h2>
                        <div class="pl-4 flex pt-3 gap-5">
                            <i class="fas opacity-50 pt-1 fa-map-marker-alt"></i>
                            <p class="opacity-50">Nairobi, Kenya</p>
                            <p class="opacity-50" id="currentTime">{{ $currentTime }} </p>
                        </div>
                        <script>
                            function updateTime() {
                                const options = { timeZone: 'Africa/Nairobi', hour: '2-digit', minute: '2-digit', second: '2-digit' };
                                const formatter = new Intl.DateTimeFormat([], options);
                                document.getElementById('currentTime').innerHTML = formatter.format(new Date());
                            }
                            setInterval(updateTime, 1000);
                            updateTime(); // Initial call to set the time immediately on page load
                        </script>
                    </div>
                </div>
                <div class="flex p-10 gap-5 border rounded shadow-sm w-full">
                    <div class="documents">
                        <br>
                        <div class="flex">
                            <img width="50" class="pr-2" src="https://cdn-icons-png.freepik.com/512/8233/8233821.png?uid=R123283678&ga=GA1.2.205748848.1715773139" alt="">
                            <h4 class="text-3xl flex"><b>  Education</b></h4>
                        </div>
                        <p>{{ $portfolio->education }} </p>
                        <br>
                        <hr>
                        <div class="flex pt-4 mb-3">
                            <img width="40" class="pr-2" src="https://cdn-icons-png.freepik.com/512/2004/2004261.png?uid=R123283678&ga=GA1.1.205748848.1715773139" alt="">
                            <h4 class="text-3xl"><b>Documents</b></h4>
                            <br>
                        </div>
                        <div class="flex items p-3 shadow-sm-center space-x-4">
                            @if ($portfolio->cv)
                                <h2>CV Document</h2>
                                <a href="{{ asset('storage/' . $portfolio->cv) }}"
                                    class="text-blue-500 hover:underline">{{ $portfolio->cv }}</a>
                            @else
                                <p>No CV uploaded.</p>
                            @endif
                            
                        </div>
                        <hr>
                        <div class="flex  shadow-sm p-3 items-center space-x-4">
                            @if ($portfolio->certificates)
                                <h2>Certficates Document</h2>
                                <a href="{{ asset('storage/' . $portfolio->certificates) }}"
                                    class="text-blue-500 hover:underline">{{ $portfolio->certificates }}</a>
                            @else
                                <p>No Certificates uploaded.</p>
                            @endif
                        </div>
                    </div>
                    <div class="user p-10  shadow-sm">
                        <div class="flex">
                            <img width="45" src="https://cdn-icons-png.freepik.com/512/14960/14960026.png?uid=R123283678&ga=GA1.1.205748848.1715773139" alt=""> 
                            <h2 class="text-2xl"><b>{{ $portfolio->skills }}</b></h2>
                        </div>
                        <br>
                        <p>{{ $portfolio->description }}</p>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="{{ route('portfolio.edit', $portfolio->id) }}"
                        class="px-4 py-2 bg-blue-500 text-white rounded">Update</a>
                </div>
            @endforeach
        </div>

        <!-- Include NeatGradient Initialization Script -->
        <script src="{{ asset('js/neatgradient.js') }}"></script>
        <script>
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
        </script>
    </body>
    @endrole
</x-app-web-layout>
