<div>
    <a href="{{ route('users.create') }}">Cadastrar</a>
    <table>
        <thead>
            <th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </th>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('users.edit', $user->id) }}">Editar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
