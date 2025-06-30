import java.awt.*;  
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.FocusAdapter;
import java.awt.event.FocusEvent;
import java.awt.event.KeyEvent;
import javax.swing.*;

public class Interface extends JFrame {
    JCheckBox primeira, segunda, terceira;
    JRadioButton masculino, feminino;
    JLabel labelNome, labelIdade, labelSexo, labelInteresses, labelEstadoCivil, res1, res2;
    JTextField nome, idade;
    JButton limpar, Enviar, sair;
    JComboBox<String> estadoCivilCombo;

    public Interface() {
        super("Dados Pessoais");
        Container tela = getContentPane();
        setSize(800, 600);
        setLayout(null);
        
        tela.setBackground(Color.RED);
        
        labelNome = new JLabel("Nome:");
        labelIdade = new JLabel("Idade:");
        labelSexo = new JLabel("Sexo:");
        labelInteresses = new JLabel("Interesses:");
        labelEstadoCivil = new JLabel("Estado civil:");
        
        nome = new JTextField(50);
        idade = new JTextField(3);
        
        masculino = new JRadioButton("Masculino");
        feminino = new JRadioButton("Feminino");
        ButtonGroup grupoSexo = new ButtonGroup();
        grupoSexo.add(masculino);
        grupoSexo.add(feminino);
        
        primeira = new JCheckBox("Automóveis");
        segunda = new JCheckBox("Barcos");
        terceira = new JCheckBox("Aviões");
        
        limpar = new JButton("Limpar");
        Enviar = new JButton("Enviar");
        sair = new JButton("Sair");
        
        res1 = new JLabel("Dados:");
        res2 = new JLabel("");
        
        String[] estadosCivis = {"Solteiro", "Casado", "Viúvo", "Divorciado"};
        estadoCivilCombo = new JComboBox<>(estadosCivis);
        
        labelNome.setBounds(50, 20, 80, 20);
        nome.setBounds(180, 20, 150, 20);
        
        labelIdade.setBounds(50, 60, 80, 20);
        idade.setBounds(180, 60, 150, 20);
        
        labelSexo.setBounds(50, 100, 80, 20);
        masculino.setBounds(180, 100, 100, 20);
        feminino.setBounds(280, 100, 100, 20);
        
        labelInteresses.setBounds(50, 130, 120, 20);
        primeira.setBounds(180, 130, 150, 20);
        segunda.setBounds(180, 160, 150, 20);
        terceira.setBounds(180, 190, 150, 20);
        
        labelEstadoCivil.setBounds(50, 220, 150, 20);
        estadoCivilCombo.setBounds(180, 220, 150, 20);
        
        res1.setBounds(50, 300, 150, 20);
        res2.setBounds(190, 300, 400, 110);
        
        limpar.setBounds(50, 500, 150, 20);
        Enviar.setBounds(200, 500, 150, 20);
        sair.setBounds(580, 500, 150, 20);
        
        labelNome.setForeground(Color.WHITE);
        labelIdade.setForeground(Color.WHITE);
        labelSexo.setForeground(Color.WHITE);
        labelInteresses.setForeground(Color.WHITE);
        labelEstadoCivil.setForeground(Color.WHITE);
        res1.setForeground(Color.WHITE);
        res2.setForeground(Color.WHITE);
        
        limpar.setBackground(Color.DARK_GRAY);
        limpar.setForeground(Color.WHITE);
        
        Enviar.setBackground(Color.DARK_GRAY);
        Enviar.setForeground(Color.WHITE);
        
        sair.setBackground(Color.DARK_GRAY);
        sair.setForeground(Color.WHITE);
        
        labelNome.setFont(new Font("Arial", Font.BOLD, 18));
        labelIdade.setFont(new Font("Arial", Font.BOLD, 18));
        labelSexo.setFont(new Font("Arial", Font.BOLD, 18));
        labelInteresses.setFont(new Font("Arial", Font.BOLD, 18));
        labelEstadoCivil.setFont(new Font("Arial", Font.BOLD, 18));
        res1.setFont(new Font("Arial", Font.BOLD, 18));
        res2.setFont(new Font("Arial", Font.BOLD, 18));
        
        nome.setText("Insira o seu nome...");
        idade.setText("Insira sua idade...");
        
        nome.addFocusListener(new FocusAdapter() {
            public void focusGained(FocusEvent e) {
                if (nome.getText().equals("Insira o seu nome...")) {
                    nome.setText("");
                    nome.setForeground(Color.BLACK);
                }
            }
            public void focusLost(FocusEvent e) {
                if (nome.getText().isEmpty()) {
                    nome.setForeground(Color.GRAY);
                    nome.setText("Insira o seu nome...");
                }
            }
        });

        idade.addFocusListener(new FocusAdapter() {
            public void focusGained(FocusEvent e) {
                if (idade.getText().equals("Insira sua idade...")) {
                    idade.setText("");
                    idade.setForeground(Color.BLACK);
                }
            }
            public void focusLost(FocusEvent e) {
                if (idade.getText().isEmpty()) {
                    idade.setForeground(Color.GRAY);
                    idade.setText("Insira sua idade...");
                }
            }
        });

        tela.add(labelNome);
        tela.add(nome);
        tela.add(labelIdade);
        tela.add(idade);
        tela.add(labelSexo);
        tela.add(masculino);
        tela.add(feminino);
        tela.add(labelInteresses);
        tela.add(primeira);
        tela.add(segunda);
        tela.add(terceira);
        tela.add(labelEstadoCivil);
        tela.add(estadoCivilCombo);
        tela.add(res1);
        tela.add(res2);
        tela.add(limpar);
        tela.add(Enviar);
        tela.add(sair);
        
        limpar.setMnemonic(KeyEvent.VK_L);
        Enviar.setMnemonic(KeyEvent.VK_E);
        sair.setMnemonic(KeyEvent.VK_S);
        
        limpar.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                nome.setText("");
                idade.setText("");
                res2.setText("");
                primeira.setSelected(false);
                segunda.setSelected(false);
                terceira.setSelected(false);
                masculino.setSelected(false);
                feminino.setSelected(false);
                estadoCivilCombo.setSelectedIndex(0);
            }
        });
        
        Enviar.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                Dados();
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
    
    public void Dados() {
        DadosPessoais dds = new DadosPessoais();
        
        String interesses = "";
        if (primeira.isSelected()) interesses += "Automóveis ";
        if (segunda.isSelected()) interesses += "Barcos ";
        if (terceira.isSelected()) interesses += "Aviões ";
        
        String sexo = masculino.isSelected() ? "Masculino" : "Feminino";
        String estadoCivil = (String) estadoCivilCombo.getSelectedItem();
        
        String dados = dds.enviarDados(nome.getText(), idade.getText(), sexo, interesses.trim(), estadoCivil);
        res2.setText(dados);
    }

    public static void main(String[] args) {
        Interface app = new Interface();
        app.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}