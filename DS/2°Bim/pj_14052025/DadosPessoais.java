public class DadosPessoais {
    private String nome;
    private int idade;
    private String sexo;
    private String interesses;
    private String estadoCivil;

    public DadosPessoais() {
        this("", 0, "", "", "");
    }

    public DadosPessoais(String nome, int idade, String sexo, String interesses, String estadoCivil) {
        this.nome = nome;
        this.idade = idade;
        this.sexo = sexo;
        this.interesses = interesses;
        this.estadoCivil = estadoCivil;
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

    public String getEstadoCivil() {
        return estadoCivil;
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

    public void setEstadoCivil(String estadoCivil) {
        this.estadoCivil = estadoCivil;
    }

    public String enviarDados(String nome, String idade, String sexo, String interesses, String estadoCivil) {
        setNome(nome);
        setIdade(Integer.parseInt(idade));
        setSexo(sexo);
        setInteresses(interesses);
        setEstadoCivil(estadoCivil);

        return "<html> Nome: " + getNome() + "<br>" +
               "Idade: " + getIdade() + "<br>" +
               "Sexo: " + getSexo() + "<br>" +
               "Interesses: " + getInteresses() + "<br>" +
               "Estado Civil: " + getEstadoCivil() + "</html>";
    }
}