package com.mycompany.pj_12022025;

import javax.swing.JOptionPane;

public class SomaMultipl {
    public static void main(String[] args) {
        
        int SomaImpares = 0;
        long MultiplicacaoPares = 1;
        int i = 0;
        
            for(i = 0; i <= 30; i++){
                if(i % 2 == 0){
                    MultiplicacaoPares *= i;
                }   
                else{
                    SomaImpares += i;
                }
            }
        JOptionPane.showMessageDialog(null, "Multiplicação dos números pares até 30: " + MultiplicacaoPares);
        JOptionPane.showMessageDialog(null, "Soma dos números impares até 30: " + SomaImpares);        
        
    }
}