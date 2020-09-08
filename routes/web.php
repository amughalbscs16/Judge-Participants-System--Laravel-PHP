<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {
  Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
  Route::get('/', 'JudgeTeamController@judgeTeamHome')->name('judgeHome');

  Route::prefix('team')->group(function () {
    Route::get('/editprofile', 'TeamController@getProfileEdit')->name('getProfileEdit');
    Route::post('/posteditprofile', 'TeamController@postProfileEdit')->name('postProfileEdit');
    Route::get('/judgeScores','TeamController@getJudgeScores')->name('getJudgeScores');
  });
  Route::prefix('judge')->group(function () {
    Route::get('/judgepartcipants', 'JudgeController@getData')->name('judgeparticipants');
    Route::get('/judgeapartcipant/{team_id}', 'JudgeController@getParticipantData')->name('judgeaparticipant');
    Route::post('/judgeaparticipantpost/{tid}', 'JudgeController@postParticipantData')->name('postjudgeaparticipant');
    Route::get('/judgedparticipants', 'JudgeController@getJudgedParticipants')->name('getJudgedParticipants');
    Route::get('/getjudgedparticipant/{tid}', 'JudgeController@getJudgedParticipant')->name('getJudgedParticipant');
  });
  Route::prefix('volunteer')->group(function () {
    Route::post('/volunteerFind', 'JudgeTeamController@volunteerJudgeParticipant')->name('volunteerJudgeParticipant');
  });
    Route::prefix('registrations')->group(function () {
        Route::get('/setstatus', 'RegistrationsController@setTeamStatus')->name('setTeamStatus');
        Route::get('/setjudgestatus', 'RegistrationsController@setJudgeStatus')->name('setJudgeStatus');
        Route::post('/toggle', 'RegistrationsController@ToggleTeamStatus')->name('ToggleTeamStatus');
        Route::post('/toggleJudge', 'RegistrationsController@ToggleJudgeStatus')->name('ToggleJudgeStatus');
    });
});
