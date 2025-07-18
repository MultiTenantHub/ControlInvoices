<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('organizacions', function (Blueprint $table) {
            $table->id();
            $table->string('name'); # Nombre de la Empresa o Negocio
            $table->string('slug')->unique();
            $table->string('country'); # Pais
            $table->string('timezone'); # Zona Horaria
            $table->string('tax_id_type'); # Tipo de Identificacion Fiscal (RUC, NIT, etc.)
            $table->string('tax_id_number'); # Numero de Identificacion Fiscal
            $table->string('tax_rate_type'); # Tipo de Tasa de Impuesto (IGV, IVA, etc.)
            # tax_rate_percentage
            # currencies
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizacions');
    }
};
