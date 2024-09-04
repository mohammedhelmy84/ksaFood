<?php

use App\Enums\Order\OrderType;
use App\Traits\CreatedUpdatedByMigration;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use CreatedUpdatedByMigration;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('price', 8, 2)->default(0);
            $table->tinyInteger('order_type')->default(OrderType::MEAL->value);
            $table->unsignedBigInteger('order_id')->nullable()->index();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('set null');
            $table->unsignedBigInteger('product_id')->nullable()->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
            $table->unsignedBigInteger('package_id')->nullable()->index();
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('set null');
            $table->unsignedBigInteger('branch_id')->nullable()->index();
            $table->foreign('branch_id')->references('id')->on('vendor_branches')->onDelete('set null');
            $this->CreatedUpdatedByRelationship($table);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
