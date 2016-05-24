<div class="table-responsive">
  <table id="mytable" class="table table-bordred table-striped">
    <thead>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Adresse Email</th>
      <th>Ville</th>
      <th>Societe</th>
      <th>Téléphone</th>
      <th>Role</th>
    </thead>

    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->nom }}</td>
        <td>{{ $user->prenom }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->ville }}</td>
        <td>{{ $user->societe }}</td>
        <td>{{ $user->tel }}</td>
        <td>{!! $role_map[$user->role] !!}</td>
        <td>
          <button onclick="show_user({{ $user->id }})" data-toggle = "modal" data-target="#modal" class="btn btn-info">
            <span class="glyphicon glyphicon-eye-open"></span>
          </button>
                </td>
        <td>
          <button onclick="edit_user({{ $user->id }})" data-toggle = "modal" data-target = "#modal" class="btn btn-primary">
            <span class="glyphicon glyphicon-pencil"></span>
          </button>
        </td>
        <td>
          <button onclick="delete_user({{ $user->id }}, this)" data-toggle="modal" data-target="#delaeteModal" class="btn btn-danger">
            <span class="glyphicon glyphicon-trash"></span>
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="clearfix"></div>
  {{ $users->links() }}
</div>
