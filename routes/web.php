<?php



use App\Http\Controllers\GeneseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//End

//Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//End

//GeneseRouteFrontEnd
Route::get('/',[GeneseController::class,'index'])->name('index');
Route::get('/prestations',[GeneseController::class,'prestations'])->name('prestations');
Route::get('/travailleur',[GeneseController::class,'travailleur'])->name('travailleur');
Route::get('/visapermisdetravail',[GeneseController::class,'visapermisdetravail'])->name('visapermisdetravail');
Route::get('/residencepermanante',[GeneseController::class,'residencepermanante'])->name('residencepermanante');
Route::get('/packcompletresidencepermanente',[GeneseController::class,'packcompletresidencepermanente'])->name('packcompletresidencepermanente');
Route::get('/cvlettredemotivation',[GeneseController::class,'cvlettredemotivation'])->name('cvlettredemotivation');
Route::get('/assistanceavotrearriveeaucanada',[GeneseController::class,'assistanceavotrearriveeaucanada'])->name('assistanceavotrearriveeaucanada');
Route::get('/masterclasspourtrouveremploiaucanada',[GeneseController::class,'masterclasspourtrouveremploiaucanada'])->name('masterclasspourtrouveremploiaucanada');
Route::get('/permisdetravailouvert',[GeneseController::class,'permisdetravailouvert'])->name('permisdetravailouvert');
Route::get('/etude',[GeneseController::class,'etude'])->name('etude');
Route::get('/demandeadmission',[GeneseController::class,'demandeadmission'])->name('demandeadmission');
Route::get('/demandedevisa',[GeneseController::class,'demandedevisa'])->name('demandedevisa');
Route::get('/assistantedelogement',[GeneseController::class,'assistantedelogement'])->name('assistantedelogement');
Route::get('/packcompletpourlesetudesaucanada',[GeneseController::class,'packcompletpourlesetudesaucanada'])->name('packcompletpourlesetudesaucanada');
Route::get('/residencepermanantetravailleurs',[GeneseController::class,'residencepermanantetravailleurs'])->name('residencepermanantetravailleurs');
Route::get('/parrainage',[GeneseController::class,'parrainage'])->name('parrainage');
Route::get('/permisdetravailpourepouxetconjointe',[GeneseController::class,'permisdetravailpourepouxetconjointe'])->name('permisdetravailpourepouxetconjointe');
Route::get('/assistanceainstegration',[GeneseController::class,'assistanceainstegration'])->name('assistanceainstegration');
Route::get('/recherchelogement',[GeneseController::class,'recherchelogement'])->name('recherchelogement');
Route::get('/cvcanadien',[GeneseController::class,'cvcanadien'])->name('cvcanadien');
Route::get('/aidepourtrouvervotrepremieremploiaucanada',[GeneseController::class,'aidepourtrouvervotrepremieremploiaucanada'])->name('aidepourtrouvervotrepremieremploiaucanada');
Route::get('/autreservicesaubesoin',[GeneseController::class,'autreservicesaubesoin'])->name('autreservicesaubesoin');
Route::get('/visiteur',[GeneseController::class,'visiteur'])->name('visiteur');
Route::get('/visavisiteurstourisme',[GeneseController::class,'visavisiteurstourisme'])->name('visavisiteurstourisme');
Route::get('/visavisiteurstravail',[GeneseController::class,'visavisiteurstravail'])->name('visavisiteurstravail');
Route::get('/visavisiteursmedical',[GeneseController::class,'visavisiteursmedical'])->name('visavisiteursmedical');
Route::get('/visavisiteursaffaire',[GeneseController::class,'visavisiteursaffaire'])->name('visavisiteursaffaire');
Route::get('/reservationhotel',[GeneseController::class,'reservationhotel'])->name('reservationhotel');
Route::get('/accueilaareoport',[GeneseController::class,'accueilaareoport'])->name('accueilaareoport');
Route::get('/prisederendezvousavecdespartenairesaffaire',[GeneseController::class,'prisederendezvousavecdespartenairesaffaire'])->name('prisederendezvousavecdespartenairesaffaire');
Route::get('/prisederendezvousavecdesspecialiste',[GeneseController::class,'prisederendezvousavecdesspecialiste'])->name('prisederendezvousavecdesspecialiste');
Route::get('/blog',[GeneseController::class,'blog'])->name('blog');
Route::get('/contact', [GeneseController::class, 'contact'])->name('contact');
Route::get('/evaluation',[GeneseController::class,'evaluation'])->name('evaluation');
Route::get('/apropos',[GeneseController::class,'apropos'])->name('apropos');
Route::get('/presentationducabinet',[GeneseController::class,'presentationducabinet'])->name('presentationducabinet');
Route::get('/faq',[GeneseController::class,'faq'])->name('faq');
Route::get('/professionneloutravailleursansconjoint',[GeneseController::class,'professionneloutravailleursansconjoint'])->name('professionneloutravailleursansconjoint');
Route::get('/professionneloutravailleuravecconjoint',[GeneseController::class,'professionneloutravailleuravecconjoint'])->name('professionneloutravailleuravecconjoint');
Route::get('/gestionnaireentreprise',[GeneseController::class,'gestionnaireentreprise'])->name('gestionnaireentreprise');
Route::get('/groupementfamilial',[GeneseController::class,'groupementfamilial'])->name('groupementfamilial');
//End

//BackEnd
Route::post('/contact', [GeneseController::class, 'saveContact'])->name('contacts');
require __DIR__.'/auth.php';
