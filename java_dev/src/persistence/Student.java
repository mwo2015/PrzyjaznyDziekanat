package persistence;

import java.util.*;
import enums.Kierunki;
import enums.RodzajStudiow;
import enums.RokStudiow;
import enums.TrybStudiow;

public class Student extends Czlowiek {
	
	private Set<Zajecia> zajecia;
	private RodzajStudiow rodzajStudiow;
	private TrybStudiow trybStudiow;

	public Student(){
		zajecia = new HashSet<>();
	}

	public Set<Zajecia> getZajecia() {
		return zajecia;
	}

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
	
}
