<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreatePaysTable extends Migration { public function up() { Schema::create('pays', function (Blueprint $sp580417) { $sp580417->increments('id'); $sp580417->string('name'); $sp580417->integer('sort')->default(1000); $sp580417->string('img'); $sp580417->string('driver'); $sp580417->string('way'); $sp580417->text('config'); $sp580417->text('comment')->nullable(); $sp580417->float('fee_system', 8, 4)->default(0.01); $sp580417->boolean('enabled'); $sp580417->timestamps(); }); } public function down() { Schema::dropIfExists('pays'); } }