<?php

use App\Enums\Order\OrderStatus;
use App\Enums\Order\PayStatus;
use App\Enums\Order\PayType;
use App\Enums\Order\ReciveType;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->tinyInteger('status')->default(OrderStatus::INACTIVE->value); // [inactive, "preprare", "done", "received", "canselled"]
            $table->tinyInteger('pay_status')->default(PayStatus::UNPAID->value); // ["unpaid", "paid"]
            $table->tinyInteger('pay_type')->default(PayType::CASH->value); // ["visa", "e_wallet", ...etc]
            $table->tinyInteger('receive_type')->default(ReciveType::ON_BRANCH->value); // ["in_branch", "delivery"]
            $table->unsignedBigInteger('coupon_id')->nullable()->index();
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('set null');
            $table->unsignedBigInteger('customer_id')->nullable()->index();
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('set null');
            $this->CreatedUpdatedByRelationship($table);        
            $table->unsignedBigInteger('vendor_id')->nullable()->index();
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('set null');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
