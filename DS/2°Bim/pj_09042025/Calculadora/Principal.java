package pj_09042025.Calculadora;

import javax.swing.JOptionPane;

public class Principal {

    public static void main(String[] args) {

        Calculadora calc = new Calculadora();

        int op;

        do {
            op = Integer.parseInt(JOptionPane.showInputDialog(
"Digite: \n 1- Soma \n 2- Subtração \n 3- Multiplicação \n 4- Divisão \n 5- Potênciação \n 6- Raiz Quadrado \n 0- Sair"));
            
            switch (op) {

                case 1:
                    calc.somar();
                    break;
                case 2:
                    double n1 = Double.parseDouble(JOptionPane.showInputDialog("Insira o primeiro número"));
                    double n2 = Double.parseDouble(JOptionPane.showInputDialog("Insira o segundo número"));
                    calc.subtração(n1, n2);
                    break;
                case 3:
                    double res = calc.multiplicar();
                    JOptionPane.showMessageDialog(null, "Resultado: " + res);
                    break;
                case 4:
                    double num1 = Double.parseDouble(JOptionPane.showInputDialog("Insira o primeiro número"));
                    double num2 = Double.parseDouble(JOptionPane.showInputDialog("Insira o segundo número"));

                    if (num2 == 0) {
                        JOptionPane.showMessageDialog(null, "Impossível dividir por 0");
                        break;
                    } else {
                        double result = calc.dividir(num1, num2);
                        JOptionPane.showMessageDialog(null, "Resultado: " + result);
                        break;
                    }
                case 5:
                    double nume1 = Double.parseDouble(JOptionPane.showInputDialog("Insira a base"));
                    double nume2 = Double.parseDouble(JOptionPane.showInputDialog("Insira o expoente"));
                    double resul = calc.Potenciação(nume1, nume2);
                    JOptionPane.showMessageDialog(null, "Resultado: " + resul);
                     break;

                case 6:
                    double numero1 = Double.parseDouble(JOptionPane.showInputDialog("Insira o número"));
                    double resultado = calc.RaizQuadrada(numero1);
                    JOptionPane.showMessageDialog(null, "Resultado: " + resultado);
                    break;
                case 0:
                    JOptionPane.showMessageDialog(null, "Encerrando...");
                    break;

                default:
                    JOptionPane.showMessageDialog(null, "Inválido");
                    break;
                    
            }

            } while (op != 0);
    }
}
