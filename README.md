# Proiect la Baze de date -9

Se considera o aplicatie pentru evidenta calculatoarelor si a licentelor software dintr-o firma.
Pentru orice angajat trebuie sa se salveze intr-o baza de date Oracle urmatoarele informatii:
- nume
- prenume
- nr. Legitimatie
- descriere computer
- nr. Inventar (pentru computer)
- informatii despre licentele software:
 tipul de licenta (OEM, retail, OPEN, Inchiriere, free, other)
 Produs
 Producator
 Valoare de achizitie
 Document de achizitie
Stiind ca ‘Numele’ nu depaseste 15 caractere, ‘Prenumele’ nu depaseste 20 caractere,
‘Numarul de Legitimatie’ are exact 6 caractere, descrierea unui produs nu depaseste 40
caractere,un angajat poate avea maxim 5 calculatoare si ca pe un computer pot fi instalate
oricate soft-uri, se cere:
1. Să se realizeze proiectarea bazei de date aferente (structura de tabele, structura de coloane a
fiecărei tabele, constrângeri).
2. Sa se scrie comenzile SQL pentru tabelele proiectate la punctul anterior.
3. Să se scrie comenzile SQL pentru popularea bazei de date cu urmatoarele produse:
nume prenume legitimat
ie
Descriere
computer
Nr.
inventar
Tip
licenta
produs producator valoare document
popa ion 123456 Pentium 4 1000 OEM Wndows
XP
Microsoft 500 34/20.01.20
06
adam gheorghe 123457 Athlon 1001 Retail Office XP Microsoft 1200 234/11.01.2
007
popa ion 123456 Pentium 4 1000 Free openOffic
e
XXX 0 NA
popa ion 123456 Celeron 1002 OPEN Windows
2000
Microsoft 400 23/02.02.20
03
Pop george 123458 Celeron 1003 Free 7zip XXX 0 NA
4. Să se scrie o procedura care sa aloce un calculator unui angajat. (se va apela procedura cu 2
parametri: nr. legitimatie si nr.inventar).
5. Sa se genereze un raport care sa cuprinda numarul de licente, valoarea totala a acestora in
functie de producator.
6. Sa se genereze un raport detaliat care sa cuprinda numarul de licente, valoarea totala a
acestora in functie de producator, tip licenta si anul achizitiei, ordonat dupa an in sens
descrescator, apoi dupa producator si tip licenta. Anul este reprezentat de ultimele 4 caractere
din coloana document de achizitie.
7. Sa se scrie un trigger care la stergerea unui calculator din baza de date sa elimine toate
licentele de tip OEM care au fost alocate acelui calculator.
8. Sa se scrie o functie care sa primeasca ca si parametru numele produsului si sa returneze
valoarea totala a acestuia.
9. Sa se afiseze calculatoarele si utilizatorii acestora care nu au alocate produsele Windows sau
Office, precizand: nr. inventar, nume, prenume, nr. legit si respectiv ce produs lipseste.
10. Sa se afiseze utilizatorul care utilizeaza licente avand cea mai mare valoare totala de achizitie
(indiferent de numarul de calculatoare din dotare).