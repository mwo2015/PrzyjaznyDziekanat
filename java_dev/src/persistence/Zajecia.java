package persistence;

import java.util.*;
import enums.TypZajec;

public class Zajecia {
	
	private int id;
	private String nazwaZajec;
	private TypZajec typZajec;
	private Prowadzacy prowadzacy;
	private Set<Student> studenci;
	
	public Zajecia(){
		studenci = new HashSet<>();
	}
	
	public Zajecia(String nazwaZajec, TypZajec typZajec){
		this.nazwaZajec=nazwaZajec;
		this.typZajec=typZajec;
	}

	public String getNazwaZajec() {
		return nazwaZajec;
	}

	public void setNazwaZajec(String nazwaZajec) {
		this.nazwaZajec = nazwaZajec;
	}

	public TypZajec getTypZajec() {
		return typZajec;
	}

	public void setTypZajec(TypZajec typZajec) {
		this.typZajec = typZajec;
	}

	public Prowadzacy getProwadzacy() {
		return prowadzacy;
	}

	public void setProwadzacy(Prowadzacy prowadzacy) {
		this.prowadzacy = prowadzacy;
	}

	public Set<Student> getStudenci() {
		return studenci;
	}

	public void setStudenci(Set<Student> studenci) {
		this.studenci = studenci;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}
	
	
}
