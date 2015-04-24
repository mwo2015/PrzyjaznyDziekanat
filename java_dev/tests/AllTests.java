import persistence.PracownikAdministracjiTest;
import persistence.ProwadzacyTest;
import persistence.StudentTest;
import junit.framework.Test;
import junit.framework.TestSuite;


public class AllTests {

	public static Test suite() {
		TestSuite suite = new TestSuite(AllTests.class.getName());
		//$JUnit-BEGIN$
		suite.addTestSuite(PracownikAdministracjiTest.class);
		suite.addTestSuite(ProwadzacyTest.class);
		suite.addTestSuite(StudentTest.class);
		//$JUnit-END$
		return suite;
	}

}
