package exercicio03;

import java.awt.Container;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JTextField;

public class Venda extends JFrame implements ActionListener  {
    
    private JTextField data, valor;
    private JButton enviar, limpar;   
             
    public Venda(){
        
        super("Vendas");
                  
        data = new JTextField();
        valor = new JTextField();
        
        enviar = new JButton("Enviar");
        enviar.addActionListener(this);
        
        limpar = new JButton("Limpar");
        limpar.addActionListener(this);
                      
        Container c = getContentPane();
        setLayout(new GridLayout(3, 2));
        
        c.add(new JLabel("Data:"));
        c.add(data);
        c.add(new JLabel("Valor:"));
        c.add(valor);
        c.add(enviar);
        c.add(limpar);
        
        setVisible(true);
        setSize(400,150);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);        
    }    

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource() == enviar) {
            String s = "Data: " + data.getText()
                     + "\n Valor: " + valor.getText();
            JOptionPane.showMessageDialog(null, s);
        }else if (e.getSource() == limpar) {            
            data.setText("");
            valor.setText("");            
        }   
    }
}        