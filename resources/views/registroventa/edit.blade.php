<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Editar Registro de Venta</h2>

                    @if ($errors->any())
                        <div class="mb-4 bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded relative">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('registroventa.update', $registroVenta) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">


                            <div>
                                <label for="FECHAEMISION" class="block text-sm font-medium text-gray-700 mb-1">Fecha Emisión</label>
                                <input type="date" name="FECHAEMISION" id="FECHAEMISION" value="{{ $registroVenta->FECHAEMISION }}"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                            </div>

                            <div>
                                <label for="FECHAVENCIMIENTO" class="block text-sm font-medium text-gray-700 mb-1">Fecha Vencimiento</label>
                                <input type="date" name="FECHAVENCIMIENTO" id="FECHAVENCIMIENTO" value="{{ $registroVenta->FECHAVENCIMIENTO }}"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                            </div>

                            <div>
                                <label for="SERIECO" class="block text-sm font-medium text-gray-700 mb-1">Serie</label>
                                <input type="text" name="SERIECO" id="SERIECO" value="{{ $registroVenta->SERIECO }}"
                                    maxlength="8" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div>
                                <label for="NUMEROCO" class="block text-sm font-medium text-gray-700 mb-1">Número</label>
                                <input type="number" name="NUMEROCO" id="NUMEROCO" value="{{ $registroVenta->NUMEROCO }}"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                        </div>

                        <div class="flex justify-end space-x-3">
                            <a href="{{ route('registroventa.index') }}" 
                                class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200">
                                Cancelar
                            </a>
                            <button type="submit" 
                                class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
