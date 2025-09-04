package Controle;

import conexao.Conexão;
import java.sql.SQLException;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class InterfaceLogin extends JFrame {
    Conexão con_cliente;
    Container tela;
    JLabel lblUsuario, lblSenha;
    JTextField txtUsuario;
    JPasswordField txtSenha;
    JButton btnLogar;

    private int tentativas = 0;

    public InterfaceLogin() {
        super("Login de Acesso");

        con_cliente = new Conexão();
        con_cliente.conecta();

        tela = getContentPane();
        tela.setLayout(null);
        tela.setBackground(new Color(34, 40, 49));

        setSize(400, 250);
        setLocationRelativeTo(null);

        lblUsuario = new JLabel("Usuário:");
        lblSenha = new JLabel("Senha:");
        txtUsuario = new JTextField();
        txtSenha = new JPasswordField();
        btnLogar = new JButton("Logar");

        lblUsuario.setBounds(50, 50, 100, 25);
        txtUsuario.setBounds(150, 50, 180, 25);

        lblSenha.setBounds(50, 100, 100, 25);
        txtSenha.setBounds(150, 100, 180, 25);

        btnLogar.setBounds(150, 150, 100, 30);

        lblUsuario.setForeground(Color.WHITE);
        lblSenha.setForeground(Color.WHITE);

        btnLogar.setBackground(new Color(70, 90, 100));
        btnLogar.setForeground(Color.WHITE);

        tela.add(lblUsuario);
        tela.add(txtUsuario);
        tela.add(lblSenha);
        tela.add(txtSenha);
        tela.add(btnLogar);

        btnLogar.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                RealizarLogin();
            }
        });

        setVisible(true);
    }

    private void RealizarLogin() {
        try {
            String usuario = txtUsuario.getText();
            String senha = new String(txtSenha.getPassword());
            String pesquisa = "select * from tblusuario where usuario like '" + usuario + "' && senha = '" + senha + "'";
            con_cliente.executaSQL(pesquisa);
            if (con_cliente.resultset.first()) {
                Interface app = new Interface();
                app.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                dispose();
            } else {
                tentativas++;
                if (tentativas >= 3) {
                    JOptionPane.showMessageDialog(null, "Número máximo de tentativas atingido!\nO sistema será encerrado.", "Acesso negado", JOptionPane.ERROR_MESSAGE);
                    System.exit(0);
                } else {
                    JOptionPane.showMessageDialog(null, "Usuário ou senha inválidos!\nTentativa " + tentativas + " de 3.", "Mensagem do Programa", JOptionPane.WARNING_MESSAGE);
                    txtSenha.setText("");
                    txtSenha.requestFocus();
                }
            }
        } catch (SQLException errosql) {
            JOptionPane.showMessageDialog(null, "\n Os dados digitados não foram localizados!! :\n" + errosql, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
        }
    }

    public static void main(String[] args) {
        InterfaceLogin login = new InterfaceLogin();
        login.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}