<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'first_name');

            $table->string('expected_is_manglik')->nullable()->default(FALSE)->after('email');
            $table->json('expected_family_type')->nullable()->default(NULL)->after('email');
            $table->json('expected_occupation')->nullable()->default(NULL)->after('email');

            $table->bigInteger('expected_income_high')->nullable()->default(NULL)->after('email');
            $table->bigInteger('expected_income_low')->nullable()->default(NULL)->after('email');

            $table->string('is_manglik')->nullable()->default(FALSE)->after('email');
            $table->string('family_type')->nullable()->default(NULL)->after('email');
            $table->string('occupation')->nullable()->default(NULL)->after('email');
            $table->bigInteger('annual_income')->nullable()->default(NULL)->after('email');
            $table->string('gender')->nullable()->default(NULL)->after('email');
            $table->date('dob')->nullable()->default(NULL)->after('email');
            $table->string('last_name')->nullable()->default(NULL)->after('email');

            $table->string('social_id')->nullable()->default(NULL)->after('email');
            $table->string('social_type')->nullable()->default(NULL)->after('email');

            $table->boolean('is_admin')->nullable()->default(NULL)->after('email');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'last_name', 'dob',
                'gender', 'annual_income', 'occupation', 'family_type',
                'is_manglik', 'expected_income_low', 'expected_income_low',
                'expected_occupation', 'expected_family_type', 'expected_is_manglik',
                'social_id', 'social_type'
            ]);
        });
    }
};
