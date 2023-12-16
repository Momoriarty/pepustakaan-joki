public function up()
{
Schema::table('buku', function (Blueprint $table) {
$table->string('gambar')->nullable();
});
}

public function down()
{
Schema::table('buku', function (Blueprint $table) {
$table->dropColumn('gambar');
});
}