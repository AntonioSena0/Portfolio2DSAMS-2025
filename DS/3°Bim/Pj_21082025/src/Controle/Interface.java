package Controle;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.text.ParseException;
import javax.swing.text.MaskFormatter;
import javax.swing.table.DefaultTableModel;
import conexao.Conexão;
import javax.swing.JOptionPane;
import java.sql.*;

public class Interface extends JFrame {
    Conexão con_cliente;
    Container tela;
    JLabel lblCodigo, lblNome, lblData, lblTelefone, lblEmail, lblPesquisa;
    JTextField txtCodigo, txtNome, txtEmail, txtPesquisa;
    JFormattedTextField txtData, txtTelefone;
    JButton btnAcao, primeiro, anterior, proximo, ultimo, btnControle, btnPesquisar, btnNovoRegistro, btnSair;
    MaskFormatter mData, mTelefone;
    JTable tblClientes;
    JScrollPane scp_tabela;
    String[] funcoes = {"Gravar", "Alterar", "Excluir"};
    int indiceFuncao = 0;

    public Interface() {
        super("Formulário com BD");
        con_cliente = new Conexão();
        con_cliente.conecta();

        tela = getContentPane();
        tela.setLayout(null);
        tela.setBackground(new Color(34, 40, 49));

        setSize(800, 600);
        setLocationRelativeTo(null);

        criarCampos();
        con_cliente.executaSQL("select * from tbclientes order by cod");
        preencherTabela();
        posicionarRegistro();
        
        setVisible(true);
    }

