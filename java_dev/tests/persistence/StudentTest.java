package persistence;

import java.util.HashSet;
import java.util.Set;

import enums.RodzajStudiow;
import enums.TrybStudiow;
import enums.TypZajec;
import junit.framework.TestCase;

public class StudentTest extends TestCase {

	public void testStudent() {		
		assertEquals("class persistence.Student", new Student().getClass().toString());
	}
	
	public void testGetZajecia() {
		Student s = new Student();
		assertNotNull(s.getZajecia());
	}
	
	public void testSetZajecia() {
		HashSet<Zajecia> z = new HashSet<>();
		z.add(new Zajecia("Informatyka", TypZajec.Laboratoria));
		z.add(new Zajecia("Wychowanie Fizyczne", TypZajec.Cwiczenia));
		
		
		Student s = new Student();
		s.setZajecia(z);
		
		assertNotNull(s.getZajecia());
		s.setZajecia(z);
		assertSame(z, s.getZajecia());
		
	}
	
	/*
	 * 
	 * 
	 * 

	public void setZajecia(Set<Zajecia> zajecia) {
		this.zajecia = zajecia;
	}

	public RodzajStudiow getRodzajStudiow() {
		return rodzajStudiow;
	}

	public void setRodzajStudiow(RodzajStudiow rodzajStudiow) {
		this.rodzajStudiow = rodzajStudiow;
	}

	public TrybStudiow getTrybStudiow() {
		return trybStudiow;
	}

	public void setTrybStudiow(TrybStudiow trybStudiow) {
		this.trybStudiow = trybStudiow;
	}	
	 * 
	 */
	
	
	
}
