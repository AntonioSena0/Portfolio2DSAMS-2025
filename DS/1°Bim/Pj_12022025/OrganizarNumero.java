package com.mycompany.pj_12022025;

import java.util.Scanner;
import javax.swing.JOptionPane;

public class OrganizarNumero {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        
        int n1 = Integer.parseInt(JOptionPane.showInputDialog(null, "DIgite o primeiro número"));
        int n2 = Integer.parseInt(JOptionPane.showInputDialog(null,"Digite o segundo número"));
        int n3 = Integer.parseInt(JOptionPane.showInputDialog(null,"Digite o terceiro número"));
       
        if(n1 > n2 && n1 > n3 && n2 > n3)
        {
            JOptionPane.showMessageDialog(null, "1° = " + n1 + " / 2° = " + n2 + " / 3° = " + n3);
        }
        if (n1 > n2 && n1 > n3 && n2 < n3)
        {
            JOptionPane.showMessageDialog(null, "1° = " + n1 + " / 2° = " + n3 + " / 3° = " + n2);
        }
        if (n1 < n2 && n1 > n3 && n2 > n3)
        {
            JOptionPane.showMessageDialog(null, "1° = " + n2 + " / 2° = " + n1 + " / 3° = " + n3);
        }
        if (n1 < n2 && n1 < n3 && n2 > n3)
        {
            JOptionPane.showMessageDialog(null, "1° = " + n2 + " / 2° = " + n3 + " / 3° = " + n1);
        }
        if (n1 > n2 && n1 < n3 && n2 < n3)
        {
            JOptionPane.showMessageDialog(null, "1° = " + n3 + " / 2° = " + n1 + " / 3° = " + n2);
        }
        else if (n1 < n2 && n1 < n3 && n2 < n3)
        {
            JOptionPane.showMessageDialog(null, "1° = " + n3 + " / 2° = " + n2 + " / 3° = " + n1);
        }
        
    }
}