    public void preencherTabela() {
        tblClientes.getColumnModel().getColumn(0).setPreferredWidth(4);
        tblClientes.getColumnModel().getColumn(1).setPreferredWidth(150);
        tblClientes.getColumnModel().getColumn(2).setPreferredWidth(40);
        tblClientes.getColumnModel().getColumn(3).setPreferredWidth(40);
        tblClientes.getColumnModel().getColumn(4).setPreferredWidth(100);

        DefaultTableModel modelo = (DefaultTableModel) tblClientes.getModel();
        modelo.setNumRows(0);

        try {
            con_cliente.resultset.beforeFirst();
            while (con_cliente.resultset.next()) {
                modelo.addRow(new Object[]{
                    con_cliente.resultset.getString("cod"),
                    con_cliente.resultset.getString("nome"),
                    con_cliente.resultset.getString("dt_nasc"),
                    con_cliente.resultset.getString("telefone"),
                    con_cliente.resultset.getString("email")
                });
            }
        } catch(SQLException erro) {
            JOptionPane.showMessageDialog(null, "\n Erro ao listar dados da tabela!! :\n " + erro, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
        }
    }

    public void posicionarRegistro() {
        try {
            con_cliente.resultset.first();
            mostrar_Dados();
        } catch(SQLException erro) {
            JOptionPane.showMessageDialog(null, "Não foi possível posicionar ao primeiro registro: " + erro, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
        }
    }
    
    public void mostrar_Dados() {
        try {
            txtCodigo.setText(con_cliente.resultset.getString("cod"));
            txtNome.setText(con_cliente.resultset.getString("nome"));
            txtData.setText(con_cliente.resultset.getString("dt_nasc"));
            txtTelefone.setText(con_cliente.resultset.getString("telefone"));
            txtEmail.setText(con_cliente.resultset.getString("email"));
        } catch(SQLException erro) {
            JOptionPane.showMessageDialog(null, "Não localizou dados: " + erro, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
        }
    }

    private void criarCampos() {
        lblCodigo = new JLabel("Código:");
        lblNome = new JLabel("Nome:");
        lblData = new JLabel("Data:");
        lblTelefone = new JLabel("Telefone:");
        lblEmail = new JLabel("E-mail:");
        lblPesquisa = new JLabel("Pesquisar:");

        txtCodigo = new JTextField();
        txtNome = new JTextField();
        txtEmail = new JTextField();
        txtPesquisa = new JTextField();
        
        tblClientes = new javax.swing.JTable();
        scp_tabela = new javax.swing.JScrollPane();
        
        try {
            mData = new MaskFormatter("##/##/####");
            mTelefone = new MaskFormatter("(##)####-####");
            txtData = new JFormattedTextField(mData);
            txtTelefone = new JFormattedTextField(mTelefone);
        } catch(ParseException e) {
            e.printStackTrace();
        }

        btnAcao = new JButton();
        atualizarBotaoAcao();
        btnNovoRegistro = new JButton("Novo Registro");
        primeiro = new JButton("Primeiro");
        anterior = new JButton("Anterior");
        proximo = new JButton("Próximo");
        ultimo = new JButton("Último");
        btnControle = new JButton("Alterar Função");
        btnPesquisar = new JButton("Pesquisar");
        btnSair = new JButton("Sair");

        lblCodigo.setBounds(30, 30, 100, 25);
        txtCodigo.setBounds(150, 30, 100, 25);

        lblNome.setBounds(30, 70, 100, 25);
        txtNome.setBounds(150, 70, 200, 25);

        lblData.setBounds(30, 110, 100, 25);
        txtData.setBounds(150, 110, 100, 25);

        lblTelefone.setBounds(30, 150, 100, 25);
        txtTelefone.setBounds(150, 150, 125, 25);

        lblEmail.setBounds(30, 190, 100, 25);
        txtEmail.setBounds(150, 190, 250, 25);

        lblPesquisa.setBounds(30, 250, 100, 25);
        txtPesquisa.setBounds(150, 250, 200, 25);
        btnPesquisar.setBounds(360, 250, 100, 25);
        
        scp_tabela.setBounds(30, 300, 600, 200);
        tblClientes.setBounds(30, 300, 600, 200);

        btnAcao.setBounds(500, 110, 150, 30);
        btnNovoRegistro.setBounds(500, 70, 150, 30);
        primeiro.setBounds(30, 510, 100, 30);
        anterior.setBounds(140, 510, 100, 30);
        proximo.setBounds(250, 510, 100, 30);
        ultimo.setBounds(360, 510, 100, 30);
        btnControle.setBounds(500, 150, 150, 30);
        btnSair.setBounds(670, 510, 100, 30);

        lblCodigo.setVisible(false);
        txtCodigo.setVisible(false);
        
        lblCodigo.setForeground(Color.WHITE);
        lblNome.setForeground(Color.WHITE);
        lblData.setForeground(Color.WHITE);
        lblTelefone.setForeground(Color.WHITE);
        lblEmail.setForeground(Color.WHITE);
        lblPesquisa.setForeground(Color.WHITE);
        
        txtCodigo.setBackground(new Color(50, 60, 70));
        txtNome.setBackground(new Color(50, 60, 70));
        txtEmail.setBackground(new Color(50, 60, 70));
        txtPesquisa.setBackground(new Color(50, 60, 70));
        txtData.setBackground(new Color(50, 60, 70));
        txtTelefone.setBackground(new Color(50, 60, 70));
        
        txtCodigo.setForeground(Color.WHITE);
        txtNome.setForeground(Color.WHITE);
        txtEmail.setForeground(Color.WHITE);
        txtPesquisa.setForeground(Color.WHITE);
        txtData.setForeground(Color.WHITE);
        txtTelefone.setForeground(Color.WHITE);
        
        btnAcao.setBackground(new Color(70, 90, 100));
        btnNovoRegistro.setBackground(new Color(70, 90, 100));
        primeiro.setBackground(new Color(70, 90, 100));
        anterior.setBackground(new Color(70, 90, 100));
        proximo.setBackground(new Color(70, 90, 100));
        ultimo.setBackground(new Color(70, 90, 100));
        btnControle.setBackground(new Color(70, 90, 100));
        btnPesquisar.setBackground(new Color(70, 90, 100));
        btnSair.setBackground(new Color(70, 90, 100));
       
        btnAcao.setForeground(Color.WHITE);
        btnNovoRegistro.setForeground(Color.WHITE);
        primeiro.setForeground(Color.WHITE);
        anterior.setForeground(Color.WHITE);
        proximo.setForeground(Color.WHITE);
        ultimo.setForeground(Color.WHITE);
        btnControle.setForeground(Color.WHITE);
        btnPesquisar.setForeground(Color.WHITE);
        btnSair.setForeground(Color.WHITE);
        
        tela.add(lblCodigo);
        tela.add(txtCodigo);
        tela.add(lblNome);
        tela.add(txtNome);
        tela.add(lblData);
        tela.add(txtData);
        tela.add(lblTelefone);
        tela.add(txtTelefone);
        tela.add(lblEmail);
        tela.add(txtEmail);
        tela.add(lblPesquisa);
        tela.add(txtPesquisa);
        tela.add(btnPesquisar);
        tela.add(scp_tabela);
        tela.add(btnAcao);
        tela.add(primeiro);
        tela.add(anterior);
        tela.add(proximo);
        tela.add(ultimo);
        tela.add(btnControle);        
        tela.add(btnNovoRegistro);
        tela.add(btnSair);
        
        tblClientes.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        tblClientes.setFont(new java.awt.Font("Arial", 1, 12));
        
        tblClientes.setModel(new javax.swing.table.DefaultTableModel(
            new Object[][] {
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null}
            },
            new String[] {"Codigo", "Nome", "Nascimento", "Telefone", "Email"}
        ) {
            boolean[] canEdit = new boolean[] {false, false, false, false, false};
        public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit[columnIndex];
            }
        });
        
        scp_tabela.setViewportView(tblClientes);
        tblClientes.setAutoCreateRowSorter(true);

        primeiro.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                try {
                    con_cliente.resultset.first();
                    mostrar_Dados();
                } catch(SQLException erro) {
                    JOptionPane.showMessageDialog(null, "Não foi possível acessar o primeiro registro " + erro, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
                }
            }
        });

