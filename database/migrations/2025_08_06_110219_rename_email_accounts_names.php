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
        Schema::table('email_accounts',function(Blueprint $table){
              $table->renameColumn('mail_form_address','mail_from_address');
              $table->renameColumn('mail_form_name','mail_from_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('email_accounts',function(Blueprint $table){
              $table->renameColumn('mail_from_address','mail_form_address');
              $table->renameColumn('mail_from_name','mail_form_name');
        });
    }
};
