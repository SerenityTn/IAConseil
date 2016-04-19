<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {		
		Schema::create ( 'users', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->string ( 'nom' );
			$table->string ( 'prenom' );
			$table->string ( 'email' )->unique ();
			$table->string ( 'password' );			
			$table->string ( 'ville' );			
			$table->string ( 'societe' );
			$table->string ( 'tel' );
			$table->string ( 'web_site' );
			$table->integer ( 'role' )->default(3);
			$table->rememberToken ();
			$table->timestamps ();
		} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop ( 'users' );
	}
}