        anterior.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                try {
                    if (con_cliente.resultset.previous()) {
                        mostrar_Dados();
                    } else {
                        JOptionPane.showMessageDialog(null, "Você já está no primeiro registro.");
                        con_cliente.resultset.first();
                        mostrar_Dados();
                    }
                } catch(SQLException erro) {
                    JOptionPane.showMessageDialog(null, "Não foi possível acessar o registro anterior :" + erro, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
                }
            }
        });

        proximo.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                try {
                    if (con_cliente.resultset.next()) {
                        mostrar_Dados();
                    } else {
                        JOptionPane.showMessageDialog(null, "Você já está no último registro.");
                        con_cliente.resultset.last();
                        mostrar_Dados();
                    }
                } catch(SQLException erro) {
                    JOptionPane.showMessageDialog(null, "Não foi possível acessar o próximo registro :" + erro, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
                }
            }
        });

        ultimo.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                try {
                    con_cliente.resultset.last();
                    mostrar_Dados();
                } catch(SQLException erro) {
                    JOptionPane.showMessageDialog(null, "Não foi possível acessar o último registro :" + erro, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
                }
            }
        });
        
        btnPesquisar.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                pesquisar();
            }
        });
        
        btnControle.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                indiceFuncao = (indiceFuncao + 1) % funcoes.length;
                atualizarBotaoAcao();
                btnAcao.requestFocus();
                if (funcoes[indiceFuncao].equals("Excluir")) {
                    ModoExcluir(true);
                }
                else if (funcoes[indiceFuncao].equals("Gravar")) {
                    ModoGravar(true);
                }
                else {
                    ModoExcluir(false);
                    ModoGravar(false);
                }
                
            }
        });

        btnNovoRegistro.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                limparCampos();
                indiceFuncao = 0;
                btnAcao.setText(funcoes[0]);
                ModoGravar(true);
                txtNome.requestFocus();
            }
        });

        btnAcao.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                String acao = btnAcao.getText();
                switch (acao) {
                    case "Gravar":
                        gravar();
                        break;
                    case "Alterar":
                        alterar();
                        break;
                    case "Excluir":
                        excluir();
                        break;
                }
            }
        });

        btnSair.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                dispose();
                new InterfaceLogin().setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
            }
        });
    }
    
    private void atualizarBotaoAcao() {
        btnAcao.setText(funcoes[indiceFuncao]);
    }

    private void ModoExcluir(boolean ativoE) {
        if (ativoE) {
            lblNome.setVisible(false);
            lblData.setVisible(false);
            lblTelefone.setVisible(false);
            lblEmail.setVisible(false);
            txtNome.setVisible(false);
            txtData.setVisible(false);
            txtTelefone.setVisible(false);
            txtEmail.setVisible(false);
            
            lblCodigo.setBounds(160, 110, 300, 40);
            txtCodigo.setBounds(240, 110, 100, 40);
            lblCodigo.setFont(new Font("Arial", Font.BOLD, 20));
            txtCodigo.setFont(new Font("Arial", Font.PLAIN, 20));

        } else {
            lblNome.setVisible(true);
            lblData.setVisible(true);
            lblTelefone.setVisible(true);
            lblEmail.setVisible(true);
            txtNome.setVisible(true);
            txtData.setVisible(true);
            txtTelefone.setVisible(true);
            txtEmail.setVisible(true);

            lblCodigo.setBounds(30, 30, 100, 25);
            txtCodigo.setBounds(150, 30, 100, 25);
            lblCodigo.setFont(new Font("Arial", Font.BOLD, 12));
            txtCodigo.setFont(new Font("Arial", Font.PLAIN, 12));
        }
    }
    
    private void ModoGravar(boolean ativoG) {
        if (ativoG) {
            lblCodigo.setVisible(false);
            txtCodigo.setVisible(false);
            lblNome.setVisible(true);
            lblData.setVisible(true);
            lblTelefone.setVisible(true);
            lblEmail.setVisible(true);
            txtNome.setVisible(true);
            txtData.setVisible(true);
            txtTelefone.setVisible(true);
            txtEmail.setVisible(true);
        } else {
            lblCodigo.setVisible(true);
            txtCodigo.setVisible(true);
        }
    }
    
    private void gravar() {
        try {
            String nome, telefone, email, data_nasc;

            nome = txtNome.getText();
            telefone = txtTelefone.getText();
            email = txtEmail.getText();
            data_nasc = txtData.getText();

            String insert_sql = "insert into tbclientes (nome,telefone, email, dt_nasc) values ('"
                    + nome + "','" + telefone + "','" + email + "','" + data_nasc + "')";

            con_cliente.statement.executeUpdate(insert_sql);

            con_cliente.executaSQL("select * from tbclientes order by cod");
            preencherTabela();

            JOptionPane.showMessageDialog(null, "Registro gravado com sucesso!");
        } catch (SQLException errosql) {
            JOptionPane.showMessageDialog(null, "\n Erro ao gravar registro: \n" + errosql,
                    "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
        }
    }

    private void alterar() {
        try {
            String nome, telefone, email, data_nasc;
            int resposta;

            nome = txtNome.getText();
            telefone = txtTelefone.getText();
            email = txtEmail.getText();
            data_nasc = txtData.getText();

            if (txtCodigo.getText().equals("")) {
                gravar();
            } else {
                String sql = "update tbclientes set nome='" + nome + "',telefone='" + telefone
                        + "', email='" + email + "', dt_nasc='" + data_nasc
                        + "' where cod = " + txtCodigo.getText();

                resposta = JOptionPane.showConfirmDialog(rootPane,
                        "Deseja realmente alterar o registro?", "Confirmar Alteração",
                        JOptionPane.YES_NO_OPTION);

                if (resposta == JOptionPane.YES_OPTION) {
                    con_cliente.statement.executeUpdate(sql);
                    con_cliente.executaSQL("select * from tbclientes order by cod");
                    preencherTabela();
                    JOptionPane.showMessageDialog(null, "Alteração realizada com sucesso!");
                }
            }
        } catch (SQLException errosql) {
            JOptionPane.showMessageDialog(null, "\n Erro ao alterar registro: \n" + errosql, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
        }
    }

    private void excluir() {
        try {
            int resposta;

            resposta = JOptionPane.showConfirmDialog(rootPane,
                    "Deseja excluir o registro?", "Confirmar Exclusão",
                    JOptionPane.YES_NO_OPTION);

            if (resposta == JOptionPane.YES_OPTION) {
                String sql = "delete from tbclientes where cod = " + txtCodigo.getText();

                con_cliente.statement.executeUpdate(sql);
                con_cliente.executaSQL("select * from tbclientes order by cod");
                preencherTabela();

                limparCampos();
                JOptionPane.showMessageDialog(null, "Registro excluído com sucesso!");
            }
        } catch (SQLException errosql) {
            JOptionPane.showMessageDialog(null, "\n Erro ao excluir registro: \n" + errosql,
                    "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
        }
    }

    private void pesquisar() {
        try {
            String pesquisa = "select * from tbclientes where nome like '" + txtPesquisa.getText() + "%'";

            con_cliente.executaSQL(pesquisa);

            if (con_cliente.resultset.first()) {
                preencherTabela();
            } else {
                JOptionPane.showMessageDialog(null, "\n Não existe dados com este parâmetro!!", "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
            }
        } catch (SQLException errosql) {
            JOptionPane.showMessageDialog(null, "\n Os dados digitados não foram localizados!! :\n" + errosql, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
        }
    }

    private void limparCampos() {
        txtCodigo.setText("");
        txtNome.setText("");
        txtData.setText("");
        txtTelefone.setText("");
        txtEmail.setText("");
    }
}
