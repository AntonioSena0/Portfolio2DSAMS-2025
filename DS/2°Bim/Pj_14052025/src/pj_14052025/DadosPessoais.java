package pj_14052025;

public class DadosPessoais {
    
    public String nome;
    public int idade;
    public String sexo;
    public String interesses;
    public String estado_civil;
    
    public DadosPessoais(){
        this("", 0, "", "", "");
    }

    public DadosPessoais(String nome, int idade, String sexo, String interesses, String estado_civil) {
        this.nome = nome;
        this.idade = idade;
        this.sexo = sexo;
        this.interesses = interesses;
        this.estado_civil = estado_civil;
    }

    public String getNome() {
        return nome;
    }

    public int getIdade() {
        return idade;
    }

    public String getSexo() {
        return sexo;
    }

    public String getInteresses() {
        return interesses;
    }

    public String getEstado_civil() {
        return estado_civil;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setIdade(int idade) {
        this.idade = idade;
    }

    public void setSexo(String sexo) {
        this.sexo = sexo;
    }

    public void setInteresses(String interesses) {
        this.interesses = interesses;
    }

    public void setEstado_civil(String estado_civil) {
        this.estado_civil = estado_civil;
    }
    
    public String EnviarDados(JTextField a, JTextField b, String c, String d, String e){
        
        setNome(StringValueOf(a));
        setIdade(Integer.parseInt(b));
        setSexo(StringValueOf(c));
        setInteresses(StringValueOf(d));
        setEstado_civil(StringValueOf(e));
        
        return "Dados: \n Nome: " + getNome() + "\n Idade: " + getIdade() + "\n Sexo: " + getSexo() + "\n Interesses: " + getInteresses() + "\n Estado Civil: " + getEstado_Civil();
    
    }
    
}
