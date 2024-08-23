<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacts;

class GeneseController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function prestations(){
        return view('pages.prestations');
    }

    public function travailleur(){
        return view('pages.travailleur');
    }

    public function visapermisdetravail(){
        return view('pages.visapermisdetravail');
    }

    public function residencepermanante(){
        return view('pages.residencepermanante');
    }

    public function packcompletresidencepermanente(){
        return view('pages.packcompletresidencepermanente');
    }

    public function cvlettredemotivation(){
        return view('pages.cvlettredemotivation');
    }

    public function assistanceavotrearriveeaucanada(){
        return view('pages.assistanceavotrearriveeaucanada');
    }

    public function masterclasspourtrouveremploiaucanada(){
        return view('pages.masterclasspourtrouveremploiaucanada');
    }

    public function permisdetravailouvert(){
        return view('pages.permisdetravailouvert');
    }

    public function etude(){
        return view('pages.etude');
    }

    public function demandeadmission(){
        return view('pages.demandeadmission');
    }

    public function demandedevisa(){
        return view('pages.demandedevisa');
    }

    public function assistantedelogement(){
        return view('pages.assistantedelogement');
    }
    public function packcompletpourlesetudesaucanada(){
        return view('pages.packcompletpourlesetudesaucanada');
    }
    public function residencepermanantetravailleurs(){
        return view('pages.residencepermanantetravailleurs');
    }
    public function parrainage(){
        return view('pages.parrainage');
    }
    public function permisdetravailpourepouxetconjointe(){
        return view('pages.permisdetravailpourepouxetconjointe');
    }
    public function assistanceainstegration(){
        return view('pages.assistanceainstegration');
    }
    public function recherchelogement(){
        return view('pages.recherchelogement');
    }
    public function cvcanadien(){
        return view('pages.cvcanadien');
    }
    public function aidepourtrouvervotrepremieremploiaucanada(){
        return view('pages.aidepourtrouvervotrepremieremploiaucanada');
    }
    public function autreservicesaubesoin(){
        return view('pages.autreservicesaubesoin');
    }
    public function visiteur(){
        return view('pages.visiteur');
    }
    public function visavisiteurstourisme(){
        return view('pages.visavisiteurstourisme');
    }
    public function visavisiteurstravail(){
        return view('pages.visavisiteurstravail');
    }
    public function visavisiteursmedical(){
        return view('pages.visavisiteursmedical');
    }
    public function visavisiteursaffaire(){
        return view('pages.visavisiteursaffaire');
    }
    public function reservationhotel(){
        return view('pages.reservationhotel');
    }

    public function accueilaareoport(){
        return view('pages.accueilaareoport');
    }
    public function prisederendezvousavecdespartenairesaffaire(){
        return view('pages.prisederendezvousavecdespartenairesaffaire');
    }
    public function prisederendezvousavecdesspecialiste(){
        return view('pages.prisederendezvousavecdesspecialiste');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function evaluation(){
        return view('pages.evaluation');
    }
    public function apropos(){
        return view('pages.apropos');
    }
    public function presentationducabinet(){
        return view('pages.presentationducabinet');
    }
    public function faq(){
        return view('pages.faq');
    }
    public function professionneloutravailleursansconjoint(){
        return view('pages.professionneloutravailleursansconjoint');
    }
    public function professionneloutravailleuravecconjoint(){
        return view('pages.professionneloutravailleuravecconjoint');
    }
    public function gestionnaireentreprise(){
        return view('pages.gestionnaireentreprise');
    }
    public function groupementfamilial(){
        return view('pages.groupementfamilial');
    }

    public function saveContact(Request $request){

        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'telephone' => ['required'],
            'preoccupatioon' => ['required'],
        ]);

        $contact = new contacts();
        $contact = $request->all();
        $contact->save();
    }

}
