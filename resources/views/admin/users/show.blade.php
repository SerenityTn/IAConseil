<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<table class="table">
			<tr>
				<td>Nom</td>
				<td>{{ $user->nom }}</td>
			</tr>
			<tr>
				<td>Prénom</td>
				<td>{{ $user->prenom }}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{ $user->email }}</td>
			</tr>
			<tr>
				<td>Ville</td>
				<td>{{ $user->ville }}</td>
			</tr>
			<tr>
				<td>Societe</td>
				<td>{{ $user->societe }}</td>
			</tr>
			<tr>
				<td>Site web</td>
				<td>{{ $user->site_web }}</td>
			</tr>			
			<tr>
				<td>Téléphone</td>
				<td>{{ $user->tel }}</td>
			</tr>
			<tr>
				<td>Role</td>
				<td>{{ $user->role }}</td>
			</tr>
		</table>
	</div>
</div>
