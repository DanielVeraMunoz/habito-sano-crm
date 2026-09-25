<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo check-in') }} — {{ $patient->name }} {{ $patient->surname }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('weekly_checkins.store', $patient) }}">
                    @csrf

                    <div class="mb-4">
                        <label for="date">Fecha</label>
                        <input type="date" name="date" id="date" value="{{ old('date') }}">
                        @error('date')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="weight">Peso (kg)</label>
                        <input type="number" step="0.01" name="weight" id="weight" value="{{ old('weight') }}">
                        @error('weight')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="habits">Hábitos</label>
                        <textarea name="habits" id="habits">{{ old('habits') }}</textarea>
                        @error('habits')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="notes">Observaciones</label>
                        <textarea name="notes" id="notes">{{ old('notes') }}</textarea>
                        @error('notes')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="five_meals">
                            <input type="checkbox" name="five_meals" id="five_meals" value="1" @checked(old('five_meals'))>
                            5 comidas al día
                        </label>
                        @error('five_meals')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit">Guardar</button>
                    <a href="{{ route('patients.show', $patient) }}" class="ml-2 text-sm text-gray-600">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>