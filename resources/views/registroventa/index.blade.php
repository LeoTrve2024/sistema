<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Encabezado con botón de crear -->
            <div class="md:flex md:items-center md:justify-between mb-6">
                <h2 class="text-2xl font-semibold text-gray-800">Registro de Ventas</h2>
                <a href="{{ route('registroventa.create') }}" class="mt-4 md:mt-0 inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Nuevo Registro
                </a>
            </div>

            <!-- Tabla -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DUAL</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha Emisión</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha Vencimiento</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo Comprobante</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Serie</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Numero</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($registroVentas as $registroVenta)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $registroVenta->DUAL }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $registroVenta->FECHAEMISION }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $registroVenta->FECHAVENCIMIENTO }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @switch($registroVenta->TIPOCOMPROBANTE)
                                            @case('01')
                                                Factura
                                                @break
                                            @case('03')
                                                Boleta
                                                @break
                                            @case('07')
                                                Nota de Crédito
                                                @break
                                            @case('08')
                                                Nota de Débito
                                                @break
                                            @default
                                                {{ $registroVenta->TIPOCOMPROBANTE }}
                                        @endswitch
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right">{{ $registroVenta->SERIECO }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right">{{ $registroVenta->NUMEROCO }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm space-x-3">
                                        <a href="{{ route('registroventa.show', $registroVenta) }}" class="text-indigo-600 hover:text-indigo-900">Ver</a>
                                        <a href="{{ route('registroventa.edit', $registroVenta) }}" class="text-green-600 hover:text-green-900">Editar</a>
                                        <form action="{{ route('registroventa.destroy', $registroVenta) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Está seguro de eliminar este registro?')">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">No hay registros disponibles</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>