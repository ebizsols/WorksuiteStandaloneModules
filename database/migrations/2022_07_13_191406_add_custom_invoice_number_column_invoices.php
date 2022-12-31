<?php

use App\Models\Invoice;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomInvoiceNumberColumnInvoices extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->string('custom_invoice_number')->nullable();
        });

        $invoices = Invoice::select('id', 'invoice_number')->get();

        if ($invoices->count() > 0) {
            foreach ($invoices as $invoice) {
                Invoice::where('id', $invoice->id)->update(['custom_invoice_number' => $invoice->invoice_number]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('custom_invoice_number');
        });
    }

}
