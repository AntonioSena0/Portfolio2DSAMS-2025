package com.mycompany.pj_12022025;

import javax.swing.JOptionPane;

public class NumeroDecrescente {
    public static void main(String[] args) {
        
        int numero = Integer.parseInt(JOptionPane.showInputDialog("Digite um número"));
        
        int i = 0;
                
        while(numero >= i)
        {
            JOptionPane.showMessageDialog(null, numero);
            numero--;
      }
        
    }
}
