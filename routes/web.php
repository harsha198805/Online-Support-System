<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\TicketController;
use App\Http\Controllers\Agent\AgentTicketController;
use Illuminate\Support\Facades\Auth;

Auth::routes(['register' => false]);
Route::get('/', [TicketController::class, 'create']);
Route::post('/ticket', [TicketController::class, 'store'])->name('ticket.store');
Route::get('/ticket/thankyou', [TicketController::class, 'thankyou'])->name('ticket.thankyou');

Route::get('/ticket/status', [TicketController::class, 'status'])->name('ticket.status');
Route::post('/ticket/status/check', [TicketController::class, 'checkStatus'])->name('ticket.status.check');

Route::middleware(['auth','agent'])->prefix('agent')->group(function () {
    Route::get('/tickets', [AgentTicketController::class, 'index'])->name('agent.tickets');
    Route::get('/tickets/{id}', [AgentTicketController::class, 'show'])->name('agent.ticket.show');
    Route::post('/tickets/{id}/reply', [AgentTicketController::class, 'reply'])->name('agent.ticket.reply');
});