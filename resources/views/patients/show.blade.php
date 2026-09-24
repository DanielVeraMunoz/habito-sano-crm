<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $patient->name }} {{ $patient->surname }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p><strong>Teléfono:</strong> {{ $patient->phone }}</p>
                <p><strong>Email:</strong> {{ $patient->email }}</p>
                <p><strong>Asignado a:</strong> {{ $patient->assignedStaff->name }}</p>
                <p><strong>Plan:</strong> {{ $patient->plan }}</p>
                <p><strong>Sesiones restantes:</strong> {{ $patient->sessions_remaining }}</p>
                <p><strong>Estado:</strong> {{ $patient->status }}</p>
                <p><strong>Notas:</strong> {{ $patient->notes }}</p>
                <p><strong>Plan de dieta:</strong> {{ $patient->diet_plan }}</p>
            </div>
        </div>
    </div>
</x-app-layout>