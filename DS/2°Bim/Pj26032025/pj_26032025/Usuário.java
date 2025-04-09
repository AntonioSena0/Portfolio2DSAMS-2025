package pj_26032025;

public class Usuário {
    private String nome;
    private String email;
    private String login;
    private String Senha;
    
    public Usuário() {
        this("", "", "", "");
    }

    public Usuário(String nome, String email, String login, String Senha) {
        this.nome = nome;
        this.email = email;
        this.login = login;
        this.Senha = Senha;
    }
    
    
    public String getNome() {
        return nome;
    }
    
    public void setNome (String nome) {
        this.nome = nome;
    }
    
    public void  provarExistencia() {
        System.out.println("Oi, eu existo!");
    }
    
}