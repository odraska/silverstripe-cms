<?php

/**
 * Bosnian (Bosnia and Herzegovina) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('bs_BA', $lang) && is_array($lang['bs_BA'])) {
	$lang['bs_BA'] = array_merge($lang['en_US'], $lang['bs_BA']);
} else {
	$lang['bs_BA'] = $lang['en_US'];
}

$lang['bs_BA']['AssetAdmin']['CHOOSEFILE'] = 'Izaberite datoteku';
$lang['bs_BA']['AssetAdmin']['DELETEDX'] = 'Izbrisano %s datoteka.%s';
$lang['bs_BA']['AssetAdmin']['FILESREADY'] = 'Datoteke spremne za postavljanje na server:';
$lang['bs_BA']['AssetAdmin']['FOLDERDELETED'] = 'izbrisan direktorij.';
$lang['bs_BA']['AssetAdmin']['FOLDERSDELETED'] = 'Izbrisanih direktorija.';
$lang['bs_BA']['AssetAdmin']['MENUTITLE'] = 'Datoteke i slike';
$lang['bs_BA']['AssetAdmin']['MOVEDX'] = 'Premješteno %s datoteka';
$lang['bs_BA']['AssetAdmin']['NEWFOLDER'] = 'NoviDirektorij';
$lang['bs_BA']['AssetAdmin']['NOTEMP'] = 'Ne postoji privremeni direktorij za postavljanje datoteka. Molimo, postavite upload_tmp_dir u datoteci php.ini.';
$lang['bs_BA']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Nema datoteka za postavljanje server';
$lang['bs_BA']['AssetAdmin']['NOWBROKEN'] = 'Slijedeće stranice trenutno imaju neispravne linkove:';
$lang['bs_BA']['AssetAdmin']['NOWBROKEN2'] = 'Njihovi vlasnici su obaviješteni nakon čega će oni popraviti navedene stranice.';
$lang['bs_BA']['AssetAdmin']['SAVEDFILE'] = 'Snimljena datoteka %s';
$lang['bs_BA']['AssetAdmin']['SAVEFOLDERNAME'] = 'Snimi ime direktorija';
$lang['bs_BA']['AssetAdmin']['THUMBSDELETED'] = 'Sve neiskorištene umanjene slike su izbrisane';
$lang['bs_BA']['AssetAdmin']['UPLOAD'] = 'Datoteke prikazane ispod postavi na server';
$lang['bs_BA']['AssetAdmin']['UPLOADEDX'] = 'Postavljeno %s datoteka';
$lang['bs_BA']['AssetAdmin_left.ss']['CREATE'] = 'Kreiraj';
$lang['bs_BA']['AssetAdmin_left.ss']['DELETE'] = 'Izbriši';
$lang['bs_BA']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Izbriši izabrane direktorije';
$lang['bs_BA']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Dozvoli raspoređivanje prevlačenjem';
$lang['bs_BA']['AssetAdmin_left.ss']['FOLDERS'] = 'Direktoriji';
$lang['bs_BA']['AssetAdmin_left.ss']['GO'] = 'Idi';
$lang['bs_BA']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Izaberite direktorije koje želite izbrisati i kliknite na tipku ispod';
$lang['bs_BA']['AssetAdmin_left.ss']['TOREORG'] = 'Da biste organizovali Vaše direktorije, prevucite ih na željeno mjesto.';
$lang['bs_BA']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Molimo, izaberite stranicu sa lijeve strane.';
$lang['bs_BA']['AssetAdmin_right.ss']['WELCOME'] = 'Dobrodošli u';
$lang['bs_BA']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Nemate dozvolu da postavljate datoteke u ovaj direktorij.';
$lang['bs_BA']['AssetTableField']['CREATED'] = 'Prvo postavljeno';
$lang['bs_BA']['AssetTableField']['DIM'] = 'Dimenzije';
$lang['bs_BA']['AssetTableField']['FILENAME'] = 'Ime datoteke';
$lang['bs_BA']['AssetTableField']['IMAGE'] = 'Slika';
$lang['bs_BA']['AssetTableField']['LASTEDIT'] = 'Zadnja promjena';
$lang['bs_BA']['AssetTableField']['MAIN'] = 'Glavno';
$lang['bs_BA']['AssetTableField']['NOLINKS'] = 'Ova datoteka nije vezana za nijednu stranicu.';
$lang['bs_BA']['AssetTableField']['OWNER'] = 'Vlasnik';
$lang['bs_BA']['AssetTableField']['PAGESLINKING'] = 'Slijedeće stranice su vezane za ovu datoteku:';
$lang['bs_BA']['AssetTableField']['SIZE'] = 'Veličina';
$lang['bs_BA']['AssetTableField.ss']['DELFILE'] = 'Izbriši ovu datoteku';
$lang['bs_BA']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Prevucite datoteku u direktorij na lijevoj strani kako biste je premjestili';
$lang['bs_BA']['AssetTableField.ss']['EDIT'] = 'Izmijeni aktivu';
$lang['bs_BA']['AssetTableField.ss']['SHOW'] = 'Prikaži aktivu';
$lang['bs_BA']['AssetTableField']['TITLE'] = 'Naslov';
$lang['bs_BA']['AssetTableField']['TYPE'] = 'Tip';
$lang['bs_BA']['AssetTableField']['URL'] = 'URL';
$lang['bs_BA']['CMSMain']['ACCESS'] = 'Pristup do %s u CMS-u';
$lang['bs_BA']['CMSMain']['CANCEL'] = 'Poništi';
$lang['bs_BA']['CMSMain']['CHOOSEREPORT'] = '(Izaberite izvještaj)';
$lang['bs_BA']['CMSMain']['COMPARINGV'] = 'Upoređujete izdanja #%d i #%d';
$lang['bs_BA']['CMSMain']['COPYPUBTOSTAGE'] = 'Da li zaista želite kopirati objavljeni sadržaj?';
$lang['bs_BA']['CMSMain']['DELETE'] = 'Izbriši sa privremenog nacrta stranice';
$lang['bs_BA']['CMSMain']['DESCREMOVED'] = 'i %s potomci';
$lang['bs_BA']['CMSMain']['EMAIL'] = 'E-mail';
$lang['bs_BA']['CMSMain']['GO'] = 'Idi';
$lang['bs_BA']['CMSMain']['MENUTITLE'] = 'Sadržaj stranice';
$lang['bs_BA']['CMSMain']['METADESCOPT'] = 'Opis';
$lang['bs_BA']['CMSMain']['METAKEYWORDSOPT'] = 'Ključne riječi';
$lang['bs_BA']['CMSMain']['NEW'] = 'Nova';
$lang['bs_BA']['CMSMain']['NOCONTENT'] = 'nema sadržaja';
$lang['bs_BA']['CMSMain']['OK'] = 'Uredu';
$lang['bs_BA']['CMSMain']['PAGENOTEXISTS'] = 'Ova stranica ne postoji';
$lang['bs_BA']['CMSMain']['PRINT'] = 'Štampaj';
$lang['bs_BA']['CMSMain']['PUBALLCONFIRM'] = 'Molimo, objavite svaku stavku na ovoj stranici, kopiranjem sadržaja na aktivnu stranicu';
$lang['bs_BA']['CMSMain']['PUBALLFUN'] = 'Funkcija "Objavi sve"';
$lang['bs_BA']['CMSMain']['PUBALLFUN2'] = 'Pritiskom na ovu tipku ostvarit ćete isti rezultat kao i odlaskom na svaku stranicu i pritiskom na tipku "Objavi". Namjenjena je za korištenje nakon velikih izmjena sadržaja (npr, prilikom početka izrade web stranice).';
$lang['bs_BA']['CMSMain']['PUBPAGES'] = 'Završeno: Objavljeno %d stranica';
$lang['bs_BA']['CMSMain']['REMOVED'] = 'Izbrisano \'%s\'%s sa aktivne stranice';
$lang['bs_BA']['CMSMain']['REMOVEDFD'] = 'Uklonjeno sa privremenog nacrta stranice';
$lang['bs_BA']['CMSMain']['REMOVEDPAGE'] = 'Stavka \'%s\' je uklonjena sa objavljene stranice';
$lang['bs_BA']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = 'Uklonjeno \'%s\' sa privremenog nacrta stranice';
$lang['bs_BA']['CMSMain']['REPORT'] = 'Izvještaj';
$lang['bs_BA']['CMSMain']['RESTORED'] = '\'%s\' je uspješno vraćen';
$lang['bs_BA']['CMSMain']['ROLLBACK'] = 'Vrati na ovo izdanje';
$lang['bs_BA']['CMSMain']['ROLLEDBACKPUB'] = 'Vraćeno na objavljeno izdanje. Novi broj izdanja je #%d';
$lang['bs_BA']['CMSMain']['ROLLEDBACKVERSION'] = 'Vraćeno na izdanje #%d. Broj novog izdanja je #%d.';
$lang['bs_BA']['CMSMain']['SAVE'] = 'Snimi';
$lang['bs_BA']['CMSMain']['STATUSOPT'] = 'Stanje';
$lang['bs_BA']['CMSMain']['TOTALPAGES'] = 'Ukupno stranica:';
$lang['bs_BA']['CMSMain']['VERSIONSNOPAGE'] = 'Ne mogu pronaći stranicu #%d';
$lang['bs_BA']['CMSMain']['VIEWING'] = 'Pregledate izdanje #%d, kreirano %s';
$lang['bs_BA']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'Ne mogu pronaći ime tipke';
$lang['bs_BA']['CMSMain_dialog.ss']['NOLINKED'] = 'Ne mogu pronaći window.linkedObject kako bi se klikom na dugme otvorio glavni prozor';
$lang['bs_BA']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Dodano na privremeni nacrt stranice ali još uvijek nije objavljeno';
$lang['bs_BA']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Dodaj kriterij...';
$lang['bs_BA']['CMSMain_left.ss']['BATCHACTIONS'] = 'Rutinske akcije';
$lang['bs_BA']['CMSMain_left.ss']['CHANGED'] = 'promijenjeno';
$lang['bs_BA']['CMSMain_left.ss']['CLOSEBOX'] = 'kliknite kako biste zatvorili ovaj prozor';
$lang['bs_BA']['CMSMain_left.ss']['COMPAREMODE'] = 'Metoda upoređivanja (kliknite na broj 2 ispod)';
$lang['bs_BA']['CMSMain_left.ss']['CREATE'] = 'Kreiraj';
$lang['bs_BA']['CMSMain_left.ss']['DEL'] = 'izbrisano';
$lang['bs_BA']['CMSMain_left.ss']['DELETECONFIRM'] = 'Izbriši izabrane stranice';
$lang['bs_BA']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Izbrisano sa privremenog nacrta stranice ali je još uvijek aktivno na glavnoj stranici';
$lang['bs_BA']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Izmjenjeno na privremenom nacrtu stranice ali još uvijek nije objavljeno';
$lang['bs_BA']['CMSMain_left.ss']['EDITEDSINCE'] = 'Izmjenjeno od';
$lang['bs_BA']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Dozvoli raspoređivanje prevlačenjem';
$lang['bs_BA']['CMSMain_left.ss']['GO'] = 'Idi';
$lang['bs_BA']['CMSMain_left.ss']['KEY'] = 'Ključ:';
$lang['bs_BA']['CMSMain_left.ss']['NEW'] = 'novo';
$lang['bs_BA']['CMSMain_left.ss']['OPENBOX'] = 'kliknite kako biste otvorili ovaj prozor';
$lang['bs_BA']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Historija izdanja stranice';
$lang['bs_BA']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Objavi izabrane stranice';
$lang['bs_BA']['CMSMain_left.ss']['SEARCH'] = 'Pretraga';
$lang['bs_BA']['CMSMain_left.ss']['SEARCHTITLE'] = 'Pretraži URL-ove, naslove, naslove izbornika i sadržaj';
$lang['bs_BA']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Izaberite stranice koje želite promijeniti i kliknite na akciju:';
$lang['bs_BA']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Prikaži samo promijenjene stranice';
$lang['bs_BA']['CMSMain_left.ss']['SHOWUNPUB'] = 'Prikaži neobjavljena izdanja';
$lang['bs_BA']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Sadržaj stranice i struktura';
$lang['bs_BA']['CMSMain_left.ss']['SITEREPORTS'] = 'Izvještaji stranice';
$lang['bs_BA']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Molimo, odaberite stranicu sa lijeve strane.';
$lang['bs_BA']['CMSMain_right.ss']['WELCOMETO'] = 'Dobrodošli u';
$lang['bs_BA']['CMSMain_versions.ss']['AUTHOR'] = 'Autor';
$lang['bs_BA']['CMSMain_versions.ss']['NOTPUB'] = 'Nije objavljeno';
$lang['bs_BA']['CMSMain_versions.ss']['PUBR'] = 'Izdavač';
$lang['bs_BA']['CMSMain_versions.ss']['UNKNOWN'] = 'Nepoznato';
$lang['bs_BA']['CMSMain_versions.ss']['WHEN'] = 'Kada';
$lang['bs_BA']['CommentAdmin']['ACCEPT'] = 'Prihvati';
$lang['bs_BA']['CommentAdmin']['APPROVED'] = 'Prihvaćeni %s komentari.';
$lang['bs_BA']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Dozvoljeni komentari';
$lang['bs_BA']['CommentAdmin']['AUTHOR'] = 'Autor';
$lang['bs_BA']['CommentAdmin']['COMMENT'] = 'Komentar';
$lang['bs_BA']['CommentAdmin']['COMMENTS'] = 'Komentari';
$lang['bs_BA']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Komentari koje je potrebno pregledati';
$lang['bs_BA']['CommentAdmin']['DATEPOSTED'] = 'Datum objave';
$lang['bs_BA']['CommentAdmin']['DELETE'] = 'Izbriši';
$lang['bs_BA']['CommentAdmin']['DELETEALL'] = 'Izbriši sve';
$lang['bs_BA']['CommentAdmin']['DELETED'] = 'Izbriši %s komentare.';
$lang['bs_BA']['CommentAdmin']['MARKASNOTSPAM'] = 'Označi kao \'nije spam\'';
$lang['bs_BA']['CommentAdmin']['MARKEDNOTSPAM'] = '%s komentari označeni kao \'nije spam\'.';
$lang['bs_BA']['CommentAdmin']['MARKEDSPAM'] = 'Označi %s komentare kao spam.';
$lang['bs_BA']['CommentAdmin']['MENUTITLE'] = 'Komentari';
$lang['bs_BA']['CommentAdmin']['NAME'] = 'Ime';
$lang['bs_BA']['CommentAdmin']['PAGE'] = 'Stranica';
$lang['bs_BA']['CommentAdmin']['SPAM'] = 'Spam';
$lang['bs_BA']['CommentAdmin']['SPAMMARKED'] = 'Označi kao spam';
$lang['bs_BA']['CommentAdmin_left.ss']['COMMENTS'] = 'Komentari';
$lang['bs_BA']['CommentAdmin_right.ss']['WELCOME1'] = 'Dobrodošli u';
$lang['bs_BA']['CommentAdmin_right.ss']['WELCOME2'] = 'upravljanje komentarima. Molimo, izaberite direktorij sa lijeve strane.';
$lang['bs_BA']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Odobreno';
$lang['bs_BA']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'Potrebno pregledati';
$lang['bs_BA']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Komentari';
$lang['bs_BA']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Spam';
$lang['bs_BA']['CommentTableField']['FILTER'] = 'Filter';
$lang['bs_BA']['CommentTableField']['SEARCH'] = 'Pretraga';
$lang['bs_BA']['CommentTableField.ss']['APPROVE'] = 'odobri';
$lang['bs_BA']['CommentTableField.ss']['APPROVECOMMENT'] = 'Odobri ovaj komentar';
$lang['bs_BA']['CommentTableField.ss']['DELETE'] = 'izbriši';
$lang['bs_BA']['CommentTableField.ss']['DELETEROW'] = 'Izbriši ovaj red';
$lang['bs_BA']['CommentTableField.ss']['EDIT'] = 'izmijeni';
$lang['bs_BA']['CommentTableField.ss']['HAM'] = 'ham';
$lang['bs_BA']['CommentTableField.ss']['MARKASSPAM'] = 'Označi ovaj komentar kao spam';
$lang['bs_BA']['CommentTableField.ss']['MARKNOSPAM'] = 'Označi ovaj komentar kao \'nije spam\'';
$lang['bs_BA']['CommentTableField.ss']['NOITEMSFOUND'] = 'Nema pronađenih stavki';
$lang['bs_BA']['CommentTableField.ss']['SPAM'] = 'spam';
$lang['bs_BA']['ImageEditor.ss']['ACTIONS'] = 'akcije';
$lang['bs_BA']['ImageEditor.ss']['APPLY'] = 'primijeni';
$lang['bs_BA']['ImageEditor.ss']['CANCEL'] = 'poništi';
$lang['bs_BA']['ImageEditor.ss']['CROP'] = 'izreži';
$lang['bs_BA']['ImageEditor.ss']['CURRENTACTION'] = 'trenutna&nbsp;akcija';
$lang['bs_BA']['ImageEditor.ss']['EDITFUNCTIONS'] = 'izmijeni&nbsp;funkcije';
$lang['bs_BA']['ImageEditor.ss']['EXIT'] = 'izlaz';
$lang['bs_BA']['ImageEditor.ss']['HEIGHT'] = 'visina';
$lang['bs_BA']['ImageEditor.ss']['REDO'] = 'ponovi';
$lang['bs_BA']['ImageEditor.ss']['ROT'] = 'rotiraj';
$lang['bs_BA']['ImageEditor.ss']['SAVE'] = 'snimi&nbsp;sliku';
$lang['bs_BA']['ImageEditor.ss']['UNDO'] = 'opozovi';
$lang['bs_BA']['ImageEditor.ss']['UNTITLED'] = 'Dokument bez naslova';
$lang['bs_BA']['ImageEditor.ss']['WIDTH'] = 'širina';
$lang['bs_BA']['LeftAndMain']['CHANGEDURL'] = 'URL promijenjen na \'%s\'';
$lang['bs_BA']['LeftAndMain']['HELP'] = 'Pomoć';
$lang['bs_BA']['LeftAndMain']['PAGETYPE'] = 'Tip stranice:';
$lang['bs_BA']['LeftAndMain']['PERMAGAIN'] = 'Odjavljeni ste sa CMS-a. Ukoliko se želite ponovo prijaviti, unesite korisničko ime i šifru ispod.';
$lang['bs_BA']['LeftAndMain']['PERMALREADY'] = 'Žao nam je ali ne možete pristupiti ovom dijelu CMS-a. Ako se želite prijaviti sa drugim korisnikom uradite to ispod';
$lang['bs_BA']['LeftAndMain']['PERMDEFAULT'] = 'Unesite vašu e-mail adresu i šifru kako biste pristupili CMS-u.';
$lang['bs_BA']['LeftAndMain']['PLEASESAVE'] = 'Molimo snimite stranicu: Ova stranica ne može biti ažurirana ako nije prethodno snimljena.';
$lang['bs_BA']['LeftAndMain']['REQUESTERROR'] = 'Greška u zahtjevu';
$lang['bs_BA']['LeftAndMain']['SAVED'] = 'snimljeno';
$lang['bs_BA']['LeftAndMain']['SAVEDUP'] = 'Snimljeno';
$lang['bs_BA']['LeftAndMain']['SITECONTENTLEFT'] = 'Sadržaj stranice';
$lang['bs_BA']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Ovo je';
$lang['bs_BA']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'izdanje koje trenutno koristite, tehnički je riječ o CVS grani';
$lang['bs_BA']['LeftAndMain.ss']['ARCHS'] = 'Arhivirana stranica';
$lang['bs_BA']['LeftAndMain.ss']['DRAFTS'] = 'Privremeni nacrt stranice';
$lang['bs_BA']['LeftAndMain.ss']['EDIT'] = 'Izmijeni';
$lang['bs_BA']['LeftAndMain.ss']['EDITINCMS'] = 'Izmijeni ovu stranicu u CMS-u';
$lang['bs_BA']['LeftAndMain.ss']['EDITPROFILE'] = 'Profil';
$lang['bs_BA']['LeftAndMain.ss']['LOADING'] = 'Učitavanje...';
$lang['bs_BA']['LeftAndMain.ss']['LOGGEDINAS'] = 'Prijavljen kao';
$lang['bs_BA']['LeftAndMain.ss']['LOGOUT'] = 'odjavi me';
$lang['bs_BA']['LeftAndMain.ss']['PUBLIS'] = 'Objavljena stranica';
$lang['bs_BA']['LeftAndMain.ss']['REQUIREJS'] = 'CMS zahtjeva da uključite JavaScript.';
$lang['bs_BA']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe web stranica';
$lang['bs_BA']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Pregledaj stranicu u privremenom nacrtu stranice';
$lang['bs_BA']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Pregledaj stranicu u objavljenoj stranici';
$lang['bs_BA']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Izgled stranice:';
$lang['bs_BA']['LeftAndMain']['STATUSTO'] = 'Status promijenjen na \'%s\'';
$lang['bs_BA']['MemberList.ss']['FILTER'] = 'Filter';
$lang['bs_BA']['MemberList_PageControls.ss']['DISPLAYING'] = 'Prikazujem';
$lang['bs_BA']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'članove';
$lang['bs_BA']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'članove';
$lang['bs_BA']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'članove';
$lang['bs_BA']['MemberList_PageControls.ss']['OF'] = 'od';
$lang['bs_BA']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'članove';
$lang['bs_BA']['MemberList_PageControls.ss']['TO'] = 'do';
$lang['bs_BA']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Pregledaj prve';
$lang['bs_BA']['MemberList_PageControls.ss']['VIEWLAST'] = 'Pregledaj posljednje';
$lang['bs_BA']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Pregledaj slijedeće';
$lang['bs_BA']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Pregledaj prethodne';
$lang['bs_BA']['MemberList_Table.ss']['EMAIL'] = 'E-mail adresa';
$lang['bs_BA']['MemberList_Table.ss']['FN'] = 'Ime';
$lang['bs_BA']['MemberList_Table.ss']['PASSWD'] = 'Šifra';
$lang['bs_BA']['MemberList_Table.ss']['SN'] = 'Prezime';
$lang['bs_BA']['MemberTableField']['ADD'] = 'Dodaj';
$lang['bs_BA']['MemberTableField']['ADDEDTOGROUP'] = 'Dodaj člana u grupu';
$lang['bs_BA']['MemberTableField']['ADDINGFIELD'] = 'Neuspješno dodavanje';
$lang['bs_BA']['MemberTableField']['FILTER'] = 'Filter';
$lang['bs_BA']['MemberTableField']['SEARCH'] = 'Pretraga';
$lang['bs_BA']['MemberTableField.ss']['ADDNEW'] = 'Dodaj novi';
$lang['bs_BA']['PageComment']['COMMENTBY'] = 'Komentarisao \'%S\' na %S';
$lang['bs_BA']['PageCommentInterface']['POST'] = 'Pošalji';
$lang['bs_BA']['PageCommentInterface']['SPAMQUESTION'] = 'Pitanje za zaštitu od spam-a: %s';
$lang['bs_BA']['PageCommentInterface.ss']['COMMENTS'] = 'Komentari';
$lang['bs_BA']['PageCommentInterface.ss']['NEXT'] = 'slijedeći';
$lang['bs_BA']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Na ovoj stranici trenutno nema komentara.';
$lang['bs_BA']['PageCommentInterface.ss']['POSTCOM'] = 'Pošaljite Vaš komentar';
$lang['bs_BA']['PageCommentInterface.ss']['PREV'] = 'prethodni';
$lang['bs_BA']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'RSS feed za komentare na ovoj stranici';
$lang['bs_BA']['PageCommentInterface']['YOURCOMMENT'] = 'Komentari';
$lang['bs_BA']['PageCommentInterface']['YOURNAME'] = 'Vaše ime';
$lang['bs_BA']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Pitanje za zaštitu od spam-a: %s';
$lang['bs_BA']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Vaš komentar je poslan na pregledanje.';
$lang['bs_BA']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Poruka koju ste poslali je:';
$lang['bs_BA']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Otkriven je spam!';
$lang['bs_BA']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'odobri ovaj komentar';
$lang['bs_BA']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'ovaj komentar nije spam';
$lang['bs_BA']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'ovaj komentar je spam';
$lang['bs_BA']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Poslao';
$lang['bs_BA']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'ukloni ovaj komentar';
$lang['bs_BA']['ReportAdmin_left.ss']['REPORTS'] = 'Izvještaji';
$lang['bs_BA']['ReportAdmin_right.ss']['WELCOME1'] = 'Dobrodošli u';
$lang['bs_BA']['ReportAdmin_right.ss']['WELCOME2'] = 'odjel za izvještaje. Molimo, izaberite određeni izvještaj sa lijeve strane.';
$lang['bs_BA']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Izvještaji';
$lang['bs_BA']['SecurityAdmin']['ADDMEMBER'] = 'Dodaj člana';
$lang['bs_BA']['SecurityAdmin']['EDITPERMISSIONS'] = 'Izmijeni ovlaštenja i IP adrese na svakoj grupi';
$lang['bs_BA']['SecurityAdmin']['MENUTITLE'] = 'Sigurnost';
$lang['bs_BA']['SecurityAdmin']['NEWGROUP'] = 'Nova grupa';
$lang['bs_BA']['SecurityAdmin']['SAVE'] = 'Snimi';
$lang['bs_BA']['SecurityAdmin']['SGROUPS'] = 'Sigurnosne grupe';
$lang['bs_BA']['SecurityAdmin_left.ss']['CREATE'] = 'Kreiraj';
$lang['bs_BA']['SecurityAdmin_left.ss']['DEL'] = 'Izbriši';
$lang['bs_BA']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Izbriši izabrane grupe';
$lang['bs_BA']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Dozvoli raspoređivanje prevlačenjem';
$lang['bs_BA']['SecurityAdmin_left.ss']['GO'] = 'Idi';
$lang['bs_BA']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Sigurnosne grupe';
$lang['bs_BA']['SecurityAdmin_left.ss']['SELECT'] = 'Izaberite stranice koje želite izbrisati i kliknite na tipku ispod';
$lang['bs_BA']['SecurityAdmin_left.ss']['TOREORG'] = 'Da biste organizovali Vašu stranicu, prevucite stavke na željeno mjesto.';
$lang['bs_BA']['SecurityAdmin_right.ss']['WELCOME1'] = 'Dobrodošli u';
$lang['bs_BA']['SecurityAdmin_right.ss']['WELCOME2'] = 'sigurnosni administracioni odjel. Molimo odaberite grupu sa lijeve strane.';
$lang['bs_BA']['SideReport']['EMPTYPAGES'] = 'Prazne stranice';
$lang['bs_BA']['SideReport']['LAST2WEEKS'] = 'Izmjenjene stranice u posljednje 2 sedmice';
$lang['bs_BA']['SideReport']['REPEMPTY'] = '%S izvještaj je prazan.';
$lang['bs_BA']['SideReport']['TODO'] = 'Za uraditi';
$lang['bs_BA']['StaticExporter']['BASEURL'] = 'Osnovni URL';
$lang['bs_BA']['StaticExporter']['EXPORTTO'] = 'Izvezi u ovaj direktorij';
$lang['bs_BA']['StaticExporter']['FOLDEREXPORT'] = 'Direktorij za izvoz';
$lang['bs_BA']['StaticExporter']['NAME'] = 'Izvezi statični sadržaj';
$lang['bs_BA']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Nema pronađenih slika u';
$lang['bs_BA']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Izaberite direktorij iznad)';
$lang['bs_BA']['ViewArchivedEmail.ss']['CANACCESS'] = 'Arhiviranoj stranici možete pristupiti korištenjem ovog linka:';
$lang['bs_BA']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Zahtjevali ste pregled sadržaja naše stranice na';
$lang['bs_BA']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Raspoloživi programčići';
$lang['bs_BA']['WidgetAreaEditor.ss']['INUSE'] = 'Trenutno korišteni programčići';
$lang['bs_BA']['WidgetAreaEditor.ss']['NOAVAIL'] = 'Trenutno nema raspoloživih programčića.';
$lang['bs_BA']['WidgetAreaEditor.ss']['TOADD'] = 'Da biste dodali programčiće, prevucite ih ovdje sa lijeve strane.';
$lang['bs_BA']['WidgetEditor.ss']['DELETE'] = 'Izbriši';

?>