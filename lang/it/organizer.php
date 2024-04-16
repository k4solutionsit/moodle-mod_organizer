<?php
// This file is part of mod_organizer for Moodle - http://moodle.org/
//
// It is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// It is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * lang/en/organizer.php
 *
 * @package   mod_organizer
 * @author    Andreas Hruska (andreas.hruska@tuwien.ac.at)
 * @author    Katarzyna Potocka (katarzyna.potocka@tuwien.ac.at)
 * @author    Andreas Windbichler
 * @author    Ivan Šakić
 * @copyright 2014 Academic Moodle Cooperation {@link http://www.academic-moodle-cooperation.org}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$string['absolutedeadline'] = 'Termine iscrizioni';
$string['absolutedeadline_help'] = 'Seleziona questa opzione per definire il momento dopo il quale non saranno più possibili azioni da parte degli studenti.';
$string['actionlink_delete'] = 'elimina';
$string['actionlink_edit'] = 'modifica';
$string['actionlink_eval'] = 'valuta';
$string['actionlink_print'] = 'stampa';
$string['actions'] = 'Azioni';
$string['actions_help'] = 'Azione da intraprendere.';
$string['addappointment'] = 'Aggiungi appuntamento';
$string['addslots_placesinfo'] = 'Questa azione creerà {$a->numplaces} nuovi posti possibili, per un totale di {$a->totalplaces} posti possibili per {$a->numstudents} studenti.';
$string['addslots_placesinfo_group'] = 'Questa azione creerà {$a->numplaces} nuovi posti possibili, per un totale di {$a->totalplaces} posti possibili per {$a->numgroups} gruppi.';
$string['allowcreationofpasttimeslots'] = 'Creazione di fasce orarie passate';
$string['allowedprofilefieldsprint'] = 'Campi del profilo utente consentiti';
$string['allowedprofilefieldsprint2'] = 'Campi del profilo utente consentiti per la stampa dei singoli appuntamenti dell\'organizzatore';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'I dettagli dell\'organizzatore e il modulo di registrazione saranno disponibili da <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Inizio iscrizioni';
$string['allowsubmissionsfromdate_help'] = 'Seleziona questa opzione se vuoi rendere questo organizzatore disponibile agli studenti dopo un certo momento.';
$string['allowsubmissionsfromdatesummary'] = 'Questo organizzatore accetterà registrazioni da <strong>{$a}</strong>';
$string['allowsubmissionstodate'] = 'Termine iscrizioni';
$string['alwaysshowdescription'] = 'Mostra sempre la descrizione';
$string['alwaysshowdescription_help'] = 'Se disattivato, la Descrizione dell\'Assegnazione sopra diventerà visibile agli studenti solo alla data di \'Inizio iscrizioni\'.';
$string['applicant'] = 'Questa è la persona che ha registrato il gruppo';
$string['appointment_reminder_student:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, hai un appuntamento con {$a->sendername} il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di Messaggistica Moodle';
$string['appointment_reminder_student:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, hai un appuntamento di gruppo con {$a->sendername} il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di Messaggistica Moodle';
$string['appointment_reminder_student:group:smallmessage'] = 'Hai un appuntamento di gruppo con {$a->sendername} il {$a->date} alle {$a->time} presso {$a->location}.';
$string['appointment_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Promemoria appuntamento di gruppo';
$string['appointment_reminder_student:smallmessage'] = 'Hai un appuntamento con {$a->sendername} il {$a->date} alle {$a->time} presso {$a->location}.';
$string['appointment_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Promemoria appuntamento';
$string['appointment_reminder_teacher:digest:fullmessage'] = 'Ciao {$a->receivername}!

Domani hai i seguenti appuntamenti:

{$a->digest}

Sistema di Messaggistica Moodle';
$string['appointment_reminder_teacher:digest:smallmessage'] = 'Hai ricevuto un messaggio riepilogativo dei tuoi appuntamenti di domani.';
$string['appointment_reminder_teacher:digest:subject'] = 'Riepilogo appuntamenti';
$string['appointment_reminder_teacher:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, hai un appuntamento con gli studenti il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di Messaggistica Moodle';
$string['appointment_reminder_teacher:group:digest:fullmessage'] = 'Ciao {$a->receivername}!

Domani hai i seguenti appuntamenti:

{$a->digest}

Sistema di Messaggistica Moodle';
$string['appointment_reminder_teacher:group:digest:smallmessage'] = 'Hai ricevuto un messaggio riepilogativo dei tuoi appuntamenti di domani.';
$string['appointment_reminder_teacher:group:digest:subject'] = 'Riepilogo appuntamenti';
$string['appointment_reminder_teacher:smallmessage'] = 'Hai un appuntamento con gli studenti il {$a->date} alle {$a->time} presso {$a->location}.';
$string['appointment_reminder_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Promemoria appuntamento';
$string['appointmentcomments'] = 'Commenti';
$string['appointmentcomments_help'] = 'Qui è possibile aggiungere informazioni aggiuntive sugli appuntamenti.';
$string['appointmentdatetime'] = 'Data e ora';
$string['appointmentdeleted_notify_student:fullmessage'] = 'Ciao {$a->receivername}!

Il tuo appuntamento nel corso {$a->courseshortname} del {$a->date} alle {$a->time} presso {$a->location} è stato cancellato.';
$string['appointmentdeleted_notify_student:group:fullmessage'] = 'Ciao {$a->receivername}!

Il tuo appuntamento nel corso {$a->courseshortname} del {$a->date} alle {$a->time} presso {$a->location} è stato cancellato.';
$string['appointmentdeleted_notify_student:group:smallmessage'] = 'Il tuo appuntamento del {$a->date} alle {$a->time} nell\'organizzatore \'{$a->organizername}\' è stato cancellato.';
$string['appointmentdeleted_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Appuntamento cancellato';
$string['appointmentdeleted_notify_student:smallmessage'] = 'Il tuo appuntamento del {$a->date} alle {$a->time} nell\'organizzatore \'{$a->organizername}\' è stato cancellato.';
$string['appointmentdeleted_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Appuntamento cancellato';
$string['assign'] = 'Assegna';
$string['assign_notify_student:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, un appuntamento con {$a->slot_teacher} il {$a->date} alle {$a->time} è stato assegnato a te da {$a->sendername}.

Docente: {$a->slot_teacher}
Luogo: {$a->slot_location}
Data: {$a->date} alle {$a->time}

Sistema di Messaggistica Moodle';
$string['assign_notify_student:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, un appuntamento con {$a->slot_teacher} il {$a->date} alle {$a->time} è stato assegnato al tuo gruppo {$a->groupname} da {$a->sendername}.

Docente: {$a->slot_teacher}
Luogo: {$a->slot_location}
Data: {$a->date} alle {$a->time}

Sistema di Messaggistica Moodle';
$string['assign_notify_student:group:smallmessage'] = 'Un appuntamento con {$a->slot_teacher} il {$a->date} alle {$a->time} è stato assegnato al tuo gruppo {$a->groupname} da {$a->sendername}.';
$string['assign_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Appuntamento assegnato dal docente';
$string['assign_notify_student:smallmessage'] = 'Un appuntamento con {$a->slot_teacher} il {$a->date} alle {$a->time} è stato assegnato a te da {$a->sendername}.';
$string['assign_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Appuntamento assegnato dal docente';
$string['assign_notify_teacher:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, un appuntamento con {$a->participantname} il {$a->date} alle {$a->time} è stato assegnato a te da {$a->sendername}.

Partecipante: {$a->participantname}
Luogo: {$a->slot_location}
Data: {$a->date} alle {$a->time}

Sistema di Messaggistica Moodle';
$string['assign_notify_teacher:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, un appuntamento con il gruppo {$a->groupname} il {$a->date} alle {$a->time} è stato assegnato a te da {$a->sendername}.

Gruppo: {$a->groupname}
Luogo: {$a->slot_location}
Data: {$a->date} alle {$a->time}

Sistema di Messaggistica Moodle';
$string['assign_notify_teacher:group:smallmessage'] = 'Un appuntamento con il gruppo {$a->groupname} il {$a->date} alle {$a->time} è stato assegnato a te da {$a->sendername}.';
$string['assign_notify_teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Assegnazione appuntamento';
$string['assign_notify_teacher:smallmessage'] = 'Un appuntamento con {$a->sendername} il {$a->date} alle {$a->time} è stato assegnato da te a {$a->sendername}';
$string['assign_notify_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Assegnazione appuntamento';
$string['assign_title'] = 'Assegna appuntamento';
$string['assignsuccess'] = 'Lo slot è stato assegnato con successo e il/i partecipante/i è/sono stato/i notificato/i.';
$string['assignsuccessnotsent'] = 'Lo slot è stato assegnato con successo MA il/i partecipante/i NON è/sono stato/i notificato/i.';
$string['atlocation'] = 'presso';
$string['attended'] = 'presenziato';
$string['auth'] = 'Metodo di autenticazione';
$string['availability'] = 'Disponibilità';
$string['availablefrom'] = 'Applicazioni possibili da';
$string['availablefrom_help'] = 'Imposta il periodo entro il quale agli studenti sarà consentito registrarsi per questi slot orari. In alternativa, seleziona "Inizia adesso" per abilitare immediatamente la registrazione.';
$string['availablegrouplist'] = 'Gruppi disponibili';
$string['availableslotsfor'] = 'Slot disponibili per';
$string['back'] = 'Indietro';
$string['btn_add'] = 'Aggiungi nuovi slot';
$string['btn_assign'] = 'Assegna slot';
$string['btn_comment'] = 'Modifica commento';
$string['btn_delete'] = 'Rimuovi slot selezionati';
$string['btn_deleteappointment'] = 'Elimina appuntamento';
$string['btn_deletesingle'] = 'Rimuovi slot selezionato';
$string['btn_edit'] = 'Modifica slot selezionati';
$string['btn_editsingle'] = 'Modifica slot selezionato';
$string['btn_eval'] = 'Valuta slot selezionati';
$string['btn_eval_short'] = 'Valuta';
$string['btn_evalsingle'] = 'Valuta slot selezionato';
$string['btn_print'] = 'Stampa slot selezionati';
$string['btn_printsingle'] = 'Stampa slot selezionato';
$string['btn_queue'] = 'In coda';
$string['btn_reeval'] = 'Rivaluta';
$string['btn_register'] = 'Registrati';
$string['btn_remind'] = 'Invia promemoria';
$string['btn_reregister'] = 'Ri-registrati';
$string['btn_save'] = 'Salva commento';
$string['btn_send'] = 'Invia';
$string['btn_sendall'] = 'Invia promemorie a tutti i partecipanti senza abbastanza appuntamenti';
$string['btn_start'] = 'Inizia';
$string['btn_unqueue'] = 'Rimuovi dalla coda';
$string['btn_unregister'] = 'Annulla registrazione';
$string['calendarsettings'] = 'Impostazioni calendario';
$string['can_reregister'] = 'Puoi registrarti nuovamente per un altro appuntamento.';
$string['cannot_eval'] = 'Impossibile valutare, lo studente ha ';
$string['changegradewarning'] = 'Questo organizzatore ha appuntamenti valutati e modificare le impostazioni della valutazione non ricalcolerà automaticamente le valutazioni esistenti. Devi rivalutare tutti gli appuntamenti esistenti, se desideri modificare la valutazione.';
$string['collision'] = 'Attenzione! Rilevata una collisione con gli eventi e/o gli slot seguenti:';
$string['configabsolutedeadline'] = 'Lo scostamento predefinito del selettore di data e ora rispetto alla data e ora attuali.';
$string['configahead'] = 'in anticipo';
$string['configallowcreationofpasttimeslots'] = 'È consentito creare slot temporali passati?';
$string['configday'] = 'giorno';
$string['configdays'] = 'giorni';
$string['configdigest'] = 'Invia il riepilogo degli appuntamenti del giorno successivo all\'insegnante.';
$string['configdigest_label'] = 'Invia il riepilogo degli appuntamenti agli insegnanti';
$string['configdontsend'] = 'Non inviare';
$string['configemailteachers'] = 'Invia notifiche via email agli insegnanti riguardo alle modifiche dello stato di registrazione.';
$string['configemailteachers_label'] = 'Invia notifiche via email agli insegnanti';
$string['confighour'] = 'ora';
$string['confighours'] = 'ore';
$string['configintro'] = 'I valori che imposti qui definiscono i valori predefiniti utilizzati nel modulo di impostazioni quando crei un nuovo organizzatore.';
$string['configlocationlink'] = 'Il link a un motore di ricerca utilizzato per mostrare il percorso alla posizione. Inserisci $searchstring nell\'URL dove va la query.';
$string['configlocationslist'] = 'Posizioni per il campo di autocompletamento';
$string['configlocationslist_desc'] = 'Ogni posizione deve essere inserita su una riga separata!';
$string['configmaximumgrade'] = 'Imposta il valore predefinito selezionato nel campo di valutazione quando si crea un nuovo organizzatore. Questo è il massimo voto assegnabile a uno studente per il suo appuntamento.';
$string['configminute'] = 'minuto';
$string['configminutes'] = 'minuti';
$string['configmonth'] = 'mese';
$string['configmonths'] = 'mesi';
$string['confignever'] = 'Mai';
$string['configrelativedeadline'] = 'Il tempo predefinito prima di un appuntamento quando i partecipanti dovrebbero essere notificati.';
$string['configrequiremodintro'] = 'Disabilita questa opzione se non vuoi obbligare gli utenti a inserire una descrizione per ogni attività.';
$string['configsingleslotprintfield'] = 'campo dell\'utente da stampare quando viene stampato un singolo slot';
$string['configweek'] = 'settimana';
$string['configweeks'] = 'settimane';
$string['configyear'] = 'anno';
$string['confirm_conflicts'] = 'Sei sicuro di voler ignorare le collisioni e creare gli slot temporali?';
$string['confirm_delete'] = 'Elimina';
$string['confirm_organizer_remind_all'] = 'Invia';
$string['create'] = 'Crea';
$string['created'] = 'Creato';
$string['createsubmit'] = 'Crea slot temporali';
$string['crontaskname'] = 'Lavoro cron dell\'organizzatore';
$string['datapreviewtitle'] = 'Anteprima dati';
$string['datapreviewtitle_help'] = 'Fai clic su [+] o [-] per mostrare o nascondere le colonne.';
$string['datetemplate'] = '%d.%m.%Y';
$string['datetime'] = 'Data e ora';
$string['datetime_help'] = 'Data e ora dello slot.';
$string['day'] = 'giorno';
$string['day_0'] = 'lunedì';
$string['day_1'] = 'martedì';
$string['day_2'] = 'mercoledì';
$string['day_3'] = 'giovedì';
$string['day_4'] = 'venerdì';
$string['day_5'] = 'sabato';
$string['day_6'] = 'domenica';
$string['day_pl'] = 'giorni';
$string['dbid'] = 'ID DB';
$string['defaultsingleslotprintfields'] = 'Campi predefiniti del profilo utente da stampare per lo slot singolo';
$string['delete_organizer_grades'] = 'Elimina i voti di tutti gli organizzatori';
$string['deleteappointmentheader'] = 'Elimina questo appuntamento';
$string['deleteheader'] = 'Eliminazione degli slot seguenti:';
$string['deletekeep'] = 'Gli appuntamenti seguenti saranno cancellati. Gli studenti registrati saranno notificati e gli slot saranno eliminati:';
$string['deletenoslots'] = 'Nessuno slot eliminabile selezionato';
$string['deleteorganizergrades'] = 'Elimina i voti dal registro di valutazione';
$string['details'] = 'Dettagli dello stato';
$string['details_help'] = 'Stato attuale di questo slot.';
$string['downloadfile'] = 'Scarica file';
$string['duedate'] = 'Data di scadenza';

$string['duedateerror'] = 'La scadenza assoluta non può essere impostata prima della data di disponibilità!';
$string['duration'] = 'Durata';
$string['duration_help'] = 'Definisce la durata degli appuntamenti. Tutti gli intervalli di tempo definiti saranno divisi in slot della durata definita qui. Eventuali tempi rimanenti rimarranno inutilizzati (ad esempio, se l\'intervallo di tempo è di 40 minuti e la durata è impostata su 15 minuti, ci saranno 2 slot in totale con 10 minuti extra non utilizzati).';
$string['edit_notify_student:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, i dettagli dell\'appuntamento {$a->sendername} del {$a->date} alle {$a->time} sono stati modificati.

Docente: {$a->slot_teacher}
Luogo: {$a->slot_location}
Max. partecipanti: {$a->slot_maxparticipants}
Commenti:
{$a->slot_comments}

Sistema di messaggistica Moodle';
$string['edit_notify_student:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, i dettagli dell\'appuntamento di gruppo {$a->sendername} del {$a->date} alle {$a->time} sono stati modificati.

Docente: {$a->slot_teacher}
Luogo: {$a->slot_location}
Max. partecipanti: {$a->slot_maxparticipants}
Commenti:
{$a->slot_comments}

Sistema di messaggistica Moodle';
$string['edit_notify_student:group:smallmessage'] = 'I dettagli dell\'appuntamento di gruppo {$a->sendername} del {$a->date} alle {$a->time} sono stati modificati.';
$string['edit_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Dettagli appuntamento modificati';
$string['edit_notify_student:smallmessage'] = 'I dettagli dell\'appuntamento {$a->sendername} del {$a->date} alle {$a->time} sono stati modificati.';
$string['edit_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Dettagli appuntamento modificati';
$string['edit_notify_teacher:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, i dettagli dello slot temporale del {$a->date} alle {$a->time} sono stati modificati da {$a->sendername}.

Docente: {$a->slot_teacher}
Luogo: {$a->slot_location}
Max. partecipanti: {$a->slot_maxparticipants}
Commenti:
{$a->slot_comments}

Sistema di messaggistica Moodle';
$string['edit_notify_teacher:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, i dettagli dello slot temporale del {$a->date} alle {$a->time} sono stati modificati da {$a->sendername}.

Docente: {$a->slot_teacher}
Luogo: {$a->slot_location}
Max. partecipanti: {$a->slot_maxparticipants}
Commenti:
{$a->slot_comments}

Sistema di messaggistica Moodle';
$string['edit_notify_teacher:group:smallmessage'] = 'I dettagli dello slot temporale del {$a->date} alle {$a->time} sono stati modificati da {$a->sendername}.';
$string['edit_notify_teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Dettagli appuntamento modificati';
$string['edit_notify_teacher:smallmessage'] = 'I dettagli dello slot temporale del {$a->date} alle {$a->time} sono stati modificati da {$a->sendername}.';
$string['edit_notify_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Dettagli appuntamento modificati';
$string['edit_submit'] = 'Conferma modifiche';
$string['emailteachers'] = 'Invia notifiche via email ai docenti';
$string['emailteachers_help'] = 'Le notifiche ai docenti quando uno studente si registra per la prima volta per uno slot temporale
    vengono normalmente soppressi per evitare lo spam. Seleziona questa opzione per abilitare l\'organizzatore ad inviare tali notifiche
    via email ai docenti. Nota che le notifiche per la disiscrizione e la modifica degli slot vengono sempre inviate.';
$string['enableprintslotuserfields'] = 'Consenti modifica nei campi del profilo utente';
$string['enableprintslotuserfieldsdesc'] = 'Controlla se i docenti possono modificare i campi del profilo utente selezionati di default di seguito';
$string['err_availablefromearly'] = 'Questa data non può essere impostata dopo la data di inizio!';
$string['err_availablefromlate'] = 'Questa data non può essere impostata dopo la data di fine!';
$string['err_availablepastdeadline'] = 'Questo slot non può essere reso disponibile oltre la scadenza dell\'organizzatore ({$a->deadline})!';
$string['err_collision'] = 'Questo intervallo è in collisione con altri intervalli:';
$string['err_comments'] = 'Devi inserire una descrizione!';
$string['err_enddate'] = 'La data di fine non può essere impostata prima della data di inizio!';
$string['err_fromto'] = 'L\'ora di fine non può essere impostata prima dell\'ora di inizio!';
$string['err_fullminute'] = 'La durata deve essere un minuto intero.';
$string['err_fullminutegap'] = 'Il gap deve essere un minuto intero.';
$string['err_isgrouporganizer_app'] = 'Impossibile cambiare la modalità gruppo poiché ci sono già appuntamenti programmati in questo organizzatore!';
$string['err_location'] = 'Devi inserire un luogo!';
$string['err_noslots'] = 'Nessuno slot è stato selezionato!';
$string['err_posint'] = 'Devi inserire un intero positivo!';
$string['err_startdate'] = 'La data di inizio non può essere impostata prima della data odierna ({$a->now})!';
$string['eval_attended'] = 'Partecipato';
$string['eval_feedback'] = 'Feedback';
$string['eval_grade'] = 'Voto';
$string['eval_header'] = 'Slot temporali selezionati';
$string['eval_link'] = 'nuovo appuntamento';
$string['eval_no_participants'] = 'Questo slot non ha partecipanti';
$string['eval_not_occured'] = 'Questo slot non è ancora avvenuto';
$string['eval_notify_newappointment:student:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, il tuo appuntamento {$a->sendername} del {$a->date} alle {$a->time} in {$a->location} è stato valutato.

Gli insegnanti del corso ti permettono di riregistrarti per qualsiasi slot disponibile nell\'organizzatore {$a->organizername}.

Sistema di messaggistica Moodle';
$string['eval_notify_newappointment:student:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, il tuo appuntamento di gruppo {$a->sendername} del {$a->date} alle {$a->time} in {$a->location} è stato valutato.

Gli insegnanti del corso ti permettono di riregistrarti per qualsiasi slot disponibile nell\'organizzatore {$a->coursefullname}.

Sistema di messaggistica Moodle';
$string['eval_notify_newappointment:student:group:smallmessage'] = 'Il tuo appuntamento di gruppo del {$a->date} alle {$a->time} in {$a->location} è stato valutato.';
$string['eval_notify_newappointment:student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Appuntamento valutato';
$string['eval_notify_newappointment:student:smallmessage'] = 'Il tuo appuntamento del {$a->date} alle {$a->time} in {$a->location} è stato valutato.';
$string['eval_notify_newappointment:student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Appuntamento valutato';
$string['eval_notify_student:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, il tuo appuntamento {$a->sendername} del {$a->date} alle {$a->time} in {$a->location} è stato valutato.

Sistema di messaggistica Moodle';
$string['eval_notify_student:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, il tuo appuntamento di gruppo {$a->sendername} del {$a->date} alle {$a->time} in {$a->location} è stato valutato.

Sistema di messaggistica Moodle';
$string['eval_notify_student:group:smallmessage'] = 'Il tuo appuntamento di gruppo del {$a->date} alle {$a->time} in {$a->location} è stato valutato.';
$string['eval_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Appuntamento valutato';
$string['eval_notify_student:smallmessage'] = 'Il tuo appuntamento del {$a->date} alle {$a->time} in {$a->location} è stato valutato.';
$string['eval_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Appuntamento valutato';
$string['evaluate'] = 'Valuta';
$string['event'] = 'Evento del calendario';
$string['eventappointmentadded'] = 'Studente registrato in uno slot.';
$string['eventappointmentassigned'] = 'L\'appuntamento è stato assegnato dall\'insegnante.';
$string['eventappointmentcommented'] = 'L\'appuntamento è stato commentato.';
$string['eventappointmentdeleted'] = 'L\'appuntamento è stato cancellato dall\'insegnante.';
$string['eventappointmentevaluated'] = 'L\'appuntamento è stato valutato.';
$string['eventappointmentlistprinted'] = 'Elenco degli appuntamenti stampato.';
$string['eventappointmentremindersent'] = 'Promemoria dell\'appuntamento inviato.';
$string['eventappointmentremoved'] = 'Studente disiscritto da uno slot.';
$string['eventappwith:group'] = 'Appuntamento di gruppo';
$string['eventappwith:single'] = 'Appuntamento';
$string['eventnoparticipants'] = 'Nessun partecipante';
$string['eventqueueadded'] = 'Aggiunto alla lista di attesa';
$string['eventqueueremoved'] = 'Rimosso dalla lista di attesa';
$string['eventregistrationsviewed'] = 'Visualizzato il tab delle registrazioni.';
$string['eventslotcreated'] = 'Nuovi slot creati.';
$string['eventslotdeleted'] = 'Slot cancellato.';
$string['eventslotupdated'] = 'Slot aggiornato.';
$string['eventslotviewed'] = 'Slot visualizzati.';
$string['eventteacheranonymous'] = 'un insegnante anonimo';
$string['eventtemplate'] = '{$a->courselink} / {$a->organizerlink}: {$a->appwith} {$a->with} {$a->participants}<br />Luogo: {$a->location}<br />';
$string['eventtemplatecomment'] = 'Commento:<br />{$a}<br />';
$string['eventtemplatewithoutlinks'] = '{$a->coursename} / {$a->organizername}: {$a->appwith} {$a->with} {$a->participants}<br />Luogo: {$a->location}<br />';
$string['eventtitle'] = '{$a->coursename} / {$a->organizername}: {$a->appwith}';
$string['eventwith'] = 'con';
$string['eventwithout'] = 'senza';
$string['exportsettings'] = 'Impostazioni di esportazione';
$string['filtertable'] = 'Filtra questa tabella';
$string['filtertable_help'] = 'Cerca gli slot con stringhe comuni qui.';
$string['finalgrade'] = 'Questo valore è stato impostato nel registro di valutazione e non può essere modificato con l\'organizzatore.';
$string['font_large'] = 'grande';
$string['font_medium'] = 'medio';
$string['font_small'] = 'piccolo';
$string['format'] = 'Formato';
$string['format_csv_comma'] = 'CSV (;)';
$string['format_csv_tab'] = 'CSV (tab)';
$string['format_ods'] = 'ODS';
$string['format_pdf'] = 'PDF';
$string['format_xls'] = 'XLS';
$string['format_xlsx'] = 'XLSX';
$string['fulldatelongtemplate'] = '%A %d. %B %Y';
$string['fulldatetemplate'] = '%a %d.%m.%Y';
$string['fulldatetimelongtemplate'] = '%A %d. %B %Y %H:%M';
$string['fulldatetimetemplate'] = '%a %d.%m.%Y %H:%M';
$string['fullname_template'] = '{$a->firstname} {$a->lastname}';
$string['gap'] = 'Intervallo';
$string['gap_help'] = 'Definisce l\'intervallo tra due appuntamenti.';
$string['grade'] = 'Voto massimo';
$string['grade_help'] = 'Definisce il massimo punteggio che può essere assegnato per ogni appuntamento che può essere valutato.';
$string['gradeaggregationmethod'] = 'Metodo di aggregazione';
$string['gradeaggregationmethod_help'] = 'L\'aggregazione determina come i voti in una categoria vengono combinati, come

* Media dei voti - La somma di tutti i voti divisa per il numero totale di voti
* Voto più basso
* Voto più alto
* Naturale - La somma di tutti i valori dei voti';
$string['grading_desc_grade'] = 'La valutazione è attiva.';
$string['grading_desc_nograde'] = 'La valutazione non è attiva.';
$string['group_registration_notify:student:queue:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, {$a->sendername} ha aggiunto il tuo gruppo {$a->groupname} alla lista di attesa dello slot temporale il {$a->date} alle {$a->time} in {$a->location}.

Sistema di messaggistica di Moodle';
$string['group_registration_notify:student:queue:group:smallmessage'] = '{$a->sendername} ha aggiunto il tuo gruppo {$a->groupname} alla lista di attesa dello slot temporale il {$a->date} alle {$a->time}.';
$string['group_registration_notify:student:queue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo in lista d\'attesa';
$string['group_registration_notify:student:register:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, {$a->sendername} ha registrato il tuo gruppo {$a->groupname} allo slot temporale il {$a->date} alle {$a->time} in {$a->location}.

Sistema di messaggistica di Moodle';
$string['group_registration_notify:student:register:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, {$a->sendername} ha registrato il tuo gruppo {$a->groupname} allo slot temporale il {$a->date} alle {$a->time} in {$a->location}.

Sistema di messaggistica di Moodle';
$string['group_registration_notify:student:register:group:smallmessage'] = '{$a->sendername} ha registrato il tuo gruppo {$a->groupname} allo slot temporale il {$a->date} alle {$a->time}.';
$string['group_registration_notify:student:register:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo registrato';
$string['group_registration_notify:student:register:smallmessage'] = '{$a->sendername} ha registrato il tuo gruppo {$a->groupname} allo slot temporale il {$a->date} alle {$a->time}.';
$string['group_registration_notify:student:register:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo registrato';
$string['group_registration_notify:student:reregister:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, {$a->sendername} ha ri-registrato il tuo gruppo {$a->groupname} in un nuovo slot temporale il {$a->date} alle {$a->time} in {$a->location}.

Sistema di messaggistica di Moodle';
$string['group_registration_notify:student:reregister:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, {$a->sendername} ha ri-registrato il tuo gruppo {$a->groupname} in un nuovo slot temporale il {$a->date} alle {$a->time} in {$a->location}.

Sistema di messaggistica di Moodle';
$string['group_registration_notify:student:reregister:group:smallmessage'] = '{$a->sendername} ha ri-registrato il tuo gruppo {$a->groupname} in un nuovo slot temporale il {$a->date} alle {$a->time}.';
$string['group_registration_notify:student:reregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo ri-registrato';
$string['group_registration_notify:student:reregister:smallmessage'] = '{$a->sendername} ha ri-registrato il tuo gruppo {$a->groupname} in un nuovo slot temporale il {$a->date} alle {$a->time}.';
$string['group_registration_notify:student:reregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo ri-registrato';
$string['group_registration_notify:student:unqueue:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, {$a->sendername} ha rimosso il tuo gruppo {$a->groupname} dalla lista di attesa dello slot temporale il {$a->date} alle {$a->time} in {$a->location}.

Sistema di messaggistica di Moodle';
$string['group_registration_notify:student:unqueue:group:smallmessage'] = '{$a->sendername} ha rimosso il tuo gruppo {$a->groupname} dalla lista di attesa dello slot temporale il {$a->date} alle {$a->time}.';
$string['group_registration_notify:student:unqueue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo rimosso dalla lista di attesa';
$string['group_registration_notify:student:unregister:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, {$a->sendername} ha annullato la registrazione del tuo gruppo {$a->groupname} dallo slot temporale il {$a->date} alle {$a->time} in {$a->location}.

Sistema di messaggistica di Moodle';
$string['group_registration_notify:student:unregister:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, {$a->sendername} ha annullato la registrazione del tuo gruppo {$a->groupname} dallo slot temporale il {$a->date} alle {$a->time} in {$a->location}.

Sistema di messaggistica di Moodle';
$string['group_registration_notify:student:unregister:group:smallmessage'] = '{$a->sendername} ha annullato la registrazione del tuo gruppo {$a->groupname} dallo slot temporale il {$a->date} alle {$a->time}.';
$string['group_registration_notify:student:unregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo annullato';
$string['group_registration_notify:student:unregister:smallmessage'] = '{$a->sendername} ha annullato la registrazione del tuo gruppo {$a->groupname} dallo slot temporale il {$a->date} alle {$a->time}.';
$string['group_registration_notify:student:unregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo annullato';
$string['group_slot_available'] = 'Slot disponibile';
$string['group_slot_full'] = 'Slot occupato';
$string['groupmodeexistingcoursegroups'] = 'Usa gruppi del corso esistenti';
$string['groupmodenogroups'] = 'Nessun appuntamento di gruppo';
$string['groupmodeslotgroups'] = 'Creazione gruppo per slot vuoto';
$string['groupmodeslotgroupsappointment'] = 'Creazione gruppo per slot prenotato';
$string['groupoptions'] = 'Impostazioni gruppo';
$string['grouporganizer_desc_hasgroup'] = 'Questo è un organizzatore di gruppo. Cliccando sul pulsante di registrazione verrai registrato e tutti i membri del tuo gruppo {$a->groupname} a questo slot. Tutti i membri del gruppo possono modificare e commentare la registrazione.';
$string['grouporganizer_desc_novalidgroup'] = 'Questo è un organizzatore di gruppo. Non fai parte di un gruppo incluso in questa istanza dell\'organizzatore!';
$string['grouppicker'] = 'Selettore di gruppo';
$string['groupwarning'] = 'Controlla le opzioni di gruppo qui sotto!';
$string['headerfooter'] = 'Stampa intestazione/piede di pagina';
$string['headerfooter_help'] = 'Stampa intestazione/piede di pagina se selezionato';
$string['hidecalendar'] = 'Nascondi calendario';
$string['hidecalendar_help'] = 'Seleziona per nascondere il calendario in questo organizzatore';
$string['hour'] = 'ora';
$string['hour_pl'] = 'ore';
$string['id'] = 'ID';
$string['img_title_due'] = 'Lo slot è scaduto';
$string['img_title_evaluated'] = 'Lo slot è stato valutato';
$string['img_title_no_participants'] = 'Lo slot non aveva partecipanti';
$string['img_title_past_deadline'] = 'Lo slot è scaduto';
$string['img_title_pending'] = 'Lo slot è in attesa di valutazione';
$string['includetraineringroups'] = 'Includi formatore nei gruppi';
$string['includetraineringroups_help'] = 'Seleziona la casella di controllo per includere non solo i partecipanti allo slot, ma anche i formatori nei gruppi.';
$string['infobox_app_countdown'] = 'Tempo rimasto all\'appuntamento: {$a->days} giorni, {$a->hours} ore, {$a->minutes} minuti, {$a->seconds} secondi';
$string['infobox_app_inprogress'] = 'L\'appuntamento è in corso.';
$string['infobox_app_occured'] = 'L\'appuntamento è già avvenuto.';
$string['infobox_appointmentsstatus_pl'] = '{$a->tooless} prenotazioni sono in scadenza. Ci sono {$a->places} posti liberi in {$a->slots} slot in arrivo.';
$string['infobox_appointmentsstatus_sg'] = '{$a->tooless} prenotazione è in scadenza. C\'è {$a->places} posto libero in {$a->slots} slot in arrivo.';
$string['infobox_counter_slotrows'] = 'slot mostrati.';
$string['infobox_deadline_countdown'] = 'Tempo rimasto alla scadenza: {$a->days} giorni, {$a->hours} ore, {$a->minutes} minuti, {$a->seconds} secondi';
$string['infobox_deadline_passed'] = 'Scadenza per la registrazione scaduta. Non è più possibile modificare le registrazioni.';
$string['infobox_deadline_passed_slot'] = 'xxx slot non possono essere creati perché la scadenza per la registrazione è scaduta.';
$string['infobox_deadline_passed_slotphp'] = '{$a->slots} slot non possono essere creati perché la scadenza per la registrazione è scaduta.';
$string['infobox_deadlines_title'] = 'Scadenze';
$string['infobox_description_title'] = 'Descrizione dell\'organizzatore';
$string['infobox_feedback_title'] = 'Feedback';
$string['infobox_group'] = 'Il mio gruppo: {$a->groupname}';
$string['infobox_link'] = 'Mostra/Nascondi';
$string['infobox_messages_title'] = 'Messaggi di sistema';
$string['infobox_messaging_title'] = '';
$string['infobox_minmax'] = 'Prenotazioni per utente: Minimo {$a->min} - Massimo {$a->max}.';
$string['infobox_mycomments_title'] = 'I miei commenti';
$string['infobox_myslot_noslot'] = 'Non sei registrato in nessuno slot al momento.';
$string['infobox_myslot_title'] = 'I miei slot';
$string['infobox_myslot_userslots_left'] = 'Ti restano {$a->left} prenotazioni.';
$string['infobox_myslot_userslots_left_group'] = 'Al tuo gruppo restano {$a->left} prenotazioni.';
$string['infobox_myslot_userslots_max_reached'] = 'Hai prenotato il massimo di {$a->max} slot.';
$string['infobox_myslot_userslots_max_reached_group'] = 'Il tuo gruppo ha prenotato il massimo di {$a->max} slot.';
$string['infobox_myslot_userslots_min_not_reached'] = 'Non hai ancora prenotato il numero richiesto di {$a->min} slot.';
$string['infobox_myslot_userslots_min_not_reached_group'] = 'Il tuo gruppo non ha ancora prenotato il numero richiesto di {$a->min} slot.';
$string['infobox_myslot_userslots_min_reached'] = 'Hai prenotato con successo il numero richiesto di {$a->min} slot.';
$string['infobox_myslot_userslots_min_reached_group'] = 'Il tuo gruppo ha prenotato il numero richiesto di {$a->min} prenotazioni.';
$string['infobox_myslot_userslots_status'] = '{$a->booked} di {$a->max} slot prenotati.';
$string['infobox_organizer_expired'] = 'Questo organizzatore è scaduto il {$a->date} alle {$a->time}';
$string['infobox_organizer_expires'] = 'Questo organizzatore scadrà il {$a->date} alle {$a->time}.';
$string['infobox_organizer_never_expires'] = 'Questo organizzatore non scade mai.';
$string['infobox_registrationstatistic_title'] = 'Riepilogo';
$string['infobox_showallparticipants'] = 'Mostra tutti i partecipanti';
$string['infobox_showfreeslots'] = 'Solo slot liberi';
$string['infobox_showhiddenslots'] = 'Slot nascosti';
$string['infobox_showmyslotsonly'] = 'Solo i miei slot';
$string['infobox_showregistrationsonly'] = 'Solo slot prenotati';
$string['infobox_showslots'] = 'Anche slot passati';
$string['infobox_slotoverview_title'] = 'Panoramica dello slot';
$string['infobox_slotsviewoptions'] = 'Opzioni di visualizzazione slot';
$string['infobox_slotsviewoptions_help'] = 'Queste opzioni di filtro sono combinate mediante connessioni AND!';
$string['infobox_statistic_maxreached'] = '{$a->maxreached} di {$a->entries} partecipanti hanno prenotato il massimo di {$a->max} slot.';
$string['infobox_statistic_maxreached_group'] = '{$a->maxreached} di {$a->entries} gruppi hanno prenotato il massimo di {$a->max} slot.';
$string['infobox_statistic_minreached'] = '{$a->minreached} di {$a->entries} partecipanti hanno prenotato il numero richiesto di {$a->min} slot.';
$string['infobox_statistic_minreached_group'] = '{$a->minreached} di {$a->entries} gruppi hanno raggiunto il numero richiesto di {$a->min} slot.';
$string['infobox_title'] = 'Infobox';
$string['introeditor_error'] = 'Deve essere fornita una descrizione dell\'organizzatore!';
$string['invalidgrouping'] = 'Devi selezionare un raggruppamento valido!';
$string['inwaitingqueue'] = 'Lista d\'attesa';
$string['isgrouporganizer'] = 'Appuntamenti di gruppo';
$string['isgrouporganizer_help'] = 'Seleziona questa opzione se vuoi che questo organizzatore si occupi dei gruppi invece degli utenti singoli.
\'Utilizza gruppi esistenti\': Un singolo membro del gruppo prenota uno slot per il gruppo.
\'Creazione gruppo per slot vuoto\': Viene creato un gruppo del corso per ogni nuovo slot.
\'Creazione gruppo per slot prenotato\': Viene creato un gruppo del corso per ogni slot prenotato.';
$string['location'] = 'Luogo';
$string['location_help'] = 'Il luogo dove si svolge lo slot.';
$string['locationlink'] = 'Link URL del luogo';
$string['locationlink_help'] = 'Digita qui l\'indirizzo completo del sito web a cui desideri che il link del luogo si riferisca. Questo sito dovrebbe contenere almeno informazioni su come raggiungere il luogo. Si prega di digitare l\'indirizzo completo (incluso http://)';
$string['locationlinkenable'] = 'autolink info del luogo';
$string['locationmandatory'] = 'L\'inserimento del luogo dello slot è obbligatorio';
$string['locationsettings'] = 'Impostazioni del luogo dello slot';
$string['maillink'] = 'L\'organizzatore è disponibile <a href=\'{$a}\'>qui</a>.';
$string['maxparticipants'] = 'Max. partecipanti';
$string['maxparticipants_help'] = 'Definisce il numero massimo di studenti che possono registrarsi a questi slot temporali. Nel caso di un organizzatore di gruppo, questo numero è sempre limitato a uno.';
$string['message_autogenerated2'] = 'Messaggio autogenerato';
$string['message_custommessage'] = 'Messaggio personalizzato';
$string['message_custommessage_help'] = 'Usa questo campo per inserire un testo personale nel messaggio autogenerato.';
$string['message_error_action_notallowed'] = 'Questa azione non è più possibile. Torna indietro e aggiorna il tuo browser!';
$string['message_error_groupsynchronization'] = 'La sincronizzazione del gruppo dello slot è fallita!';
$string['message_error_noactionchosen'] = 'Per favore, scegli un\'azione prima di premere il pulsante Avvia.';
$string['message_error_slot_full_group'] = 'Questo slot è già stato preso!';
$string['message_error_slot_full_single'] = 'Questo slot non ha più posti liberi!';
$string['message_error_unknown_unqueue'] = 'La tua voce in lista d\'attesa non è stata rimossa! Errore sconosciuto.';
$string['message_error_unknown_unregister'] = 'La tua registrazione non è stata rimossa! Errore sconosciuto.';
$string['message_info_appointment_deleted'] = 'L\'appuntamento è stato cancellato. Il partecipante è stato informato.';
$string['message_info_appointment_deleted_group'] = 'Gli appuntamenti di un gruppo sono stati cancellati. I partecipanti sono stati informati.';
$string['message_info_appointment_not_deleted'] = 'Si è verificato un problema durante l\'eliminazione dell\'appuntamento.';
$string['message_info_queued'] = 'Sei stato aggiunto alla lista d\'attesa di uno slot.';
$string['message_info_queued_group'] = 'Il tuo gruppo è stato aggiunto alla lista d\'attesa di uno slot.';
$string['message_info_registered'] = 'Ti sei registrato con successo per uno slot.';
$string['message_info_registered_group'] = 'Il tuo gruppo si è registrato con successo per uno slot.';
$string['message_info_reminders_sent_pl'] = 'Sono stati inviati {$a->count} promemoria.';
$string['message_info_reminders_sent_sg'] = 'È stato inviato 1 promemoria.';
$string['message_info_reregistered'] = 'Ti sei reregistrato con successo per uno slot.';
$string['message_info_reregistered_group'] = 'Il tuo gruppo si è reregistrato con successo per uno slot.';
$string['message_info_slots_added_pl'] = 'Sono stati aggiunti {$a->count} nuovi slot.';
$string['message_info_slots_added_sg'] = 'È stato aggiunto 1 nuovo slot.';
$string['message_info_slots_deleted_pl'] = 'Sono stati eliminati {$a->deleted} slot. {$a->notified} partecipante(i) sono stati informati.';
$string['message_info_slots_deleted_sg'] = 'È stato eliminato 1 slot. {$a->notified} partecipante(i) sono stati informati.';
$string['message_info_slots_edited_pl'] = 'Sono stati modificati {$a->count} slot.';
$string['message_info_slots_edited_sg'] = 'È stato modificato 1 slot.';
$string['message_info_slots_evaluated_pl'] = 'Sono stati valutati {$a->count} slot.';
$string['message_info_slots_evaluated_sg'] = 'È stato valutato 1 slot.';
$string['message_info_unqueued'] = 'Sei stato rimosso dalla lista d\'attesa di uno slot.';
$string['message_info_unqueued_group'] = 'Il tuo gruppo è stato rimosso dalla lista d\'attesa di uno slot.';
$string['message_info_unregistered'] = 'Ti sei disiscritto con successo da uno slot.';
$string['message_info_unregistered_group'] = 'Il tuo gruppo si è disiscritto con successo da uno slot.';
$string['message_warning_no_slots_added'] = 'Nessun nuovo slot è stato aggiunto!';
$string['message_warning_no_slots_selected'] = 'Devi selezionare almeno uno slot prima!';
$string['message_warning_no_visible_slots_selected'] = 'Devi selezionare almeno uno slot VISIBLE prima!';
$string['messageprovider:appointment_reminder_student'] = 'Promemoria appuntamento organizzatore';
$string['messageprovider:appointment_reminder_teacher'] = 'Promemoria appuntamento organizzatore (Docente)';
$string['messageprovider:appointmentdeleted_notify_student'] = 'Appuntamento organizzatore eliminato';
$string['messageprovider:assign_notify_student'] = 'Assegnazione organizzatore da parte dell\'insegnante';
$string['messageprovider:assign_notify_teacher'] = 'Assegnazione organizzatore';
$string['messageprovider:edit_notify_student'] = 'Modifiche organizzatore';
$string['messageprovider:edit_notify_teacher'] = 'Modifiche organizzatore (Docente)';
$string['messageprovider:eval_notify_student'] = 'Notifica valutazione organizzatore';
$string['messageprovider:group_registration_notify_student'] = 'Notifica registrazione gruppo organizzatore';
$string['messageprovider:manual_reminder_student'] = 'Promemoria appuntamento manuale organizzatore';
$string['messageprovider:register_notify_teacher'] = 'Notifica registrazione organizzatore';
$string['messageprovider:register_notify_teacher_queue'] = 'Notifica di messa in coda organizzatore';
$string['messageprovider:register_notify_teacher_register'] = 'Notifica registrazione organizzatore';
$string['messageprovider:register_notify_teacher_reregister'] = 'Notifica riregistrazione organizzatore';
$string['messageprovider:register_notify_teacher_unqueue'] = 'Notifica di rimozione dalla coda organizzatore';
$string['messageprovider:register_notify_teacher_unregister'] = 'Notifica di cancellazione organizzatore';
$string['messageprovider:register_promotion_student'] = 'Notifica promozione da coda organizzatore';
$string['messageprovider:register_reminder_student'] = 'Promemoria registrazione organizzatore';
$string['messageprovider:slotdeleted_notify_student'] = 'Slot organizzatore cancellati';
$string['messageprovider:test'] = 'Messaggio di prova organizzatore';
$string['messages_all'] = 'Tutte le notifiche di registrazione, riregistrazione e cancellazione';
$string['messages_none'] = 'Nessuna notifica di registrazione';
$string['messages_re_unreg'] = 'Solo riregistrazioni e cancellazioni';
$string['min'] = 'min';
$string['min_pl'] = 'min';
$string['modformwarningplural'] = 'Questi campi non possono essere modificati in quanto sono già stati effettuati appuntamenti in questo organizzatore!';
$string['modformwarningsingular'] = 'Questo campo non può essere modificato in quanto sono già stati effettuati appuntamenti in questo organizzatore!';
$string['modulename'] = 'Organizzatore';
$string['modulename_help'] = 'Gli organizzatori consentono agli insegnanti di fare appuntamenti con gli studenti creando slot temporali a cui gli studenti possono registrarsi.';
$string['modulenameplural'] = 'Organizzatori';
$string['monthlyview'] = 'Vista mensile';
$string['multimember'] = 'Gli utenti non possono appartenere a più gruppi all\'interno dello stesso raggruppamento!';
$string['multimemberspecific'] = 'L\'utente {$a->username} {$a->idnumber} è registrato in più di un gruppo! ({$a->groups})';
$string['multipleappointmentenddate'] = 'Data di fine';
$string['multipleappointmentstartdate'] = 'Data di inizio';
$string['mymoodle_app_slot'] = 'Appuntamento il {$a->date} alle {$a->time}';
$string['mymoodle_attended'] = '{$a->attended}/{$a->total} studenti hanno completato un appuntamento';
$string['mymoodle_attended_group'] = '{$a->attended}/{$a->total} gruppi hanno completato un appuntamento';
$string['mymoodle_attended_group_short'] = '{$a->attended} di {$a->total} gruppi hanno partecipato ad almeno un appuntamento';
$string['mymoodle_attended_short'] = '{$a->attended} di {$a->total} partecipanti hanno partecipato ad almeno un appuntamento';
$string['mymoodle_completed_app'] = 'Hai completato il tuo appuntamento il {$a->date} alle {$a->time}';
$string['mymoodle_completed_app_group'] = 'Il tuo gruppo {$a->groupname} ha partecipato all\'appuntamento il {$a->date} alle {$a->time}';
$string['mymoodle_missed_app'] = 'Non hai partecipato all\'appuntamento il {$a->date} alle {$a->time}';
$string['mymoodle_missed_app_group'] = 'Il tuo gruppo {$a->groupname} non ha partecipato all\'appuntamento il {$a->date} alle {$a->time}';
$string['mymoodle_next_slot'] = 'Prossimo slot il {$a->date} alle {$a->time}';
$string['mymoodle_no_reg_slot'] = 'Hai prenotato {a->booked} slot temporali e non hai raggiunto il minimo di {a->slotsmin} slot temporali.';
$string['mymoodle_no_reg_slot_group'] = 'Il tuo gruppo {$a->groupname} ha prenotato {a->booked} slot temporali e non ha raggiunto il minimo di {a->slotsmin} slot temporali.';
$string['mymoodle_no_slots'] = 'Nessuno slot futuro';
$string['mymoodle_organizer_expired'] = 'Questo organizzatore è scaduto il {$a->date} alle {$a->time}. Non è più possibile utilizzarlo';
$string['mymoodle_organizer_expires'] = 'Questo organizzatore scade il {$a->date} alle {$a->time}';
$string['mymoodle_pending_app'] = 'Il tuo appuntamento è in attesa di valutazione';
$string['mymoodle_pending_app_group'] = 'L\'appuntamento del tuo gruppo {$a->groupname} è in attesa di valutazione';
$string['mymoodle_reg_slot'] = 'Hai prenotato {a->booked} slot temporali e hai quindi raggiunto il minimo di {a->slotsmin} prenotazioni.';
$string['mymoodle_reg_slot_group'] = 'Il tuo gruppo {$a->groupname} ha prenotato {a->booked} slot temporali e ha quindi raggiunto il minimo di {a->slotsmin} prenotazioni.';
$string['mymoodle_registered'] = '{$a->registered}/{$a->total} studenti hanno prenotato un appuntamento';
$string['mymoodle_registered_group'] = '{$a->registered}/{$a->total} gruppi hanno prenotato un appuntamento';
$string['mymoodle_registered_group_short'] = '{$a->registered} di {$a->total} gruppi hanno prenotato il minimo di {a->slotsmin} slot';
$string['mymoodle_registered_short'] = '{$a->registered} di {$a->total} partecipanti hanno prenotato il minimo di {a->slotsmin} slot';
$string['mymoodle_upcoming_app'] = 'Il tuo appuntamento avrà luogo il {$a->date} alle {$a->time} presso {$a->location}';
$string['mymoodle_upcoming_app_group'] = 'L\'appuntamento del tuo gruppo, {$a->groupname}, avrà luogo il {$a->date} alle {$a->time} presso {$a->location}';
$string['newslot'] = 'Aggiungi più slot';
$string['no_due_my_slots'] = 'Tutti i tuoi slot temporali in questo organizzatore sono scaduti e/o nascosti';
$string['no_due_slots'] = 'Tutti gli slot temporali creati in questo organizzatore sono scaduti';
$string['no_my_slots'] = 'Non hai slot creati in questo organizzatore';
$string['no_slots'] = 'Non ci sono slot temporali creati in questo organizzatore';
$string['no_slots_defined'] = 'Al momento non ci sono slot disponibili.';
$string['no_slots_defined_teacher'] = 'Al momento non ci sono slot presenti. Clicca <a href=\'{$a->link}\'>qui</a> per crearne subito.';
$string['nocalendareventslotcreation'] = 'Nessun evento del calendario per gli slot vuoti';
$string['nocalendareventslotcreation_help'] = 'Se selezioni questa opzione, non verranno creati eventi del calendario durante la creazione degli slot. Solo gli appuntamenti creeranno eventi del calendario.';
$string['nofreeslots'] = 'Nessuno slot libero disponibile.';
$string['nogroup'] = 'Nessun gruppo';
$string['noparticipants'] = 'Nessun partecipante';
$string['norightpage'] = 'Non hai il permesso di visualizzare questa pagina.';
$string['nosingleslotprintfields'] = 'La stampa non è possibile. Non sono stati definiti campi utente. Consulta le impostazioni dell\'organizzatore.';
$string['noslots'] = 'Nessuno slot per ';
$string['noslotsselected'] = 'Nessuno slot selezionato!';
$string['notificationtime'] = 'Promemoria relativo all\'appuntamento';
$string['notificationtime_help'] = 'Definisce quanto tempo prima dell\'appuntamento registrato lo studente dovrebbe ricevere un promemoria.';
$string['novalidparticipants'] = 'Nessun partecipante valido';
$string['numentries'] = 'Voci visualizzate per pagina';
$string['numentries_help'] = 'Scegli \'ottimale\' per ottimizzare la distribuzione delle voci elencate in base alla dimensione del testo scelto e all\'orientamento della pagina, se ci sono molti partecipanti registrati nel tuo corso';
$string['organizer'] = 'Organizzatore';
$string['organizer:addinstance'] = 'Aggiungi un nuovo organizzatore';
$string['organizer:addslots'] = 'Aggiungi nuovi slot temporali';
$string['organizer:assignslots'] = 'Assegna uno slot temporale a uno studente';
$string['organizer:comment'] = 'Aggiungi commenti';
$string['organizer:deleteslots'] = 'Elimina slot temporali esistenti';
$string['organizer:editslots'] = 'Modifica slot temporali esistenti';
$string['organizer:evalslots'] = 'Valuta gli slot temporali completati';
$string['organizer:leadslots'] = 'Guida gli slot temporali';
$string['organizer:printslots'] = 'Stampa gli slot temporali esistenti';
$string['organizer:receivemessagesstudent'] = 'Ricevi messaggi come inviato agli studenti';
$string['organizer:receivemessagesteacher'] = 'Ricevi messaggi come inviato agli insegnanti';
$string['organizer:register'] = 'Registrati per uno slot temporale';
$string['organizer:sendreminders'] = 'Invia promemoria di registrazione agli studenti';
$string['organizer:unregister'] = 'Annulla la registrazione per uno slot temporale';
$string['organizer:viewallslots'] = 'Visualizza tutti gli slot temporali come insegnante';
$string['organizer:viewmyslots'] = 'Visualizza i propri slot temporali come insegnante';
$string['organizer:viewregistrations'] = 'Visualizza lo stato delle registrazioni degli studenti';
$string['organizer:viewstudentview'] = 'Visualizza tutti gli slot temporali come studente';
$string['organizer_remind_all_no_recepients'] = 'Non ci sono destinatari validi.';
$string['organizer_remind_all_recepients_pl'] = 'Un totale di {$a->count} messaggi verranno inviati ai seguenti destinatari:';
$string['organizer_remind_all_recepients_sg'] = 'Un totale di {$a->count} messaggio verrà inviato ai seguenti destinatari:';
$string['organizer_remind_all_title'] = 'Invia promemoria';
$string['organizercommon'] = 'Impostazioni organizzatore';
$string['organizername'] = 'Nome dell\'organizzatore';
$string['orientationlandscape'] = 'paesaggio';
$string['orientationportrait'] = 'ritratto';
$string['otherheader'] = 'Altro';
$string['pageorientation'] = 'Orientamento della pagina';
$string['participants'] = 'Partecipante(i)';
$string['participants_help'] = 'Elenco dei partecipanti che hanno prenotato questo slot.';
$string['pasttimeslotstring'] = 'xxx slot non potevano essere creati perché la creazione di slot temporali passati non è consentita.';
$string['pasttimeslotstringphp'] = '{$a->slots} slot non potevano essere creati perché la creazione di slot temporali passati non è consentita.';
$string['pdf_notactive'] = 'non attivo';
$string['pdfsettings'] = 'Impostazioni PDF';
$string['places_inqueue'] = '{$a->inqueue} in lista d\'attesa';
$string['places_inqueue_withposition'] = '{$a->queueposition}. posizione in lista d\'attesa';
$string['places_taken_pl'] = '{$a->numtakenplaces}/{$a->totalplaces} posti occupati';
$string['places_taken_sg'] = '{$a->numtakenplaces}/{$a->totalplaces} posto occupato';
$string['pluginadministration'] = 'Amministrazione organizzatore';
$string['pluginname'] = 'Organizzatore';
$string['position'] = 'Posizione in coda';
$string['print_return'] = 'Ritorna alla panoramica degli slot';
$string['printout'] = 'Stampa';
$string['printpreview'] = 'Anteprima di stampa (prime 10 voci)';
$string['printslotuserfieldsnotenabled'] = 'La funzione Campi utente dello slot da stampare non è abilitata dall\'amministratore.';
$string['printsubmit'] = 'Visualizza tabella stampabile';
$string['privacy:metadata:applicantidappointment'] = 'Identificativo dell\'utente che ha prenotato questo slot per il gruppo.';
$string['privacy:metadata:applicantidqueue'] = 'Identificativo dell\'utente che ha inserito questa voce nella lista d\'attesa per il gruppo.';
$string['privacy:metadata:attended'] = 'Se l\'utente o il gruppo ha partecipato allo slot.';
$string['privacy:metadata:comments'] = 'Commenti dell\'istruttore per questo slot.';
$string['privacy:metadata:feedback'] = 'Feedback dell\'istruttore al momento della valutazione dello slot.';
$string['privacy:metadata:grade'] = 'Voto ottenuto dall\'utente o dal gruppo per questo slot.';
$string['privacy:metadata:groupidappointment'] = 'Identificativo del gruppo utente che ha prenotato questo slot.';
$string['privacy:metadata:groupidqueue'] = 'Identificativo del gruppo che ha inserito questa voce nella lista d\'attesa per uno slot.';
$string['privacy:metadata:organizerslotappointments'] = 'Tabella in cui vengono memorizzate le prenotazioni degli slot.';
$string['privacy:metadata:organizerslotqueues'] = 'Tabella in cui vengono memorizzate le voci in lista d\'attesa per gli slot.';
$string['privacy:metadata:organizerslottrainer'] = 'Tabella in cui vengono memorizzati gli istruttori di uno slot.';
$string['privacy:metadata:showfreeslotsonly'] = 'Preferenza dell\'utente: la tabella degli slot deve mostrare solo gli slot liberi.';
$string['privacy:metadata:showhiddenslots'] = 'Preferenza dell\'utente: la tabella degli slot deve mostrare gli slot nascosti.';
$string['privacy:metadata:showmyslotsonly'] = 'Preferenza dell\'utente: la tabella degli slot deve mostrare solo i miei slot.';
$string['privacy:metadata:showpasttimeslots'] = 'Preferenza dell\'utente: la tabella degli slot deve mostrare anche gli slot passati.';
$string['privacy:metadata:showregistrationsonly'] = 'Preferenza dell\'utente: la tabella degli slot deve mostrare solo le registrazioni.';
$string['privacy:metadata:teacherapplicantid'] = 'Identificativo dell\'istruttore che ha assegnato questo slot a un partecipante o a un gruppo.';
$string['privacy:metadata:teacherapplicanttimemodified'] = 'Ora in cui un istruttore ha assegnato questo slot a un partecipante o a un gruppo.';
$string['privacy:metadata:trainerid'] = 'Identificativo di un istruttore di uno slot.';
$string['privacy:metadata:useridappointment'] = 'Identificativo dell\'utente che ha prenotato questo slot.';
$string['privacy:metadata:useridqueue'] = 'Identificativo dell\'utente che ha inserito questa voce nella lista d\'attesa per uno slot.';
$string['queue'] = 'Code di attesa';
$string['queue_help'] = 'Le code di attesa consentono agli utenti di registrarsi per uno slot temporale anche se il numero massimo di partecipanti è già stato raggiunto. Gli utenti vengono aggiunti a una lista d\'attesa e assegnati allo slot (in ordine) non appena diventa disponibile.';
$string['recipientname'] = '<nome del destinatario>';
$string['reg_not_occured'] = 'Questo slot non è ancora avvenuto';
$string['reg_status'] = 'Stato della registrazione';
$string['reg_status_not_registered'] = 'Non registrato';
$string['reg_status_organizer_expired'] = 'Organizzatore scaduto';
$string['reg_status_registered'] = 'Registrato';
$string['reg_status_slot_attended'] = 'Partecipato';
$string['reg_status_slot_available'] = 'Slot disponibile';
$string['reg_status_slot_expired'] = 'Slot scaduto';
$string['reg_status_slot_full'] = 'Slot pieno';
$string['reg_status_slot_not_attended'] = 'Non ha partecipato';
$string['reg_status_slot_past_deadline'] = 'Scaduto il termine per lo slot';
$string['reg_status_slot_pending'] = 'In attesa di valutazione';
$string['register_notify_teacher:queue:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, lo studente {$a->sendername} è in coda per lo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di messaggistica Moodle';
$string['register_notify_teacher:queue:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, lo studente {$a->sendername} ha messo in lista d\'attesa il gruppo {$a->groupname} per lo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di messaggistica Moodle';
$string['register_notify_teacher:queue:group:smallmessage'] = 'Lo studente {$a->sendername} ha messo in lista d\'attesa il gruppo {$a->groupname} per lo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.';
$string['register_notify_teacher:queue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo in lista d\'attesa';
$string['register_notify_teacher:queue:smallmessage'] = 'Lo studente {$a->sendername} è in coda per lo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.';
$string['register_notify_teacher:queue:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Studente in coda';
$string['register_notify_teacher:register:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, lo studente {$a->sendername} si è registrato per lo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di messaggistica Moodle';
$string['register_notify_teacher:register:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, lo studente {$a->sendername} ha registrato il gruppo {$a->groupname} per lo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di messaggistica Moodle';
$string['register_notify_teacher:register:group:smallmessage'] = 'Lo studente {$a->sendername} ha registrato il gruppo {$a->groupname} per lo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.';
$string['register_notify_teacher:register:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo registrato';
$string['register_notify_teacher:register:smallmessage'] = 'Lo studente {$a->sendername} si è registrato per lo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.';
$string['register_notify_teacher:register:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Studente registrato';
$string['register_notify_teacher:reregister:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, lo studente {$a->sendername} si è ri-registrato per il nuovo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di messaggistica Moodle';
$string['register_notify_teacher:reregister:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, lo studente {$a->sendername} ha ri-registrato il gruppo {$a->groupname} per il nuovo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di messaggistica Moodle';
$string['register_notify_teacher:reregister:group:smallmessage'] = 'Lo studente {$a->sendername} ha ri-registrato il gruppo {$a->groupname} per lo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.';
$string['register_notify_teacher:reregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo ri-registrato';
$string['register_notify_teacher:reregister:smallmessage'] = 'Lo studente {$a->sendername} si è ri-registrato per lo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.';
$string['register_notify_teacher:reregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Studente ri-registrato';
$string['register_notify_teacher:unqueue:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, lo studente {$a->sendername} si è tolto dalla lista d\'attesa dello slot temporale il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di messaggistica Moodle';
$string['register_notify_teacher:unqueue:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, lo studente {$a->sendername} ha rimosso il gruppo {$a->groupname} dalla lista d\'attesa dello slot temporale il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di messaggistica Moodle';
$string['register_notify_teacher:unqueue:group:smallmessage'] = 'Lo studente {$a->sendername} ha rimosso il gruppo {$a->groupname} dalla lista d\'attesa dello slot temporale il {$a->date} alle {$a->time} presso {$a->location}.';
$string['register_notify_teacher:unqueue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo rimosso dalla lista d\'attesa';
$string['register_notify_teacher:unqueue:smallmessage'] = 'Lo studente {$a->sendername} si è tolto dalla lista d\'attesa dello slot temporale il {$a->date} alle {$a->time} presso {$a->location}.';
$string['register_notify_teacher:unqueue:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Studente rimosso dalla lista d\'attesa';
$string['register_notify_teacher:unregister:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, lo studente {$a->sendername} si è disiscritto dallo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di messaggistica Moodle';
$string['register_notify_teacher:unregister:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, lo studente {$a->sendername} ha disiscritto il gruppo {$a->groupname} dallo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.

Sistema di messaggistica Moodle';
$string['register_notify_teacher:unregister:group:smallmessage'] = 'Lo studente {$a->sendername} ha disiscritto il gruppo {$a->groupname} dallo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.';
$string['register_notify_teacher:unregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Gruppo disiscritto';
$string['register_notify_teacher:unregister:smallmessage'] = 'Lo studente {$a->sendername} si è disiscritto dallo slot temporale il {$a->date} alle {$a->time} presso {$a->location}.';
$string['register_notify_teacher:unregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Studente disiscritto';
$string['register_promotion_student:fullmessage'] = 'La tua registrazione per uno slot temporale è stata promossa dallo stato \'lista d\'attesa\' allo stato \'prenotato\'.';
$string['register_promotion_student:smallmessage'] = 'La tua registrazione per uno slot temporale è stata promossa dallo stato \'lista d\'attesa\' allo stato \'prenotato\'.';
$string['register_promotion_student:subject'] = 'Organizzatore Moodle: Promosso dalla lista d\'attesa';
$string['register_promotion_student:group:fullmessage'] = 'La registrazione del tuo gruppo per uno slot temporale è stata promossa dallo stato \'lista d\'attesa\' allo stato \'prenotato\'.';
$string['register_promotion_student:group:smallmessage'] = 'La registrazione del tuo gruppo per uno slot temporale è stata promossa dallo stato \'lista d\'attesa\' allo stato \'prenotato\'.';
$string['register_promotion_student:group:subject'] = 'Organizzatore Moodle: Gruppo promosso dalla lista d\'attesa';
$string['register_reminder_student:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, non ti sei ancora registrato per il numero richiesto di slot temporali.

{$a->custommessage}

Sistema di messaggistica Moodle';
$string['register_reminder_student:group:fullmessage'] = 'Ciao {$a->receivername}!

Come parte del corso {$a->courseid} {$a->coursefullname}, il tuo gruppo {$a->groupname} non ha ancora registrato la quantità richiesta di slot temporali.

{$a->custommessage}

Sistema di Messaggistica Moodle';
$string['register_reminder_student:group:smallmessage'] = 'Si prega di registrare il tuo gruppo al numero richiesto di slot temporali.';
$string['register_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Promemoria di registrazione';
$string['register_reminder_student:smallmessage'] = 'Si prega di registrarsi al numero richiesto di slot temporali.';
$string['register_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Promemoria di registrazione';
$string['relative_deadline_before'] = 'prima dell\'appuntamento';
$string['relative_deadline_now'] = 'A partire da adesso';
$string['relativedeadline'] = 'Scadenza relativa';
$string['relativedeadline_help'] = 'Imposta la scadenza per l\'applicazione per uno slot specifico prima del tempo specificato. Gli studenti non saranno in grado di modificare la registrazione o disiscriversi una volta che la scadenza sarà scaduta.';
$string['remindall_desc'] = 'Invia promemoria a tutti i partecipanti senza un appuntamento';
$string['remindallmultiple_desc'] = 'Invia promemoria a tutti i partecipanti senza abbastanza appuntamenti';
$string['requiremodintro'] = 'Richiedi descrizione dell\'attività';
$string['reset_organizer_all'] = 'Elimina slot, appuntamenti ed eventi correlati';
$string['resetorganizerall'] = 'Cancella tutti i dati dell\'organizzatore (slot e appuntamenti)';
$string['reviewsubmit'] = 'Rivedi slot temporali';
$string['rewievslotsheader'] = 'Rivedi slot temporali';
$string['search:activity'] = 'Organizzatore - informazioni sull\'attività';
$string['searchfilter'] = 'Cerca / Filtra';
$string['sec'] = 'secondo';
$string['sec_pl'] = 'secondi';
$string['select'] = 'Seleziona slot';
$string['select_all_slots'] = 'Seleziona tutti gli slot visibili';
$string['select_help'] = 'Seleziona uno o più slot con cui desideri lavorare.';
$string['selectedgrouplist'] = 'Gruppi selezionati';
$string['selectedslots'] = 'Slot selezionati';
$string['showmore'] = 'Mostra altro';
$string['signature'] = 'Firma';
$string['singleslotcommands'] = 'Azione slot singolo';
$string['singleslotcommands_help'] = 'Fai clic su un pulsante di azione per lavorare direttamente su uno slot.';
$string['singleslotprintfield'] = 'Stampa campo utente dello slot';
$string['singleslotprintfield0'] = 'Stampa campo utente dello slot';
$string['singleslotprintfield0_help'] = 'Questi campi utente vengono utilizzati per ogni partecipante quando viene stampato un singolo slot.';
$string['singleslotprintfields'] = 'Campi profilo utente stampa singolo slot';
$string['singleslotprintfields_help'] = 'TESTO FINTO - deve essere modificato con maggiori informazioni sui campi del profilo e su come sono controllati da una impostazione amministrativa';
$string['slot'] = 'Appuntamento';
$string['slot_anonymous'] = 'Slot anonimo';
$string['slot_slotvisible'] = 'Membri visibili solo se proprio slot';
$string['slot_visible'] = 'Membri dello slot sempre visibili';
$string['slotassignedby'] = 'Slot assegnato da';
$string['slotdeleted_notify_student:fullmessage'] = 'Ciao {$a->receivername}!

Il tuo appuntamento nel corso {$a->courseshortname} il {$a->date} alle {$a->time} in {$a->location} è stato cancellato.';
$string['slotdeleted_notify_student:group:fullmessage'] = 'Ciao {$a->receivername}!

Il tuo appuntamento nel corso {$a->courseshortname} il {$a->date} alle {$a->time} in {$a->location} è stato cancellato.';
$string['slotdeleted_notify_student:group:smallmessage'] = 'Il tuo appuntamento il {$a->date} alle {$a->time} nell\'organizzatore \'{$a->organizername}\' è stato cancellato.';
$string['slotdeleted_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Appuntamento cancellato';
$string['slotdeleted_notify_student:smallmessage'] = 'Il tuo appuntamento il {$a->date} alle {$a->time} nell\'organizzatore \'{$a->organizername}\' è stato cancellato.';
$string['slotdeleted_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Appuntamento cancellato';
$string['slotdetails'] = 'Dettagli dello slot';
$string['slotfrom'] = 'da';
$string['slotlistempty'] = 'Nessuno slot trovato.';
$string['slotoptionstable'] = '\'Estensione di questa tabella\'';
$string['slotoptionstable_help'] = 'Mostra anche gli slot passati o nascosti.';
$string['slotperiodendtime'] = 'Data di fine';
$string['slotperiodheader'] = 'Genera slot per intervallo di date';
$string['slotperiodheader_help'] = 'Specifica la data di inizio e di fine a cui si applicheranno i frame temporali giornalieri (sezione sottostante). Specifica qui anche se lo slot deve essere visibile agli studenti.';
$string['slotperiodstarttime'] = 'Data di inizio';
$string['slottimeframesheader'] = 'Frame temporali specifici';
$string['slottimeframesheader_help'] = 'Questa sezione consente la definizione basata sul giorno della settimana di frame temporali che verranno riempiti con slot di appuntamento con proprietà specificate sopra. Può esserci più di un frame temporale al giorno. Se viene selezionato un frame temporale il lunedì, verranno generati slot temporali per ogni lunedì tra la data di inizio e la data di fine (inclusa).';
$string['slotto'] = 'a';
$string['status'] = 'Dettagli dello stato';
$string['status_help'] = 'Stato attuale di questo slot.';
$string['status_no_entries'] = 'Questo organizzatore non ha studenti registrati.';
$string['stroptimal'] = 'ottimale';
$string['studentcomment_title'] = 'Commenti degli studenti';
$string['taballapp'] = 'Appuntamenti';
$string['tabstatus'] = 'Stato della registrazione';
$string['tabstud'] = 'Vista studente';
$string['teacher'] = 'Insegnante';
$string['teacher_help'] = 'Elenco degli insegnanti di questo slot.';
$string['teacher_unchanged'] = '-- invariato --';
$string['teachercomment_title'] = 'Commenti dell\'insegnante';
$string['teacherfeedback_title'] = 'Feedback dell\'insegnante';
$string['teacherid'] = 'Insegnante';
$string['teacherid_help'] = 'Seleziona l\'insegnante che vuoi guidare gli appuntamenti';
$string['teacherinvisible'] = 'Insegnante invisibile';
$string['teachervisible'] = 'Insegnante visibile';
$string['teachervisible_help'] = 'Seleziona questa opzione se vuoi permettere agli studenti di vedere l\'insegnante associato allo slot temporale.';
$string['textsize'] = 'Dimensione del testo';
$string['th_actions'] = 'Azione';
$string['th_appdetails'] = 'Dettagli';
$string['th_attended'] = 'Pres.';
$string['th_bookings'] = 'Prenotazioni totali';
$string['th_comments'] = 'Commento del partecipante';
$string['th_datetime'] = 'Data & ora';
$string['th_datetimedeadline'] = 'Data & ora';
$string['th_details'] = 'Stato';
$string['th_duration'] = 'Durata';
$string['th_email'] = 'Email';
$string['th_evaluated'] = 'Valut.';
$string['th_feedback'] = 'Feedback';
$string['th_firstname'] = 'Nome';
$string['th_grade'] = 'Voto';
$string['th_group'] = 'Gruppo';
$string['th_groupname'] = 'Gruppo';
$string['th_idnumber'] = 'Numero di matricola';
$string['th_lastname'] = 'Cognome';
$string['th_location'] = 'Posizione';
$string['th_participant'] = 'Partecipante';
$string['th_participants'] = 'Partecipanti';
$string['th_status'] = 'Stato';
$string['th_teacher'] = 'Insegnante';
$string['th_teachercomments'] = 'Commenti dell\'insegnante';
$string['timeshift'] = 'Spostamento della scadenza assoluta';
$string['timeslot'] = 'Slot Organizzatore';
$string['timetemplate'] = '%H:%M';
$string['title_add'] = 'Aggiungi nuovi slot di appuntamento';
$string['title_comment'] = 'Modifica i tuoi commenti';
$string['title_delete'] = 'Elimina gli slot temporali selezionati';
$string['title_delete_appointment'] = 'Elimina l\'appuntamento assegnato';
$string['title_edit'] = 'Modifica gli slot temporali selezionati';
$string['title_eval'] = 'Valuta gli slot temporali selezionati';
$string['title_print'] = 'Stampa gli slot';
$string['totalday'] = 'xxx slot per yyy persone';
$string['totalday_groups'] = 'xxx slot per yyy gruppi';
$string['totalslots'] = 'da {$a->starttime} a {$a->endtime}, {$a->duration} ogni {$a->unit}, {$a->totalslots} slot in totale';
$string['totaltotal'] = 'Totale: xxx slot per yyy persone';
$string['totaltotal_groups'] = 'Totale: xxx slot per yyy gruppi';
$string['trainer'] = 'Allenatore';
$string['trainerid'] = 'Insegnante';
$string['trainerid_help'] = 'Seleziona l\'insegnante che vuoi guidare gli appuntamenti';
$string['unavailableslot'] = 'Questo slot è disponibile da';
$string['unknown'] = 'Sconosciuto';
$string['userslots_mingreatermax'] = 'Il numero minimo di slot per utente è maggiore del massimo.';
$string['userslotsmax'] = 'Massimo di slot per partecipante o gruppo';
$string['userslotsmax_help'] = 'Numero massimo di slot che un partecipante o un gruppo può prenotare.';
$string['userslotsmin'] = 'Minimo di slot per partecipante o gruppo';
$string['userslotsmin_help'] = 'Numero minimo di slot che un partecipante o un gruppo deve prenotare.';
$string['visibility'] = 'Visibilità dei membri - preimpostazione';
$string['visibility_all'] = 'Visibile';
$string['visibility_anonymous'] = 'Anonimo';
$string['visibility_help'] = 'Definizione dell\'opzione di visibilità predefinita con cui verrà creato un nuovo slot.<br/><b>Anonimo:</b> I membri di questo slot sono sempre invisibili a tutti.<br/><b>Visibile:</b> Tutti i membri di questo slot sono sempre visibili a tutti.<br/><b>Visibile solo ai membri dello slot:</b> Solo i membri dello slot possono vedere gli altri.';
$string['visibility_slot'] = 'Visibile solo ai membri dello slot';
$string['visible'] = 'Slot visibile';
$string['waitinglists_desc_active'] = 'Le liste d\'attesa sono attivate.';
$string['waitinglists_desc_notactive'] = 'Le liste d\'attesa non sono attivate.';
$string['warning_groupingid'] = 'Modalità gruppo abilitata. Devi selezionare un raggruppamento valido.';
$string['warninggroupmode'] = 'Devi abilitare la modalità gruppo e selezionare un raggruppamento per creare un organizzatore di gruppo!';
$string['warningtext1'] = 'Gli slot selezionati contengono valori diversi in questo campo!';
$string['warningtext2'] = 'ATTENZIONE! Il contenuto di questo campo è stato modificato!';
$string['weekdaylabel'] = 'Slot del giorno della settimana';
$string['with'] = 'con';