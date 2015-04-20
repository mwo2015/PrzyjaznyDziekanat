package util;

import org.hibernate.SessionFactory;
import org.hibernate.boot.registry.StandardServiceRegistryBuilder;
import org.hibernate.cfg.Configuration;
import org.hibernate.service.ServiceRegistry;

public class DBConnection {
	
	private static SessionFactory sessionFactory;
	
    private static SessionFactory buildSessionFactory() {
        try {
        	Configuration configuration = new Configuration();
        	configuration.configure("Dziekanat.cfg.xml");
        	System.out.println("Konfiguracja Hibernate zaladowana pomyslnie");
        	ServiceRegistry serviceRegistry = new StandardServiceRegistryBuilder().applySettings(configuration.getProperties()).build();
        	System.out.println("Hibernate serviceRegistry utworzono");
        	SessionFactory sessionFactory = configuration.buildSessionFactory(serviceRegistry);
            return sessionFactory;
        }
        catch (Throwable ex) {
            System.err.println("Initial SessionFactory creation failed." + ex);
            throw new ExceptionInInitializerError(ex);
        }
    }
    
    public static SessionFactory getSessionFactory(){
    	if(sessionFactory==null) 
    		sessionFactory=buildSessionFactory();
    	return sessionFactory;
    }

}
