
<section>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuarios->id }}</td>
                    <td>{{ $usuarios->name }}</td>
                    <td>{{ $usuarios->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</section>


