<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->integer('amount');
            $table->decimal('fee');
            $table->enum('status', [0, 1, 2])->default(0)->comment('0 - En Espera, 1 - Completada, 2 - Rechazada');
            $table->enum('payment_gateway', ['paypal', 'payu', 'wompi', 'stripe', 'coinpayment', 'coinbase', 'bankTransfer', 'zelle'])->nullable();
            $table->string('transaction_id')->nullable()->comment('ID de la transacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_purchases');
    }
}
