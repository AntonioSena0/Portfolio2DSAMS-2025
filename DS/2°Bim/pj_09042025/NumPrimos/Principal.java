package pj_09042025.NumPrimos;

import javax.swing.JOptionPane;

public class Principal {
    public static void main(String[] args) {
        
        NumPrimos np = new NumPrimos();
        
        double n = Double.parseDouble(JOptionPane.showInputDialog("Digite o número"));
        np.Verificar(n);
        
    }
}
