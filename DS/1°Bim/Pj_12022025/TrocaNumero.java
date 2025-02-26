package com.mycompany.pj_12022025;

import javax.swing.JOptionPane;

public class TrocaNumero {
    public static void main(String[] args) {
        
        int Troca = 0;
       
        int NumA = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira o primeiro número"));
        int NumB = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira o segundo número"));
        
        Troca = NumA;
        NumA = NumB;
        NumB = Troca;
        
        if(NumB == NumA){
            JOptionPane.showMessageDialog(null, "Números Iguais, Inválido");
        }
        else if( NumB != NumA){
        JOptionPane.showMessageDialog(null, "Trocando Valores...");
        JOptionPane.showMessageDialog(null, "Numéro A: " + NumA + ", Numéro B: " + NumB);
    }
    }
}
