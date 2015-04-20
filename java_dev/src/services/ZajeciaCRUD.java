package services;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;

import enums.TypZajec;
import persistence.Prowadzacy;
import persistence.Zajecia;
import util.DBConnection;

public class ZajeciaCRUD {
	
	SessionFactory factory = null;
	Transaction tx = null;
	Session session = null;
	
//	public void dodajZajecia(String nazwaZajec ,TypZajec typZajec,Prowadzacy p){
//		Zajecia z = new Zajecia();
//		z.setNazwaZajec(nazwaZajec);
//		z.setTypZajec(typZajec);
//		z.setProwadzacy(p);
//		try{
//			factory = DBConnection.getSessionFactory();
//			session = factory.getCurrentSession();
//			System.out.println("Sesja utworzona");
//			tx = session.beginTransaction();
//			Integer i = (Integer) session.save(z);
//			session.save(p);
//			System.out.println("Zajecia o id: "+i+" dodano do listy");
//			tx.commit();
//		}
//		catch(Throwable e){
//			e.printStackTrace();
//		}
//	}
	
	public void dodajZajecia(String nazwaZajec ,TypZajec typZajec){
		try{
			factory = DBConnection.getSessionFactory();
			session = factory.getCurrentSession();
			System.out.println("Sesja utworzona");
			tx = session.beginTransaction();
			Zajecia z = new Zajecia();
			z.setNazwaZajec(nazwaZajec);
			z.setTypZajec(typZajec);
			Integer i = (Integer) session.save(z);
			System.out.println("Zajecia o id: "+i+" dodano do listy");
			tx.commit();
		}
		catch(Throwable e){
			e.printStackTrace();
		}
	}

}
