package services;

import java.util.Iterator;
import java.util.List;
import java.util.Set;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;

import enums.RodzajStudiow;
import enums.TrybStudiow;
import persistence.Student;
import persistence.Zajecia;
import util.DBConnection;

public class StudentCRUD {
	
		SessionFactory factory = null;
		Transaction tx = null;
		Session session = null;
		
		public void dodajStudent(String imie ,String nazwisko){
			try{
				factory = DBConnection.getSessionFactory();
				session = factory.getCurrentSession();
				System.out.println("Sesja utworzona");
				tx = session.beginTransaction();
				Student s = new Student();
				s.setImie(imie);
				s.setNazwisko(nazwisko);
				Integer i = (Integer) session.save(s);
				System.out.println("Student od id "+i+" dodany do listy");
				tx.commit();
			}
			catch(Throwable e){
				e.printStackTrace();
			}
		}
		
		public void dodajStudent(String imie ,String nazwisko,RodzajStudiow rodzajStudiow,
				TrybStudiow trybStudiow){
			try{
				factory = DBConnection.getSessionFactory();
				session = factory.getCurrentSession();
				System.out.println("Sesja utworzona");
				tx = session.beginTransaction();
				Student s = new Student();
				s.setImie(imie);
				s.setNazwisko(nazwisko);
				s.setRodzajStudiow(rodzajStudiow);
				s.setTrybStudiow(trybStudiow);
				Integer i = (Integer) session.save(s);
				System.out.println("Student od id "+i+" dodany do listy");
				tx.commit();
			}
			catch(Throwable e){
				e.printStackTrace();
			}
		}
		
		public void dodajStudent(String imie ,String nazwisko,RodzajStudiow rodzajStudiow,
				TrybStudiow trybStudiow,Set<Zajecia> zajecia){
			try{
				factory = DBConnection.getSessionFactory();
				session = factory.getCurrentSession();
				System.out.println("Sesja utworzona");
				tx = session.beginTransaction();
				Student s = new Student();
				s.setImie(imie);
				s.setNazwisko(nazwisko);
				s.setRodzajStudiow(rodzajStudiow);
				s.setTrybStudiow(trybStudiow);
				s.setZajecia(zajecia);
				Integer i = (Integer) session.save(s);
				System.out.println("Student od id "+i+" dodany do listy");
				tx.commit();
			}
			catch(Throwable e){
				e.printStackTrace();
			}
		}
		
		public void usunStudent(Integer studentID){
			try{
				factory = DBConnection.getSessionFactory();
				session = factory.getCurrentSession();
				System.out.println("Sesja utworzona");
				tx = session.beginTransaction();
				Student s = (Student) session.get(Student.class, studentID);
				int i = s.getId();
				String imie = s.getImie();
				String nazwisko = s.getNazwisko();
				session.delete(s);
				System.out.println("Student "+imie+" "+nazwisko+" o id "+i+" zostal usuniety z listy");
				tx.commit();
			}
			catch(Throwable e){
				if(tx!=null) 
					tx.rollback();
				e.printStackTrace();
			}
		}
		
		public void aktualizujNazwiskoStudenta(Integer studentID, String nazwisko){
			//trzeba dac warunek sprawdzajacy czy studentID jest na bazie, inaczej leci nullpointer
			try{
				factory = DBConnection.getSessionFactory();
				session = factory.getCurrentSession();
				System.out.println("Sesja utworzona");
				tx = session.beginTransaction();
				Student s = (Student) session.get(Student.class, studentID);
				int i = s.getId();
				s.setNazwisko(nazwisko);
				String nazwiskoNowe = s.getNazwisko();
				session.update(s);
				System.out.println("Nazwisko studenta o id "+i+" zostalo zaaktualizowane");
				System.out.println("Nowe nazwisko: "+nazwiskoNowe);
				tx.commit();
			}
			catch(Throwable e){
				if(tx!=null) 
					tx.rollback();
				e.printStackTrace();
			}
		}
		
		public void wypiszListeStudentow(){
			try{
				factory = DBConnection.getSessionFactory();
				session = factory.getCurrentSession();
				System.out.println("Sesja utworzona");
				tx = session.beginTransaction();
				Query q = session.createQuery("from Student");
				List<Student> s = q.list();
				Iterator<Student> it = null;
				for(it=s.iterator();it.hasNext();){
					Student st = it.next();
					System.out.println("------------------------------");
					System.out.println("id: "+st.getId()+"| imie: "+st.getImie()+"| nazwisko: "+st.getNazwisko());
				}
				System.out.println("------------------------------");
				System.out.println("Calkowita liczba studentow: "+s.size());
				tx.commit();
			}
			catch(Throwable e){
				if(tx!=null) 
					tx.rollback();
				e.printStackTrace();
			}
		}
		
		
}
