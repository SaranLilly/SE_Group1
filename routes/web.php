<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRController;
use App\Http\Controllers\SetKpiHRController;
use App\Http\Controllers\CriterionHRController;
use App\Http\Controllers\CriteriakpiHRController;
use App\Http\Controllers\ResultHRController;

Route::get('/', function () {
    return view('welcome');
});
//-->HR allEmployeepage 
Route::get('/allEmployeeHRPage', [HRController::class, 'index'])->name('allemployeeHR');
Route::get('/addEmployeeHRPage', [HRController::class, 'create'])->name('addemployeeHR');
Route::post('allEmployeeHRPage', [HRController::class, 'listofname'])->name('employeeHR.listofname');
Route::put('/allEmployeeHRPage/{employee}/update', [HRController::class, 'update'])->name('employeeHR.update');
Route::get('/allEmployeeHRPage/{employee}/edit', [HRController::class, 'edit'])->name('employeeHR.edit');
Route::delete('/allEmployeeHRPage/{employee}/destroy', [HRController::class, 'destroy'])->name('employeeHR.destroy');
// Route::get('/editemployeeHRPage', [HRController::class, 'edit'])->name('editemployeeHR');

//-->setKpiEvaluationFormHRPage updatesetKpiEvaluationFormHRPage.blade
Route::get('/setKpiEvaluationFormHRPage', [SetKpiHRController::class, 'index'])->name('setkpiHR.index');
Route::get('/setKpiEvaluationFormHRPage/create', [SetKpiHRController::class, 'create'])->name('addsetkpiHR');
Route::post('/setKpiEvaluationFormHRPage', [SetKpiHRController::class, 'store'])->name('setkpiHR.store');
Route::get('/setKpiEvaluationFormHRPage/{setkpi}/edit', [SetKpiHRController::class, 'edit'])->name('editsetkpiHR');
Route::put('/setKpiEvaluationFormHRPage/{setkpi}/update', [SetKpiHRController::class, 'update'])->name('setkpiupdateHR');
Route::delete('/setKpiEvaluationFormHRPage/{setkpi}/delete', [SetKpiHRController::class, 'delete'])->name('setkpideleteHR');
//-->criterionHRPage
Route::get('/criterionHRPage', [CriterionHRController::class, 'index'])->name('criterionHR.index');
Route::get('/addcriterionHRPage', [CriterionHRController::class, 'create'])->name('addcriterionHR');
Route::post('/criterionHRPage', [CriterionHRController::class, 'listofname'])->name('criterionHR.listofname');
Route::get('/criterionHRPage/{criterion}/edit', [CriterionHRController::class, 'edit'])->name('editcriterionHR');
Route::put('/criterionHRPage/{criterion}/update', [CriterionHRController::class, 'update'])->name('updatecriterionHR');
Route::delete('/criterionHRPage/{criterion}/destroy', [CriterionHRController::class, 'destroy'])->name('deletcriterionHR');


Route::get('/topicEvaluationFormHRPage', [CriteriakpiHRController::class, 'index'])->name('criteriakpiHR.index');
Route::get('/addtopicEvaluationFormHRPage', [CriteriakpiHRController::class, 'create'])->name('addcriteriakpiHR');
Route::post('/topicEvaluationFormHRPage', [CriteriakpiHRController::class, 'listofname'])->name('criteriakpiHR.listofname');
Route::get('/topicEvaluationFormHRPage/{criteriakpi}/edit', [CriteriakpiHRController::class, 'edit'])->name('editcriteriakpiHR');
Route::put('/topicEvaluationFormHRPage/{criteriakpi}/update', [CriteriakpiHRController::class, 'update'])->name('updatecriteriakpiHR');
Route::delete('/topicEvaluationFormHRPage/{criteriakpi}/destroy', [CriteriakpiHRController::class, 'destroy'])->name('deletecriteriakpiHR');

Route::get('/allResultHRPages', [ResultHRController::class, 'index'])->name('resultHR');