package com.mycompany.pj_12022025;

import javax.swing.JOptionPane;

public class ComparaNumero {
    public static void main(String[] args) {
        
        double NumA = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira o primeiro número"));
        double NumB = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira o segundo número"));
        
        if(NumA == NumB){
            JOptionPane.showMessageDialog(null, "Os números são iguais: " + NumA + " = " + NumB);
        }
        if(NumA > NumB){
            JOptionPane.showMessageDialog(null, "Os números são diferentes: " + NumA + " > " + NumB);
        }
        if(NumB > NumA){
            JOptionPane.showMessageDialog(null, "Os números são diferentes: " + NumB + " < " + NumA);
        }
        
    }
}
