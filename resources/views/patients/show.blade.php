<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $patient->name }} {{ $patient->surname }}
            </h2>
            <a href="{{ route('patients.edit', $patient) }}" class="text-sm text-blue-600">Editar</a>
        </div>
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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mt-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-lg">Check-ins semanales</h3>
                    <a href="{{ route('weekly_checkins.create', $patient) }}" class="text-sm text-blue-600">Añadir check-in</a>
                </div>
                <table class="w-full text-left">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Peso</th>
                            <th>Hábitos</th>
                            <th>Observaciones</th>
                            <th>5 comidas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($weeklyCheckins as $checkin)
                        <tr>
                            <td>{{ $checkin->date->format('d/m/Y') }}</td>
                            <td>{{ $checkin->weight }} kg</td>
                            <td>{{ $checkin->habits }}</td>
                            <td>{{ $checkin->notes }}</td>
                            <td>{{ $checkin->five_meals ? 'Sí' : 'No' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>