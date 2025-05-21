package Pj_23042025;

import java.awt.*;  
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyEvent;
import javax.swing.*;

public class Interface extends JFrame{
    JLabel t1, t2, res1, res2;
    JTextField num1, num2;
    JButton soma, subtração, multiplicação, divisão, limpar, habilitar, desabilitar, ocultar, exibir, sair;
    public Interface(){
    super("Calculadora");
    Container tela = getContentPane();  
    setSize(800, 600);
    setLayout(null);
        t1 = new JLabel("1° Número");
        t2 = new JLabel("2° Número");
        num1 = new JTextField(18);
        num2 = new JTextField(18);
        soma = new JButton("+");
        subtração = new JButton("-");
        multiplicação = new JButton("*");
        divisão = new JButton("/");
        limpar = new JButton("Limpar");
        habilitar = new JButton("Habilitar");
        desabilitar = new JButton("Desabilitar");
        ocultar = new JButton("Ocultar");
        exibir = new JButton("Exibir");
        sair = new JButton("Sair");
        res1 = new JLabel("O Resultado é:");
        res2 = new JLabel("");
        
        t1.setBounds(50,20,80,20);
        t2.setBounds(50,80,80,20);
        num1.setBounds(130,20,150,20);
        num2.setBounds(130,80,150,20);
        res1.setBounds(50, 130, 150, 20);
        res2.setBounds(190, 130, 400, 20);
        soma.setBounds(500, 20, 50,20);
        subtração.setBounds(500,40, 50,20);
        multiplicação.setBounds(500,60,50,20);
        divisão.setBounds(500, 80,50,20);
        limpar.setBounds(500, 100,80,20);
        habilitar.setBounds(50,200,150,20);
        desabilitar.setBounds(200,200,150,20);
        ocultar.setBounds(350,200,150,20);
        exibir.setBounds(500,200,150,20);
        sair.setBounds(500,250,150,20);
        res1.setForeground(Color.RED);
        res2.setForeground(Color.RED);
        t1.setFont(new Font("Arial",Font.BOLD,14));
        t2.setFont(new Font("Arial",Font.BOLD,14));
        res1.setFont(new Font("Arial",Font.BOLD,18));
        res2.setFont(new Font("Arial",Font.BOLD,18));
        
        tela.add(t1);
        tela.add(t2);
        tela.add(num1);
        tela.add(num2);
        tela.add(soma);
        tela.add(res1);
        tela.add(res2);
        tela.add(subtração);
        tela.add(multiplicação);
        tela.add(divisão);
        tela.add(limpar);
        tela.add(habilitar);
        tela.add(desabilitar);
        tela.add(ocultar);
        tela.add(exibir);
        tela.add(sair);
        
        limpar.setMnemonic(KeyEvent.VK_L);
        habilitar.setMnemonic(KeyEvent.VK_H);
        desabilitar.setMnemonic(KeyEvent.VK_D);
        ocultar.setMnemonic(KeyEvent.VK_O);
        exibir.setMnemonic(KeyEvent.VK_E);
        sair.setMnemonic(KeyEvent.VK_S);
        
        soma.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        Calcular('+');
                    }
                }
        );
        subtração.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        Calcular('-');
                    }
                }
        );
        
        multiplicação.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        Calcular('*');
                    }
                }
        );
        
        divisão.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        Calcular('/');
                    }
                }
        );
        
        limpar.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        num1.setText("");
                        num2.setText("");
                        res2.setText("");
                    }
                }
        );
        
        habilitar.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        res1.setEnabled(true);
                        res2.setEnabled(true);
                    }
                }
        );
        
        desabilitar.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        res1.setEnabled(false);
                        res2.setEnabled(false);
                    }
                }
        );
        
        ocultar.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        res1.setVisible(false);
                        res2.setVisible(false);
                    }
                }
        );
   
        exibir.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        res1.setVisible(true);
                        res2.setVisible(false);
                    }
                }
        );
        
        sair.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        System.exit(0);
                    }
                }
        );
        
        setVisible(true);
        setLocationRelativeTo(null);
    }
    
    private void Calcular(char op){
        Calculadora calc = new Calculadora();
     
        switch(op){
            case '+':
                double rso =calc.somar(num1, num2);
                res2.setText(String.valueOf(rso));
                break;
            case '-':
                double rsu = calc.subtração(num1, num2);
                res2.setText(String.valueOf(rsu));
                break;
            case '*':
                double rm = calc.multiplicar(num1, num2);
                res2.setText(String.valueOf(rm));
                break;
            case '/':
                if(num2.getText().equals("0")){
                    res2.setText("Não é possível dividir por zero");
                    break;
                }
                else{
                    double rd = calc.dividir(num1, num2);
                    res2.setText(String.valueOf(rd));
                    break;
                }

            default:
                res2.setText("Inválido");
                break;
        }
    }
    
    public static void main(String[] args) {
        Interface app = new Interface();
        app.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}