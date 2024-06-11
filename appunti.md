# come creare una migrazione
comando  php artisan make:migration create_nome al plurale categoria_table
nome al plurale categoria esempi: books, authors, ecc

            $table->id(); ---questo e l'ultimo li lasciamo così come sono
            $table->string('title', 100);  
            $table->integer('pages')->nullable();  -----nullable significa che non è indispensabile
            // $table->integer('pages')->default(NULL);//
            $table->integer('year')->nullable();
            $table->timestamps();  -------questo e il primo li lasciamo così come sono

"php artisan migrate" e mando la tabella sul database
php artisan migrate:rollback e ritorna indietro

php artisan make:migration add_to_nome al plurale categoria_table



    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('author');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('author'); ----------serve per cancellare colonna
        });
    }
};

* dopo aver fatto la  migrazione e quindi creato la tabella nel nostro database, dobbiamo creare un model:
comando
php artisan make:model Book        ///---> sto creando una classe model che per regola deve essere con prima lettera maiuscola, ingelse e singolare. riferendosi alla tbella books la chiamo Book (prima lettera maiuscolo, singolare inglese)