package exercicio03;

import java.awt.Container;
import java.awt.GridLayout;
import java.awt.Label;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JOptionPane;
import javax.swing.JTextField;

public class Carro extends JFrame implements ActionListener {    
    
    private JTextField marca, modelo, tipo, ano, cor, valor, obs;
    private JButton enviar, limpar;
        
    public Carro(){
        
        super("Descrição do Carro");
        
        marca = new JTextField();
        modelo = new JTextField();
        tipo = new JTextField();
        ano = new JTextField();
        cor = new JTextField();
        valor = new JTextField();
        obs = new JTextField();
        
        enviar = new JButton("Enviar");
        enviar.addActionListener(this);
        
        limpar = new JButton("Limpar");
        limpar.addActionListener(this);
        
        Container c = getContentPane();
        setLayout(new GridLayout(8, 2));
        
        c.add(new Label("Marca:"));
        c.add(marca);
        c.add(new Label("Modelo:"));
        c.add(modelo);
        c.add(new Label("Tipo:"));
        c.add(tipo);
        c.add(new Label("Ano:"));
        c.add(ano);
        c.add(new Label("Cor:"));
        c.add(cor);
        c.add(new Label("Valor:"));
        c.add(valor);
        c.add(new Label("Obs:"));
        c.add(obs);
        c.add(enviar);
        c.add(limpar);
        
        setVisible(true);
        setSize(400, 250);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);       
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource() == enviar) {
            String s = "Marca: " + marca.getText()
                     + "\n Modelo: " + modelo.getText()
                     + "\n Tipo: " + tipo.getText()
                     + "\n Ano: " + ano.getText()
                     + "\n Cor: " + cor.getText()
                     + "\n Valor: " + valor.getText()
                     + "\n Obs: " + obs.getText();
                     
            JOptionPane.showMessageDialog(null, s);
        }else if (e.getSource() == limpar) {            
            marca.setText("");
            modelo.setText("");
            tipo.setText("");
            ano.setText("");
            cor.setText("");            
            valor.setText("");
            obs.setText("");
        }   
    }
}
