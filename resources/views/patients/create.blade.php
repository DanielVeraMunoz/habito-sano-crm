<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('patients.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}">
                        @error('name')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="surname">Apellido</label>
                        <input type="text" name="surname" id="surname" value="{{ old('surname') }}">
                        @error('surname')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email">Correo electrónico</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}">
                        @error('email')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
                        @error('phone')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="notes">Notas</label>
                        <textarea name="notes" id="notes">{{ old('notes') }}</textarea>
                        @error('notes')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="diet_plan">Plan de dieta</label>
                        <textarea name="diet_plan" id="diet_plan">{{ old('diet_plan') }}</textarea>
                        @error('diet_plan')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="assigned_to">Asignado a</label>
                        <select name="assigned_to" id="assigned_to">
                            @foreach($staff as $member)
                            <option value="{{ $member->id }}">{{ $member->name }}</option>
                            @endforeach

                        </select>
                        @error('assigned_to')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="plan">Plan</label>
                        <select name="plan" id="plan">
                            <option value="suelta">Suelta</option>
                            <option value="mensual">Mensual</option>
                            <option value="trimestral">Trimestral</option>
                            <option value="semestral">Semestral</option>
                            <option value="anual">Anual</option>
                        </select>
                        @error('plan')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="status">Estado</label>
                        <select name="status" id="status">
                            <option value="activo" selected>Activo</option>
                            <option value="pausado">Pausado</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                        @error('status')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="sessions_remaining">Sesiones restantes</label>
                        <input type="number" name="sessions_remaining" id="sessions_remaining" value="{{ old('sessions_remaining') }}">
                        @error('sessions_remaining')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>


                    <button type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>