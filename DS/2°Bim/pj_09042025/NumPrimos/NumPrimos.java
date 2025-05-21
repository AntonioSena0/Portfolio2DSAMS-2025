package pj_09042025.NumPrimos;

import javax.swing.JOptionPane;

public class NumPrimos {
    private double num;
    private boolean p;

    public NumPrimos() {
        this(0.0, true);
    }

    public NumPrimos(double num, boolean p) {
        this.num = num;
        this.p = p;
    }

    public double getNum() {
        return num;
    }

    public void setNum(double num) {
        this.num = num;
    }

    public boolean getP() {
        return p;
    }

    public void setP(boolean p) {
        this.p = p;
    }
    
    
    
    public void Verificar(double num) {
        setNum(num);
        setP(true);
        
        if (getNum() < 2){
            JOptionPane.showMessageDialog(null, "O número não é primo");
        }
        else{
        
            for (int i = 2; i <= getNum() - 1; i++){
                if(getNum() % i == 0) {
                    setP(false);
                }
            }
        
            if(getP()){
                JOptionPane.showMessageDialog(null, "O número é primo");
            } 
            else{
                JOptionPane.showMessageDialog(null, "O número não é primo");
            }
        }
    }
}