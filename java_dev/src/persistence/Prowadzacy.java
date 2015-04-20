package persistence;

import java.util.HashSet;
import java.util.Set;

public class Prowadzacy extends Czlowiek {

	public Set<Zajecia> zajecia;
	
	public Prowadzacy(){
		zajecia = new HashSet<>();
	}

	public Set<Zajecia> getZajecia() {
		return zajecia;
	}

	public void setZajecia(Set<Zajecia> zajecia) {
		this.zajecia = zajecia;
	}
}
