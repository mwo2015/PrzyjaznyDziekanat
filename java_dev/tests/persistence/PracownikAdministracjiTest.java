package persistence;

import junit.framework.TestCase;

public class PracownikAdministracjiTest extends TestCase {
	
	public void testPracownikAdministracji() {		
		assertEquals("class persistence.PracownikAdministracji", new PracownikAdministracji().getClass().toString());
	}

	public void testGetId() {
		PracownikAdministracji prAdm = new PracownikAdministracji();
		assertEquals(0, prAdm.getId());
	}

	public void testSetId() {
		PracownikAdministracji prAdm = new PracownikAdministracji();
		prAdm.setId(1001);
		assertEquals(1001, prAdm.getId());
	}

	public void testGetImie() {
		PracownikAdministracji prAdm = new PracownikAdministracji();
		assertEquals(null, prAdm.getImie());
	}

	public void testSetImie() {
		PracownikAdministracji prAdm = new PracownikAdministracji();
		prAdm.setImie("Jan");
		assertEquals("Jan", prAdm.getImie());
	}

	public void testGetNazwisko() {
		PracownikAdministracji prAdm = new PracownikAdministracji();
		assertEquals(null, prAdm.getNazwisko());
	}

	public void testSetNazwisko() {
		PracownikAdministracji prAdm = new PracownikAdministracji();
		prAdm.setNazwisko("Dlugosz");
		assertEquals("Dlugosz", prAdm.getNazwisko());
	}

}
