<section>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                <table class="text-center">
                        <thead>
                            <tr class="">
                                <th class="table-th-style">#</th>
                                <th class="table-style">Nome</th>
                                <th class="table-style">Email</th>
                                <th class="table-th-button">Botões</th>
                                <th class="table-th-button">Botões</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr class="table-style">
                                <th class="table-th-style td-bg">{{ $usuario->id }}</th>
                                <td class="table-td-style">{{ $usuario->name }}</td>
                                <td class="table-td-style td-bg">{{ $usuario->email }}</td>
                                <td>
                                <button type="button" class="btn-btn-secondary">
                                    <a href="{{ route('list.edit', $usuario->id) }}">Editar</a>
                                </button>
                                </td>
                                <td class="td-bg">
                                <form action="{{route('list.destroy', $usuario) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                
                                <button class="btn-btn-dark" type="submit" onclick="return confirm('Tem certeza')">Excluir</button>
                                </button>
                            </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
</x-app-layout>
</section>          