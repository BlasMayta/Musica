<div>
    <input type="text">
    hola
    <x-input></x-input>
    <table class="table table-striped" id="usuarios">
        <thead class="table-dark">
            <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Paterno</th>
                <th>Materno</th>
                <th>CI</th>
                <th>Celular</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </thead>
        <tbody>

            @foreach ($estudiante as $estu)
                <tr>
                    <td>{{ $estu->id }}</td>
                    <td>{{ $estu->nombre }}</td>
                    <td>{{ $estu->paterno }}</td>
                    <td>{{ $estu->materno }}</td>
                    <td>{{ $estu->ci }}</td>
                    <td>{{ $estu->celular }}</td>
                    <td>{{ $estu->direccion }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <form>
            <x-dialog-modal>
                <x-slot name="title">
                    ESTUDIANTE
                </x-slot>

                <x-slot name=content>
                    hols
                    <x-input></x-input>

                </x-slot>


                <x-slot name="footer">

                </x-slot>
            </x-dialog-modal>



        </form>
    </div>
</div>
