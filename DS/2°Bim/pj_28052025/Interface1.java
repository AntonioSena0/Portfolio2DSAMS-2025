import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.FocusAdapter;
import java.awt.event.FocusEvent;
import java.awt.event.KeyEvent;
import javax.swing.*;

public class Interface1 extends JFrame {
    JRadioButton opcao1, opcao2, opcao3, opcao4, opcao5, opcao6;
    JLabel labelNome, labelMatricula, labelDados, labelRestricoes, Cabecalho;
    JTextField nome, matricula;
    JTextArea  restricaoMed;
    JScrollPane scrollRestricoes;
    JButton limpar, Enviar, sair;
    JComboBox<String> TurnoCombo;

    public Interface1() {
        super("Cadastro Alunos");
        Container tela = getContentPane();
        setSize(900, 700);
        setLayout(null);
        
        tela.setBackground(Color.BLUE);
        
        labelNome = new JLabel("Nome:");
        labelMatricula = new JLabel("Matrícula:");
        labelDados = new JLabel("Informe os dados do seu curso:");
        labelRestricoes = new JLabel("Restrições Médicas:");
        Cabecalho = new JLabel("Dados Cadastrais do Aluno");
        
        nome = new JTextField(50);
        matricula = new JTextField(5);
        restricaoMed = new JTextArea();
        scrollRestricoes = new JScrollPane(restricaoMed);
        
        opcao1 = new JRadioButton("Etim");
        opcao2 = new JRadioButton("Mtec");
        opcao3 = new JRadioButton("Técnico");
        opcao4 = new JRadioButton("1° Série");
        opcao5 = new JRadioButton("2° Série");
        opcao6 = new JRadioButton("3° Série");
        
        ButtonGroup grupoModalidades = new ButtonGroup();
        grupoModalidades.add(opcao1);
        grupoModalidades.add(opcao2);
        grupoModalidades.add(opcao3);
        
        ButtonGroup grupoSerie = new ButtonGroup();
        grupoSerie.add(opcao4);
        grupoSerie.add(opcao5);
        grupoSerie.add(opcao6);
        
        limpar = new JButton("Limpar");
        Enviar = new JButton("Apresentar Dados");
        sair = new JButton("Sair");
        
        String[] Turnos = {"Matutino", "Vespertino", "Noturno"};
        TurnoCombo = new JComboBox<>(Turnos);
        
        scrollRestricoes.setHorizontalScrollBarPolicy(JScrollPane.HORIZONTAL_SCROLLBAR_ALWAYS);
        scrollRestricoes.setVerticalScrollBarPolicy(JScrollPane.VERTICAL_SCROLLBAR_ALWAYS);
        
        Cabecalho.setBounds(300, 20, 300, 20);
        
        labelNome.setBounds(50, 50, 80, 20);
        nome.setBounds(180, 50, 150, 20);
        
        labelMatricula.setBounds(50, 80, 150, 20);
        matricula.setBounds(180, 80, 150, 20);
        
        labelRestricoes.setBounds(50, 400, 200, 20);
        scrollRestricoes.setBounds(240, 400, 200, 100);
        
        labelDados.setBounds(50, 160, 300, 20);
        opcao1.setBounds(50, 200, 100, 30);
        opcao2.setBounds(50, 250, 100, 30);
        opcao3.setBounds(50, 300, 100, 30);
        opcao4.setBounds(200, 200, 100, 30);
        opcao5.setBounds(200, 250, 100, 30);
        opcao6.setBounds(200, 300, 100, 30);
        TurnoCombo.setBounds(350, 200, 100, 20);
        
        limpar.setBounds(360, 600, 150, 20);
        Enviar.setBounds(100, 600, 150, 20);
        sair.setBounds(620, 600, 150, 20);
        
        labelNome.setForeground(Color.WHITE);
        labelMatricula.setForeground(Color.WHITE);
        labelDados.setForeground(Color.WHITE);
        labelRestricoes.setForeground(Color.WHITE);
        Cabecalho.setForeground(Color.WHITE);
        
        limpar.setBackground(Color.DARK_GRAY);
        limpar.setForeground(Color.WHITE);
        
        Enviar.setBackground(Color.DARK_GRAY);
        Enviar.setForeground(Color.WHITE);
        
        sair.setBackground(Color.DARK_GRAY);
        sair.setForeground(Color.WHITE);
        
        opcao1.setBackground(Color.BLUE);
        opcao1.setForeground(Color.WHITE);
        opcao2.setBackground(Color.BLUE);
        opcao2.setForeground(Color.WHITE);
        opcao3.setBackground(Color.BLUE);
        opcao3.setForeground(Color.WHITE);
        opcao4.setBackground(Color.BLUE);
        opcao4.setForeground(Color.WHITE);
        opcao5.setBackground(Color.BLUE);
        opcao5.setForeground(Color.WHITE);
        opcao6.setBackground(Color.BLUE);
        opcao6.setForeground(Color.WHITE);
        
        nome.setBorder(BorderFactory.createLineBorder(Color.BLACK, 2));
        matricula.setBorder(BorderFactory.createLineBorder(Color.BLACK, 2));
        restricaoMed.setBorder(BorderFactory.createLineBorder(Color.BLACK, 2));
        TurnoCombo.setBorder(BorderFactory.createLineBorder(Color.BLACK, 1));
        TurnoCombo.setBackground(Color.WHITE);
        TurnoCombo.setForeground(Color.BLACK);
        
        labelNome.setFont(new Font("Arial", Font.BOLD, 18));
        labelMatricula.setFont(new Font("Arial", Font.BOLD, 18));
        labelDados.setFont(new Font("Arial", Font.BOLD, 18));
        labelRestricoes.setFont(new Font("Arial", Font.BOLD, 18));
        Cabecalho.setFont(new Font("Arial", Font.BOLD, 18));
        
        opcao1.setFont(new Font("Arial", Font.BOLD, 16));
        opcao2.setFont(new Font("Arial", Font.BOLD, 16));
        opcao3.setFont(new Font("Arial", Font.BOLD, 16));
        opcao4.setFont(new Font("Arial", Font.BOLD, 16));
        opcao5.setFont(new Font("Arial", Font.BOLD, 16));
        opcao6.setFont(new Font("Arial", Font.BOLD, 16));
        
        nome.setText("Insira o seu nome...");
        nome.setForeground(Color.GRAY);
        matricula.setText("Insira sua matrícula...");
        matricula.setForeground(Color.GRAY);
        
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

        matricula.addFocusListener(new FocusAdapter() {
            public void focusGained(FocusEvent e) {
                if (matricula.getText().equals("Insira sua matrícula...")) {
                    matricula.setText("");
                    matricula.setForeground(Color.BLACK);
                }
            }
            public void focusLost(FocusEvent e) {
                if (matricula.getText().isEmpty()) {
                    matricula.setForeground(Color.GRAY);
                    matricula.setText("Insira sua matrícula...");
                }
            }
        });

        tela.add(labelNome);
        tela.add(nome);
        tela.add(labelMatricula);
        tela.add(matricula);
        tela.add(labelDados);
        tela.add(opcao1);
        tela.add(opcao2);
        tela.add(opcao3);
        tela.add(opcao4);
        tela.add(opcao5);
        tela.add(opcao6);
        tela.add(labelRestricoes);
        tela.add(scrollRestricoes);
        tela.add(Cabecalho);
        tela.add(TurnoCombo);
        tela.add(limpar);
        tela.add(Enviar);
        tela.add(sair);
        
        limpar.setMnemonic(KeyEvent.VK_L);
        Enviar.setMnemonic(KeyEvent.VK_A);
        sair.setMnemonic(KeyEvent.VK_S);
        
        limpar.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                nome.setForeground(Color.GRAY);
                nome.setText("Insira o seu nome...");
                matricula.setForeground(Color.GRAY);
                matricula.setText("Insira sua matrícula...");
                restricaoMed.setText("");
                opcao1.setSelected(false);
                opcao2.setSelected(false);
                opcao3.setSelected(false);
                opcao4.setSelected(false);
                opcao5.setSelected(false);
                opcao6.setSelected(false);
            }
        });
        
        Enviar.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                String curso, serie;
                
                String nomee = nome.getText();
                String matric = matricula.getText();
                String restrMed = restricaoMed.getText();
                String trn = TurnoCombo.getSelectedItem().toString();
                
                if(nomee.equals("Insira o seu nome...") || nomee.isEmpty() ||
                   matric.equals("Insira sua matrícula...") || matric.isEmpty() ||
                   (!opcao1.isSelected() && !opcao2.isSelected() && !opcao3.isSelected()) ||
                   (!opcao4.isSelected() && !opcao5.isSelected() && !opcao6.isSelected()) ||
                   restrMed.isEmpty()
                        ) {
                    JOptionPane.showMessageDialog(null, "Por favor, preencha todos os campos e selecione as opções.");
                    return;
                }
                
                if(opcao1.isSelected()){
                    serie = opcao1.getText();
                }
                else{
                    if(opcao2.isSelected()){
                        serie = opcao2.getText();
                    }
                    else{
                        serie = opcao3.getText();
                    }
                }
                
                if(opcao4.isSelected()){
                    curso = opcao4.getText();
                }
                else{
                    if(opcao5.isSelected()){
                        curso = opcao5.getText();
                    }
                    else{
                        curso = opcao6.getText();
                    }
                }
                
                Interface2 mostrar = new Interface2(nomee, matric, serie, curso, restrMed, trn);
                mostrar.setVisible(true);
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

    public static void main(String[] args) {
        Interface1 app = new Interface1();
        app.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}