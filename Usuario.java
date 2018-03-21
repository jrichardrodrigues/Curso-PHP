package exercicio03;

import java.awt.Container;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JButton;
import javax.swing.JTextField;
import javax.swing.JOptionPane;
import javax.swing.JPasswordField;

public class Usuario extends JFrame implements ActionListener {
    
    private JTextField nome, cpf, email;
    private JPasswordField senha;
    private JButton enviar, limpar;
    
    public Usuario() {
        
        super("Cadastro do Usuário");
        
        nome = new JTextField();
        cpf = new JTextField();
        email = new JTextField();
        senha = new JPasswordField();        
        
        enviar = new JButton("Enviar");
        enviar.addActionListener(this);
        
        limpar = new JButton("Limpar");
        limpar.addActionListener(this);
        
        Container c = getContentPane();
        setLayout(new GridLayout(5, 2));
                
        c.add(new JLabel("Nome:"));
        c.add(nome);
        c.add(new JLabel("CPF:"));
        c.add(cpf);
        c.add(new JLabel("Email:"));
        c.add(email);
        c.add(new JLabel("Senha:"));
        c.add(senha);
        c.add(enviar);
        c.add(limpar);

        setVisible(true);
        setSize(400,200);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }    
        @Override
        public void actionPerformed(ActionEvent e) {
            if(e.getSource() == enviar) {
                String s = "Nome: " + nome.getText()
                        + "\n CPF: " + cpf.getText()
                        + "\n Email: " + email.getText()
                        + "\n Senha: " + new String(senha.getPassword());
                JOptionPane.showMessageDialog(null, s);
            }else if (e.getSource() == limpar) {            
                nome.setText("");
                cpf.setText("");
                email.setText("");
                senha.setText("");
        }         
    }


    


}
    

