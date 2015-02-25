#Wellness



Business report app for Wellness health care



Menu Link : http://www.arenaturist.com/documents/Wellness+cjenik+PPH.pdf?_ga=1.84099165.578331971.1420825378
EER ModelExample : https://cloud.githubusercontent.com/assets/10946296/6289156/4e8ebfc8-b91e-11e4-895f-2dee605e7c74.JPG




IZVJEŠTAJ: 

• Radni sati (smjene) : odrađeni sati zaposlenika 

• Narudžbe (po satima) : tretmani, bazeni, saune... 

• Zarada i iznos po proizvodu, tretmanu (po radniku i sveukupno) 

• Mjesečni iznos, tromjesečni iznos, šestomjesečni iznos, godišnji, komparacija sa prethodnim godinama (razdoblja), bruto mjesečni 

• Broj članova te njihov broj dolazaka ukupni


STRUKTURA: 


• Da li svaki zaposlenik radi na svom odjelu ili se mijenjaju kako im odgovara? 
- Svaki zaposlenik radi sve po potrebi (pult s proizvodima, masaze, tretmani, nosi ručnike na bazen) 

• Da li se podaci za osobu koja dođe npr.jednom godišnje bilježe u sustav i prikazuju u izvještaju? 
- Da! 

• Gdje se prodaju proizvodi?
- Na pultu gdje se izdaju i karte za usluge.


BAZA:


ČLANARINA (id, ime, prezime, datum_rođ, kontakt, tip, datum_unos)
ZAPOSLENIK (id, ime, prezime, adresa, kontakt, username, password)
CJENIK_USLUGA (id, usluga, cijena, vrsta_usluga)
