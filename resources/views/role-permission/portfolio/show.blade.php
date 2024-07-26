<x-app-web-layout>
    @role('alumni')

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Portfolio</h1>
    <div class="mb-4">
        <strong class="block text-gray-700 text-sm font-bold mb-2">First Name:</strong>
        <p>{{ $portfolio->first_name }}</p>
    </div>
    <div class="mb-4">
        <strong class="block text-gray-700 text-sm font-bold mb-2">Last Name:</strong>
        <p>{{ $portfolio->last_name }}</p>
    </div>
    <div class="mb-4">
        <strong class="block text-gray-700 text-sm font-bold mb-2">Date of Birth:</strong>
        <p>{{ $portfolio->dob->format('d/m/Y') }}</p>
    </div>
    <div class="mb-4">
        <strong class="block text-gray-700 text-sm font-bold mb-2">Education:</strong>
        <p>{{ $portfolio->education }}</p>
    </div>
    <div class="mb-4">
        <strong class="block text-gray-700 text-sm font-bold mb-2">Certificates:</strong>
        <p>{{ $portfolio->certificates }}</p>
    </div>
    <div class="mb-4">
        <strong class="block text-gray-700 text-sm font-bold mb-2">Skills:</strong>
        <p>{{ implode(', ', json_decode($portfolio->skills, true) ?? []) }}</p>
    </div>
    <div class="mb-4">
        <strong class="block text-gray-700 text-sm font-bold mb-2">CV:</strong>
        @if ($portfolio->cv)
            <a href="{{ asset('storage/' . $portfolio->cv) }}" class="text-blue-500 hover:underline">Download CV</a>
        @else
            <p>No CV uploaded.</p>
        @endif
    </div>
    <div class="mb-4">
        <strong class="block text-gray-700 text-sm font-bold mb-2">Description:</strong>
        <p>{{ $portfolio->description }}</p>
    </div>
    <div class="mb-4">
        <strong class="block text-gray-700 text-sm font-bold mb-2">Profile Picture:</strong>
        @if ($portfolio->profile_picture)
            <img src="{{ asset('storage/' . $portfolio->profile_picture) }}" alt="Profile Picture" class="w-32 h-32 rounded-full">
        @else
            <p>No profile picture uploaded.</p>
        @endif
    </div>
</div>
@endrole
</x-app-web-layout>
