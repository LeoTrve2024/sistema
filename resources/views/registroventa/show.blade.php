<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detalle del Registro de Venta') }}
            </h2>
            <a href="{{ route('registroventa.index') }}" 
               class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 transition-colors">
                Volver al Listado
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Información Principal -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Información Principal</h3>
                            <dl class="grid grid-cols-1 gap-4">
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">DUAL</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $registroVenta->DUAL }}</dd>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">Tipo Comprobante</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $registroVenta->TIPOCOMPROBANTE }}</dd>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">Serie</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $registroVenta->SERIECO }}</dd>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">Numero</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $registroVenta->NUMEROCO }}</dd>
                                </div>
                            </dl>
                        </div>

                        <!-- Fechas -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Información de Fechas</h3>
                            <dl class="grid grid-cols-1 gap-4">
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">Fecha Emisión</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                        {{ \Carbon\Carbon::parse($registroVenta->FECHAEMISION)->format('d/m/Y') }}
                                    </dd>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">Fecha Vencimiento</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                        {{ \Carbon\Carbon::parse($registroVenta->FECHAVENCIMIENTO)->format('d/m/Y') }}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="mt-6 flex justify-end space-x-3">
                        <a href="{{ route('registroventa.edit', $registroVenta) }}" 
                           class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors">
                            Editar Registro
                        </a>
                        <form action="{{ route('registroventa.destroy', $registroVenta) }}" 
                              method="POST" 
                              class="inline"
                              onsubmit="return confirm('¿Está seguro de eliminar este registro?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
