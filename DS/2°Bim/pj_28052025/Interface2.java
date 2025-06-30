import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyEvent;
import javax.swing.*;

public class Interface2 extends JFrame {
    JLabel labelNome, labelMatricula, labelDados1, labelDados2, labelDados3, labelRestricoes, nome, matricula, crs, srie, turno, restricoes;
    JButton Voltar, sair;
    public Interface2(String nm, String matric, String serie, String curso, String restrMed, String trn) {
        super("Dados");
        Container tela = getContentPane();
        setSize(900, 700);
        setLayout(null);
        
        tela.setBackground(Color.BLUE);
        
        labelNome = new JLabel("Nome:");
        labelMatricula = new JLabel("Matrícula:");
        labelDados1 = new JLabel("Curso:");
        labelDados2 = new JLabel("Série:");
        labelDados3 = new JLabel("Período:");
        labelRestricoes = new JLabel("Restrições Médicas:");

        nome = new JLabel();
        matricula = new JLabel();
        crs = new JLabel();
        srie = new JLabel();
        turno = new JLabel();
        restricoes = new JLabel();

        nome.setText(nm);
        matricula.setText(matric);
        crs.setText(curso);
        srie.setText(serie);
        turno.setText(trn);
        restricoes.setText(restrMed);
        
        Voltar = new JButton("Voltar");
        sair = new JButton("Sair");
        
        labelNome.setBounds(50, 50, 80, 20);
        nome.setBounds(115, 50, 150, 20);
        
        labelMatricula.setBounds(50, 80, 150, 20);
        matricula.setBounds(140, 80, 150, 20);
        
        labelRestricoes.setBounds(50, 400, 200, 20);
        restricoes.setBounds(235, 400, 650, 20);
        
        labelDados1.setBounds(50, 200, 100, 30);
        labelDados2.setBounds(50, 250, 100, 30);
        labelDados3.setBounds(50, 300, 100, 30);
        crs.setBounds(115, 200, 100, 30);
        srie.setBounds(105, 250, 100, 30);
        turno.setBounds(130, 300, 100, 30);
        
        Voltar.setBounds(100, 600, 150, 20);
        sair.setBounds(620, 600, 150, 20);
        
        labelNome.setForeground(Color.WHITE);
        nome.setForeground(Color.WHITE);
        labelMatricula.setForeground(Color.WHITE);
        matricula.setForeground(Color.WHITE);
        labelDados1.setForeground(Color.WHITE);
        labelDados2.setForeground(Color.WHITE);
        labelDados3.setForeground(Color.WHITE);
        crs.setForeground(Color.WHITE);
        srie.setForeground(Color.WHITE);
        turno.setForeground(Color.WHITE);
        labelRestricoes.setForeground(Color.WHITE);
        restricoes.setForeground(Color.WHITE);
       
        Voltar.setBackground(Color.DARK_GRAY);
        Voltar.setForeground(Color.WHITE);
        
        sair.setBackground(Color.DARK_GRAY);
        sair.setForeground(Color.WHITE);
        
        labelNome.setFont(new Font("Arial", Font.BOLD, 18));
        nome.setFont(new Font("Arial", Font.PLAIN, 18));
        labelMatricula.setFont(new Font("Arial", Font.BOLD, 18));
        matricula.setFont(new Font("Arial", Font.PLAIN, 18));
        labelDados1.setFont(new Font("Arial", Font.BOLD, 18));
        labelDados2.setFont(new Font("Arial", Font.BOLD, 18));
        labelDados3.setFont(new Font("Arial", Font.BOLD, 18));
        crs.setFont(new Font("Arial", Font.PLAIN, 18));
        srie.setFont(new Font("Arial", Font.PLAIN, 18));
        turno.setFont(new Font("Arial", Font.PLAIN, 18));
        labelRestricoes.setFont(new Font("Arial", Font.BOLD, 18));
        restricoes.setFont(new Font("Arial", Font.PLAIN, 18));
        
        tela.add(labelNome);
        tela.add(nome);
        tela.add(labelMatricula);
        tela.add(matricula);
        tela.add(labelDados1);
        tela.add(labelDados2);
        tela.add(labelDados3);
        tela.add(crs);
        tela.add(srie);
        tela.add(turno);
        tela.add(labelRestricoes);
        tela.add(restricoes);
        tela.add(Voltar);
        tela.add(sair);

        Voltar.setMnemonic(KeyEvent.VK_V);
        sair.setMnemonic(KeyEvent.VK_S);
        
        Voltar.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                Interface1 app = new Interface1();
                dispose();
            }
        });
        
        sair.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                System.exit(0);
            }
        });
        
        setVisible(true);
        setLocationRelativeTo(null);
    }
}