package com.mycompany.pj_12022025;

import javax.swing.JOptionPane;

public class Media {
    public static void main(String[] args) {
        
        String nome = JOptionPane.showInputDialog(null, "Qual é o seu nome?" );
        double n1 = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira a primeira nota"));
        double n2 = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira a segunda nota"));
        double n3 = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira a terceira nota"));
        double n4 = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira a quarta nota"));
        
        double media = (n1 + n2 + n3 + n4)/4;
        
        JOptionPane.showMessageDialog(null, "O aluno " + nome + " obteve a média: " + media);
    }
}
