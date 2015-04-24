package persistence;

import java.util.HashSet;

import enums.TypZajec;
import junit.framework.TestCase;

public class ProwadzacyTest extends TestCase {

	public void testProwadzacy() {
		assertEquals("class persistence.Prowadzacy", new Prowadzacy().getClass().toString());
	}

	public void testGetZajecia() {
		Prowadzacy p = new Prowadzacy();
		assertNotNull(p.getZajecia());
	}

	public void testSetZajecia() {
		HashSet<Zajecia> z = new HashSet<>();
		z.add(new Zajecia("Informatyka", TypZajec.Laboratoria));
		z.add(new Zajecia("Wychowanie Fizyczne", TypZajec.Cwiczenia));
		
		Prowadzacy p = new Prowadzacy();
		assertNotNull(p.getZajecia());
		p.setZajecia(z);
		assertSame(z, p.getZajecia());
		
	}

}
