package services;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;

import persistence.Prowadzacy;
import persistence.Student;
import persistence.Zajecia;
import util.DBConnection;

public class ProwadzacyCRUD {
	
	SessionFactory factory = null;
	Transaction tx = null;
	Session session = null;
	
	public void dodajProwadzacy(String imie ,String nazwisko){
		try{
			factory = DBConnection.getSessionFactory();
			session = factory.getCurrentSession();
			System.out.println("Sesja utworzona");
			tx = session.beginTransaction();
			Prowadzacy p = new Prowadzacy();
			p.setImie(imie);
			p.setNazwisko(nazwisko);
			Integer i = (Integer) session.save(p);
			System.out.println("Prowadzacy: "+p.getImie()+" "+p.getNazwisko()+" o id "+i+" dodany do listy");
			tx.commit();
		}
		catch(Throwable e){
			e.printStackTrace();
		}
	}
	
	public void dodajProwadzacy(String imie ,String nazwisko,Zajecia z){
		Prowadzacy p = new Prowadzacy();
		p.setImie(imie);
		p.setNazwisko(nazwisko);
		p.zajecia.add(z);
		try{
			factory = DBConnection.getSessionFactory();
			session = factory.getCurrentSession();
			System.out.println("Sesja utworzona");
			tx = session.beginTransaction();
			Integer i = (Integer) session.save(p);
			session.save(z);
			System.out.println("Prowadzacy: "+p.getImie()+" "+p.getNazwisko()+" o id "+i+" dodany do listy");
			System.out.println("Bedzie prowadzil zajecia: "+z.getNazwaZajec());
			tx.commit();
		}
		catch(Throwable e){
			e.printStackTrace();
		}
	}
	
	public void dodajPrzedmiotDlaProwadzacego(Integer prowadzacyID, Integer zajeciaID){
		try{
			factory = DBConnection.getSessionFactory();
			session = factory.getCurrentSession();
			System.out.println("Sesja utworzona");
			tx = session.beginTransaction();
			Prowadzacy p = (Prowadzacy) session.get(Prowadzacy.class, prowadzacyID);
			Zajecia z = (Zajecia) session.get(Zajecia.class, zajeciaID);
			
			Integer i = (Integer) session.save(p);
			System.out.println("Prowadzacy: "+p.getImie()+" "+p.getNazwisko()+" o id "+p.getId()+""
					+ " bedzie prowadzil zajecia "+z.getNazwaZajec());
			tx.commit();
		}
		catch(Throwable e){
			e.printStackTrace();
		}
	}

}
