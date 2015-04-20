package app;

import java.util.HashSet;
import java.util.Set;

import persistence.Prowadzacy;
import persistence.Zajecia;
import enums.Kierunki;
import enums.RodzajStudiow;
import enums.RokStudiow;
import enums.TrybStudiow;
import enums.TypZajec;
import services.ProwadzacyCRUD;
import services.StudentCRUD;
import services.ZajeciaCRUD;

//nie mozna dac pola prywatnego id i nieustawic dla niego gettera/settera -> leci wyj
public class Main {

	public static void main(String[] args) {
		
		StudentCRUD s = new StudentCRUD();
		s.dodajStudent("Jan", "Kochanowski",RodzajStudiow.Inzynierskie,
				TrybStudiow.Dzienne);
//		s.usunStudent(1);
//		s.aktualizujNazwiskoStudenta(2, "Kowalski");
//		s.wypiszListeStudentow();
		
//		Zajecia z1 = new Zajecia();
//		z1.setTypZajec(TypZajec.Wyklad);
//		z1.setNazwaZajec("Java 1");		
//		Zajecia z2 = new Zajecia();
//		z2.setTypZajec(TypZajec.Cwiczenia);
//		z2.setNazwaZajec("Java 1 cwiczenia");
//		Set<Zajecia> zajecia = new HashSet<>();
//		zajecia.add(z1);
//		zajecia.add(z2);
//		s.dodajStudent("Adam", "Adamowicz", RodzajStudiow.Magisterskie, TrybStudiow.Zaoczne, zajecia);
//		
//		ProwadzacyCRUD p = new ProwadzacyCRUD();
//		p.dodajProwadzacy("Adam", "Nowak");
//		
		
		//do poprawy, zle zaimplementowana relacja MTM
//		Prowadzacy p = new Prowadzacy();
//		p.setImie("Krzysiek");
//		p.setNazwisko("Pagacz");
//		ZajeciaCRUD z = new ZajeciaCRUD();
//		z.dodajZajecia("Hibernate 2", TypZajec.Wyklad,p);
		
//		ZajeciaCRUD z = new ZajeciaCRUD();
//		z.dodajZajecia("Hibernate 1", TypZajec.Wyklad);
//		
//		ProwadzacyCRUD p2 = new ProwadzacyCRUD();
//		p.dodajPrzedmiotDlaProwadzacego(1, 1);
//		
//		Zajecia z2 = new Zajecia("Pilka Nozna",TypZajec.Cwiczenia);
//		ProwadzacyCRUD p = new ProwadzacyCRUD();
//		p.dodajProwadzacy("Leo","Messi",z2);
		
	}

}
