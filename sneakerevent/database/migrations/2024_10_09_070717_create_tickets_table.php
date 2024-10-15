    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        public function up(): void
        {
            Schema::create('tickets', function (Blueprint $table) {
                $table->id();
                $table->foreignId('event_id')->constrained('events')->cascadeOnDelete();
                $table->string('ticket_type');
                $table->string('name');
                $table->date('event_date');
                $table->string('city');
                $table->timestamps();
            });
        }

        public function down(): void
        {
            Schema::dropIfExists('tickets');
        }
    };
