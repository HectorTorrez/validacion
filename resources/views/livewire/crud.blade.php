
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CRUD
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Correo</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->codigo }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->age }}</td>
                                <td>{{ $usuario->direction }}</td>
                                <td>{{ $usuario->phone }}</td>
                                <td>{{ $usuario->mail }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
         
            </div>
        </div>
    </div>

