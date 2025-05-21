package pj_09042025.NumPrimos;

import javax.swing.JOptionPane;

public class Principal {
    public static void main(String[] args) {
        
        NumPrimos np = new NumPrimos();
        
        int op;
        do {
            op = Integer.parseInt(JOptionPane.showInputDialog("1- Verificar se é primo \n 0- Sair"));
            
            switch (op) {

                case 1:
                    double n = Double.parseDouble(JOptionPane.showInputDialog("Digite o número"));
                    np.Verificar(n);
                    break;
                case 0:
                    JOptionPane.showMessageDialog(null, "Encerrando...");
                    break;
                default:
                    JOptionPane.showMessageDialog(null, "Inválido");
                    break;
            }    
        } while( op != 0);
        
        }
    }
