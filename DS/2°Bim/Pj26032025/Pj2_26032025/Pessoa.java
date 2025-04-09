package pj2_26032025;

import javax.swing.JOptionPane;

public class Pessoa{
    private String nome;
    private String endereco;
    private double salario;
    private String telefone;
    private String email;
    
    public Pessoa(){
        this("", "", 0, "", "");
    }

    public Pessoa(String nome, String endereco, double salario, String telefone, String email) {
        this.nome = nome;
        this.endereco = endereco;
        this.salario = salario;
        this.telefone = telefone;
        this.email = email;
    }

    public String getNome() {
        return nome;
    }

    public String getEndereco() {
        return endereco;
    }

    public double getSalario() {
        return salario;
    }

    public String getTelefone() {
        return telefone;
    }

    public String getEmail() {
        return email;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public void setSalario(double salario) {
        this.salario = salario;
    }

    public void setTelefone(String telefone) {
        this.telefone = telefone;
    }

    public void setEmail(String email) {
        this.email = email;
    }
    
    
    
    public void  InserirDadosPessoal() {
        setNome(JOptionPane.showInputDialog("Qual é o seu nome?"));
        setEndereco(JOptionPane.showInputDialog("Qual é o endereço"));
        setSalario(Double.parseDouble(JOptionPane.showInputDialog("Digite o seu salário")));
        setTelefone(JOptionPane.showInputDialog("Digite o seu telefone"));
        setEmail(JOptionPane.showInputDialog("Digite o seu email"));
    }
    
    public void  apresentarPessoa() {
        JOptionPane.showMessageDialog(null, 
                "Dados:" + "\n"
                + "Nome: " + getNome() + "\n" 
                + "Endereço: " + getEndereco() + "\n" 
                + "Salário: " + getSalario() + "\n" 
                + "Telefone: " + getTelefone() + "\n" 
                + "Email: " + getEmail() + "\n" 
        );
    }
    
}