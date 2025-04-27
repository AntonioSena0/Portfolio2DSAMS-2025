package pj_09042025.Calculadora;

import static java.lang.Math.pow;
import javax.swing.JOptionPane;

public class Calculadora {
    private double n1;
    private double n2;
    private double r;
    
    public Calculadora(){
        this(0, 0, 0);
    }
    
    public Calculadora(double n1, double n2, double r) {
        this.n1 = n1;
        this.n2 = n2;
        this.r = r;
    }

    public double getN1() {
        return n1;
    }

    public double getN2() {
        return n2;
    }

    public double getR() {
        return r;
    }

    public void setN1(double n1) {
        this.n1 = n1;
    }

    public void setN2(double n2) {
        this.n2 = n2;
    }

    public void setR(double r) {
        this.r = r;
    }
    
    
    public void somar(){
        setN1(Double.parseDouble(JOptionPane.showInputDialog("Insira o primeiro número")));
        setN2(Double.parseDouble(JOptionPane.showInputDialog("Insira o segundo número")));
        
        //Poderia ser setR(getN1() + getN2());
        this.r = getN1() + getN2();
        JOptionPane.showMessageDialog(null, "Resultado: " + this.r);
    }
    
    public void subtração(double num1, double num2){
        setN1(num1);
        setN2(num2);
        
        //Poderia ser setR(getN1() - getN2());
        this.r = getN1() - getN2();
        JOptionPane.showMessageDialog(null, "Resultado: " + this.r);
    }
    
    public double multiplicar(){
        setN1(Double.parseDouble(JOptionPane.showInputDialog("Insira o primeiro número")));
        setN2(Double.parseDouble(JOptionPane.showInputDialog("Insira o segundo número")));
        
        //Poderia ser setR(getN1() * getN2());
        this.r = getN1() * getN2();
        return this.r;
    }
    
    public double dividir(double n1, double n2){
        setN1(n1);
        setN2(n2);
        
        //Poderia ser setR(getN1() / getN2());
        this.r = getN1() / getN2();
        return this.r;
    }
    
    public double Potenciação(double n1, double n2){
        setN1(n1);
        setN2(n2);

        this.r = pow(getN1(), getN2());
        return this.r;
    }
    
    public double RaizQuadrada(double n1){
        setN1(n1);
        
        this.r = Math.sqrt(getN1());
        return this.r;
    }
    
}