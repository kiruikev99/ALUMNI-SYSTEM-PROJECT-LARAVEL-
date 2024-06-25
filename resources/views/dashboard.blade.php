<x-app-web-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-gray-100 h-full py-12">
    <div class="max-w-7xl mx-auto p-5 sm:px-6 lg:px-10">
        <div class="bg-white p-10 shadow-lg rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-3xl font-bold">Welcome, <b>{{ Auth::user()->name }}</b></h1>
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
                                <button class="hover:bg-green-500 bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">View</button>
                            </a>
                            <a href="/users/create">
                                <span class="hover:bg-yellow-500 bg-yellow-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Add User</span>
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
                                <button class="hover:bg-green-500 bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">View</button>
                            </a>
                            <a href="/jobs/create">
                                <span class="hover:bg-yellow-500 bg-yellow-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Add Job</span>
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
                                <button class="hover:bg-green-500 bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">View</button>
                            </a>
                            <a href="/permissions/create">
                                <span class="hover:bg-yellow-500 bg-yellow-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Add Permission</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-web-layout>