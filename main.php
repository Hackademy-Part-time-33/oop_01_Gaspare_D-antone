<?php

// Crea una classe Company che abbia i seguenti attributi pubblici:
// name: nome dell’azienda;
// location: stato in cui è ubicata la sede dell’azienda;
// tot_employees: numero di dipendenti assunti in quella sede.


// Crea 5 istanze di 5 aziende diverse


// Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendenti, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;


// Aggiungi un nuovo attributo chiamato $avg_salary nella Classe Company. Aggiorna poi le aziende che hai già creato nel punto 2.


// Implementa un metodo che calcoli la spesa per un numero variabile di mesi (praticamente il metodo deve accettare come parametro N mesi) e poi implementa un altro metodo che stampi a schermo l’informazione (sono due metodi diversi).


// Implementa un attributo statico che tenga traccia di quante aziende sono state create.


// Implementa un metodo statico che stampi a schermo con una frase quante aziende sono state create.


class Company{
    public $nameAzienda;
    public $location;
    public $tot_employees ;
    public $avg_salary ;
    public static $counter = 0;


    public function __construct($_nameAzienda, $_location, $_tot_employees, $_avg_salary){
        $this->nameAzienda = $_nameAzienda;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
        $this->avg_salary = $_avg_salary;
        self::$counter++;

        $this->showAzienda();

    }
    public function showAzienda (){
        if ($this->tot_employees > 0 ) {
            echo "il nome dell'azienda è " . $this->nameAzienda . " con sede in " . $this->location . " ed ha  " . $this->tot_employees . " dipendenti " . "stipendio medio di euro " . $this->avg_salary . "\n";
            
        }else{

            echo "L'azienda  " . $this->nameAzienda . " non ha dipendenti in " . $this->location .  "\n";
        }
        

    }
    public function calcSpese ($mesi){
        return $this->tot_employees * $this->avg_salary * $mesi;

    }

    public function showSpese($mesi){
        
        echo "le spese della azienda " . $this->nameAzienda . " ammontano a " . $this->calcSpese($mesi) . " Rubli" . "\n";
    }

    public static function totalCompany(){
       
        echo "Al momento ci sono " . self::$counter . " aziende" . "\n";
    }

}

$company1 = new Company('Arma', 'sicilia', 20 , 300);
$company2 = new Company('Bear', 'basilicata', 15 , 500);
$company3 = new Company('Usec', 'piemonte', 35 , 250);
$company4 = new Company('Scav', 'lazio ', 15, 650);
$company5 = new Company('Aulab', 'italia', 0, 870);
Company::totalCompany();

 $company1->showSpese(2);
// $company1->showAzienda();







