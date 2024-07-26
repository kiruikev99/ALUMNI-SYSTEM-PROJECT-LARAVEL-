<x-app-web-layout>

    @role('admin|super-admin')
    <div class="bg-gray-100 h-full py-12">
        <div class="max-w-7xl mx-auto p-5 sm:px-6 lg:px-10">
            <div class="bg-white p-10 shadow-lg rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold">Welcome, </h1>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                    <div class="bg-red-100 p-5 border-l-4 border-red-500 shadow-sm rounded-lg">
                        <h1 class="text-2xl font-bold text-red-700">{{ $user }}</h1>
                        <div class="text-sm text-gray-700">Total Users</div>
                    </div>
                    <div class="bg-green-100 p-5 border-l-4 border-green-500 shadow-sm rounded-lg">
                        <h1 class="text-2xl font-bold text-green-700">{{ $permission }}</h1>
                        <div class="text-sm text-gray-700">Total Permissions</div>
                    </div>
                    <div class="bg-blue-100 p-5 border-l-4 border-blue-500 shadow-sm rounded-lg">
                        <h1 class="text-2xl font-bold text-blue-700">{{ $role }}</h1>
                        <div class="text-sm text-gray-700">Total Roles</div>
                    </div>
                    <div class="bg-yellow-100 p-5 border-l-4 border-yellow-500 shadow-sm rounded-lg">
                        <h1 class="text-2xl font-bold text-yellow-700">{{ $jobs }}</h1>
                        <div class="text-sm text-gray-700">Total Jobs</div>
                    </div>
                </div>

                <div class="mt-10">
                    <h1 class="text-xl font-bold mb-4">Actions</h1>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <div class="px-6 py-4 bg-gradient-to-r from-green-400 to-blue-500">
                                <div class="font-bold text-white text-xl mb-2">Manage Users</div>
                                <p class="text-white text-base">
                                    View, delete, or edit users if assigned the role.
                                </p>
                            </div>
                            <div class="px-6 pt-4 text-right pb-2 bg-gray-100">
                                <a href="/users">
                                    <button
                                        class="hover:bg-green-500 bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">View</button>
                                </a>
                                <a href="/users/create">
                                    <span
                                        class="hover:bg-yellow-500 bg-yellow-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Add
                                        User</span>
                                </a>
                            </div>
                        </div>

                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <div class="px-6 py-4 bg-gradient-to-r from-gray-400 to-gray-900">
                                <div class="font-bold text-white text-xl mb-2">Manage Jobs</div>
                                <p class="text-white text-base">
                                    View, delete, add, and edit jobs if assigned the role.
                                </p>
                            </div>
                            <div class="px-6 pt-4 text-right pb-2 bg-gray-100">
                                <a href="/jobs">
                                    <button
                                        class="hover:bg-green-500 bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">View</button>
                                </a>
                                <a href="/jobs/create">
                                    <span
                                        class="hover:bg-yellow-500 bg-yellow-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Add
                                        Job</span>
                                </a>
                            </div>
                        </div>

                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <div class="px-6 py-4 bg-gradient-to-r from-purple-400 to-indigo-500">
                                <div class="font-bold text-white text-xl mb-2">Manage Permissions</div>
                                <p class="text-white text-base">
                                    View, delete, or edit permissions if assigned the role.
                                </p>
                            </div>
                            <div class="px-6 pt-4 text-right pb-2 bg-gray-100">
                                <a href="/permissions">
                                    <button
                                        class="hover:bg-green-500 bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">View</button>
                                </a>
                                <a href="/permissions/create">
                                    <span
                                        class="hover:bg-yellow-500 bg-yellow-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Add
                                        Permission</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endrole

    @role('alumni')

    <div class="">
        <br>
        
        <div class=" mx-auto bg-white flex flex-wrap gap-10 p-8 shadow-lg rounded-lg">


            <div class=" p-10 category">
                <div class="flex jusify-center gap-10">
                    <div class="job">
                        <div class="font-semibold text-xl">
                            Job Type
                        </div>
                        @foreach ($job as $jobs)


                            <input type="checkbox" value="yo">
                            <label>{{$jobs->job_type}}</label>


                        @endforeach
                    </div>
                    <div class="amount">
                        <div class="text-xl font-semibold">
                            Price Range
                        </div>
                        <label for="points">(between 0 and 80,000):</label>
                        <input type="range" id="points" name="points" min="0" max="10">
                    </div>

                    <div class="time">
                        <div class="text-xl font-semibold">
                            Job Duration
                        </div>
                        @foreach ($job as $jobs)


                            <input type="checkbox" value="yo">
                            <label>{{$jobs->job_duration}}</label>


                        @endforeach
                    </div>

                    <div class=" mr-10 search">
                        <button  class="bg-amber-400 rounded-md font-semibold p-5">Search </button>
                    </div>
                </div>
                <br>
                <hr>
            </div>
            

            @foreach ($job as $jobs)
            
            <body>
                <button
                    class="block w-full p-10 bg-grey-500 text-left text-black gap-10 rounded-lg shadow hover:bg-gray-100  ">
                    <a href="{{ url('jobs/' . $jobs->id . '/view') }}">
                    <p class="font-normaltext-gray-700 dark:text-gray-600">{{ $jobs->job_name }}</p>


                    <h5 class="mb-2 text-2xl  hover:text-red-500  font-bold tracking-tight text-gray-900 dark:text-black">
                        {{ $jobs->job_title }}</h5>

                    <div class="flex gap-7">
                        <p class="text-gray-400">Fixed Price: {{ $jobs->job_amount }}</p>
                        <div class="flex text-sm  items-center  text-gray-700 dark:text-gray-400">
                            <i class="fas fa-map-marker-alt mr-2"></i> {{ $jobs->job_location }}
                        </div>
                        <div class="flex text-sm items-center text-gray-700 dark:text-gray-400 ">
                            <i class="fas fa-clock mr-2"></i>{{ $jobs->job_duration }}
                        </div>


                    </div>




                    <br>
                    <p class="font-normal text-gray-700 dark:text-gray-600">{{ $jobs->job_description }}</p>
                    <div class="">



                        <br>
                    </div>
                    <div class="buttons">
                        <a href="{{ url('jobs/' . $jobs->id . '/delete') }}" class="bg-gray-300 p-2 w-1/4 rounded-full">
                            {{$jobs->job_type}}</a>


                    </div>

                    </a>
                </button>
                </body>
            @endforeach
        </div>
    </div>


    @endrole


    


</x-app-web-layout>