<!-- resources/views/dashboard.blade.php -->

<x-layouts.app>
    <!-- This content will be shown in the slot for both super-admin and alumni roles -->
    <div>
        <h1>Welcome, {{ Auth::user()->name }}</h1>
        <p>This is the dashboard content for {{ Auth::user()->roles->first()->name }}.</p>
    </div>
</x-layouts.app>
