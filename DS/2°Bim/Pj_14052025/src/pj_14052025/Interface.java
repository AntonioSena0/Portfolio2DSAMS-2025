package Pj_14052025;

import java.awt.*;  
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyEvent;
import javax.swing.*;

public class Interface extends JFrame{
    JCheckBox primeira, segunda, terceira, quarta;
    JRadioButton masculino, feminino;
    JLabel t1, t2, res1, res2;
    JTextField nome, idade;
    JButton soma, subtração, multiplicacao, divisão, limpar, Enviar, sair;
    ButtonGroup grupo;
    public Interface(){
    super("Calculadora");
    Container tela = getContentPane();
    setSize(800, 600);
    setLayout(null);
        t1 = new JLabel("Nome");
        t2 = new JLabel("Idade");
        nome = new JTextField(50);
        idade = new JTextField(3);
        masculino = new JRadioButton("Masculino");
        feminino = new JRadioButton("Feminino");
        limpar = new JButton("Limpar");
        Enviar = new JButton("Enviar");
        sair = new JButton("Sair");
        res1 = new JLabel("Dados");
        res2 = new JLabel("");
        
        t1.setBounds(50,20,80,20);
        t2.setBounds(50,80,80,20);
        nome.setBounds(130,20,150,20);
        idade.setBounds(130,80,150,20);
        primeira.setBounds(180, 130, 150, 20);
        segunda.setBounds(230, 150, 150, 20);
        res1.setBounds(50, 130, 150, 20);
        res2.setBounds(190, 130, 400, 20);
        Enviar.setBounds(50,200,150,20);
        sair.setBounds(500,250,150,20);
        res1.setForeground(Color.RED);
        res2.setForeground(Color.RED);
        t1.setFont(new Font("Arial",Font.BOLD,14));
        t2.setFont(new Font("Arial",Font.BOLD,14));
        res1.setFont(new Font("Arial",Font.BOLD,18));
        res2.setFont(new Font("Arial",Font.BOLD,18));
        
        tela.add(t1);
        tela.add(t2);
        tela.add(nome);
        tela.add(idade);
        tela.add(primeira);
        tela.add(segunda);
        tela.add(res1);
        tela.add(res2);
        tela.add(limpar);
        tela.add(Enviar);
        tela.add(sair);
        
        limpar.setMnemonic(KeyEvent.VK_L);
        Enviar.setMnemonic(KeyEvent.VK_E);
        sair.setMnemonic(KeyEvent.VK_S);
        
        limpar.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        nome.setText("");
                        idade.setText("");
                        res2.setText("");
                    }
                }
        );
        
        Enviar.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        
                        Dados();
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
    
    private void Dados(){
        DadosPessoais dds = new DadosPessoais();
        if(primeira.isSelected() == true){
            String dados = dds.EnviarDados(nome, idade, masculino, interesses, Estado_Civil);
            res2.setText(String.valueOf(dados));
        }
        else{
            String dados = dds.EnviarDados(nome, idade, feminino, interesses, Estado_Civil);
            res2.setText(String.valueOf(dados));
        }
    }

    public static void main(String[] args) {
        Interface app = new Interface();
        app.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}